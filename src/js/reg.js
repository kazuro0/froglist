$(document).ready (function() {
    $("#button").click(function() {
        var user = $("#user").val ();
        var pass = $("#pass").val ();
        var pass2 = $("#pass2").val ();
        var fail = "";

        if (user.length == 0 || pass.length == 0 || pass2.length == 0) fail = "Заполните данные";
        else if (/^[a-zA-Z1-9]+$/.test(user) === false) fail = "Имя только из латиницы и цифр";
        else if (user.length < 4 || user.length > 20) fail = "Недопустимая длина логина";
        else if (pass.length < 4 || pass.length > 25) fail = "Недопустимая длина пароля";
        else if (pass != pass2) fail = "Пароли не совпадают";

        if (fail != "") {
            $('#span').html (fail);
            $('#span').show ();
            return false;
        }
    });
});