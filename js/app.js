$(document).ready(function () {
    $('#open,#close').click(function () {
        $('#open,#close').toggle();
        $('.horizontal-nav #links').toggleClass('visible');
    });
});