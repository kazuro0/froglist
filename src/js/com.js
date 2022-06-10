$(document).ready (function() {
    $("#button").click(function() {
        var com = $("#cominput").val ();
        var fail = "";

        if (com.length == 0) fail = "Заполните данные";
        else if (com == ' ') fail = "Заполните данные";
        else if (com.length > 500) fail = "Превышено допустимое кол-во символов на " + (com.length - 500) + " штук";

        if (fail != "") {
            $('#span').html (fail);
            $('#span').show ();
            return false;
        }
    });
});