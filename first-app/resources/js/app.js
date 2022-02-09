// require('./bootstrap');
// require('./bootstrap.bundle.min');
// require('./custom');
// require('./jquery-1.11.0.min');
// require('./jquery-migrate-1.2.1.min');
// require('./slick.min');
// require('./templatemo');
// require('./templatemo.min');

$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            console.log("asd")
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});