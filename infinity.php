<?
$localIP = getHostByName(getHostName());
//echo $localIP . "<br>";

$bLocal = 0;

$dist="";
if ($localIP == "localhost:13080"){
  //$e =  mysql_connect('173.194.250.8', 'vernetit', 'chupala');
  $bLocal = 1;
 
  
}else{
  //$e =  mysql_connect(':/cloudsql/competicionmental:competicionmental', 'root', 'chupala');
  $dist="-dist";
}

$dist="";

//$dist=""

/*
if (!$e) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($e);
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  

  <title>Infinity</title>
  <!--
  <script src="js/react-with-addons.js"></script>
  <script src="js/react-dom.js"></script>
  -->
  <script src="js/jquery.min.js"></script>
  <script src="js/underscore-min.js"></script>

   
  <script>
    
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45359665-6', 'auto');
  ga('send', 'pageview');

  </script>

  <style type="text/css">
   body{
    color: green;
    background-color: black;
   }
    #control {
    position: fixed;
    bottom: 0px;
    width: 100%;
    margin-bottom: 10px;
    }
    #screen{
      font-size: 30px;
      width: 100%;
      height: 800px;
      /*margin-top: 25%;*/
    /*  color: blue; */
      
    /* font-family: "Comic Sans MS", cursive, sans-serif; */

    }
     #up-screen{
     
      position: fixed;
      top: 30px;
      transform: translateX(-50%);
      margin-left: 50%;
     }
     #down-screen{
      margin-left: 50%;
      position: fixed;
      bottom: 60px;
       transform: translateX(-50%);

     }
     #left-screen{
      position: fixed;
      top: 50%;
      left: 0px; 

      /*float: right; */
     /*font-size: 26px;*/

     }
     #right-screen{
      position: fixed;
      top: 50%;
      right: 0px; 
      /* float: left; */
      /*font-size: 26px;*/

     }
      #center-screen{
      position: fixed;
      top: 50%;/*
      left: 0;
      right: 0;
      width: 50%;*/
      left: 50%;
      overflow: hidden;
      white-space: nowrap;
      /*width: 100%; */
       /*text-align:center;*/
    /*transform: translate(-50%, 0);*/
      /*margin-left: 50%;*/
     transform: translateX(-50%);
     margin: 0 auto;

      /*right: 0px; */
      /* float: left; */
      /*font-size: 26px;*/

     }
     #left-up-screen{
      position: fixed;
      top: 10%;
      left: 0px; 
     }
     #right-up-screen{
      position: fixed;
      top: 10%;
      right: 0px; 
     }

     #left-down-screen{
      position: fixed;
      left: 0px; 
      bottom: 60px;
     }
     #right-down-screen{
      position: fixed;
      right: 0px; 
      bottom: 60px;
     }
     #right-down-screen2{
      position: fixed;
      right: 0px; 
      bottom: 0px;
     }

     .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
      }
  </style>
</head>
<body>
<div id="screen" onclick="if(posicion-15>=0){ contadorPalabras=0; posicion-=15;  }else{ posicion=0; }">
  <div id="left-up-screen"></div>
  <div id="right-up-screen"></div>
  <div id="up-screen">:)</div>
  <div id="left-screen">Infinity</div>
  <div id="center-screen" class="noselect"></div>
  <div id="right-screen">Infinity</div>
  <div id="down-screen">:)</div>
  <div id="left-down-screen"></div>
  <div id="right-down-screen"></div>
</div>
<div id="right-down-screen2"><input type="button" value="hide" onclick="hide();" id="hide-btn"></div>

<div id="control">
  <input  type="button" value="start" onclick="play();" id="play-btn">
  <input  type="button" value="stop" onclick="stopFlash();">
  <input type="button" value="clearTxt" onclick="$('#input1').val(''); stopFlash();">

  <select id="velocityFlash" style="width: 75px;" onchange="calcularTiempo();">   
    <option value="50">50wpm</option>
    <option value="75">75wpm</option>
    <option value="100">100wpm</option>
    <option value="105">105wpm</option>
    <option value="110">110wpm</option>
    <option value="115">115wpm</option>
    <option value="120">120wpm</option>
    <option value="125">125wpm</option> 
    <option value="130">130wpm</option> 
    <option value="135">135wpm</option> 
    <option value="140">140wpm</option> 
    <option value="145">145wpm</option> 
    <option value="150">150wpm</option>
    <option value="175">175wpm</option>
    <option value="180">180wpm</option>
    <option value="185">185wpm</option>
    <option value="190">190wpm</option>
    <option value="195">195wpm</option>
    <option value="200" selected>200wpm</option>
     <option value="205">205wpm</option>
    <option value="210">210wpm</option>
    <option value="215">215wpm</option>
    <option value="220">220wpm</option>
    <option value="225">225wpm</option>
     <option value="230">230wpm</option>
    <option value="235">235wpm</option>
    <option value="240">240wpm</option>
    <option value="245">245wpm</option>
    <option value="250">250wpm</option>
    <option value="275">275wpm</option>
    <option value="300">300wpm</option>
    <option value="325">325wpm</option>
    <option value="350">350wpm</option>
    <option value="375">375wpm</option>
    <option value="400">400wpm</option>
    <option value="425">425wpm</option>
    <option value="450">450wpm</option>
    <option value="475">475wpm</option>
    <option value="500">500wpm</option>
    <option value="525">525wpm</option>
    <option value="550">550wpm</option>
    <option value="575">575wpm</option>
    <option value="600">600wpm</option>
    <option value="625">625wpm</option>
    <option value="650">650wpm</option>
    <option value="675">675wpm</option>
    <option value="700">725wpm</option>
    <option value="725">700wpm</option>
    <option value="750">750wpm</option>
    <option value="775">775wpm</option>
    <option value="800">800wpm</option>
    <option value="825">825wpm</option>
    <option value="850">850wpm</option>
    <option value="875">875wpm</option>
    <option value="900">900wpm</option>
    <option value="925">925wpm</option>
    <option value="950">950wpm</option>
    <option value="975">975wpm</option>
    <option value="1000">1000wpm</option>
    <option value="1100">1100wpm</option>
    <option value="1200">1200wpm</option>
  </select>
  &nbsp;
  [<span id="current-vel"></span>]
  &nbsp;
  <select id="wordsByFlash" onchange="wordsByFlash=n('wordsByFlash');" style="/*display:none;*/">   
    <option value="1" selected>1w</option>
    <option value="2">2w</option>
    <option value="3">3w</option>
    <option value="4">4w</option>
    <option value="5">5w</option>
    <option value="6">6w</option>
    <option value="7">7w</option>
  </select>
  <select id="readingMode" onchange="bLugar=1; circleFase=0; readingMode=n('readingMode'); " style="display:none;">   
    <option value="1">left-right</option>
    <option value="2">up-down</option>
    <option value="3">circle</option>
    <option value="4">circle inv</option>
    <option value="5">random Circle</option>
    <option value="6"  selected>center</option>
    <option value="7">Square</option>
    <option value="8">Cross</option>
    <option value="9">Random Square</option>
    <!--<option value="6">center</option>-->
  </select>
