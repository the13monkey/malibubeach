$(document).ready(function(){

    var pass = $('#password').val();
    $('#password-confirm').attr('value', pass);
    $('#rawpass').attr('value', pass);

});