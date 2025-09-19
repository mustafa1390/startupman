var sDate = {
    diff_date: 0,
    server_date: 0,
    initServerDate: function (init_server_date) {
        sDate.server_date = init_server_date;
        var local_time = (new Date().getTime()) / 1000;
        sDate.diff_date = Math.round(sDate.server_date - local_time);
        return true;
    },
    getCurrentTimestamp: function () {
        var local_time = (new Date().getTime()) / 1000;
        return Math.round(local_time + sDate.diff_date);
    }
};