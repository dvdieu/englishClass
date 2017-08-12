<?php
/**
 * Created by PhpStorm.
 * User: dos
 * Date: 8/11/2017
 * Time: 12:37 PM
 */

/**
 * @param $name
 * @param $totalItem
 * @param bool $isFile
 * @return bool
 */
function validateInputReSource($name, $totalItem, $isFile = false)
{
    $temp = "";
    if (!$isFile) {
        for ($i = 1; $i <= $totalItem; $i++) {
            $temp = $name . "-" . $i;
            if (!isset($_POST[$temp])) {
                return false;
            }
        }
    } else {
        for ($i = 1; $i <= $totalItem; $i++) {
            $temp = $name . "-" . $i;
            if (isset($_FILES[$temp])) {
                if ($_FILES[$temp]["error"] > 0) {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
    return true;
}

/**
 * @param $name
 * @param $total
 * @return array
 */
function getArrayFileNameAndFileType($name, $total)
{
    $res = array();
    for ($i = 1; $i <= $total; $i++) {
        $temp = $name . "-" . $i;
        $type = explode('.', $_FILES[$temp]["name"]);
        if (count($type) > 1) {
            $hashName = hash("sha1", microtime(true) / 1000 + $i, false);
            $res[] = array(
                "name" => $hashName . "-" . $type[0] . "." . $type[count($type) - 1],
                "type" => $type[count($type) - 1]
            );
        }
    }
    return $res;
}

/**
 * @param $fileNameAndFileType
 * @return array
 */
function moveFileUpload($name, $fileNameAndFileType)
{
    $res = [];
    for ($i = 0; $i < count($fileNameAndFileType); $i++) {
        $s = $name . "-" . ($i + 1);
//        move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $fileNameAndFileType[$i]->name);

        foreach ($fileNameAndFileType[$i] as $key => $value) {
            if ($key == "name") {
                $res[] = $value;
                move_uploaded_file($_FILES[$s]["tmp_name"], "upload/" . $value);
            }
        }
    }
    return $res;
}

/**
 * @param $name
 * @param $total
 * @return array
 */
function getDataFieldPostMethod($name, $total)
{
    $res = array();
    for ($i = 1; $i <= $total; $i++) {
        $res[] = $_POST[$name . "-" . $i];
    }
    return $res;
}


$total = 3;

$dataName = array();
$dataMeaning = array();
$dataTimbrel = array();
$dataImage = array();
$dataAudio = array();
if (validateInputReSource("name", $total, false) &&
    validateInputReSource("meaning", $total, false) &&
    validateInputReSource("timbrel", $total, false) &&
    validateInputReSource("image", $total, true) &&
    validateInputReSource("audio", $total, true)
) {
    $dataName = getDataFieldPostMethod("name", $total);
    $dataMeaning = getDataFieldPostMethod("meaning", $total);
    $dataTimbrel = getDataFieldPostMethod("timbrel", $total);
    $dataImage = getArrayFileNameAndFileType("image", $total);
    $dataAudio = getArrayFileNameAndFileType("audio", $total);
} else {
    echo json_encode(array(
        "code" => -1000,
        "message" => "ERROR"
    ));
    die;
}

$dataUploadImage = moveFileUpload("image", $dataImage);
$dataUploadAudio = moveFileUpload("audio", $dataAudio);

$restReturn = [];
for ($i = 0; $i < $total; $i++) {
    $restReturn[] = array(
        "id" => $i + 1,
        "name" => $dataName[$i],
        "meaning" => $dataMeaning[$i],
        "timbrel" => $dataTimbrel[$i],
        "image" => $dataUploadImage[$i],
        "audio" => $dataUploadAudio[$i],
    );
}

echo json_encode(array(
    "code" => 1000,
    "message" => "SC_OK",
    "data"=>$restReturn
));

