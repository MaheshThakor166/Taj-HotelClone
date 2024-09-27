document.querySelector('.toggle-btn').addEventListener('click', function() {
    // Get all elements with class 'right-part'
    const rightPartElements = document.getElementsByClassName('right-part');

    // Loop through the collection and toggle the 'active' class
    for (let i = 0; i < rightPartElements.length; i++) {
        rightPartElements[i].classList.toggle('active');
    }
});
document.getElementById('closeNav').addEventListener('click', function() {
    document.getElementById('mobileNav').style.width = '0';
});

$(document).ready(function(){
    $('.your-class').slick({
      dots: true,             // Enables pagination dots
      infinite: true,         // Enables infinite looping
      speed: 500,             // Transition speed
      slidesToShow: 3,        // Show 3 slides at once on larger screens
      slidesToScroll: 1,      // Scroll one slide at a time
      autoplay: true,         // Enable auto-play
      autoplaySpeed: 3000,    // Set auto-play speed to 3 seconds
      arrows: true,           // Show next/prev arrows
      responsive: [
        {
          breakpoint: 1024,   // Screen width less than 1024px
          settings: {
            slidesToShow: 2,  // Show 2 slides at a time
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,    // Screen width less than 768px
          settings: {
            slidesToShow: 1,  // Show 1 slide at a time
            slidesToScroll: 1
          }
        }
      ]
    });
  });
