// product +/-
$('.plus').on('click', function(e) {
    var val = parseInt($(this).prev('input').val());
    $(this).prev('input').val(val + 1);
});
$('.minus').on('click', function(e) {
    var val = parseInt($(this).next('input').val());
    $(this).next('input').val(val - 1);
});
$('.tabs-btn ul li a').click(function(e) {
    e.preventDefault();
    $('.tabs-btn ul li a').removeClass('active');
    $(this).closest('a').addClass('active');
    var src = $(this).attr('href');
    $('.all-tabs .tabs-sec').hide().removeClass('active');
    $('.all-tabs .tabs-sec' + src).fadeIn().addClass('active');
});
$(".related.products ul.products").addClass("owl-carousel owl-theme");
$('.related.products ul.products').owlCarousel({
    loop: true,
    nav: true,
    animateOut: 'slideOutLeft',
    animateIn: 'slideInLeft',
    slideSpeed: 300,
    autoplay: true,
    margin: 40,
    dots: true,
    autoplayTimeout: 5000,
    items: 4,
    smartSpeed: 450
});