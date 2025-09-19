
function isLocalStorage() {
    var test = 'test';
    try {
        localStorage.setItem(test, test);
        localStorage.removeItem(test);
        return true;
    } catch (e) {
        return false;
    }
}
var fakeLocalStorage = {
    getItem: function (str) {
        return null;
    },
    setItem: function (str, str2) {
        return null;
    }
};
var mhlocalStorage = isLocalStorage() ? localStorage : fakeLocalStorage;
//if (!isLocalStorage()) {
//    mhlocalStorage = fakeLocalStorage;
//}

var hisreg = {
    getRegkey: function () {
        key = "register_" + g_reg_tok + g_daily_reg_key;
        return key;
    },
    getSavedList: function () {
        var str = mhlocalStorage.getItem(hisreg.getRegkey());
        if (str) {
            var res = str.split("|");
        } else {
            res = [];
        }
        return res;
    },
    addToList: function (text0) {
        var text = text0.trim();
        var list = hisreg.getSavedList();
        var index = list.indexOf(text);
        if (index === -1) {
            list.push(text);
        }
        mhlocalStorage.setItem(hisreg.getRegkey(), list.join("|"));
    },
    registerForm: function (uid) {
        hisreg.addToList(uid);
        return true;
    },
    clearForm: function () {
        mhlocalStorage.setItem(hisreg.getRegkey(), "");
        return true;
    },
    isComplitedForm: function () {
        if (g_reg_unique_user != 1) {
            return false;
        }
        var uid = mhlocalStorage.getItem(hisreg.getRegkey());
        if (uid) {
            return true;
        }
        return false;
    },
    getAllComplitedForm: function () {
        var list = hisreg.getSavedList();
        return list;
    },
    getLastComplitedForm: function () {
        var list = hisreg.getSavedList();
        if (list.length) {
            var uid = list.pop();
            return uid.trim();
        }
        return "";
    }
};


var examTimer = {
    g_start_time: 0,
    g_full_time: 0,
    g_end_time: 0,
    g_start_timer_id: null,
    getKey: function () {
        var reg_tok = window.location.pathname.replace("/", "");
        return "sline_" + reg_tok + g_ac_value;
    },
    displayTime: function (ms) {
        var h = Math.floor(ms / (60 * 60));
        var m = Math.floor((ms / 60) % 60);
        var s = Math.floor(ms % 60);
        var str = (h ? h + ":" : "") + m + ":" + s;
        return str;
    },
    resetTimer: function () {
        mhlocalStorage.setItem(examTimer.getKey(), "");
    },
    showTime: function (diff) {
        var str = "";
        if (diff < 120) {
            str = Math.round(diff) + " ثانیه";
        } else {
            str = examTimer.displayTime(diff);
        }
        $("#timer").show();
        $("#timer").html("زمان شما: " + str);
    },
    finishTime: function () {

        $("#timer").html("پایان");
        $(".show_index_all").hide();
        $(".show_index_submit").show();
        $("#timeout").show();
        $("#next_pre_box").hide();
        $("#count_show_index").hide();
        $(".show_required").show();
        $(".show_btn_index_all").hide();
        $("#count_show_all").hide();

        var de = sDate.getCurrentTimestamp() - examTimer.g_start_time;
        str2 = examTimer.displayTime(de);
        $("#show_start_timer").html(str2);

    },
    startTimerDeadTime: function (end_time) {
        examTimer.g_end_time = end_time;
        if (!end_time) {
            return true;
        }
        if (!examTimer.g_start_timer_id) {
//            examTimer.g_start_time = mhlocalStorage.getItem(examTimer.getKey());
//            if (!examTimer.g_start_time) {
            examTimer.g_start_time = sDate.getCurrentTimestamp();
//                mhlocalStorage.setItem(examTimer.getKey(), examTimer.g_start_time);
//            }
            if (!examTimer.g_start_time) {
                var local_time2 = (new Date().getTime()) / 1000;
                examTimer.g_start_time = Math.round(local_time2);
            }
            if (!examTimer.g_start_time) {
                return false;
            }
            examTimer.g_start_timer_id = setInterval(function () {
                var cur_time = sDate.getCurrentTimestamp();
                var diff = (examTimer.g_end_time - cur_time);
                if (diff <= 0) {
                    examTimer.finishTime();
                    clearInterval(examTimer.g_start_timer_id);
                } else {
                    examTimer.showTime(diff);
                }
            }, 1000);
        }
        return true;
    },
    startTimer: function (full_time) {
        examTimer.g_full_time = full_time;
        if (!full_time) {
            return true;
        }
        if (!examTimer.g_start_timer_id) {
            examTimer.g_start_time = mhlocalStorage.getItem(examTimer.getKey());
            if (!examTimer.g_start_time) {
                examTimer.g_start_time = sDate.getCurrentTimestamp();
                mhlocalStorage.setItem(examTimer.getKey(), examTimer.g_start_time);
            }
            if (!examTimer.g_start_time) {
                var local_time2 = (new Date().getTime()) / 1000;
                examTimer.g_start_time = Math.round(local_time2);
            }
            if (!examTimer.g_start_time) {
                return false;
            }
            examTimer.g_start_timer_id = setInterval(function () {
                var cur_time = sDate.getCurrentTimestamp();
                var diff = examTimer.g_full_time - (cur_time - examTimer.g_start_time);
                if (diff <= 0) {
                    examTimer.finishTime();
                    clearInterval(examTimer.g_start_timer_id);
                } else {
                    examTimer.showTime(diff);
                }
            }, 1000);
        }
        return true;
    }
};

