<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    
	<link rel="stylesheet" href="estilos.css">
    <script src="https://cdn03.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?3.3.28889" type="text/javascript"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.28889" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1636248732066" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;

   JotForm.setConditions([{"action":[{"id":"action_1560872680119","visibility":"Hide","isError":false,"field":"41"}],"id":"1560872704784","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1560872680119","field":"12","operator":"notEquals","value":"Otro: Especifíque","isError":false}],"type":"field"},{"action":[{"id":"action_1559113698616","visibility":"Hide","isError":false,"field":"37"},{"id":"action_1559113681109","visibility":"Hide","isError":false,"field":"36"}],"id":"1559113713974","index":"1","link":"Any","priority":"1","terms":[{"id":"term_1559113681109","field":"32","operator":"isEmpty","value":"","isError":false}],"type":"field"},{"action":[{"id":"action_1559113438733","visibility":"Hide","isError":false,"field":"31"},{"id":"action_1559113427750","visibility":"Hide","isError":false,"field":"29"},{"id":"action_1559113388339","visibility":"Hide","isError":false,"field":"30"}],"id":"1559113449190","index":"2","link":"Any","priority":"2","terms":[{"id":"term_1559113388339","field":"28","operator":"isEmpty","value":"","isError":false}],"type":"field"},{"action":[{"id":"action_0_1559113356051","visibility":"Hide","isError":false,"field":"37"},{"id":"action_1_1559113356051","visibility":"Show","isError":false,"field":"36"}],"id":"1559111075255","index":"3","link":"Any","priority":"3","terms":[{"id":"term_0_1559113356051","field":"32","operator":"equals","value":"No","isError":false}],"type":"field"},{"action":[{"id":"action_0_1559113366528","visibility":"Show","isError":false,"field":"37"},{"id":"action_1_1559113366528","visibility":"Hide","isError":false,"field":"36"}],"id":"1559110991365","index":"4","link":"Any","priority":"4","terms":[{"id":"term_0_1559113366528","field":"32","operator":"equals","value":"Si","isError":false}],"type":"field"},{"action":[{"id":"action_0_1559113322218","visibility":"Show","isError":false,"field":"31"},{"id":"action_1_1559113322218","visibility":"Show","isError":false,"field":"30"},{"id":"action_2_1559113322218","visibility":"Hide","isError":false,"field":"29"}],"id":"1559109785127","index":"5","link":"Any","priority":"5","terms":[{"id":"term_0_1559113322218","field":"28","operator":"equals","value":"5","isError":false}],"type":"field"},{"action":[{"id":"action_0_1559113285160","visibility":"Show","isError":false,"field":"29"},{"id":"action_1_1559113285160","isError":false,"visibility":"Show","field":"30"},{"id":"action_2_1559113285160","visibility":"Hide","isError":false,"field":"31"}],"id":"1559109667131","index":"6","link":"Any","priority":"6","terms":[{"id":"term_0_1559113285159","field":"28","operator":"lessThan","value":"5","isError":false}],"type":"field"},{"action":[{"id":"action_0_1559113134474","skipTo":"page-3","isError":false}],"id":"1559107501660","index":"7","link":"All","priority":"7","terms":[{"id":"term_0_1559113134474","field":"12","operator":"isFilled","value":"","isError":false},{"id":"term_1_1559113134474","field":"7","operator":"isFilled","value":"","isError":false}],"type":"page"},{"action":[{"id":"action_1559107064411","skipTo":"page-2","isError":false}],"id":"1559107100114","index":"8","link":"Any","priority":"8","terms":[{"id":"term_1559107064411","field":"4","operator":"equals","value":"Pobre","isError":false}],"type":"page"}]);	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_41').setAttribute('tabindex',0);
      JotForm.alterTexts({"alphabetic":"Este campo solo puede contener letras.","alphanumeric":"Este campo solo puede contener letras y números.","ccInvalidCVC":"El número CVC no es válido.","ccInvalidExpireDate":"La fecha de expiración no es válida","ccInvalidNumber":"El número de su tarjeta de crédito no es válido.","ccMissingDetails":"Por favor rellene los datos de su Tarjeta de Crédito","ccMissingDonation":"Ingresa por favor una cantidad a donar","ccMissingProduct":"Por favor seleccione al menos un producto.","characterLimitError":"Demasiados caracteres. El límite es","confirmClearForm":"¿Está seguro que desea limpiar el formulario?","confirmEmail":"El correo electrónico no coincide","currency":"Este campo sólo puede contener valores de moneda.","cyrillic":"Este campo solo puede contener caracteres cirílicos.","dateInvalid":"Esta fecha no es valida. El formato de fecha es {format}","dateLimited":"Esta fecha no está disponible.","disallowDecimals":"Por favor, introduzca un número entero.","email":"Introduzca una dirección e-mail válida","fillMask":"El valor de este campo debe llenar la mascara","freeEmailError":"No se permiten cuentas de correo gratuitas ","generalError":"Existen errores en el formulario, por favor corríjalos antes de continuar.","generalPageError":"Hay errores en esta página. Por favor, corríjalos antes de continuar.","gradingScoreError":"El puntaje total debería ser sólo \"menos que\" o \"igual que\"","incompleteFields":"Existen campos requeridos incompletos. Por favor complételos.","lessThan":"Tu puntuación debería ser menor o igual que","maxDigitsError":"El máximo de dígitos permitido es","multipleFileUploads_emptyError":"El fichero {file} está vacío; por favor, selecciona de nuevo los ficheros sin él.","multipleFileUploads_fileLimitError":"Solo {fileLimit} carga de archivos permitida.","multipleFileUploads_minSizeError":"{file} is demasiado pequeño, el tamaño mínimo de fichero es: {minSizeLimit}.","multipleFileUploads_onLeave":"Se están cargando los ficheros, si cierras ahora, se cancelará dicha carga.","multipleFileUploads_sizeError":"{file} es demasiado grande; el tamaño del archivo no debe superar los {sizeLimit}.","multipleFileUploads_typeError":"El fichero {file} posee una extensión no permitida. Sólo están permitidas las extensiones {extensions}.","numeric":"Este campo sólo admite valores numéricos.","pastDatesDisallowed":"La fecha debe ser futura","required":"Campo requerido.","requireEveryCell":"Se requieren todas las celdas.","requireEveryRow":"Todas las filas son obligatorias.","requireOne":"Al menos un campo requerido.","uploadExtensions":"Solo puede subir los siguientes archivos:","uploadFilesize":"Tamaño del archivo no puede ser mayor que:","uploadFilesizemin":"Tamañao de archivo no puede ser menos de:","url":"Este campo solo contiene una URL válida.","wordLimitError":"Demasiadas palabras. El límite es","wordMinLimitError":"Muy pocas palabras. El mínimo es"});
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"encuestaDe","qid":"1","text":"Encuesta de Satisfaccion para Profesores","type":"control_head"},{"name":"submit2","qid":"2","text":"Enviar","type":"control_button"},{"name":"clicPara","qid":"3","text":"Los resultados de esta evaluacion son muy importantes para nosotros.","type":"control_text"},{"name":"estasEnsenando4","qid":"4","text":"¿Estas ensenando de forma remota?","type":"control_radio"},null,null,{"name":"fechaEn","qid":"7","text":"Fecha en la que esta haciendo este formulario  ","type":"control_widget"},null,null,null,null,{"name":"indiqueEl12","qid":"12","text":"Indique el curso\u002Fmateria que imparte","type":"control_dropdown"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"ingreseSu","qid":"39","text":"Ingrese su nombre ","type":"control_fullname"},{"name":"tags","qid":"40","text":"Tags","type":"control_checkbox"},{"name":"indiqueEl41","qid":"41","text":"Indique el curso aqui (si no aparece en la lista)","type":"control_textbox"},{"description":"","name":"comoEsta","qid":"42","text":"¿Como esta impartiendo nuestra escuela el aprendizaje a distancia?","type":"control_radio"},{"description":"","name":"tienesSuficiente","qid":"43","text":"¿Tienes suficiente tiempo para completar el trabajo que te asignamos en el plantel?","type":"control_radio"},{"description":"","name":"tienesInternet","qid":"44","text":"¿Tienes internet de alta velocidad en casa?","type":"control_radio"},{"description":"","name":"queDispositivo","qid":"45","text":"¿Que dispositivo usas para el aprendizaje a distancia?","type":"control_radio"},{"description":"","name":"queOpinas46","qid":"46","text":"¿Que opinas en general sobre la educacion a distancia?","type":"control_radio"},{"description":"","name":"queTan","qid":"47","text":"¿Que tan util hemos sido al ofrecerte los recursos para ensenar desde casa?","type":"control_radio"},{"description":"","name":"tusAlumnos","qid":"48","text":"¿Tus alumnos aprenden tanto como antes durante el aprendizaje remoto?","type":"control_radio"},{"description":"","name":"queTipo49","qid":"49","text":"¿Que tipo de respuesta has obtenido de tus alumnos?","type":"control_radio"},{"description":"","name":"queImportancia","qid":"50","text":"¿Que importancia tiene el papel de la tecnologia en el aprendizaje a distancia?","type":"control_radio"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"encuestaDe","qid":"1","text":"Encuesta de Satisfaccion para Profesores","type":"control_head"},{"name":"submit2","qid":"2","text":"Enviar","type":"control_button"},{"name":"clicPara","qid":"3","text":"Los resultados de esta evaluacion son muy importantes para nosotros.","type":"control_text"},{"name":"estasEnsenando4","qid":"4","text":"¿Estas ensenando de forma remota?","type":"control_radio"},null,null,{"name":"fechaEn","qid":"7","text":"Fecha en la que esta haciendo este formulario  ","type":"control_widget"},null,null,null,null,{"name":"indiqueEl12","qid":"12","text":"Indique el curso\u002Fmateria que imparte","type":"control_dropdown"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"ingreseSu","qid":"39","text":"Ingrese su nombre ","type":"control_fullname"},{"name":"tags","qid":"40","text":"Tags","type":"control_checkbox"},{"name":"indiqueEl41","qid":"41","text":"Indique el curso aqui (si no aparece en la lista)","type":"control_textbox"},{"description":"","name":"comoEsta","qid":"42","text":"¿Como esta impartiendo nuestra escuela el aprendizaje a distancia?","type":"control_radio"},{"description":"","name":"tienesSuficiente","qid":"43","text":"¿Tienes suficiente tiempo para completar el trabajo que te asignamos en el plantel?","type":"control_radio"},{"description":"","name":"tienesInternet","qid":"44","text":"¿Tienes internet de alta velocidad en casa?","type":"control_radio"},{"description":"","name":"queDispositivo","qid":"45","text":"¿Que dispositivo usas para el aprendizaje a distancia?","type":"control_radio"},{"description":"","name":"queOpinas46","qid":"46","text":"¿Que opinas en general sobre la educacion a distancia?","type":"control_radio"},{"description":"","name":"queTan","qid":"47","text":"¿Que tan util hemos sido al ofrecerte los recursos para ensenar desde casa?","type":"control_radio"},{"description":"","name":"tusAlumnos","qid":"48","text":"¿Tus alumnos aprenden tanto como antes durante el aprendizaje remoto?","type":"control_radio"},{"description":"","name":"queTipo49","qid":"49","text":"¿Que tipo de respuesta has obtenido de tus alumnos?","type":"control_radio"},{"description":"","name":"queImportancia","qid":"50","text":"¿Que importancia tiene el papel de la tecnologia en el aprendizaje a distancia?","type":"control_radio"}]);}, 20); 
</script>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.28889" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.28889" />
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.28889" />
<style type="text/css">
    .form-label-left{
        width:86px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:86px;
    }
    .form-all{
        width:690px;
        color:#7A6A53 !important;
        font-family:'Amaranth';
        font-size:18px;
    }
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
@import "https://fonts.googleapis.com/css?family=Amaranth:light,lightitalic,normal,italic,bold,bolditalic";
.form-all:after {
  content: "";
  display: table;
  clear: both;
}
.form-all {
  font-family: "Amaranth", sans-serif;
}
.form-all {
  width: 690px;
}
.form-label-left,
.form-label-right {
  width: 86px;
}
.form-label {
  white-space: normal;
}
.form-label.form-label-auto {
  display: block;
  float: none;
  word-break: break-word;
  text-align: left;
}
.form-label-left {
  display: inline-block;
  white-space: normal;
  float: left;
  text-align: left;
}
.form-label-right {
  display: inline-block;
  white-space: normal;
  float: left;
  text-align: right;
}
.form-label-top {
  white-space: normal;
  display: block;
  float: none;
  text-align: left;
}
.form-radio-item label:before {
  top: 0;
}
.form-all {
  font-size: 18px;
}
.form-label {
  font-weight: bold;
}
.form-checkbox-item label,
.form-radio-item label {
  font-weight: normal;
}
.supernova {
  background-color: #d9ceb2;
  background-color: #948c75;
}
.supernova body {
  background-color: transparent;
}
/*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border: 1px solid #79725d;
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
  }
}
/* | */
/* | */
@media screen and (max-width: 480px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 767px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 689px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 768px) {
  .jotform-form {
    padding: 60px 0;
  }
}
/* | */
/* | */
@media screen and (max-width: 689px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #d9ceb2;
  border: 1px solid transparent;
}
.form-header-group {
  border-color: #c8b890;
}
.form-matrix-table tr {
  border-color: #c8b890;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #d1c3a1;
}
.form-all {
  color: #7a6a53;
}
.form-header-group .form-header {
  color: #7a6a53;
}
.form-header-group .form-subHeader {
  color: #988468;
}
.form-sub-label {
  color: #988468;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #7a6a53;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #988468;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffffe0;
}
/* omer */
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
/* omer */
[data-type="control_radio"] .form-input,
[data-type="control_checkbox"] .form-input,
[data-type="control_radio"] .form-input-wide,
[data-type="control_checkbox"] .form-input-wide {
  width: 100%;
  max-width: 200px;
}
.form-radio-item,
.form-checkbox-item {
  width: 100%;
  max-width: 200px;
  box-sizing: border-box;
}
.form-textbox.form-radio-other-input,
.form-textbox.form-checkbox-other-input {
  width: 80%;
  margin-left: 3%;
  box-sizing: border-box;
}
.form-multiple-column {
  width: 100%;
}
.form-multiple-column .form-radio-item,
.form-multiple-column .form-checkbox-item {
  width: 10%;
}
.form-multiple-column[data-columncount="1"] .form-radio-item,
.form-multiple-column[data-columncount="1"] .form-checkbox-item {
  width: 100%;
}
.form-multiple-column[data-columncount="2"] .form-radio-item,
.form-multiple-column[data-columncount="2"] .form-checkbox-item {
  width: 50%;
}
.form-multiple-column[data-columncount="3"] .form-radio-item,
.form-multiple-column[data-columncount="3"] .form-checkbox-item {
  width: 33.33333333%;
}
.form-multiple-column[data-columncount="4"] .form-radio-item,
.form-multiple-column[data-columncount="4"] .form-checkbox-item {
  width: 25%;
}
.form-multiple-column[data-columncount="5"] .form-radio-item,
.form-multiple-column[data-columncount="5"] .form-checkbox-item {
  width: 20%;
}
.form-multiple-column[data-columncount="6"] .form-radio-item,
.form-multiple-column[data-columncount="6"] .form-checkbox-item {
  width: 16.66666667%;
}
.form-multiple-column[data-columncount="7"] .form-radio-item,
.form-multiple-column[data-columncount="7"] .form-checkbox-item {
  width: 14.28571429%;
}
.form-multiple-column[data-columncount="8"] .form-radio-item,
.form-multiple-column[data-columncount="8"] .form-checkbox-item {
  width: 12.5%;
}
.form-multiple-column[data-columncount="9"] .form-radio-item,
.form-multiple-column[data-columncount="9"] .form-checkbox-item {
  width: 11.11111111%;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  box-sizing: border-box;
  left: 0;
  width: 18px;
  height: 18px;
}
.form-checkbox-item,
.form-radio-item {
  padding-left: 2px;
}
.form-checkbox-item input,
.form-radio-item input {
  margin-top: 2px;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.form-line {
  margin-top: 16px;
  margin-bottom: 16px;
}
.form-line {
  padding: 16px 60px;
}
.form-all {
  border-radius: 20px;
}
.form-section:first-child {
  border-radius: 20px 20px 0 0;
}
.form-section:last-child {
  border-radius: 0 0 20px 20px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Amaranth", sans-serif;
  font-size: 18px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Amaranth", sans-serif;
  font-size: 18px;
  font-weight: normal;
}
/*
& when ( @buttonFontType = google ) {
	@import (css) "@{buttonFontLink}";
}
*/
h2.form-header {
  line-height: 1.618em;
  font-size: 1.714em;
}
h2 ~ .form-subHeader {
  line-height: 1.5em;
  font-size: 1.071em;
}
.form-header-group {
  text-align: left;
}
.form-line {
  zoom: 1;
}
.form-line:before,
.form-line:after {
  display: table;
  content: '';
  line-height: 0;
}
.form-line:after {
  clear: both;
}
.form-captcha input,
.form-spinner input {
  width: 200px;
}
.form-textbox,
.form-textarea {
  width: 100%;
  max-width: 200px;
  box-sizing: border-box;
}
.form-input,
.form-address-table,
.form-matrix-table {
  width: 100%;
  max-width: 200px;
}
.form-radio-item,
.form-checkbox-item {
  width: 100%;
  max-width: 200px;
  box-sizing: border-box;
}
.form-textbox.form-radio-other-input,
.form-textbox.form-checkbox-other-input {
  width: 80%;
  margin-left: 3%;
  box-sizing: border-box;
}
.form-multiple-column {
  width: 100%;
}
.form-multiple-column .form-radio-item,
.form-multiple-column .form-checkbox-item {
  width: 10%;
}
.form-multiple-column[data-columncount="1"] .form-radio-item,
.form-multiple-column[data-columncount="1"] .form-checkbox-item {
  width: 100%;
}
.form-multiple-column[data-columncount="2"] .form-radio-item,
.form-multiple-column[data-columncount="2"] .form-checkbox-item {
  width: 50%;
}
.form-multiple-column[data-columncount="3"] .form-radio-item,
.form-multiple-column[data-columncount="3"] .form-checkbox-item {
  width: 33.33333333%;
}
.form-multiple-column[data-columncount="4"] .form-radio-item,
.form-multiple-column[data-columncount="4"] .form-checkbox-item {
  width: 25%;
}
.form-multiple-column[data-columncount="5"] .form-radio-item,
.form-multiple-column[data-columncount="5"] .form-checkbox-item {
  width: 20%;
}
.form-multiple-column[data-columncount="6"] .form-radio-item,
.form-multiple-column[data-columncount="6"] .form-checkbox-item {
  width: 16.66666667%;
}
.form-multiple-column[data-columncount="7"] .form-radio-item,
.form-multiple-column[data-columncount="7"] .form-checkbox-item {
  width: 14.28571429%;
}
.form-multiple-column[data-columncount="8"] .form-radio-item,
.form-multiple-column[data-columncount="8"] .form-checkbox-item {
  width: 12.5%;
}
.form-multiple-column[data-columncount="9"] .form-radio-item,
.form-multiple-column[data-columncount="9"] .form-checkbox-item {
  width: 11.11111111%;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 200px;
}
[data-type="control_fullname"] .form-sub-label-container {
  box-sizing: border-box;
  width: 48%;
}
[data-type="control_fullname"] .form-sub-label-container:first-child {
  margin-right: 4%;
}
[data-type="control_phone"] .form-sub-label-container {
  width: 62.5%;
  margin-left: 2.5%;
  margin-right: 0;
  float: left;
  position: relative;
}
[data-type="control_phone"] .form-sub-label-container:first-child {
  width: 32.5%;
  margin-right: 2.5%;
  margin-left: 0;
}
[data-type="control_phone"] .form-sub-label-container:first-child [data-component=areaCode] {
  width: 93%;
  float: left;
}
[data-type="control_phone"] .form-sub-label-container:first-child [data-component=areaCode] ~ .form-sub-label {
  display: inline-block;
}
[data-type="control_phone"] .form-sub-label-container:first-child .phone-separate {
  position: absolute;
  top: 0;
  right: -16%;
  width: 24%;
  text-align: center;
  text-indent: -4px;
}
[data-type="control_birthdate"] .form-sub-label-container {
  width: 22%;
  margin-right: 3%;
}
[data-type="control_birthdate"] .form-sub-label-container:first-child {
  width: 50%;
}
[data-type="control_birthdate"] .form-sub-label-container:last-child {
  margin-right: 0;
}
[data-type="control_birthdate"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
[data-type="control_payment"] .form-sub-label-container {
  width: auto;
}
[data-type="control_payment"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
.form-address-table td .form-dropdown {
  width: 100%;
}
.form-address-table td .form-sub-label-container {
  width: 96%;
}
.form-address-table td:last-child .form-sub-label-container {
  margin-left: 4%;
}
.form-address-table td[colspan="2"] .form-sub-label-container {
  width: 100%;
  margin: 0;
}
/*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
.form-captcha input,
.form-spinner input,
.form-error-message {
  padding: 4px 3px 2px 3px;
}
.form-header-group {
  font-family: "Amaranth", sans-serif;
}
.form-section {
  padding: 6px 6px 6px 6px;
}
.form-header-group {
  margin: 12px 36px 12px 36px;
}
.form-header-group {
  padding: 24px 0px 24px 0px;
}
.form-textbox,
.form-textarea {
  padding: 4px 3px 2px 3px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
.form-textbox,
.form-textarea {
  width: 100%;
  max-width: 200px;
  box-sizing: border-box;
}
[data-type="control_textbox"] .form-input,
[data-type="control_textarea"] .form-input,
[data-type="control_fullname"] .form-input,
[data-type="control_phone"] .form-input,
[data-type="control_datetime"] .form-input,
[data-type="control_address"] .form-input,
[data-type="control_email"] .form-input,
[data-type="control_passwordbox"] .form-input,
[data-type="control_autocomp"] .form-input,
[data-type="control_textbox"] .form-input-wide,
[data-type="control_textarea"] .form-input-wide,
[data-type="control_fullname"] .form-input-wide,
[data-type="control_phone"] .form-input-wide,
[data-type="control_datetime"] .form-input-wide,
[data-type="control_address"] .form-input-wide,
[data-type="control_email"] .form-input-wide,
[data-type="control_passwordbox"] .form-input-wide,
[data-type="control_autocomp"] .form-input-wide {
  width: 100%;
  max-width: 200px;
}
[data-type="control_fullname"] .form-sub-label-container {
  box-sizing: border-box;
  width: 48%;
  margin-right: 0;
  float: left;
}
[data-type="control_fullname"] .form-sub-label-container:first-child {
  margin-right: 4%;
}
[data-type="control_phone"] .form-sub-label-container {
  width: 62.5%;
  margin-left: 2.5%;
  margin-right: 0;
  float: left;
  position: relative;
}
[data-type="control_phone"] .form-sub-label-container:first-child {
  width: 32.5%;
  margin-right: 2.5%;
  margin-left: 0;
}
[data-type="control_phone"] .form-sub-label-container:first-child [data-component=areaCode] {
  width: 93%;
  float: left;
}
[data-type="control_phone"] .form-sub-label-container:first-child [data-component=areaCode] ~ .form-sub-label {
  display: inline-block;
}
[data-type="control_phone"] .form-sub-label-container:first-child .phone-separate {
  position: absolute;
  top: 0;
  right: -16%;
  width: 24%;
  text-align: center;
  text-indent: -4px;
}
[data-type="control_phone"] .form-sub-label-container .date-separate {
  visibility: hidden;
}
.form-matrix-table {
  width: 100%;
  max-width: 200px;
}
.form-address-table {
  width: 100%;
  max-width: 200px;
}
.form-address-table td .form-dropdown {
  width: 100%;
}
.form-address-table td .form-sub-label-container {
  width: 96%;
}
.form-address-table td:last-child .form-sub-label-container {
  margin-left: 4%;
}
.form-address-table td[colspan="2"] .form-sub-label-container {
  width: 100%;
  margin: 0;
}
.form-matrix-row-headers,
.form-matrix-column-headers,
.form-matrix-values {
  padding: 4px;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_birthdate"] .form-input,
[data-type="control_time"] .form-input,
[data-type="control_dropdown"] .form-input-wide,
[data-type="control_birthdate"] .form-input-wide,
[data-type="control_time"] .form-input-wide {
  width: 100%;
  max-width: 200px;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 200px;
}
[data-type="control_birthdate"] .form-sub-label-container {
  width: 22%;
  margin-right: 3%;
}
[data-type="control_birthdate"] .form-sub-label-container:first-child {
  width: 50%;
}
[data-type="control_birthdate"] .form-sub-label-container:last-child {
  margin-right: 0;
}
[data-type="control_birthdate"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
.form-label {
  font-family: "Amaranth", sans-serif;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: auto;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #ff3200;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #ff3200;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #ff3200;
  box-shadow: 0 0 3px #ff3200;
}
.form-all {
  position: relative;
}
.form-all:before {
  content: "";
  background-image: url("https://www.jotform.com/uploads/mariolyr30/form_files/epccj-logo.6186f7c3c375b0.19242689.jpg");
  display: inline-block;
  height: 156px;
  position: absolute;
  background-size: 156px 156px;
  background-repeat: no-repeat;
  width: 100%;
}
.form-all {
  margin-top: 164px !important;
}
.form-all:before {
  top: -164px;
  background-position: top center;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
[data-type="control_clear"] {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 767px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .testOne {
    letter-spacing: 0;
  }
  .form-all {
    border: 0;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
    margin-right: 0;
    float: left;
    box-sizing: border-box;
  }
  span.form-sub-label-container + span.form-sub-label-container {
    margin-right: 0;
  }
  .form-sub-label {
    white-space: normal;
  }
  .form-address-table td,
  .form-address-table th {
    padding: 0 1px 10px;
  }
  .form-submit-button,
  .form-submit-print,
  .form-submit-reset {
    width: 100%;
    margin-left: 0!important;
  }
  div[id*=at_] {
    font-size: 14px;
    font-weight: 700;
    height: 8px;
    margin-top: 6px;
  }
  .showAutoCalendar {
    width: 20px;
  }
  img.form-image {
    max-width: 100%;
    height: auto;
  }
  .form-matrix-row-headers {
    width: 100%;
    word-break: break-all;
    min-width: 80px;
  }
  .form-collapse-table,
  .form-header-group {
    margin: 0;
  }
  .form-collapse-table {
    height: 100%;
    display: inline-block;
    width: 100%;
  }
  .form-collapse-hidden {
    display: none !important;
  }
  .form-input {
    width: 100%;
  }
  .form-label {
    width: 100% !important;
  }
  .form-label-left,
  .form-label-right {
    display: block;
    float: none;
    text-align: left;
    width: auto!important;
  }
  .form-line,
  .form-line.form-line-column {
    padding: 2% 5%;
    box-sizing: border-box;
  }
  input[type=text],
  input[type=email],
  input[type=tel],
  textarea {
    width: 100%;
    box-sizing: border-box;
    max-width: initial !important;
  }
  .form-radio-other-input,
  .form-checkbox-other-input {
    max-width: 55% !important;
  }
  .form-dropdown,
  .form-textarea,
  .form-textbox {
    width: 100%!important;
    box-sizing: border-box;
  }
  .form-input,
  .form-input-wide,
  .form-textarea,
  .form-textbox,
  .form-dropdown {
    max-width: initial!important;
  }
  .form-checkbox-item:not(#foo),
  .form-radio-item:not(#foo) {
    width: 100%;
  }
  .form-address-city,
  .form-address-line,
  .form-address-postal,
  .form-address-state,
  .form-address-table,
  .form-address-table .form-sub-label-container,
  .form-address-table select,
  .form-input {
    width: 100%;
  }
  div.form-header-group {
    padding: 24px 0px !important;
    margin: 0 12px 2% !important;
    margin-left: 5%!important;
    margin-right: 5%!important;
    box-sizing: border-box;
  }
  div.form-header-group.hasImage img {
    max-width: 100%;
  }
  [data-type="control_button"] {
    margin-bottom: 0 !important;
  }
  [data-type=control_fullname] .form-sub-label-container {
    width: 48%;
  }
  [data-type=control_fullname] .form-sub-label-container:first-child {
    margin-right: 4%;
  }
  [data-type=control_phone] .form-sub-label-container {
    width: 65%;
    margin-right: 0;
    margin-left: 0;
    float: left;
  }
  [data-type=control_phone] .form-sub-label-container:first-child {
    width: 31%;
    margin-right: 4%;
  }
  [data-type=control_datetime] .allowTime-container {
    width: 100%;
  }
  [data-type=control_datetime] .allowTime-container .form-sub-label-container {
    width: 24%!important;
    margin-left: 6%;
    margin-right: 0;
  }
  [data-type=control_datetime] .allowTime-container .form-sub-label-container:first-child {
    margin-left: 0;
  }
  [data-type=control_datetime] span + span + span > span:first-child {
    display: block;
    width: 100% !important;
  }
  [data-type=control_birthdate] .form-sub-label-container,
  [data-type=control_time] .form-sub-label-container {
    width: 27.3%!important;
    margin-right: 6% !important;
  }
  [data-type=control_time] .form-sub-label-container:last-child {
    width: 33.3%!important;
    margin-right: 0 !important;
  }
  .form-pagebreak-back-container,
  .form-pagebreak-next-container {
    min-height: 1px;
    width: 50% !important;
  }
  .form-pagebreak-back,
  .form-pagebreak-next,
  .form-product-item.hover-product-item {
    width: 100%;
  }
  .form-pagebreak-back-container {
    padding: 0;
    text-align: right;
  }
  .form-pagebreak-next-container {
    padding: 0;
    text-align: left;
  }
  .form-pagebreak {
    margin: 0 auto;
  }
  .form-buttons-wrapper {
    margin: 0!important;
    margin-left: 0!important;
  }
  .form-buttons-wrapper button {
    width: 100%;
  }
  .form-buttons-wrapper .form-submit-print {
    margin: 0 !important;
  }
  table {
    width: 100%!important;
    max-width: initial!important;
  }
  table td + td {
    padding-left: 3%;
  }
  .form-checkbox-item,
  .form-radio-item {
    white-space: normal!important;
  }
  .form-checkbox-item input,
  .form-radio-item input {
    width: auto;
  }
  .form-collapse-table {
    margin: 0 5%;
    display: block;
    zoom: 1;
    width: auto;
  }
  .form-collapse-table:before,
  .form-collapse-table:after {
    display: table;
    content: '';
    line-height: 0;
  }
  .form-collapse-table:after {
    clear: both;
  }
  .fb-like-box {
    width: 98% !important;
  }
  .form-error-message {
    clear: both;
    bottom: -10px;
  }
  .date-separate,
  .phone-separate {
    display: none;
  }
  .custom-field-frame,
  .direct-embed-widgets,
  .signature-pad-wrapper {
    width: 100% !important;
  }
}
/* | */

/*__INSPECT_SEPERATOR__*/

    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/buttons/form-submit-button-big_white.css?3.3.28889"/>
<form class="jotform-form" action="https://submit.jotform.com/submit/213096621301849/" method="post" name="form_213096621301849" id="213096621301849" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="213096621301849" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Encuesta de Satisfacción para Profesores
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_3">
        <div id="cid_3" class="form-input-wide">
          <div id="text_3" class="form-html" data-component="text">
            <p>Los resultados de esta evaluación son muy importantes para nosotros.</p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_39">
        <label class="form-label form-label-top form-label-auto" id="label_39" for="first_39">
          Ingrese su nombre
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_39" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_39" name="q39_ingreseSu[first]" class="form-textbox validate[required]" data-defaultvalue="" size="10" value="" data-component="first" aria-labelledby="label_39 sublabel_39_first" required="" />
              <label class="form-sub-label" for="first_39" id="sublabel_39_first" style="min-height:13px" aria-hidden="false"> Nombre(s) </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_39" name="q39_ingreseSu[last]" class="form-textbox validate[required]" data-defaultvalue="" size="15" value="" data-component="last" aria-labelledby="label_39 sublabel_39_last" required="" />
              <label class="form-sub-label" for="last_39" id="sublabel_39_last" style="min-height:13px" aria-hidden="false"> Apellidos </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12">
          Indique el curso/materia que imparte
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_12" class="form-input-wide jf-required">
          <select class="form-dropdown validate[required]" id="input_12" name="q12_indiqueEl12" style="width:500px" data-component="dropdown" required="">
            <option value="">  </option>
            <option value="CALCULO DIFERENCIAL"> CALCULO DIFERENCIAL </option>
            <option value="FISICA"> FISICA </option>
            <option value="CIENCIAS"> CIENCIAS </option>
            <option value="BIOLOGIA"> BIOLOGIA </option>
            <option value="CIENCIA Y TECNOLOGIA"> CIENCIA Y TECNOLOGIA </option>
            <option value="QUIMICA"> QUIMICA </option>
            <option value="LEOYE"> LEOYE </option>
            <option value="TICS"> TICS </option>
            <option value="CALCULO INTEGRAL"> CALCULO INTEGRAL </option>
            <option value="GEOMETRIA"> GEOMETRIA </option>
            <option value="TRIGONOMETRIA"> TRIGONOMETRIA </option>
            <option value="ARTE"> ARTE </option>
            <option value="">  </option>
            <option value="Otro: Especifíque"> Otro: Especifíque </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required form-field-hidden" style="display:none;" data-type="control_textbox" id="id_41">
        <label class="form-label form-label-top form-label-auto" id="label_41" for="input_41">
          Indique el curso aquí (si no aparece en la lista)
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_41" class="form-input-wide jf-required">
          <input type="text" id="input_41" name="q41_indiqueEl41" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" size="20" value="" data-component="textbox" aria-labelledby="label_41" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_widget" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7">
          Fecha en la que esta haciendo este formulario
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_7" class="form-input-wide jf-required">
          <div data-widget-name="Date Picker" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field">
            <iframe data-client-id="52934dbf3be147110a000030" title="Date Picker" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_7" src="" style="max-width:380px;border:none;width:100%;height:50px" data-width="380" data-height="50">
            </iframe>
            <div class="widget-inputs-wrapper">
              <input type="hidden" id="input_7" class="form-hidden form-widget widget-required " name="q7_fechaEn" value="" />
              <input type="hidden" id="widget_settings_7" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22dateFormat%22%2C%22value%22%3A%22m%2Fd%2Fy%22%7D%2C%7B%22name%22%3A%22todayDate%22%2C%22value%22%3A%22Yes%22%7D%5D" data-version="2" />
            </div>
            <script type="text/javascript">
            setTimeout(function()
{
  var _cFieldFrame = document.getElementById("customFieldFrame_7");
  if (_cFieldFrame)
  {
    _cFieldFrame.onload = function()
    {
      if (typeof widgetFrameLoaded !== 'undefined')
      {
        widgetFrameLoaded(7, {
          "formID": 213096621301849
        })
      }
    };
    _cFieldFrame.src = "//widgets.jotform.io/pickers/datepicker.html?qid=7&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
    _cFieldFrame.addClassName("custom-field-frame-rendered");
  }
}, 0);
            </script>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4">
          ¿Estas enseñando de forma remota?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_4" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_4" class="form-radio validate[required]" id="input_4_0" name="q4_estasEnsenando4" value="Si" required="" />
              <label id="label_input_4_0" for="input_4_0"> Si </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_4" class="form-radio validate[required]" id="input_4_1" name="q4_estasEnsenando4" value="No" required="" />
              <label id="label_input_4_1" for="input_4_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_42">
        <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42">
          ¿Cómo esta impartiendo nuestra escuela el aprendizaje a distancia?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_42" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_42" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_42" class="form-radio validate[required]" id="input_42_0" name="q42_comoEsta" value="En linea" required="" />
              <label id="label_input_42_0" for="input_42_0"> En linea </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_42" class="form-radio validate[required]" id="input_42_1" name="q42_comoEsta" value="Material impreso" required="" />
              <label id="label_input_42_1" for="input_42_1"> Material impreso </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_43">
        <label class="form-label form-label-top form-label-auto" id="label_43" for="input_43">
          ¿Tienes suficiente tiempo para completar el trabajo que te asignamos en el plantel?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_43" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_43" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_43" class="form-radio validate[required]" id="input_43_0" name="q43_tienesSuficiente" value="Si" required="" />
              <label id="label_input_43_0" for="input_43_0"> Si </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_43" class="form-radio validate[required]" id="input_43_1" name="q43_tienesSuficiente" value="No" required="" />
              <label id="label_input_43_1" for="input_43_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_46">
        <label class="form-label form-label-top form-label-auto" id="label_46" for="input_46">
          ¿Qué opinas en general sobre la educación a distancia?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_46" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_46" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_46" class="form-radio validate[required]" id="input_46_0" name="q46_queOpinas46" value="Pobre" required="" />
              <label id="label_input_46_0" for="input_46_0"> Pobre </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_46" class="form-radio validate[required]" id="input_46_1" name="q46_queOpinas46" value="Por debajo del promedio" required="" />
              <label id="label_input_46_1" for="input_46_1"> Por debajo del promedio </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_46" class="form-radio validate[required]" id="input_46_2" name="q46_queOpinas46" value="Promedio" required="" />
              <label id="label_input_46_2" for="input_46_2"> Promedio </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_46" class="form-radio validate[required]" id="input_46_3" name="q46_queOpinas46" value="Bien" required="" />
              <label id="label_input_46_3" for="input_46_3"> Bien </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_46" class="form-radio validate[required]" id="input_46_4" name="q46_queOpinas46" value="Excelente" required="" />
              <label id="label_input_46_4" for="input_46_4"> Excelente </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_45">
        <label class="form-label form-label-top form-label-auto" id="label_45" for="input_45">
          ¿Qué dispositivo usas para el aprendizaje a distancia?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_45" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_45" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_45" class="form-radio validate[required]" id="input_45_0" name="q45_queDispositivo" value="Computadora portatil" required="" />
              <label id="label_input_45_0" for="input_45_0"> Computadora portatil </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_45" class="form-radio validate[required]" id="input_45_1" name="q45_queDispositivo" value="Computadora de escritorio" required="" />
              <label id="label_input_45_1" for="input_45_1"> Computadora de escritorio </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_45" class="form-radio validate[required]" id="input_45_2" name="q45_queDispositivo" value="Tableta" required="" />
              <label id="label_input_45_2" for="input_45_2"> Tableta </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_45" class="form-radio validate[required]" id="input_45_3" name="q45_queDispositivo" value="Celular" required="" />
              <label id="label_input_45_3" for="input_45_3"> Celular </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_44">
        <label class="form-label form-label-top form-label-auto" id="label_44" for="input_44">
          ¿Tienes internet de alta velocidad en casa?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_44" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_44" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_44" class="form-radio validate[required]" id="input_44_0" name="q44_tienesInternet" value="Si" required="" />
              <label id="label_input_44_0" for="input_44_0"> Si </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_44" class="form-radio validate[required]" id="input_44_1" name="q44_tienesInternet" value="No" required="" />
              <label id="label_input_44_1" for="input_44_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_47">
        <label class="form-label form-label-top form-label-auto" id="label_47" for="input_47">
          ¿Qué tan útil hemos sido al ofrecerte los recursos para ensenar desde casa?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_47" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_47" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_47" class="form-radio validate[required]" id="input_47_0" name="q47_queTan" value="Nada útil" required="" />
              <label id="label_input_47_0" for="input_47_0"> Nada útil </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_47" class="form-radio validate[required]" id="input_47_1" name="q47_queTan" value="Algo útil" required="" />
              <label id="label_input_47_1" for="input_47_1"> Algo útil </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_47" class="form-radio validate[required]" id="input_47_2" name="q47_queTan" value="Moderadamente útil" required="" />
              <label id="label_input_47_2" for="input_47_2"> Moderadamente útil </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_47" class="form-radio validate[required]" id="input_47_3" name="q47_queTan" value="Muy útil" required="" />
              <label id="label_input_47_3" for="input_47_3"> Muy útil </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_47" class="form-radio validate[required]" id="input_47_4" name="q47_queTan" value="Extremadamente útil" required="" />
              <label id="label_input_47_4" for="input_47_4"> Extremadamente útil </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_50">
        <label class="form-label form-label-top form-label-auto" id="label_50" for="input_50">
          ¿Qué importancia tiene el papel de la tecnología en el aprendizaje a distancia?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_50" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_50" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_50" class="form-radio validate[required]" id="input_50_0" name="q50_queImportancia" value="No tan importante" required="" />
              <label id="label_input_50_0" for="input_50_0"> No tan importante </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_50" class="form-radio validate[required]" id="input_50_1" name="q50_queImportancia" value="Un poco importante" required="" />
              <label id="label_input_50_1" for="input_50_1"> Un poco importante </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_50" class="form-radio validate[required]" id="input_50_2" name="q50_queImportancia" value="Moderadamente importante" required="" />
              <label id="label_input_50_2" for="input_50_2"> Moderadamente importante </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_50" class="form-radio validate[required]" id="input_50_3" name="q50_queImportancia" value="Muy importante" required="" />
              <label id="label_input_50_3" for="input_50_3"> Muy importante </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_50" class="form-radio validate[required]" id="input_50_4" name="q50_queImportancia" value="Extremadamente importante" required="" />
              <label id="label_input_50_4" for="input_50_4"> Extremadamente importante </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_49">
        <label class="form-label form-label-top form-label-auto" id="label_49" for="input_49">
          ¿Qué tipo de respuesta has obtenido de tus alumnos?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_49" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_49" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_49" class="form-radio validate[required]" id="input_49_0" name="q49_queTipo49" value="Pobre" required="" />
              <label id="label_input_49_0" for="input_49_0"> Pobre </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_49" class="form-radio validate[required]" id="input_49_1" name="q49_queTipo49" value="Por debajo del promedio" required="" />
              <label id="label_input_49_1" for="input_49_1"> Por debajo del promedio </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_49" class="form-radio validate[required]" id="input_49_2" name="q49_queTipo49" value="Promedio" required="" />
              <label id="label_input_49_2" for="input_49_2"> Promedio </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_49" class="form-radio validate[required]" id="input_49_3" name="q49_queTipo49" value="Bien" required="" />
              <label id="label_input_49_3" for="input_49_3"> Bien </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_49" class="form-radio validate[required]" id="input_49_4" name="q49_queTipo49" value="Excelente" required="" />
              <label id="label_input_49_4" for="input_49_4"> Excelente </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_48">
        <label class="form-label form-label-top form-label-auto" id="label_48" for="input_48">
          ¿Tus alumnos aprenden tanto como antes durante el aprendizaje remoto?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_48" class="form-input-wide jf-required">
          <div class="form-single-column" role="group" aria-labelledby="label_48" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_48" class="form-radio validate[required]" id="input_48_0" name="q48_tusAlumnos" value="Si" required="" />
              <label id="label_input_48_0" for="input_48_0"> Si </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_48" class="form-radio validate[required]" id="input_48_1" name="q48_tusAlumnos" value="No" required="" />
              <label id="label_input_48_1" for="input_48_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:center" data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-big_white submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Enviar
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Desarrollado por Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="213096621301849" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='213096621301849'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "213096621301849-213096621301849";
}
  </script>

</head>
</html>