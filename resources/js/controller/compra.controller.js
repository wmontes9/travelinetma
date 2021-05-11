function print_content(selector){
     var contenido= $(`#${selector}`).html();
     var contenidoOriginal= $('html').html();
     document.body.innerHTML = contenido;
     window.print();
     document.body.innerHTML = contenidoOriginal;
     location.reload();
}