//////////////////////////////////////////////////////////////////
function createUUID() {
    // http://www.ietf.org/rfc/rfc4122.txt
    var s = [];
    var hexDigits = "0123456789abcdef";
    for (var i = 0; i < 36; i++) {
        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
    }
    s[14] = "4";  // bits 12-15 of the time_hi_and_version field to 0010
    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1);  // bits 6-7 of the clock_seq_hi_and_reserved to 01
    s[8] = s[13] = s[18] = s[23] = "";

    var uuid = s.join("");
    return uuid;
}
//////////////////////////////////////////////////////////////////
var show_index = 0;
var formSubmitting = true;
var show_all_mode = false;
function showAll() {
    show_all_mode = true;
    $(".show_btn_index_all").hide();
    $("#next_pre_box").hide();
    $("#count_show_index").hide();
    $("#count_show_all").hide();
    $(".show_index_all").each(function () {
        var show_index = $(this);
        if (isVisibleField(show_index.data("uid"))) {
            $(this).slideDown();
        }
    });
}

function showSingle() {
    $(".show_index_all").hide();
    $(".show_btn_index_all").show();
    $("#next_pre_box").show();
    $("#count_show_index").show();

}

function isInputValidate(uid, val, type) {
    if (!isVisibleField(uid)) {
        return true;
    }
    var valid = true;
    if (val) {
        switch (type) {
            case "EMAIL":
                valid = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(val);
                break;
            case "MOBILE":
                valid = /^\d{11}$/.test(val) || /^\d{10}$/.test(val);
                break;
            case "MELLICODE":
//                valid = /^\d{10}$/.test(val) || /^\d{9}$/.test(val) || /^\d{8}$/.test(val);
                valid = (val.length === 10 || val.length === 11);
                break;
            case "SHEBA":
                valid = (val.length === 24);
                break;
            case "FULLNAME":
            case "TEACHER_NAME":
                valid = (val.length > 3);
                break;
            case "FATHER_NAME":
                valid = (val.length > 2);
                break;
            case "POSTALCODE":
                valid = /^\d{10}$/.test(val);
                break;
            case "ADDRESS":
                valid = (val.length > 10);
                break;
            default :
                break;
        }
    }
    return valid;
}

function goToNextIndexAuto(_this) {
    if (!show_all_mode) {
        if (g_ftype === "POLL") {
            if (show_index >= max_index) {
                goToNextIndex(null);
                uploadToServer($(".show_index_submit"));
            }
            goToNextIndex(null);
        }
    }
}

