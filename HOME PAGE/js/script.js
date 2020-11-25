const nav = document.querySelector('nav');
const topbar = document.getElementById("topBar");
window.addEventListener('scroll', function () {
    const offset = window.pageYOffset;
    if (screen.width > 991) {
        if (offset >= 49 ) {
            nav.classList.add('scroll');
            nav.classList.add('fixed-top');
            topbar.classList.add('d-none');
        }
        else {
            nav.classList.remove('scroll');
            nav.classList.remove('fixed-top');
            topbar.classList.remove('d-none');
        }
    }
    if (screen.width <= 991) {
        topbar.classList.add('d-none');
        nav.classList.add('fixed-top');
        nav.classList.remove('scroll');
    }
});
 $(".hello").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            center: true,
            nav: true,
            navText: [
                $(".owl-navigation .owl-nav-prev"),
                $(".owl-navigation .owl-nav-next"),
            ],
            responsive: {
                0:{
                    items: 1,
                   
                },
                768: {
                    items: 2,
                   
                },
                992:{
                    items: 3,
                  
                }
            }
        });