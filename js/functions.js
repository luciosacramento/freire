document.addEventListener('DOMContentLoaded', function () {

    const menuToggle = document.querySelector('.menu-toggle');
    const menuLinks = document.querySelector('.menu-links');
  
    menuToggle.addEventListener('click', function () {
        menuLinks.classList.toggle("show");
        menuToggle.classList.add("active");
    });
  
    if(document.querySelector('#header-carousel')){

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

    }

    //const menuToggle = document.querySelectorAll('.tab-list-horizontal .buttons li');
    //const menuLinks = document.querySelectorAll('.tab-list-horizontal .conteiners>div');
  

  if(document.querySelector('.tab-list-horizontal')){
    /***TAB NAVIGATOR***/ 
    const tabs = document.querySelectorAll(".tab-list-horizontal .buttons li");
    const tabContents = document.querySelectorAll(".tab-list-horizontal .conteiners>div");

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {
        const tabId = tab.getAttribute("data-tab");

        tabs.forEach(t => t.classList.remove("active"));
        tabContents.forEach(content => content.classList.remove("active"));

        tab.classList.add("active");
        console.log(tabId);
        document.getElementById(tabId).classList.add("active");
      });
    });
    /***FIM TAB NAVIGATOR***/
  }

  /***FORMULARIO DE EMAIL***/
  const form = document.getElementById("contact-form");

  if(form){
    form.addEventListener("submit", function (event) {
      event.preventDefault();
  
      const formData = new FormData(form);
  
      fetch(form.getAttribute("action"), {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            alert("E-mail enviado com sucesso!");
            form.reset();
          } else {
            alert("Erro ao enviar o e-mail. Tente novamente mais tarde."+form.getAttribute("action"));
          }
        })
        .catch((error) => {
          alert("Erro ao enviar o e-mail. Tente novamente mais tarde."+form.getAttribute("action"));
        });
    });
  }  
  /***FIM FORMULARIO DE EMAIL***/
    
  });