function goToNextIndex(_this) {
    formSubmitting = false;
    if (_this) {
        $(_this).hide();
        setTimeout(function () {
            $(_this).show();
        }, 2000);
    }
    if (!fields[show_index]) {
        return;
    }
    var name = fields[show_index].uid;
    var ff = $("[name='" + name + "']");
    if (ff.attr("type") === "radio") {
        ff = $("[name='" + name + "']:checked");
    }
    if (ff.attr("type") === "checkbox") {
        ff = $("[name='" + name + "']:checked");
    }
    if (!ff.length) {
        ff = $("[name='" + name + "[]']:checked");
    }
    var v = ff.val();
    var chk = true;
    if (isInputValidate(name, v, ff.data("type"))) {
        if (fields[show_index].r || (g_ftype === "EXAM" && is_step_step && show_index && (ff.attr("type") !== "hidden"))) {
            if (!v) {
                chk = false;
                $("#required").show();
            }
        }
    } else {
        chk = false;
        $("#validate").show();
    }

    if (chk && v) {
        hiskey.addToList(fields[show_index].type, v);
    }
    if (chk && v && g_ftype === "EXAM") {
        try {
            singleSave(name, fields[show_index].type, v);
            postSingleSave(fields[show_index].type === "FULLNAME");
        } catch (e) {
        }
    }
    if (chk) {
        goToIndex(1);
    }
    try {
        refreahLoader.save();
    } catch (e) {

    }

}
var auuid = null;
function getAuuid() {
    try {
        auuid = mhlocalStorage.getItem("auuid");
        if (!auuid) {
            auuid = createUUID();
        }
        mhlocalStorage.setItem("auuid", auuid);
    } catch (e) {
    }
    return auuid;
}

function singleSaveOld(uid, type, value) {
    try {
        if (!value || !uid || !type) {
            return;
        }
        var add = true;
        if (single_saves[uid]) {
            if (single_saves[uid] === value) {
                add = false;
            }
        }
        if (add) {
            single_saves[uid] = value;
            $.post("/sianswer", {
                "auid": getAuuid(),
                "uid": uid,
                "type": type,
                "value": value,
                "reg_tok": g_reg_tok
            }, function (response) {
            });
        }
    } catch (e) {

    }
}
var single_saves = [];
var single_save_pdata = null;
function singleSave(uid, type, value) {
    try {
        if (!value || !uid || !type) {
            return;
        }
        var add = true;
        var post = false;
        if (single_saves[uid]) {
            if (single_saves[uid] === value) {
                add = false;
            }
        }
        if (!single_save_pdata) {
            single_save_pdata = {
                "auid": getAuuid(),
                "reg_tok": g_reg_tok,
                "items": []
            };
        }
        if (add) {
            single_saves[uid] = value;
            single_save_pdata.items.push({
                "uid": uid,
                "type": type,
                "value": value
            });
        }
    } catch (e) {

    }
}
function postSingleSave(force) {
    try {
        if (!single_save_pdata) {
            return;
        }
        if (!single_save_pdata.items.length) {
            return;
        }
        if (!force) {
            if (single_save_pdata.items.length < 3) {
                return;
            }
        }
        $.ajax({
            type: "POST",
            url: "/bsianswer",
            data: JSON.stringify(single_save_pdata),
            contentType: "application/json; charset=utf-8",
            success: function (data) {
                single_save_pdata.items = [];
            },
            error: function (errMsg) {

            }
        });
//            dataType: "json",
//        $.post("/bsianswer", JSON.stringify(single_save_pdata), function (response) {
//            single_save_pdata.items = [];
//        });
    } catch (e) {

    }
}
var condition_map = {};
function isVisibleField(uid) {
    if (!uid) {
        return true;
    }
    uid = uid.replace("[]", "");
    var vi_cond = condition_map[uid];
    if (!vi_cond) {
        return true;
    }
    return checkCondition(vi_cond);
}

function checkVisibleAndShow() {
    $(".show_index_all").each(function () {
        var show_index = $(this);
        var uid = show_index.data("uid");
        if (condition_map[uid]) {
            if (isVisibleField(uid)) {
                $(this).slideDown();
                $(this).addClass("new_alert");
            } else {
                $(this).slideUp();
                $(this).removeClass("new_alert");
                setValueOfFieldByUid(uid, "");
            }
        }
    });
}

