window.onerror = function (msg, url, line, column, errorObj)
{
    try {
        var valid_er = [
//            "2Uncaught ReferenceError: hiskey is not defined",
//            "2ReferenceError: hiskey is not defined",
//            "Uncaught TypeError: document.getElementsByClassName.ToString is not a function",
//            "TypeError: undefined is not an object (evaluating 'requestFullScreen.call')",
//            "Uncaught ReferenceError: hwbrNotifyInMultiWinMode is not defined",
//            "TypeError: window.print is not a function",
//            "Uncaught ReferenceError: examTimer is not defined",
//            "ReferenceError: server_fp is not defined",
//            "Uncaught ReferenceError: hisreg is not defined",
//            "Uncaught TypeError: Cannot read property 'innerText' of null",
//            "Uncaught SyntaxError: Unexpected end of input",
//            "Uncaught ReferenceError: mhlocalStorage is not defined",
//            "Uncaught SyntaxError: Unexpected end of JSON input",
//            "Uncaught ReferenceError: fixedTimeID is not defined",
//            "Uncaught ReferenceError: startBtn is not defined"
        ];
        if ($) {
            if (!valid_er.includes(msg)) {
                var jd = {
                    "prj_key": "Digiform",
                    "server_key": "Browser",
                    "dev_mode": (window.location.hostname.substr(window.location.hostname.length - 4) === ".loc"),
                    "error_type": "Warning",
                    "log_hash": msg,
                    "referer": document.referrer,
                    "raw_domain": window.location.hostname,
                    "raw_url": url,
                    "log_time": Math.floor(Date.now() / 1000),
                    "backtrace": errorObj.stack + " line:" + line + " col:" + column
                };
                $.ajax({
                    type: "POST",
                    url: "https://logmgr.myids.ir/api/v1/log/js_send",
                    data: JSON.stringify(jd),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (data) {
                    },
                    error: function (errMsg) {
                    }
                });
            }
        }
    } catch (e) {

    }
};