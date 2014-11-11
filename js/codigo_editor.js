//desarrollado por francisco campos 2014
window.onload = function() {
  inicia_editor();
  caja_editor.document.execCommand('fontSize',false,'5');
  caja_editor.document.execCommand('fontName',false,'Arial');
  caja_editor.document.execCommand('foreColor',false,'#000000');
}

function inicia_editor(){
         caja_editor.document.designMode = 'On';
         caja_editor.focus();
      }

function insertarEnlace(){ 
         var src = prompt('ingresar url','http://');
           caja_editor.document.execCommand('createLink', false, src);
      }


function insertarImagen(){ 
          var url; 
          if(!(url=prompt('ingresar url','http://')))return; 
          caja_editor.body.focus(); 
          caja_editor.execCommand("InsertImage",false,url); 
      }


function negrita(){
         
        caja_editor.document.execCommand('bold',false,'');
            
     }

//funciones para ajueste del texto negrita cuersiva subrallado,.

function cursiva(){
    caja_editor.document.execCommand('italic',false,'');
}

function subrayado(){
  caja_editor.document.execCommand('underline',false,'');
}

//funciones para ajueste del texto alineado izquierda centrado derecha..

function alin_izq(){
    caja_editor.document.execCommand('justifyLeft',false,'');
}

function alin_cent(){
   caja_editor.document.execCommand('justifyCenter',false,'');
}

function alin_dere(){
   caja_editor.document.execCommand('justifyRight',false,'');
    
}

function alin_just(){
   caja_editor.document.execCommand('justifyFull',false,'');
}

function borrar(){
    caja_editor.document.execCommand('delete',false,'');
}

function listar(){

  caja_editor.document.execCommand('insertOrderedList',false,'');
}

function listar2(){

  caja_editor.document.execCommand('insertUnorderedList',false,'');
}

function sin_link(){
      
  caja_editor.document.execCommand('unlink',false,'');
}

function font_zice(){
  var ff = document.getElementById('tamaño_fuente');
  var fz = ff.options[ff.selectedIndex].value;     
  caja_editor.document.execCommand('fontSize',false,fz);
}

function font_famili(){
    var ff = document.getElementById('familia_fuente');
    var s = ff.options[ff.selectedIndex].text; 
   caja_editor.document.execCommand('fontName',false,s);
}

function color(valor){

  caja_editor.document.execCommand('foreColor',false,valor);
}

function rest(){

  caja_editor.document.execCommand('removeFormat',false,'');
}


 function guardar(){
    alert('enviado..');
    var nombre_form = document.getElementById('form_editor');
     nombre_form.elements['conte_editor'].value = window.frames['caja_editor'].document.body.innerHTML;
     nombre_form.submit();

 }
