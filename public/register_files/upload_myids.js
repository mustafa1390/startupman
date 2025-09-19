/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var ufiles;
var cur_uid_file_obj;
$(function () {
    $('#ufile').on('change', prepareUpload2);
    function prepareUpload2(event) {
        ufiles = event.target.files;
    }

    $('#ufiledel_btn').click(function () {
        $(cur_uid_file_obj).find("input").val("");
        try {
            $(cur_uid_file_obj).find("img").attr("src", "");
            $(cur_uid_file_obj).find("img").hide();
        } catch (e) {
        }
        try {
            $(cur_uid_file_obj).find("source").attr("src", "");
            $(cur_uid_file_obj).find("audio").hide();
        } catch (e) {
        }
        $('#uploadModal').modal('hide');
    });
    $('#ufile_btn').click(function () {
        if (!ufiles) {
            return;
        }
        var invalid = false;
        $.each(ufiles, function (key, value) {
            try {
                if (value.size > (20 * 1024 * 1024)) {
                    invalid = true;
                    alert("حجم تصویر زیاد است . فایل کوچکتری انتخاب کنید");
                }
                var ext = value.name.split('.').pop().toLowerCase();
                var validTypes = [
                    "png", "jpg", "jpeg", "gif", "mp3", "wav", "ogg", "mp4", "webm", "ogv", "pdf", "doc", "docx", "ppt", "pptx", "xls", "xlsx"
                ];
                if (validTypes.indexOf(ext) < 0) {
                    invalid = true;
                    alert("فقط تصویر یا صدا میتوانید انتخاب کنید" + " \n فرمت های مجاز: \n" + validTypes.join("\n"));
                }
            } catch (e) {
                invalid = true;
            }
        });
        if (invalid) {
            return;
        }
        $('#ufile_btn').hide();
        $('#ufile').hide();
        $('#loadingfile').show();
        $('#errorfile').hide();

        var formData = new FormData();
        $.each(ufiles, function (key, value) {
            formData.append(key, value);
        });
        formData.append("cat", $(cur_uid_file_obj).data("cat"));
        formData.append("accept", $(cur_uid_file_obj).data("accept"));
        ufiles = null;
        $.ajax({
            url: '//hfile.myids.ir/paupload',
            type: 'POST',
            data: formData,
            dataType: "json",
            success: function (data) {
                $('#ufile_btn').show();
                $('#ufile').show();
                $('#loadingfile').hide();
                $('#ufile').val("");
                if (data.error) {
                    alert(data.error);
                    $('#errorfile').show();
                } else {
                    $('#uploadModal').modal('hide');
//                    alert(data.path);
                    $('#errorfile').hide();
//                    var old_input_link=$(cur_uid_file_obj).find("input").val();
//                    if(old_input_link){
//                        
//                    }
                    $(cur_uid_file_obj).find("input").val(data.path);
                    var ext = data.path.split('.').pop();
                    var mtypes = {
                        "mpeg": "audio/mpeg",
                        "mp3": "audio/mpeg",
                        "ogg": "audio/ogg",
                        "wav": "audio/wav"
                    };
                    var vtypes = {
                        "mp4": "video/mp4",
                        "webm": "video/webm",
                        "ogv": "video/ogg"
                    };
                    var dtypes = {
                        "pdf": "application/pdf",
                        "doc": "application/msword",
                        "docx": "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                        "ppt": "application/vnd.ms-powerpoint",
                        "pptx": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
                        "xls": "application/vnd.ms-excel",
                        "xlsx": "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                    };
                    $(cur_uid_file_obj).find("img").hide();
                    $(cur_uid_file_obj).find("audio").hide();
                    $(cur_uid_file_obj).find("video").hide();
                    if (mtypes[ext]) {
                        $(cur_uid_file_obj).find(".asource").attr("src", data.path);
                        $(cur_uid_file_obj).find(".asource").attr("type", mtypes[ext]);
                        $(cur_uid_file_obj).find("audio").show();
                        $(cur_uid_file_obj).find("audio")[0].load();
                        $(cur_uid_file_obj).find("audio")[0].play();
                    } else if (vtypes[ext]) {
                        $(cur_uid_file_obj).find(".vsource").attr("src", data.path);
                        $(cur_uid_file_obj).find(".vsource").attr("type", mtypes[ext]);
                        $(cur_uid_file_obj).find("video").show();
                        $(cur_uid_file_obj).find("video")[0].load();
                        $(cur_uid_file_obj).find("video")[0].play();
                    } else if (dtypes[ext]) {
                        $(cur_uid_file_obj).find("img").attr("src", "https://hfile.myids.ir/files/uslink/55CF2297A9D49618C3F4D9018DE2FD6D.png");
                        $(cur_uid_file_obj).find("img").show();
                    } else {
                        $(cur_uid_file_obj).find("img").attr("src", data.path);
                        $(cur_uid_file_obj).find("img").show();
                    }
                }
            },
            error: function (data) {
//                alert(data);
                $('#ufile_btn').show();
                $('#ufile').show();
                $('#loadingfile').hide();
                $('#errorfile').show();
                $('#ufile').val("");

            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
});