<textarea rows="1" cols="25" style="margin-top: 5px;" id="input1" class="js-copytextarea">
Lechuzas mensajeras
HARRY Potter era, en muchos sentidos, un muchacho diferente. Por un lado, las vacaciones de verano le gustaban menos que cualquier otra época del año; y por otro, deseaba de verdad hacer los deberes, pero tenía que hacerlos a escondidas, muy entrada la noche. Y además, Harry Potter era un mago.
Era casi medianoche y estaba tumbado en la cama, boca abajo, tapado con las mantas hasta la cabeza, como en una tienda de campaña. En una mano tenía la linterna y, abierto sobre la almohada, había un libro grande, encuadernado en piel (Historia de la Magia, de Bathilda Bagshot). Harry recorría la página con la punta de su pluma de águila, con el entrecejo fruncido, buscando algo que le sirviera para su redacción sobre «La inutilidad de la quema de brujas en el siglo XIV».
La pluma se detuvo en la parte superior de un párrafo que podía serle útil. Harry se subió las gafas redondas, acercó la linterna al libro y leyó:
En la Edad Media, los no magos (comúnmente denominados muggles) sentían hacia la magia un especial temor, pero no eran muy duchos en reconocerla. En las raras ocasiones en que capturaban a un auténtico brujo o bruja, la quema carecía en absoluto de efecto. La bruja o el brujo realizaba un sencillo encantamiento para enfriar las llamas y luego fingía que se retorcía de dolor mientras disfrutaba del suave cosquilleo. A Wendelin la Hechicera le gustaba tanto ser quemada que se dejó capturar no menos de cuarenta y siete veces con distintos aspectos.
Harry se puso la pluma entre los dientes y buscó bajo la almohada el tintero y un rollo de pergamino. Lentamente y con mucho cuidado, destapó el tintero, mojó la pluma y comenzó a escribir, deteniéndose a escuchar de vez en cuando, porque si alguno de los Dursley, al pasar hacia el baño, oía el rasgar de la pluma, lo más probable era que lo encerraran bajo llave hasta el final del verano en la alacena que había debajo de las escaleras.
La familia Dursley, que vivía en el número 4 de Privet Drive, era el motivo de que Harry no pudiera tener nunca vacaciones de verano. Tío Vernon, tía Petunia y su hijo Dudley eran los únicos parientes vivos que tenía Harry. Eran muggles, y su actitud hacia la magia era muy medieval. En casa de los Dursley nunca se mencionaba a los difuntos padres de Harry, que habían sido brujos. Durante años, tía Petunia y tío Vernon habían albergado la esperanza de extirpar lo que Harry tenía de mago, teniéndolo bien sujeto. Les irritaba no haberlo logrado y vivían con el temor de que alguien pudiera descubrir que Harry había pasado la mayor parte de los últimos dos años en el Colegio Hogwarts de Magia y Hechicería. Lo único que podían hacer los Dursley aquellos días era guardar bajo llave los libros de hechizos, la varita mágica, el caldero y la escoba al inicio de las vacaciones de verano, y prohibirle que hablara con los vecinos.
Para Harry había representado un grave problema que le quitaran los libros, porque los profesores de Hogwarts le habían puesto muchos deberes para el verano. Uno de los trabajos menos agradables, sobre pociones para encoger, era para el profesor menos estimado por Harry, Snape, que estaría encantado de tener una excusa para castigar a Harry durante un mes. Así que, durante la primera semana de vacaciones, Harry aprovechó la oportunidad: mientras tío Vernon, tía Petunia y Dudley estaban en el jardín admirando el nuevo coche de la empresa de tío Vernon (en voz muy alta, para que el vecindario se enterara), Harry fue a la planta baja, forzó la cerradura de la alacena de debajo de las escaleras, cogió algunos libros y los escondió en su habitación. Mientras no dejara manchas de tinta en las sábanas, los Dursley no tendrían por qué enterarse de que aprovechaba las noches para estudiar magia.
Harry no quería problemas con sus tíos y menos en aquellos momentos, porque estaban enfadados con él, y todo porque cuando llevaba una semana de vacaciones había recibido una llamada telefónica de un compañero mago.
Ron Weasley, que era uno de los mejores amigos que Harry tenía en Hogwarts, procedía de una familia de magos. Esto significaba que sabía muchas cosas que Harry ignoraba, pero nunca había utilizado el teléfono.
Por desgracia, fue tío Vernon quien respondió:
—¿Diga?
Harry, que estaba en ese momento en la habitación, se quedó de piedra al oír que era Ron quien respondía.
—¿HOLA? ¿HOLA? ¿ME OYE? ¡QUISIERA HABLAR CON HARRY POTTER!
Ron daba tales gritos que tío Vernon dio un salto y alejó el teléfono de su oído por lo menos medio metro, mirándolo con furia y sorpresa.
—¿QUIÉN ES? —voceó en dirección al auricular—. ¿QUIÉN ES?
—¡RON WEASLEY! —gritó Ron a su vez, como si el tío Vernon y él estuvieran comunicándose desde los extremos de un campo de fútbol—. SOY UN AMIGO DE HARRY, DEL COLEGIO.
Los minúsculos ojos de tío Vernon se volvieron hacia Harry, que estaba inmovilizado.
—¡AQUÍ NO VIVE NINGÚN HARRY POTTER! —gritó tío Vernon, manteniendo el brazo estirado, como si temiera que el teléfono pudiera estallar—. ¡NO SÉ DE QUÉ COLEGIO ME HABLA! ¡NO VUELVA A LLAMAR AQUÍ! ¡NO SE ACERQUE A MI FAMILIA!
Colgó el teléfono como quien se desprende de una araña venenosa.
La bronca que siguió fue una de las peores que le habían echado.
—¡CÓMO TE ATREVES A DARLE ESTE NÚMERO A GENTE COMO… COMO TÚ! —le gritó tío Vernon, salpicándolo de saliva.
Ron, obviamente, comprendió que había puesto a Harry en un apuro, porque no volvió a llamar. La mejor amiga de Harry en Hogwarts, Hermione Granger, tampoco lo llamó. Harry se imaginaba que Ron le había dicho a Hermione que no lo llamara, lo cual era una pena, porque los padres de Hermione, la bruja más inteligente de la clase de Harry, eran muggles, y ella sabía muy bien cómo utilizar el teléfono, y probablemente habría tenido tacto suficiente para no revelar que estudiaba en Hogwarts.
De manera que Harry había permanecido cinco largas semanas sin tener noticia de sus amigos magos, y aquel verano estaba resultando casi tan desagradable como el anterior. Sólo había una pequeña mejora: después de jurar que no la usaría para enviar mensajes a ninguno de sus amigos, a Harry le habían permitido sacar de la jaula por las noches a su lechuza Hedwig. Tío Vernon había transigido debido al escándalo que armaba Hedwig cuando permanecía todo el tiempo encerrada.
Harry terminó de escribir sobre Wendelin la Hechicera e hizo una pausa para volver a escuchar. Sólo los ronquidos lejanos y ruidosos de su enorme primo Dudley rompían el silencio de la casa. Debía de ser muy tarde. A Harry le picaban los ojos de cansancio. Sería mejor terminar la redacción la noche siguiente…
Tapó el tintero, sacó una funda de almohada de debajo de la cama, metió dentro la linterna, la Historia de la Magia, la redacción, la pluma y el tintero, se levantó y lo escondió todo debajo de la cama, bajo una tabla del entarimado que estaba suelta. Se puso de pie, se estiró y miró la hora en la esfera luminosa del despertador de la mesilla de noche.
Era la una de la mañana. Harry se sobresaltó: hacía una hora que había cumplido trece años y no se había dado cuenta.
Harry aún era un muchacho diferente en otro aspecto: en el escaso entusiasmo con que aguardaba sus cumpleaños. Nunca había recibido una tarjeta de felicitación. Los Dursley habían pasado por alto sus dos últimos cumpleaños y no tenía ningún motivo para suponer que fueran a acordarse del siguiente.
Harry atravesó a oscuras la habitación, pasando junto a la gran jaula vacía de Hedwig, y llegó hasta la ventana, que estaba abierta. Se apoyó en el alféizar y notó con agrado en la cara, después del largo rato pasado bajo las mantas, el frescor de la noche. 