function checkCondition(vi_cond) {
    if (vi_cond.conds) { // or or and
        var out = true;
        if (vi_cond.type === "or") {
            out = false;
        } else if (vi_cond.type === "and") {
            out = true;
        }
        vi_cond.conds.forEach(function (item, index, arr) {
            var c = checkCondition(item);
            if (vi_cond.type === "or") {
                out = (out || c);
            } else if (vi_cond.type === "and") {
                out = (out && c);
            }
        });
        return out;
    } else {
        var v = getValidValueOfFieldByUid(vi_cond.uid);
        if (!v) {
            return false;
        }
        if (vi_cond.type === "eq") {
            return (vi_cond.opt + "") === (v + "");
        } else if (vi_cond.type === "ne") {
            return (vi_cond.opt + "") !== (v + "");
        } else if (vi_cond.type === "ge") {//grather than equal
            return parseFloat(vi_cond.opt) <= parseFloat(v);
        } else if (vi_cond.type === "le") {//lower than equal
            return parseFloat(vi_cond.opt) >= parseFloat(v);
        } else if (vi_cond.type === "gt") {//grather than 
            return parseFloat(vi_cond.opt) < parseFloat(v);
        } else if (vi_cond.type === "lt") {//lower than 
            return parseFloat(vi_cond.opt) > parseFloat(v);
        }
    }
}
function getValidValueOfFieldByUid(uid) {
    var name = uid;
    var ff = $("[name='" + name + "']");
    if (ff.attr("type") === "radio") {
        ff = $("[name='" + name + "']:checked");
    }
    if (!ff.length) {
        ff = $("[name='" + name + "[]']:checked");
    }
    var v = ff.val();
    return v;
}

function setValueOfFieldByUid(uid, value) {
    try {
        if ($('[name="' + uid + '"]').attr("type") === "radio") {
            $('.color_radio label').removeClass('selectedlabel');
            $('[name="' + uid + '"]').each(function () {
                this.checked = false;
            });
            if (value) {
                $('[name="' + uid + '"][value="' + value + '"]')[0].checked = true;
            }
        } else if ($('[name="' + uid + '"]').data("type") === "LONGTEXT") {
            $('[name="' + uid + '"]').val(value);
        } else if ($('[name="' + uid + '"]').attr("type") === "text") {
            $('[name="' + uid + '"]').val(value);
        } else if ($('[name="' + uid + '"]').attr("type") === "tel") {
            $('[name="' + uid + '"]').val(value);
        } else {
//                    $('[name="' + item.name + '"]').val(item.value);
        }
    } catch (c) {

    }
}

function goToBackIndex() {
    goToIndex(-1);
}
function goToIndex(c) {
//    if (show_index > 0) {
//        formSubmitting = false;
//    }
    $("#required").hide();
    $("#validate").hide();
    $(".show_index_" + show_index).slideUp();
    show_index += c;

    while (show_index <= max_index && show_index > 0 && !isVisibleField(fields[show_index].uid)) {
        show_index += c;
    }

    $(".show_index_" + show_index).slideDown();
    $("#count_show_index").html("موارد باقی مانده: " + (max_index - show_index) + " مورد");
    $("#count_show_all").show();
    if (show_index >= max_index) {
        $("#count_show_index_box").hide();
        $(".show_btn_index_" + show_index).hide();
        $("#next_pre_box_next").hide();
        $(".show_index_submit").show();
    } else {
        $("#count_show_index_box").show();
        $(".show_btn_index_" + show_index).show();
        $("#next_pre_box_next").show();
        $(".show_index_submit").hide();
    }
    if (show_index === 0) {
        $("#next_pre_box").hide();
    } else {
        $("#next_pre_box").show();
    }

}

function rehightTextaria(this0) {
    this0.style.height = 'auto';
    var s = this0.scrollHeight;
    if (s < 100) {
        s = 100;
    }
    this0.style.height = (s) + 'px';

}
$('textarea').each(function () {
    var s = this.scrollHeight;
    if (s < 100) {
        s = 100;
    }
    this.setAttribute('style', 'height:' + (s) + 'px;overflow-y:hidden;');
}).on('input', function () {
    rehightTextaria(this);
});

$(function () {
    if (typeof fields !== 'undefined') {
        fields.forEach(function (item, index, arr) {
            try {
                var j = JSON.parse(item.v_c);
                condition_map[item.uid] = j;
            } catch (e) {

            }
        });
        if (typeof hiskey !== 'undefined') {
            hiskey.checkAllUI();
        }
    }
});

