window.addEventListener('scroll', () => {
    const wScroll = window.scrollY;
    // console.log('wScroll');
    $("header .top-left-rect1").css({
        'transform': 'translate(0%,' + wScroll / 20 + '%)',
        'transition': '.7s ease-out',
    });
    
   var homeTop = $("header").offset().top - 0;
   var aboutTop = $(".about-section").offset().top - 100;

   if (wScroll >= aboutTop) {
       $("nav ul li a").removeClass("active");
       $("nav ul li a.about").addClass("active");
   } else if (wScroll < aboutTop && wScroll >= homeTop) {
       $("nav ul li a").removeClass("active");
       $("nav ul li a.home").addClass("active");
   }
});