</textarea>
<!-- <input type="button" value="colors on/off" onclick="bColors=!bColors;"> -->
<!--<input  type="button" value="cw" onclick="bCW=!bCW;">-->
<!-- <input type="button" value="rc" onclick="if(bColors==0){ bColors=1; } bRc=!bRc; clearTimeout(killIntervalRc);"> -->
<select onchange="cambiarColores(this.value);" id="colors-select" style="width: 65px;">
  <option value="1" selected>Green</option>
  <option value="2">Blue</option>
  <option value="3">Gray</option>
  <option value="4">Color Alphabet</option>
  <option value="5">Random colors</option>
</select>
<select onchange="cambiarTransformation(this.value);" id="transform-select" style="width: 90px; display:none;">
  <option value="1">noTransform</option>
  <option value="2">up-down</option>  
  <option value="3">right to left</option>  
  <!--<option value="4">All previous</option> -->
  <option value="4">Skew</option> 
  <option value="5">Random Skew</option>  
</select>
<? $exp=1; if(isset($_GET["exp"])){ $exp=intval($_GET["exp"]); } ?>
<select id="experiment-select" onchange="clearInterval(kill6); myExperiment=n('experiment-select');" style="display:none;">   
    <option value="1" <?=$exp==1?"selected":""?>>noExperiment</option>
    <option value="2" <?=$exp==2?"selected":""?>>longWordsPause</option>
    <option value="3" <?=$exp==3?"selected":""?>>temporaryHideLetters</option>
    <option value="4" <?=$exp==4?"selected":""?>>PeripheralVisionSquare</option>
    <option value="5" <?=$exp==5?"selected":""?>>PeripheralVisionCross</option>
    <option value="6" <?=$exp==6?"selected":""?>>PeripheralVisionLeftRight</option>
    <option value="7" <?=$exp==7?"selected":""?>>PeripheralVisionUpDown</option>
    <option value="8" <?=$exp==8?"selected":""?>>vibration</option>
    <option value="9" <?=$exp==9?"selected":""?>>emotion</option>
    <option value="10" <?=$exp==10?"selected":""?>>face</option>
  </select>
  <span style="display:none;">
   margin <input type="text" id="margin-text" onchange="changeMargin();" style="width: 35px;">
  loop <select id="repeat-q" style="width: 40px;">    
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    </select>
    <input type="text" value="50" id="loop-buffer" style="width:35px;">
  </span>
  <input type="button" value="getRandomTxt" onclick="getRndTxt();" id="rnd-btn" style="display:none;">&nbsp;

  <span style="display:none;">
    repeatW 
    <select id="repeat-w" style="width: 40px;">    
      <option value="0"  selected>none</option>
      <!-- <option value="1">1</option> -->
      <option value="2">2</option>
      <!-- <option value="3">3</option> -->
      <option value="4">4</option>
      <!-- <option value="5">5</option> -->
      <option value="6">6</option>
      <!-- <option value="7">7</option> -->
      <option value="8">8</option>
      <!-- <option value="9">9</option> -->
      <option value="10">10</option>
      <option value="12">12</option>
      <option value="14">14</option>
      <option value="16">16</option>
   </select>
   database
    <select id="database" style="/*width: 40px;*/ display:none;">    
      <option value="1">current txt</option>
      <option value="2"  selected>lemario</option>
      <option value="3">ES 1</option>
      <option value="4">ES 2</option>
      <option value="6">nombres</option>
      <? if($bLocal){ ?>
      <option value="5">verbos</option>
      
      <option value="7">English</option>
      <? } ?>
    </select>
     collision <select id="collision" style="/*width: 40px;*/ display:none;">    
      <option value="100">100%</option>
      <option value="90">90%</option>
      <option value="80">80%</option>
      <option value="75">75%</option>
      <option value="60">60%</option>
      <option value="50">50%</option>
      <option value="40">40%</option>
      <option value="30"  selected>30%</option>
      <option value="25">25%</option>
      <option value="20">20%</option>
      <option value="15">15%</option>
      <option value="10">10%</option>
     </select> 
     loop
     <input type="checkbox" onclick="bLoop=!bLoop;">
   </span>


   <span style="display:none;">
   <input type="checkbox" onclick="bOcultar=!bOcultar;">

   <button class="btn btn-primary js-textareacopybtn">Copy</button>

   </span>
   <script type="text/javascript">
   var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

