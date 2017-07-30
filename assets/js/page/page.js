var JS_UPLOAD_IMGUR;
JS_UPLOAD_IMGUR = {
    uploadIMGURPrivate:function (imgFile,view,token) {
        $.ajax({
            url: "https://api.imgur.com/3/image",
            type: "POST",
            datatype: "json",
            data: {
                'image': imgFile,
                'type': 'base64'
            },
            success: function (dataImage) {
                console.log(dataImage);
                if (dataImage.status == 200) {
                    //Hiển thị
                    $(view).attr("src", dataImage.data.link);
                    //Cập nhật vào Data Base
                }
                else {

                }
            },//calling function which displays url
            error: function () {
                alert("failed")
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader("Authorization", "Bearer " + token);
            }
        });
    },
    /**
     * Libary Upload Image imgur.com
     * @doanvandieu
     * @dieudv@vng.com.vn
     */
    doUpload: function (imgFile,view) {
        var refresh_token = "2a0f0fd04476ee07f09fab34dfc96d4467e7dae3";
        var client_id = "a1d7da8f0b7b5d8";
        var client_secret = "3dc048d057927a487cc679a2d7e4874bde58c101";
        var grant_type = "refresh_token";
        $.ajax({
            url: "https://api.imgur.com/oauth2/token",
            type: "POST",
            datatype: "json",
            data: {
                'refresh_token':refresh_token,
                'client_id':client_id,
                'client_secret':client_secret,
                'grant_type':grant_type
            },
            success: function (data) {
                JS_UPLOAD_IMGUR.uploadIMGURPrivate(imgFile,view,data.access_token);
            },//calling function which displays url
            error: function () {
                alert("failed")
            }
        });
    }
};

var JSCORE;
JSCORE = {
    /**
     * Hàm thực hiện init date picker
     */
    initDatePicker: function (nameClass) {
        $(nameClass).datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });
    },

    /**
     * Hàm thực hiện init cycle chart
     */

    initChartCycle: function (nameId) {
        //Thay đổi text của ô tỉ lệ %
        $(nameId).html("100%");

        //Thay đổi % của đường kẻ
        $(nameId).attr('data-percent', "100");

        //Vẽ
        $(nameId).easyPieChart({
            lineWidth: 5, //Độ dày
            size: 160, //Kích thước px
            scaleColor: false,
            trackColor: 'rgba(255,255,255,.25)',
            barColor: '#FFFFFF', //Màu chữ
            animate: ({duration: 2000, enabled: true})
        });
    },
    


    /**
     * Hàm Upload Image sử dụng API và AJAX
     * API :
     */
    uploadWithImgur:function (inputFile,view) {
        var reader = new FileReader();
        $(inputFile).change(function () {
            console.log("Begin Upload");
            reader.onload = function (e) {
                //this next line separates url from data
                console.log(e);
                var reader = new FileReader();
                var iurl = e.target.result.substr(e.target.result.indexOf(",") + 1, e.target.result.length);
                JS_UPLOAD_IMGUR.doUpload(iurl,view);
            };
            reader.readAsDataURL(this.files[0]);
        });
    }
};



