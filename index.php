<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="primary">
        <div class="logo">
            <a href="" class="simple-text logo-mini">
                CT
            </a>

            <a href="" class="simple-text logo-normal">
                LOGO
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="info">
                    <div class="photo"><img src="assets/img/faces/face-2.jpg"/></div>
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed"> <span>								Admin		                        <b
                                    class="caret"></b>							</span> </a>
                    <div class="clearfix"></div>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="editprofile.html"> <span class="sidebar-mini">Ep</span> <span
                                            class="sidebar-normal">Edit Profile</span> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="active">
                    <a data-toggle="" href="admin_profile-list.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_1
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href="admin_overview.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_2
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href="contest.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_3
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href="register.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_4
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href="contestcomplete.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_5
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href=editprofile.html>
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_6
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href="landing.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_7
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href="learning.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_8
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href="level.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_9
                        </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="" href="login.html">
                        <i class="ti-panel"></i>
                        <p>
                            PAGE_10
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <div class="text-center">
            <h3 class="text-primary">Thêm mới câu hỏi</h3>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="card-title text-center">Chọn level</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="" id="" class="selectpicker"
                                                data-style="btn-primary btn-block btn">
                                            <option value="0">SELECT</option>
                                            <option value="1">LEVER1</option>
                                            <option value="2">LEVER2</option>
                                            <option value="3">LEVER3</option>
                                            <option value="4">LEVER4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="panel-group">
                                    <!--                                    Cau 1-->
                                    <div class="panel panel-primary">
                                        <a data-toggle="collapse" href="#panel1" class="collapsed"
                                           aria-expanded="false">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    Câu 1
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="panel1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Tên</label>
                                                                <input type="text" class="form-control"
                                                                       name="name-1"
                                                                       required="required">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="">Nghĩa</label>
                                                                <input type="text"
                                                                       name="meaning-1"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="">Phiên âm</label>
                                                                <input type="text"
                                                                       name="timbrel-1"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Âm thanh</label>
                                                                <input class="form-control file-audio" type="file"
                                                                       name="audio-1"
                                                                       data-id="1"
                                                                >
                                                                <audio id="sound-1" controls></audio>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <img id="img-view-1"
                                                                     class="img-responsive img-rounded text-center"
                                                                     src="images/camera-icon.png" alt="">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input class="img-upload text-center" data-id="1"
                                                                       name="image-1"
                                                                       type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    Cau 2-->
                                    <div class="panel panel-primary">
                                        <a data-toggle="collapse" href="#panel2" class="collapsed"
                                           aria-expanded="false">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    Câu 2
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="panel2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Tên</label>
                                                                <input type="text" class="form-control"
                                                                       name="name-2"
                                                                       required="required">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="">Nghĩa</label>
                                                                <input type="text"
                                                                       name="meaning-2"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="">Phiên âm</label>
                                                                <input type="text"
                                                                       name="timbrel-2"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Âm thanh</label>
                                                                <input class="form-control file-audio" type="file"
                                                                       name="audio-2"
                                                                       data-id="2"
                                                                >
                                                                <audio id="sound-2" controls></audio>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <img id="img-view-2"
                                                                     class="img-responsive img-rounded text-center"
                                                                     src="images/camera-icon.png" alt="">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input class="img-upload text-center" data-id="2"
                                                                       name="image-2"
                                                                       type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    Cau 3-->
                                    <div class="panel panel-primary">
                                        <a data-toggle="collapse" href="#panel3" class="collapsed"
                                           aria-expanded="false">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    Câu 3
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="panel3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Tên</label>
                                                                <input type="text" class="form-control"
                                                                       name="name-3"
                                                                       required="required">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="">Nghĩa</label>
                                                                <input type="text"
                                                                       name="meaning-3"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="">Phiên âm</label>
                                                                <input type="text"
                                                                       name="timbrel-3"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Âm thanh</label>
                                                                <input class="form-control file-audio" type="file"
                                                                       name="audio-3"
                                                                       data-id="3"
                                                                >
                                                                <audio id="sound-3" controls></audio>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <img id="img-view-3"
                                                                     class="img-responsive img-rounded text-center"
                                                                     src="images/camera-icon.png" alt="">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input class="img-upload text-center" data-id="3"
                                                                       name="image-3"
                                                                       type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">SC</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</body>


<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="assets/js/jquery.validate.min.js"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="assets/js/es6-promise-auto.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="assets/js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="assets/js/bootstrap-selectpicker.js"></script>

<!--  Switch and Tags Input Plugins -->
<script src="assets/js/bootstrap-switch-tags.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="assets/js/sweetalert2.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="assets/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="assets/js/jquery.datatables.js"></script>

<!--  Full Calendar Plugin    -->
<script src="assets/js/fullcalendar.min.js"></script>

<!-- English Class Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!--   Sharrre Library    -->
<script src="assets/js/jquery.sharrre.js"></script>
<script>
    /**
     * SCRIPT RUN AUDIO
     */

    $(document).ready(() => {
//        $(".file-audio").val("");
    });

    var queueAudio = new Set();
    $(".file-audio").change(function (e) {
        // not really needed in this exact case, but since it is really important in other cases,
        // don't forget to revoke the blobURI when you don't need it
        var id = $(this).data("id");
        var s = "sound-" + id;
        console.log(s);
        if (this.files.length > 0) {
            var sound = document.getElementById(s);
            sound.src = URL.createObjectURL(this.files[0]);
            sound.onend = function (e) {
                URL.revokeObjectURL(this.src);
            };
        }
        else {
            var sound = document.getElementById(s);
            sound.src = "";
        }
    });

    //IMGE PREVIEW
    function previewimage(input, idview) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#img-view-" + idview).attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
        else {
            $("#img-view-" + idview).attr('src', "images/camera-icon.png");
        }
    }
    $(".img-upload").change(function (e) {
        previewimage(this, $(this).data("id"));
    });

</script>
</html>
