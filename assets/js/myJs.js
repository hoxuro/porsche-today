// funcion para mostrar correctamente los tags de los posts
// aunque en el codigo fuente saldra el codigo original
jQuery(document).ready(function () {
  jQuery(".tags-container")
    .contents()
    .filter(function () {
      return this.nodeType === 3; // Filtra nodos de texto
    })
    .remove();
});

// Activar el link de la navegacion del nav dependiendo de la pagina en que nos
// encontremos
const currentUrl = window.location.href;

// Obtener todos los enlaces de la barra de navegación
const navLinks = document.querySelectorAll("nav a");

// Iterar sobre los enlaces y comparar las URL
navLinks.forEach(function (link) {
  if (link.href === currentUrl) {
    link.parentNode.classList.add("current"); // Agregar la clase "active" al enlace actual
  }
});

/* --------------------------------------------------------
ANIMATED SCROLL PAGE WITH ACTIVE MENU - BOOTSTRAP SROLLSPY
----------------------------------------------------------- */
jQuery(function () {
  "use strict";
  jQuery(".header-nav ul li a").on("click", function (event) {
    event.preventDefault();
    var hash = this.hash;
    if (hash == "") {
      var url = this.getAttribute("href");
      window.location.href = url;
    }
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(hash).offset().top,
      },
      900,
      function () {
        window.location.hash = hash;
      }
    );
  });
});