copyTextareaBtn.addEventListener('click', function(event) {

  play();

  
  var copyTextarea = document.querySelector('.js-copytextarea');
  $("#input1").val(strToCopy);
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }
});

   </script>


<select id="my-limit" style="/*width: 75px;*/" onchange="/*calcularTiempo();*/">   
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12"  selected>12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
</select>
zoom 
<input type="button" value="-" onclick="/*myZoom-=0.1; $('#center-screen').css('zoom',''+myZoom);*/ fontSize-=5; /*$('#center-screen').css('font-size',''+myFontSize+'px');*/">
<input type="button" value="+" onclick="/*myZoom+=0.1; $('#center-screen').css('zoom',''+myZoom);*/  fontSize+=5; /*$('#center-screen').css('font-size',''+myFontSize+'px !important');*/">
<input  type="button" value="?" onclick="alert('Infinity:A evolution of Speed-reading Apps\nBased on the Shapes and colors Speed-Memory System\nLicence: GNU General Public License v3.0\nSource: https://github.com/vernetit/Infinity\ncontact: robertchalean@gmail.com');">
 <span id="stats" style="font-size: 12px;"></span>
</div>
<div id="preload" style="display:none;">
  

</div>

<script type="text/javascript">

myZoom=1;
myFontSize=30;

bOcultar=0;
bLoop=0;

repeatQ=0;
loopBuffer=0;
repeatCount=0;
bRepetir=0;
nextRepeat=0;
gotoPrev=0;

contadorPalabras=0;


function changeMargin(){
  newMargin = $("#margin-text").val()+"px";
  $("#left-screen").css("left",newMargin);
  $("#right-screen").css("right",newMargin);
}

letras_emo="abcdefghilmnopqrstuv".split("");

for(i=0;i<letras_emo.length;i++){
  cara = letras_emo[i];
  if(cara=="a" || cara=="e"  || cara=="n" || cara=="o"  || cara=="r"  || cara=="s"){
    for(j=1;j<5;j++){
      $("#preload").append(`<img src="emociones/${cara+j}.gif">`);

    }
  }else{
    $("#preload").append(`<img src="emociones/${cara}.gif">`);
  }

}

bHide=0;

function hide(){
  bHide=!bHide;

  if(bHide){
    $("#hide-btn").val("show");
    $("#control").hide();

  }else{

    $("#hide-btn").val("hide");
    $("#control").show();
  }
}

velocity=300;
txtLength=0;

myExperiment=<?=$exp?>;

