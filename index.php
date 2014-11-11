<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editor de texto</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body onload="inicia_editor();">

<div class="contenedor">
  <form action="?" id="form_editor" method="post">
    <div class="conte_boton">
          <button class="bt" type="button" title="negrita" onclick="negrita()">
            <img src="img/iconos/white/png/font_bold_icon&24.png" alt="">
          </button>
          <button class="bt" type="button"  title="cursiva" onclick="cursiva()">
            <img src="img/iconos/white/png/font_italic_icon&24.png" alt="">
          </button>
          <button class="bt" type="button" title="subrayado" onclick="subrayado()">
            <img src="img/iconos/white/png/font_underline_icon&24.png" alt="">
          </button>
           
           <button class="bt bt_f" type="button" title="tamaño de fuente" >
              <img src="img/iconos/white/png/font_size_icon&24.png" alt="">
              <select name="t_fuente" id="tamaño_fuente" onchange="font_zice()">
                 <option value="0">5</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
              </select>
           </button>

        <button class="bt bt_f" type="button" title="tipo de fuente" >
            <img src="img/iconos/white/png/text_letter_t_icon&24.png" alt="">
            <select name="f_fuente" id="familia_fuente" onchange="font_famili()">
              <!-- <option value="0">Tipo de Fuente</option> -->
              <option value="1">Arial</option>
              <option value="2">Calibri</option>
              <option value="3">Comic Sans MS</option>
              <option value="4">Tahoma</option>
            </select>
        </button>
    
           <button class="bt" type="button" title="alinear a la izquierda" onClick="alin_izq()">
            <img src="img/iconos/white/png/align_left_icon&24.png" alt="">
          </button>

          <button class="bt" type="button" title="centrar"  onClick="alin_cent()">
            <img src="img/iconos/white/png/align_center_icon&24.png" alt="">
          </button>

          <button class="bt" type="button" title="alinear a la derecha"  onClick="alin_dere()">
            <img src="img/iconos/white/png/align_right_icon&24.png" alt="">
          </button>

          <button class="bt" type="button" title="justificar"  onClick="alin_just()">
            <img src="img/iconos/white/png/align_just_icon&24.png" alt="">
          </button>
          
          <button class="bt" type="button" title="lista"  onClick="listar()">
            <img src="img/iconos/white/png/list_num_icon&24.png" alt="">
          </button>
          <button class="bt" type="button" title="lista"  onClick="listar2()">
            <img src="img/iconos/white/png/list_bullets_icon&24.png" alt="">
          </button>

          <button class="bt" type="button" title="insertar vinculo" onClick="insertarEnlace()">
            <img src="img/iconos/white/png/link_icon&24.png" alt="">
          </button>

          <button class="bt" type="button" title="eliminar vinculo"  onClick="sin_link()">
            <img src="img/iconos/white/png/sin_link.png" alt="">
          </button>

          <button class="bt" type="button" title="insertar imagen"  onClick="insertarImagen()">
            <img src="img/iconos/white/png/picture_icon&24.png" alt="">
          </button>

          <button class="bt" type="button" type="button" title="borrar"  onClick="borrar()">
            <img src="img/iconos/white/png/arrow_left_icon&24.png" alt="">
          </button>
      </div> <!-- div caja de botones -->

      <div class="caja">
        <textarea name="conte_editor" id="conte_editor_oculto" cols="30" rows="10"></textarea>
        <iframe name="caja_editor" id="caja_editor" ></iframe>
         
         <div class="paleta_color">
           <span id="titulo_paleta_color">Color de Fuente
            <button class="color_rojo bt_f" type="button" title="rojo" onclick="color('#FF0000')">
            </button>
              
            <button class="color_verde bt_f" type="button"  title="verde" onclick="color('#008000')">
            </button>
              
            <button class="color_azul bt_f" type="button" title="azul" onclick="color('#0000FF')">
            </button>

            <button class="color_amarillo bt_f" type="button" title="amarillo" onClick="color('#FFFF00')">
            </button>
             
            <button class="color_negro bt_f" type="button" title="negro"  onClick="color('#000000')"> 
            </button>
              
             <button class="color_naranja bt_f" type="button" title="naranja" onClick="color('#FF8000')"> 
             </button>

             <button class="color_gris bt_f" type="button" title="gris 50%" onClick="color('#707362')"> 
             </button>
            </span>
         </div> <!-- div paleta de color -->

            <br>

           <!--  boton de envio del formulario -->
            <button class="bt" type="button" title="enviar datos" name="btn_envia" onClick="guardar()">
             <span id="enviar">Enviar</span> 
            </button>

            <h6>copyright Francisco Campos 2014</h6>
      </div> <!-- div caja -->
    </form>
</div> <!-- div conte -->


<div class="muestra">
  <?php 

   if (isset($_POST)) {
      $con = mysql_connect('localhost','root','123456');
       mysql_select_db('editor');
       
//       $valor = $_POST['conte_editor'];

       //$valor =  stripcslashes($_POST['conte_editor']);
        $valor =  $_POST['conte_editor'];
      
       $sql="INSERT INTO editor (editor) values('$valor')";
       $res = mysql_query($sql);

   }
   
         $sql="SELECT * FROM editor";
               $res = mysql_query($sql);
               while($resul=mysql_fetch_array($res)){
                   echo $resul['editor'];
                   echo "<br>";
               }
   ?>

</div>  
  
   <script src="js/codigo_editor.js"></script> 

</body>
</html>