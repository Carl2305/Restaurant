/**
* Template Name: Restaurantly - v3.7.0
* Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  let selectTopbar = select('#topbar')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.add('topbar-scrolled')
        }
      } else {
        selectHeader.classList.remove('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.remove('topbar-scrolled')
        }
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Menu isotope and filter
   */
  window.addEventListener('load', () => {
    let menuContainer = select('.menu-container');
    if (menuContainer) {
      let menuIsotope = new Isotope(menuContainer, {
        itemSelector: '.menu-item',
        layoutMode: 'fitRows'
      });

      let menuFilters = select('#menu-flters li', true);

      on('click', '#menu-flters li', function(e) {
        e.preventDefault();
        menuFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        menuIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        menuIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Events slider
   */
  new Swiper('.events-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  /**
   * Initiate gallery lightbox 
   */
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * funcion para crear un json de los platos 
   * seleccionadosy alamcenarlo en el localstorage
   */
  var datos  = [];
  if(localStorage.getItem("orders")){
    datos=JSON.parse(localStorage.getItem("orders"));
  }else{
    datos=[];
  }
  const saveLocalStorage=(code,url,name,descrip,price,comment)=>{
    
    datos.push({ 
      "codigo"    : code.trim(),
      "imagen"  : url.trim(),
      "nombre"    : name.trim(), 
      "descripcion"  : descrip.trim(),
      "precio"    : price.trim(),
      "comentario"  : comment.trim(),
      "cantidad"  : 1
    });

    //let hash = {};
    //datos = datos.filter(o => hash[o.codigo] ? o.cantidad=o.cantidad+1 : hash[o.codigo] = true);
    
    localStorage.setItem("orders",JSON.stringify(datos));
    //console.log(datos)

  }
  /**
   * Selected Menu
   */
  window.addEventListener('load',()=>{

    on('click','.sale-item a',function(e){ e.preventDefault(); },true);

    on('click','.menu-item',function(e){
      e.preventDefault();
      let code_menu=this.dataset.codemenu;
      let url_image_menu=this.querySelector('img').getAttribute('src');
      let name_menu=this.querySelector('a').textContent;
      let price_menu=this.querySelector('span').textContent;
      let description_menu=this.querySelector('.menu-ingredients').textContent;
      let comment_menu="";

      Swal.fire({
          title: "Comentario Adicional",
          text: "Este espacio es para escribir algun comentario sobre tu plato antes de hacer tu pedido",
          input: "textarea",
          inputPlaceholder: "Escribe aquí...",
          inputAttributes: {
            maxlength: 200,
            autocapitalize: 'off',
            autocorrect: 'off'
          },
          showCancelButton: true,
          confirmButtonText: "Enviar Comentario",
          confirmButtonColor:'#cda45e',
          cancelButtonText: "Cancelar",
          allowOutsideClick: false/*,
          inputValidator: (value) => {
            if (!value) {
              return 'Ingrese un comentario adicional.'
            }
          }*/
      }).then(result => {
          //if (result.value) {
            comment_menu=result.value;
            saveLocalStorage(code_menu,url_image_menu,name_menu,description_menu,price_menu,comment_menu);         
          //}
      });

    },true);
  
  });

  /**
   * funcion para ejecutar en la pagina de venta dentro de php
   * para cargar los elementos del json del localstorage
   */
  /**
   * Selected Menu
   */

  const loadResumeOrder = () =>{
    let total=0.0;
    let html=select('#total-order');
    if(localStorage.getItem("orders")){
      datos.forEach(function (data, index) {
        let NumberPrice = parseFloat(data.precio.replace('S/ ','').trim());
        total+=NumberPrice;
      });
      html.innerHTML=new Intl.NumberFormat("es-PE",{style: "currency", currency: "PEN"}).format(total);
    }else{
      html.innerHTML="S/ 0.00";
    }
  }

  window.addEventListener('load',()=>{
    var modal_orders = new bootstrap.Modal(select('#modal-form-client'),{});
    if(localStorage.getItem("orders")){
      datos=JSON.parse(localStorage.getItem("orders"));
      let htmlCodeItems="";
      datos.forEach(function (data, index) {
        htmlCodeItems+=`<div class="col-md-6 col-lg-4 sale-item filter-chicken" id="${data.codigo}">
                          <img src="${data.imagen}" class="menu-img" alt="">
                          <div class="menu-content">
                          <a href="#">${data.nombre}</a><span>${data.precio}</span>
                          </div>
                          <div class="menu-ingredients">${data.descripcion}<br>Comentario: <span>${data.comentario}</span></div>
                          <div class="menu-ingredients d-flex justify-content-end">
                              <button class="btn btn-danger btn-delete-menu"  data-codemenudelete="${data.codigo}">Eliminar</button>
                          </div>
                      </div>`;
      });
      
      let htmlCode=select('#sale-container');
      htmlCode.innerHTML = "";
      htmlCode.innerHTML = htmlCodeItems;

      loadResumeOrder();
    }

    on('click','.btn-delete-menu',function(e){
      //e.preventDefault();
      let code=this.dataset.codemenudelete;
      datos.forEach(function(menu, index, object) {
          if(menu.codigo === code){
            object.splice(index, 1);
            
          }
      });
      localStorage.setItem("orders",JSON.stringify(datos));
      let htmlCode=select(`#${code}`);
      htmlCode.innerHTML = "";
      htmlCode.classList.add('d-none');
      
      loadResumeOrder();

    },true);

    on('submit','#modal-form-client',function(e){ 
      let data_client=[];
      let client={
        client_name:select('#client-name').value,
        client_phone:select('#client-phone').value,
        client_email:select('#client-email').value,
        client_address:select('#client-address-delivery').value,
        client_reference:select('#client-reference-address').value
      };
      data_client.push(client);
      if(localStorage.getItem("orders")){
        let xhr=new XMLHttpRequest();
        xhr.open('POST','http://localhost/Restaurant/assets/vendor/php-sale-form/save-order-menu.php');
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
        xhr.onload = () => {
          if(xhr.status===200){
            let response=xhr.responseText;
            if(response==1){
              Swal.fire({
                title: 'Pedido Registrado',
                text:'Tu pedido se registró correctamente, un colaborador se estará comunicando con usted para confirmar el pedido. Muchas Gracias.',
                icon:'success',
                confirmButtonText: "OK",
                confirmButtonColor:'#cda45e'
              }).then((result) => {
                if (result.isConfirmed) {
                  setInterval(()=>{
                    let form=select('#modal-form-client');
                    form.reset();
                    modal_orders.hide();
                    localStorage.removeItem("orders");
                    let htmlCode=select('#sale-container');
                    htmlCode.innerHTML = "";
                    let html=select('#total-order');
                    html.innerHTML="S/ 0.00";
                  });
                  setTimeout(()=>{window.location.href = './';},2000);
                }else{
                  setTimeout(()=>{
                    let form=select('#modal-form-client');
                    form.reset();
                    modal_orders.hide();
                    localStorage.removeItem("orders");
                    let htmlCode=select('#sale-container');
                    htmlCode.innerHTML = "";
                    let html=select('#total-order');
                    html.innerHTML="S/ 0.00";
                  },1000);
                  setTimeout(()=>{window.location.href = './';},2000);
                }
              });
            }
          }else{
            console.log("error en la peticion "+xhr.status);
          }
        }
        xhr.send(`data_client=${JSON.stringify(data_client)}&data_order=${JSON.stringify(datos)}`);
      }else{
        Swal.fire(
                'Error',
                'Seleccione como mínimo un platillo del menu',
                'error'
              );
      }
      e.preventDefault();
      
    });

  });

})()