function random_color(format)
{
    var rint = Math.round(0xffffff * Math.random());
    switch(format)
    {
        case 'hex':
            return ('#0' + rint.toString(16)).replace(/^#0([0-9a-f]{6})$/i, '#$1');
            break;

        case 'rgb':
            return 'rgb(' + (rint >> 16) + ',' + (rint >> 8 & 255) + ',' + (rint & 255) + ')';
            break;

        default:
            return rint;
            break;
    }
}

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

bRc=0;

function n(x){ return parseInt($("#"+x).val()); }

var bPlay=0;
var wordsByFlash=1;
var readingMode=6;
var circleFase=0;
var bCW=0;
bColors=0;
fontSize=30;

function play(){

  bPlay=!bPlay;

  if(bPlay){
    $("#play-btn").val("pause");
    $("#wordsByFlash").prop('disabled', true);

    init();

  }else{
    clearTimeout(killInterval);
    clearTimeout(killIntervalRc);
    $("#play-btn").val("start");

  }
}

ww=$(window).width();
wh=$(window).height();

var cadena;
var cantidad;
var posicion=0;
var lugar="left-screen";

bLugar=1;
iniciar = 1;
tiempo = 0;

lugar = "";
mostrar="";

var killIntervalRc;

function calcularTiempo(){
  if(iniciar==0){
    tiempo = ( cantidad - posicion ) * ( 60000/n("velocityFlash") );

    poner = `${posicion+1}/${cantidad} - ${getDuration(tiempo)}`;
    $("#stats").html(poner);

  }
}

var kill6;
var strToCopy="";
var cadenaBak=[],cadenaBak1=[];
var cantidadBak=0,cantidadBak1=0;


function init(x){

  if(iniciar==1){
    var limpia = "";
    resultados = "";
    cantidadPalabras = 0;
    repeatWW=n("repeat-w");
    myDb=n("database");

    str = $("#input1").val();


    limpia = str.split("\n").join(" ");
    limpia = limpia.split("\t").join(" ");
    limpia = limpia.split("\r").join(" ");
    limpia = limpia.split(",").join(" ");
    limpia = limpia.split(".").join(" ");
    limpia = limpia.split(")").join(" ");
    limpia = limpia.split("(").join(" ");
    limpia = limpia.split(";").join(" ");
    limpia = limpia.split("-").join(" ");

    limpia = limpia.split("   ").join(" ");
    limpia = limpia.split("  ").join(" ");

    str = limpia;
    

    cadena=str.split(" ");
    cantidad=cadena.length;
    _i=0;

    cadenaBak=_.extend(cadena);
    cantidadBak=cantidad;

   
      cadena2=[];

      for(i=0;i<cantidad;i++){
        str=cadena[i];

        if(str.length>=12){
          middle = Math.ceil(str.length / 2);
          s1 = str.slice(0, middle);
          s2 = str.slice(middle);
          cadena2[_i]=s1; _i++;
          cadena2[_i]="-"+s2; _i++;

        }else{

          cadena2[_i]=str; _i++;

        }
      }

    cadenaBak1=_.extend(cadena2);
    cantidadBak1=cadena2.length;

    if(wordsByFlash==1){
      cadena=_.extend(cadena2);
      cantidad=cadena.length;

    }
   
    posicion = 0;

    console.log(cadena)
    console.log(repeatWW)

    collision=n("collision");
    
    
    strToCopy=cadena.join(" ");
    console.log(cadena)
    cadena.push(" ");
    cantidad=cadena.length;

    loopBuffer=n("loop-buffer");
    repeatQ=n("repeat-q");
    console.log(repeatQ);
    bRepetir=1;
    nextRepeat=loopBuffer;
    repeatCount=0;
    gotoPrev=0;

    if(myExperiment==8){
      clearInterval(kill6);

      kill6=setInterval(function(){

        maxChange=_.random(0,10);
        $("#left-screen").css("padding-left",maxChange+"px");
        $("#right-screen").css("padding-right",maxChange+"px");
        $("#left-screen").css("padding-top",maxChange+"px");
        $("#right-screen").css("padding-top",maxChange+"px");

        $("#center-screen").css("padding-left",maxChange+"px");
        $("#center-screen").css("padding-top",maxChange+"px");

        /*
        $("#up-screen").html("");
        $("#down-screen").html("");
        $("#center-screen").html("");

        $("#left-up-screen").html("");
        $("#right-up-screen").html("");
        $("#left-down-screen").html("");
        $("#right-down-screen").html("");*/



      },1);
    }

    /*
    if(bCW){
      for(i=0;i<cadena.length;i++){
        if(cadena[i].length>6){
          cadena[i]=cadena[i].substr(0, 6);
          console.log(cadena[i]);
        }
      }
    }*/

    //console.log(arrayRandomWord);
    bLugar=1;

    iniciar=0;

    calcularTiempo();

    contadorPalabras=0;



  }//end iniciar


  clearTimeout(killIntervalRc);


  if(myExperiment==4 || myExperiment==5){
    bColors=0;
    wordsByFlash=4;
  } 
  if(myExperiment==6 || myExperiment==7 ){
    bColors=0;
    wordsByFlash=2;
  } 
  
  if(wordsByFlash==1){
    mostrar = cadena[posicion];

  }

  if(contadorPalabras==n("my-limit")) contadorPalabras=0;

  word_length=mostrar.length;
  my_word=mostrar;

  if(wordsByFlash==2){
    mostrar = cadena[posicion] + "&nbsp;" + cadena[posicion+1] ;

  }

  if(wordsByFlash==3){
    mostrar = cadena[posicion] + "&nbsp;" + cadena[posicion+1] + "&nbsp;" + cadena[posicion+2] ;

  }

  if(wordsByFlash==4){
    mostrar = cadena[posicion] + "&nbsp;" + cadena[posicion+1] + "&nbsp;" + cadena[posicion+2] + "&nbsp;" + cadena[posicion+3] ;

  }
  
  if(wordsByFlash==5){
    mostrar = cadena[posicion] + "&nbsp;" + cadena[posicion+1] + "&nbsp;" + cadena[posicion+2] + "&nbsp;" + cadena[posicion+3] + "&nbsp;" + cadena[posicion+4];

  }

  if(wordsByFlash==6){
    mostrar = cadena[posicion] + "&nbsp;" + cadena[posicion+1] + "&nbsp;" + cadena[posicion+2] + "&nbsp;" + cadena[posicion+3] + "&nbsp;" + cadena[posicion+4] + "&nbsp;" + cadena[posicion+5];

  }

  if(wordsByFlash==7){
    mostrar = cadena[posicion] + "&nbsp;" + cadena[posicion+1] + "&nbsp;" + cadena[posicion+2] + "&nbsp;" + cadena[posicion+3] + "&nbsp;" + cadena[posicion+4] + "&nbsp;" + cadena[posicion+5] + "&nbsp;" + cadena[posicion+6];

  }
  //console.log(cadena);

  bLugar=!bLugar;

  $("#left-screen").html("");
  $("#right-screen").html("");
  $("#up-screen").html("");
  $("#down-screen").html("");
  $("#center-screen").html("");

  $("#left-up-screen").html("");
  $("#right-up-screen").html("");
  $("#left-down-screen").html("");
  $("#right-down-screen").html("");

  if(readingMode==1){
  

    if(bLugar){

      lugar="right-screen";
      $("#left-screen").html("");

    }else{
      lugar="left-screen";
      $("#right-screen").html("");

    }

  }

  if(readingMode==2){

    

    if(bLugar){

      lugar="down-screen";
      $("#up-screen").html("");

    }else{
      lugar="up-screen";
      $("#down-screen").html("");

    }

  }

  if(readingMode==3){

    if(circleFase==0){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==2){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==4){


    if(circleFase==2){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==0){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==5){

    _circleFase=circleFase;

    for(;;){

      circleFase=_.random(0,3);

      if(circleFase!=_circleFase)
        break;
    }

    if(circleFase==2){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==0){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
  

  }

  if(readingMode==6){
    $("#left-screen").html("");
    $("#right-screen").html("");
    $("#up-screen").html("");
    $("#down-screen").html("");
    $("#center-screen").html("");

    lugar="center-screen";

  }

  if(readingMode==7){


    if(circleFase==2){
      lugar="left-down-screen";
    }

    if(circleFase==1){
      lugar="right-up-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="right-down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==8){


    if(circleFase==2){
      lugar="right-up-screen";
    }

    if(circleFase==1){
      lugar="right-down-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="left-down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==9){

    _circleFase=circleFase;

    for(;;){

      circleFase=_.random(0,3);

      if(circleFase!=_circleFase)
        break;
    }


    if(circleFase==2){
      lugar="right-up-screen";
    }

    if(circleFase==1){
      lugar="right-down-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="left-down-screen";
    
    }
    
    /*
    circleFase++;
    if(circleFase==4)
      circleFase=0;*/

  }

  //console.log(readingMode);

  /*fontSize=30;

  if(wordsByFlash>4)
    fontSize=24;*/

  transform="";

  if(myTransformation==2){
    
    transform="transform:rotateX(180deg);";
    
  }
  if(myTransformation==3){
    transform="transform:rotateY(180deg);";
          
  }
  /*
  if(myTransformation==4){
    transform="transform:rotateX(180deg) ";
    transform+="transform:rotateY(180deg);";
  


  }*/
  if(myTransformation==4){

    if(bLugar){

      //lugar="right-screen";
      //$("#left-screen").html("");
      transform="transform:skewY(30deg);"

    }else{
      //lugar="left-screen";
      //$("#right-screen").html("");
      transform="transform:skewY(-30deg);"

    }
    
    
          
  }

  if(myTransformation==5){
    
    transform="transform:skewY("+_.random(-40,40)+"deg);"
          
  }

  //genero la impresion
  txtLength=0;

  emo="";

  if(myExperiment==9){
    letras_emo="abcdefghilmnopqrstuvy".split("");
    rnd=_.random(0,letras_emo.length-1);
    cara=letras_emo[rnd];

    if(cara=="a" || cara=="e"  || cara=="n" || cara=="o"  || cara=="r"  || cara=="s")
      cara+=_.random(1,4);

    poner_1=`<img src="emociones/${cara}.gif" width="74" height="100">`;
    emo=`<center>${poner_1}</center><br>`;


  }

  if(myExperiment==10){
    a_1=["female","male"];
    rnd=_.random(1,155);
    rnd1=_.random(0,1);
    sexo=a_1[rnd1];

    poner_1=`<img src="faces/${sexo}/${rnd}.png" width="74" height="100">`;
    emo=`<center>${poner_1}</center><br>`;


  }
  
  if(bColors){

    if(bRc){

      

      killIntervalRc=setInterval(function(){

        poneme="";
        for(i=0;i<mostrar.length;i++){

          

          if(mostrar[i]==" "){
            poneme += `<span style="color: black;">&nbsp;</span>`;

          }else{
            poneme += `${emo}<span style="color: ${random_color('rgb')}; text-shadow: 1px 1px ${random_color('rgb')}; font-size: ${fontSize}px;">${mostrar[i]}</span>`;

          }

          
        }

        $("#"+lugar).html(`<div style="${transform}">`+poneme+"</div>");


      },10);

    }else{
      poneme="";
      for(i=0;i<mostrar.length;i++){

        if(mostrar[i]==" "){
          poneme += `<span style="color: black;">&nbsp;</span>`;

        }else{
          poneme += `<span style="color: ${abc1[mostrar[i]]}; text-shadow: 1px 1px gray;  font-size: ${fontSize}px;">${mostrar[i]}</span>`;

        }

        
      }

      $("#"+lugar).html(`${emo}<div style="${transform}">`+poneme+"</div>");


    }

  }else{
    if(myExperiment==4 || myExperiment==5 || myExperiment==6 || myExperiment==7){


      if(myExperiment==4){
        $("#left-up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#right-up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        $("#left-down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+2] +`</span></div>`);
        $("#right-down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+3] +`</span></div>`);

      }
      if(myExperiment==5){
        $("#left-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        $("#right-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+2] +`</span></div>`);
        $("#down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+3] +`</span></div>`);

      }
      if(myExperiment==6){
        $("#left-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#right-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        

      }
      if(myExperiment==7){
        $("#up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
      }

      


    }else{//myExperiment

      if(myExperiment==3){
        _p="";
        for(kk=0;kk<mostrar.length;kk++){

          if(kk==0 || mostrar[kk+1]==" " || kk==mostrar.length-1){
            _p+=`<span class="t-m">${mostrar[kk]}</span>`;
          }
          else
          {
            _p+=`<span class="t-e">${mostrar[kk]}</span>`;
          }

        }
        mostrar = _p;
      }
      ocul="";
      if(bOcultar){
        ocul=`<div style="position: absolute; bottom: 0px; height:16px; width: 120%; background-color: black;">&nbsp;</div>`;
        // if(_.random(0,1)) ocul=`<div style="position: absolute; top: 0px; height:20px; width: 120%; background-color: black;">&nbsp;</div>`;

        
      }

      $("#"+lugar).html(`<div style="${transform}">${ocul}<span style="font-size: ${fontSize}px;">`+mostrar+`</span></div>`);

      if(myExperiment==3){
        $(".t-e").css("color","black");
        setTimeout(function(){ $(".t-e").css("color",currentColor); }, 50 );

      }
  
    }//else myExperiment
    txtLength=mostrar.length;
    

    /*

    var Hello = React.createClass({
      displayName: 'Hello',
      render: function() {
        return React.createElement("div", null, "", this.props.name);
      }
    });

    ReactDOM.render(
      React.createElement(Hello, {name: mostrar}),
      document.getElementById(lugar)
    );
    */

  }
  

  posicion+=wordsByFlash;

  if(posicion>=nextRepeat){

    // console.log("hola: "+ "posicion:"+ posicion + " repeatQ "  + repeatQ);



    repeatCount++;

    if(repeatQ!=1){

      if(repeatCount==repeatQ){

        repeatCount=0;
        gotoPrev=posicion;
        nextRepeat+=loopBuffer;
      }else{
        posicion=gotoPrev;

      }
    }//repeatQ!=
  }//posicion%

  if(posicion>=cantidad){
    if(bLoop){ 
      stopFlash();
      $("#play-btn").click();
      return;
      
      
    }else{
      stopFlash();
      return;

    } 
    

  } 

  calcularTiempo();

  velocity=n("velocityFlash");

    _n=velocity;

    if(contadorPalabras>=3)
      _n = _n + _n * 0.2;
    if(contadorPalabras>=6 && contadorPalabras<9)
      _n = _n + _n * 0.4;
    if(contadorPalabras>=9 && contadorPalabras<12)
      _n = _n + _n * 0.6;
    if(contadorPalabras>=12 && contadorPalabras<14)
      _n = _n  + _n * 0.8;

    velocity=_n;

    $("#current-vel").html(parseInt(_n));

  if( (word_length>=3 && my_word.search("-")==-1) || wordsByFlash>1 ) contadorPalabras++; 


  if(myExperiment==2){
    if(txtLength>30){
      velocity=250;
      console.log("retardo")
    }
  }


  killInterval=setTimeout(function(){ init() },  ( 60000/ velocity ) * wordsByFlash   );

  calcularTiempo();

  //console.log( ( 60000/n("velocityFlash") ) * wordsByFlash );

  
  
}
  

function stopFlash(){
  

  if(bPlay){
    bPlay=0;
    $("#play-btn").val("start");

    
    
  }
  $("#wordsByFlash").prop('disabled', false);

  $("#left-screen").html("Infinity");
  $("#right-screen").html("Infinity");
  $("#up-screen").html(":)");
  $("#down-screen").html(":)");

  $("#center-screen").html("");

  $("#left-up-screen").html("");
  $("#right-up-screen").html("");
  $("#left-down-screen").html("");
  $("#right-down-screen").html("");

  iniciar=1;
  clearTimeout(killInterval);
  clearTimeout(killIntervalRc);
  $("#stats").html("");

}


var getDuration = function(millis){
  var dur = {};
  var units = [
      {label:"millis",    mod:1000},
      {label:"seconds",   mod:60},
      {label:"minutes",   mod:60},
      {label:"hours",     mod:24},
      {label:"days",      mod:31}
  ];
  // calculate the individual unit values...
  units.forEach(function(u){
      millis = (millis - (dur[u.label] = (millis % u.mod))) / u.mod;
  });
  // convert object to a string representation...
  var nonZero = function(u){ return dur[u.label]; };
  dur.toString = function(){
      return units
          .reverse()
          .filter(nonZero)
          .map(function(u){
              return dur[u.label] + " " + (dur[u.label]==1?u.label.slice(0,-1):u.label);
          })
          .join(', ');
  };

  /*
  console.log(dur);
  x = dur.split(",");
  poner = "";
  for(i=0;i<x.length;i++){
    if(x[i].indexOf("millis")!=1){
      continue;
    }
    poner += x[i];

  }*/

  //return dur;
  return dur.hours+":"+dur.minutes+":"+dur.seconds;//+":"+dur.millis;
};



var abc1  =  {

  'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(255,152,213)','F' : 'rgb(255,152,213)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(255,255,150)','J' : 'rgb(255,255,150)','k' : 'rgb(55,19,112) ','K' : 'rgb(55,19,112) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(185,185,185)','Q' : 'rgb(185,185,185)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(169,34,0)','W' : 'rgb(169,34,0)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'   
    
};

function quitaAcentos(str){ 
  for (var i=0;i<str.length;i++){ 
  //Sustituye "á é í ó ú" 
    if (str.charAt(i)=="á") str = str.replace(/á/,"a"); 
    if (str.charAt(i)=="é") str = str.replace(/é/,"e"); 
    if (str.charAt(i)=="í") str = str.replace(/í/,"i"); 
    if (str.charAt(i)=="ó") str = str.replace(/ó/,"o"); 
    if (str.charAt(i)=="ú") str = str.replace(/ú/,"u"); 
  } 
  return str; 
} 

//$("#down-screen")

myTransformation=1;

function cambiarTransformation(x){
  myTransformation=parseInt(x);
}



<? if(isset($_GET["en"])){ ?>  

textoEn = `Owl Post
Harry Potter was a highly unusual boy in many ways. For one thing, he hated the summer holidays more than any other time of year. For another, he really wanted to do his homework but was forced to do it in secret, in the dead of night. And he also happened to be a wizard.
It was nearly midnight, and he was lying on his stomach in bed, the blankets drawn right over his head like a tent, a flashlight in one hand and a large leather-bound book (A History of Magic by Bathilda Bagshot) propped open against the pillow. Harry moved the tip of his eagle-feather quill down the page, frowning as he looked for something that would help him write his essay, “Witch Burning in the Fourteenth Century Was Completely Pointless—discuss.”
The quill paused at the top of a likely-looking paragraph. Harry pushed his round glasses up the bridge of his nose, moved his flashlight closer to the book, and read:
Non-magic people (more commonly known as Muggles) were particularly afraid of magic in medieval times, but not very good at recognizing it. On the rare occasion that they did catch a real witch or wizard, burning had no effect whatsoever. The witch or wizard would perform a basic Flame Freezing Charm and then pretend to shriek with pain while enjoying a gentle, tickling sensation. Indeed, Wendelin the Weird enjoyed being burned so much that she allowed herself to be caught no less than forty-seven times in various disguises.
Harry put his quill between his teeth and reached underneath his pillow for his ink bottle and a roll of parchment. Slowly and very carefully he unscrewed the ink bottle, dipped his quill into it, and began to write, pausing every now and then to listen, because if any of the Dursleys heard the scratching of his quill on their way to the bathroom, he’d probably find himself locked in the cupboard under the stairs for the rest of the summer.
The Dursley family of number four, Privet Drive, was the reason that Harry never enjoyed his summer holidays. Uncle Vernon, Aunt Petunia, and their son, Dudley, were Harry’s only living relatives. They were Muggles, and they had a very medieval attitude toward magic. Harry’s dead parents, who had been a witch and wizard themselves, were never mentioned under the Dursleys’ roof. For years, Aunt Petunia and Uncle Vernon had hoped that if they kept Harry as downtrodden as possible, they would be able to squash the magic out of him. To their fury, they had been unsuccessful. These days they lived in terror of anyone finding out that Harry had spent most of the last two years at Hogwarts School of Witchcraft and Wizardry. The most they could do, however, was to lock away Harry’s spellbooks, wand, cauldron, and broomstick at the start of the summer break, and forbid him to talk to the neighbors.
This separation from his spellbooks had been a real problem for Harry, because his teachers at Hogwarts had given him a lot of holiday work. One of the essays, a particularly nasty one about shrinking potions, was for Harry’s least favorite teacher, Professor Snape, who would be delighted to have an excuse to give Harry detention for a month. Harry had therefore seized his chance in the first week of the holidays. While Uncle Vernon, Aunt Petunia, and Dudley had gone out into the front garden to admire Uncle Vernon’s new company car (in very loud voices, so that the rest of the street would notice it too), Harry had crept downstairs, picked the lock on the cupboard under the stairs, grabbed some of his books, and hidden them in his bedroom. As long as he didn’t leave spots of ink on the sheets, the Dursleys need never know that he was studying magic by night.
Harry was particularly keen to avoid trouble with his aunt and uncle at the moment, as they were already in an especially bad mood with him, all because he’d received a telephone call from a fellow wizard one week into the school vacation.
Ron Weasley, who was one of Harry’s best friends at Hogwarts, came from a whole family of wizards. This meant that he knew a lot of things Harry didn’t, but had never used a telephone before. Most unluckily it had been Uncle Vernon who had answered the call.
“Vernon Dursley speaking.”
Harry, who happened to be in the room at the time, froze as he heard Ron’s voice answer.
“HELLO? HELLO? CAN YOU HEAR ME? I—WANT—TO—TALK—​TO—HARRY—POTTER!”
Ron was yelling so loudly that Uncle Vernon jumped and held the receiver a foot away from his ear, staring at it with an expression of mingled fury and alarm.
“WHO IS THIS?” he roared in the direction of the mouthpiece. “WHO ARE YOU?”
“RON—WEASLEY!” Ron bellowed back, as though he and Uncle Vernon were speaking from opposite ends of a football field. “I’M—A—FRIEND—​OF—HARRY’S—FROM—SCHOOL—”
Uncle Vernon’s small eyes swiveled around to Harry, who was rooted to the spot.
“THERE IS NO HARRY POTTER HERE!” he roared, now holding the receiver at arm’s length, as though frightened it might explode. “I DON’T KNOW WHAT SCHOOL YOU’RE TALKING ABOUT! NEVER CONTACT ME AGAIN! DON’T YOU COME NEAR MY FAMILY!”
And he threw the receiver back onto the telephone as if dropping a poisonous spider.
The fight that had followed had been one of the worst ever.
“HOW DARE YOU GIVE THIS NUMBER TO PEOPLE LIKE—PEOPLE LIKE YOU!” Uncle Vernon had roared, spraying Harry with spit.
Ron obviously realized that he’d gotten Harry into trouble, because he hadn’t called again. Harry’s other best friend from Hogwarts, Hermione Granger, hadn’t been in touch either. Harry suspected that Ron had warned Hermione not to call, which was a pity, because Hermione, the cleverest witch in Harry’s year, had Muggle parents, knew perfectly well how to use a telephone, and would probably have had enough sense not to say that she went to Hogwarts.
So Harry had had no word from any of his wizarding friends for five long weeks, and this summer was turning out to be almost as bad as the last one. There was just one very small improvement—after swearing that he wouldn’t use her to send letters to any of his friends, Harry had been allowed to let his owl, Hedwig, out at night. Uncle Vernon had given in because of the racket Hedwig made if she was locked in her cage all the time.
Harry finished writing about Wendelin the Weird and paused to listen again. The silence in the dark house was broken only by the distant, grunting snores of his enormous cousin, Dudley. It must be very late, Harry thought. His eyes were itching with tiredness. Perhaps he’d finish this essay tomorrow night . . .
He replaced the top of the ink bottle; pulled an old pillowcase from under his bed; put the flashlight, A History of Magic, his essay, quill, and ink inside it; got out of bed; and hid the lot under a loose floorboard under his bed. Then he stood up, stretched, and checked the time on the luminous alarm clock on his bedside table.
It was one o’clock in the morning. Harry’s stomach gave a funny jolt. He had been thirteen years old, without realizing it, for a whole hour.
Yet another unusual thing about Harry was how little he looked forward to his birthdays. He had never received a birthday card in his life. The Dursleys had completely ignored his last two birthdays, and he had no reason to suppose they would remember this one.
Harry walked across the dark room, past Hedwig’s large, empty cage, to the open window. He leaned on the sill, the cool night air pleasant on his face after a long time under the blankets.`;

$("#input1").val(textoEn);


<? } ?>

/*
const e = React.createElement;

React.render(
  e('div', null, 'Hello World'),
  document.getElementById('root')
);

*/

/*
var Hello = React.createClass({
  displayName: 'Hello',
  render: function() {
    return React.createElement("div", null, "Hello ", this.props.name);
  }
});

ReactDOM.render(
  React.createElement(Hello, {name: "World"}),
  document.getElementById('up-screen')
);
*/

currentColor="green";

function cambiarColores(x){
  if(x==1){ bColors=0; currentColor="green";  }
  if(x==2){ bColors=0; currentColor="blue"; }
  if(x==3){ bColors=0; currentColor="gray"; }
  if(x==4){ bColors=1; bRc=0; }
  if(x==5){ if(bColors==0){ bColors=1; } bRc=1; clearTimeout(killIntervalRc); }
  $("body").css("color",currentColor);
}

<? if (isset($_GET["skew"])){ ?> window.onload = function () { $("#velocityFlash").val("200"); $("#transform-select").val("4"); cambiarTransformation(4); play();  } <? } ?>

<? $vel=300; 
  if(isset($_GET["vel"])){ $vel=intval($_GET["vel"]); ?>


  $("#velocityFlash").val("<?=$vel?>");

  calcularTiempo();



<? } ?>

<?

if(isset($_GET[exp])){

  if($_GET[exp]==8){  ?> $("#readingMode").val("6"); readingMode=n('readingMode'); init(); <? } 
}
?>

var contadorRnd;
function getRndTxt(){
    contadorRnd++;
    if(contadorRnd>12)
      return;

    $.ajax({url: "http://leerencolores.appspot.com/multiReader2?rnd=1&libro=aleatory&cPage=aleatory", success: function(result){
        $("#input1").val(result);
       // mode=1; bPrev=0; bNext=0;  play();
       stopText();
    }});
}

cambiarColores(1);


_ww=$(window).width();
if(_ww<=1000){


  // $("#control").css("height","100px;")
  $("#control").css("zoom","3.1")
  /*$("#center-screen").css("zoom","3")*/
  fontSize=80;
  // $("#center-screen").css("margin-bottom","100px;")
  $("#control").css("z-index","1000")
  $("#screen").css("height","2000px")

}

$("#velocityFlash").val("200");
calcularTiempo();

</script>

</body>
</html>