function clickRadio(radio) {
    var label = $(radio).parent();
    if ($(label).hasClass('selectedlabel')) {//dafe dowom
        $(label).find('input').prop('checked', false);
        $(label).removeClass('selectedlabel');
    } else {
        $(label).parents('.show_field').find('label').removeClass('selectedlabel');
        $(label).addClass('selectedlabel');
    }
    if (show_all_mode) {
        checkVisibleAndShow();
    }
    goToNextIndexAuto();
}
function clickDropdown(radio) {
//    $('.cond_drop').removeClass('selectedlabel');
    if (show_all_mode) {
        checkVisibleAndShow();
    }
    goToNextIndexAuto();
}

$(function () {
    $("input").keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});

$(function () {
    window.addEventListener("beforeunload", function (e) {
        if (formSubmitting) {
            return undefined;
        }

        var confirmationMessage = 'شما در حال خروج از این صفحه هستید درحالی که فرم شما ذخیره نشده'
                + ' - در صورتی که مایلید که اطلاعات حذف شود و از صفحه خارج شوید : Leave را انتخاب کنید';

        (e || window.event).returnValue = confirmationMessage; //Gecko + IE
        return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
    });
});

//        $('#digiformform').submit(function () {
//            formSubmitting = true;
//            $(_this).hide();
//            $('#saveing').show();
//            examTimer.resetTimer();
//            return false;
//
//        });
function uploadToServer(_this) {
    if (checkValidAllFeild()) {
        formSubmitting = true;
        $(_this).hide();
        $('#saveing').show();
        $('#notsaved').hide();
        try {
            examTimer.resetTimer();
            $('#extra_info').val(mhlocalStorage.getItem("hiskey_FULLNAME"));
        } catch (e) {
        }
        try {
            $('#startline').val(examTimer.g_start_time);
        } catch (e) {
        }
        try {
            $('#auuid').val(getAuuid());
        } catch (e) {
        }
        try {
            $('#introcounter').val(introCounter.conter);
        } catch (e) {
        }
        try {
            $('#buid').val("B" + new Fingerprint().get());
        } catch (e) {
        }
        try {
            if (dgcapture) {
                $('#capuid').val(dgcapture.getCapuid());
            }
        } catch (e) {
        }
//                $('#digiformform').submit();
        showAll();
        var pfdata = $("#digiformform").serialize();
        $('.show_field').slideUp(2000);
        $.ajax({
            url: '',
            type: 'POST',
            data: pfdata,
            dataType: "json",
            success: function (data, textStatus, xhr) {
                if (xhr.status === 200 && data.redirect) {
                    try {
                        refreahLoader.clear();
                    } catch (e) {

                    }
                    window.location.href = data.redirect;
                } else {
                    $(_this).show();
                    $('#saveing').hide();
                    $('#notsaved').show();
                }
            },
            error: function (xhr, textStatus) {
                $(_this).show();
                $('#saveing').hide();
                $('#notsaved').show();
            }
        });
    } else {
        $(_this).hide();
        $('#plzcomplite').show();
        setTimeout(function () {
            $(_this).show();
            $('#plzcomplite').hide();
        }, 2000);
    }
}

function checkValidAllFeild() {
    var chk_all = true;
    var fs = $(".digi_field");

    fs.each(function () {
        try {
            var chk = true;
            var ff = $(this);
            var v = ff.val();
            //var ff = $("[name='" + name + "']");
            var name = ff.attr("name");
            if (ff.attr("type") === "radio") {
                v = $("[name='" + name + "']:checked").val();
            }
            if (ff.attr("type") === "checkbox") {
                v = $("[name='" + name + "']:checked").val();
            }
//            if (!ff.length) {
//                v = $("[name='" + name + "[]']:checked").val();
//            }
            if (isInputValidate(name, v, ff.data("type"))) {
                if (isVisibleField(name)) {
                    if (ff.hasClass("class_required")) {
                        if (!v) {
                            chk = false;
                            chk_all = false;
                            console.log(name);
                        }
                    }
                }
            } else {
                chk = false;
                chk_all = false;
                console.log(name);
            }
            if (chk && v) {
                hiskey.addToList(ff.data("type"), v);
            }
            if (!chk) {
                ff.parents(".show_index_all").addClass("warn_input");
            } else {
                ff.parents(".show_index_all").removeClass("warn_input");
            }
        } catch (e) {
            console.log(e);
        }
    });
    return chk_all;
}
