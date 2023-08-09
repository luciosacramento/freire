document.addEventListener('DOMContentLoaded', function () {

    const menuToggle = document.querySelector('.menu-toggle');
    const menuLinks = document.querySelector('.menu-links');
  
    menuToggle.addEventListener('click', function () {
        menuLinks.classList.toggle("show");
        menuToggle.classList.add("active");
    });
  
  
    var elem = document.querySelector('#header-carousel');
    var flkty = new Flickity( elem, {
      cellAlign: 'left',
      contain: true
    });
  
    var elem = document.querySelector('#projetos-carousel');
    var flkty = new Flickity( elem, {
      // options
      cellAlign: 'left',
      contain: true
    });
    
  
    
  });