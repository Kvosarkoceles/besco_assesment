$(document).ready(function () {

    $('#razon').on('keyup', function () {
        var value = $('#razon').val().toUpperCase();
        $("#razon").val(value);
    });

    $('#razon').on('change', function () {
        var value = $('#razon').val().trim();
        $("#razon").val(value);
    });

    $('#rfc').on('keyup', function () {
        var value = $('#rfc').val().toUpperCase();
        $("#rfc").val(value);
    });

    $('#rfc').on('change', function () {
        var value = $('#rfc').val().trim();
        $("#rfc").val(value);
    });

    $('#cp').on('input', function () {
        this.value = this.value.replace(/[^0-9- +]/g, '');
    });
});





