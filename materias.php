<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos.css">

  <script src="https://cdn03.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?3.3.28889" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;

   JotForm.setConditions([{"action":[{"id":"action_1559750299170","skipTo":"page-3","isError":false}],"id":"1559750322352","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1559750299170","field":"47","operator":"equals","value":"No","isError":false}],"type":"page"},{"action":[{"id":"action_1559750219450","skipTo":"page-1","isError":false}],"id":"1559750237280","index":"1","link":"Any","priority":"1","terms":[{"id":"term_1559750219450","field":"29","operator":"equals","value":"No","isError":false}],"type":"page"},{"action":[{"id":"action_1559750147107","skipTo":"page-1","isError":false}],"id":"1559750166202","index":"2","link":"Any","priority":"2","terms":[{"id":"term_1559750147107","field":"32","operator":"equals","value":"No","isError":false}],"type":"page"},{"action":[{"id":"action_1559750076052","skipTo":"page-1","isError":false}],"id":"1559750101191","index":"3","link":"Any","priority":"3","terms":[{"id":"term_1559750076052","field":"17","operator":"equals","value":"No","isError":false}],"type":"page"},{"action":[{"id":"action_0_1559750283472","skipTo":"page-4","isError":false}],"id":"1559741910566","index":"4","link":"Any","priority":"4","terms":[{"id":"term_0_1559750283472","field":"47","operator":"equals","value":"Si","isError":false}],"type":"page"},{"action":[{"id":"action_0_1559750205796","skipTo":"page-2","isError":false}],"id":"1559741854141","index":"5","link":"Any","priority":"5","terms":[{"id":"term_0_1559750205796","field":"29","operator":"equals","value":"Si","isError":false}],"type":"page"},{"action":[{"id":"action_1559739523934","skipTo":"page-1","isError":false}],"id":"1559739536474","index":"6","link":"Any","priority":"6","terms":[{"id":"term_1559739523934","field":"15","operator":"equals","value":"No","isError":false}],"type":"page"},{"action":[{"id":"action_0_1559750137501","skipTo":"page-1","isError":false}],"id":"1559738960657","index":"7","link":"Any","priority":"7","terms":[{"id":"term_0_1559750137501","field":"32","operator":"equals","value":"Si","isError":false}],"type":"page"},{"action":[{"id":"action_0_1559739438084","skipHide":"skipTo","skipTo":"page-1","isError":false}],"id":"1559733144720","index":"8","link":"Any","priority":"8","terms":[{"id":"term_0_1559739438084","field":"15","operator":"equals","value":"Si","isError":false}],"type":"page"},{"action":[{"id":"action_0_1559750054198","skipTo":"page-1","isError":false}],"id":"1559738291411","index":"9","link":"Any","priority":"9","terms":[{"id":"term_0_1559750054198","field":"17","operator":"equals","value":"Si","isError":false}],"type":"page"}]);	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_7').setAttribute('tabindex',0);
      JotForm.description('input_7', 'Ingrese su CURP');

 JotForm.calendarMonths = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
 JotForm.calendarDays = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
 JotForm.calendarOther = {"today":"Hoy"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("20", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("20", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
      JotForm.description('input_8', 'Ingresa solo 10 dígitos, solo números NO signos ni letras.');
      JotForm.alterTexts({"alphabetic":"Este campo solo puede contener letras.","alphanumeric":"Este campo solo puede contener letras y números.","ccInvalidCVC":"El número CVC no es válido.","ccInvalidExpireDate":"La fecha de expiración no es válida","ccInvalidNumber":"El número de su tarjeta de crédito no es válido.","ccMissingDetails":"Por favor rellene los datos de su Tarjeta de Crédito","ccMissingDonation":"Ingresa por favor una cantidad a donar","ccMissingProduct":"Por favor seleccione al menos un producto.","characterLimitError":"Demasiados caracteres. El límite es","confirmClearForm":"¿Está seguro que desea limpiar el formulario?","confirmEmail":"El correo electrónico no coincide","currency":"Este campo sólo puede contener valores de moneda.","cyrillic":"Este campo solo puede contener caracteres cirílicos.","dateInvalid":"Esta fecha no es valida. El formato de fecha es {format}","dateLimited":"Esta fecha no está disponible.","disallowDecimals":"Por favor, introduzca un número entero.","email":"Introduzca una dirección e-mail válida","fillMask":"El valor de este campo debe llenar la mascara","freeEmailError":"No se permiten cuentas de correo gratuitas ","generalError":"Existen errores en el formulario, por favor corríjalos antes de continuar.","generalPageError":"Hay errores en esta página. Por favor, corríjalos antes de continuar.","gradingScoreError":"El puntaje total debería ser sólo \"menos que\" o \"igual que\"","incompleteFields":"Existen campos requeridos incompletos. Por favor complételos.","lessThan":"Tu puntuación debería ser menor o igual que","maxDigitsError":"El máximo de dígitos permitido es","multipleFileUploads_emptyError":"El fichero {file} está vacío; por favor, selecciona de nuevo los ficheros sin él.","multipleFileUploads_fileLimitError":"Solo {fileLimit} carga de archivos permitida.","multipleFileUploads_minSizeError":"{file} is demasiado pequeño, el tamaño mínimo de fichero es: {minSizeLimit}.","multipleFileUploads_onLeave":"Se están cargando los ficheros, si cierras ahora, se cancelará dicha carga.","multipleFileUploads_sizeError":"{file} es demasiado grande; el tamaño del archivo no debe superar los {sizeLimit}.","multipleFileUploads_typeError":"El fichero {file} posee una extensión no permitida. Sólo están permitidas las extensiones {extensions}.","numeric":"Este campo sólo admite valores numéricos.","pastDatesDisallowed":"La fecha debe ser futura","required":"Campo requerido.","requireEveryCell":"Se requieren todas las celdas.","requireEveryRow":"Todas las filas son obligatorias.","requireOne":"Al menos un campo requerido.","uploadExtensions":"Solo puede subir los siguientes archivos:","uploadFilesize":"Tamaño del archivo no puede ser mayor que:","uploadFilesizemin":"Tamañao de archivo no puede ser menos de:","url":"Este campo solo contiene una URL válida.","wordLimitError":"Demasiadas palabras. El límite es","wordMinLimitError":"Muy pocas palabras. El mínimo es"});
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"formularioPara","qid":"1","text":"Formulario para tomar una materia extra","type":"control_head"},{"name":"submit2","qid":"2","text":"Enviar","type":"control_button"},{"name":"nombre","qid":"3","text":"Nombre","type":"control_fullname"},null,{"name":"correoElectronico5","qid":"5","subLabel":"ejemplo@ejemplo.com","text":"Correo Electronico Personal","type":"control_email"},null,{"description":"Ingrese su CURP","name":"curp","qid":"7","text":"CURP","type":"control_textbox"},{"description":"Ingresa solo 10 digitos, solo numeros NO signos ni letras.","name":"numeroCelular8","qid":"8","text":"Numero Celular personal (ingresar 10 digitos)","type":"control_phone"},null,null,null,null,null,{"name":"promedio","qid":"14","subLabel":"Si tienes un promedio menos de 7, no podras solicitar una materia extra","text":"Promedio ","type":"control_dropdown"},null,null,null,null,null,{"name":"fechaNacimiento20","qid":"20","text":"Fecha Nacimiento","type":"control_datetime"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"direccionParticular","qid":"57","text":"Direccion Particular","type":"control_address"},{"name":"seleccionaLa","qid":"58","subLabel":"Materia","text":"Selecciona la materia ","type":"control_dropdown"},{"description":"","name":"correoElectronico","qid":"59","subLabel":"(nombre).(numero de control)@epccj.edu.com","text":"Correo Electronico Institucional","type":"control_email"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"formularioPara","qid":"1","text":"Formulario para tomar una materia extra","type":"control_head"},{"name":"submit2","qid":"2","text":"Enviar","type":"control_button"},{"name":"nombre","qid":"3","text":"Nombre","type":"control_fullname"},null,{"name":"correoElectronico5","qid":"5","subLabel":"ejemplo@ejemplo.com","text":"Correo Electronico Personal","type":"control_email"},null,{"description":"Ingrese su CURP","name":"curp","qid":"7","text":"CURP","type":"control_textbox"},{"description":"Ingresa solo 10 digitos, solo numeros NO signos ni letras.","name":"numeroCelular8","qid":"8","text":"Numero Celular personal (ingresar 10 digitos)","type":"control_phone"},null,null,null,null,null,{"name":"promedio","qid":"14","subLabel":"Si tienes un promedio menos de 7, no podras solicitar una materia extra","text":"Promedio ","type":"control_dropdown"},null,null,null,null,null,{"name":"fechaNacimiento20","qid":"20","text":"Fecha Nacimiento","type":"control_datetime"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"direccionParticular","qid":"57","text":"Direccion Particular","type":"control_address"},{"name":"seleccionaLa","qid":"58","subLabel":"Materia","text":"Selecciona la materia ","type":"control_dropdown"},{"description":"","name":"correoElectronico","qid":"59","subLabel":"(nombre).(numero de control)@epccj.edu.com","text":"Correo Electronico Institucional","type":"control_email"}]);}, 20); 
</script>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.28889" rel="stylesheet" type="text/css" />
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.28889" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5cf39fbd544a5401541a4081"/>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.28889" />
<style type="text/css">
@import '//fonts.googleapis.com/css?family=Aclonica:light,lightitalic,normal,italic,bold,bolditalic';

    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:690px;
        color:#7A6A53 !important;
        font-family:'Aclonica';
        font-size:14px;
    }
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
@import "https://fonts.googleapis.com/css?family=Aclonica:light,lightitalic,normal,italic,bold,bolditalic";
.form-all:after {
  content: "";
  display: table;
  clear: both;
}
.form-all {
  font-family: "Aclonica", sans-serif;
}
.form-all {
  width: 690px;
}
.form-label-left,
.form-label-right {
  width: 150px;
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
  font-size: 14px;
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
  max-width: 326px;
}
.form-radio-item,
.form-checkbox-item {
  width: 100%;
  max-width: 326px;
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
  margin-top: 12px;
  margin-bottom: 12px;
}
.form-line {
  padding: 12px 36px;
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
  width: 80px;
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Aclonica", sans-serif;
  font-size: 14px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Aclonica", sans-serif;
  font-size: 14px;
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
  width: 326px;
}
.form-textbox,
.form-textarea {
  width: 100%;
  max-width: 326px;
  box-sizing: border-box;
}
.form-input,
.form-address-table,
.form-matrix-table {
  width: 100%;
  max-width: 326px;
}
.form-radio-item,
.form-checkbox-item {
  width: 100%;
  max-width: 326px;
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
  max-width: 326px;
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
  font-family: "Aclonica", sans-serif;
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
  max-width: 326px;
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
  max-width: 326px;
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
  max-width: 326px;
}
.form-address-table {
  width: 100%;
  max-width: 326px;
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
  max-width: 326px;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 326px;
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
  font-family: "Aclonica", sans-serif;
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
  background-image: url("//www.jotform.com/images/form-cover-default.png");
  display: inline-block;
  height: 300px;
  position: absolute;
  background-size: 621px 300px;
  background-repeat: no-repeat;
  width: 100%;
}
.form-all {
  margin-top: 310px !important;
}
.form-all:before {
  top: -310px;
  left: 0;
  background-position: top left;
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

/*PREFERENCES STYLE*/
    .form-all {
      font-family: Aclonica, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Aclonica, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Aclonica, sans-serif;
    }
    .form-header-group {
      font-family: Aclonica, sans-serif;
    }
    .form-label {
      font-family: Aclonica, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 690px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 14px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14px
    }
  
    .supernova .form-all, .form-all {
      background-color: #D9CEB2;
    }
  
    .form-all {
      color: #7A6A53;
    }
    .form-header-group .form-header {
      color: #7A6A53;
    }
    .form-header-group .form-subHeader {
      color: #7A6A53;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #7A6A53;
    }
    .form-sub-label {
      color: #94846d;
    }
  
    .supernova {
      background-color: #948C75;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/mariolyr30/form_files/epccj-logo.618710ff00bd30.17897163.jpg");
      display: inline-block;
      height: 140px;
      position: absolute;
      background-size: 140px 140px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 150px !important;
    }
    .form-all:before {
      top: -150px;
      background-position: top center;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/

    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/buttons/form-submit-button-simple_blue.css?3.3.28889"/>
<form class="jotform-form" action="https://submit.jotform.com/submit/213096986355872/" method="post" name="form_213096986355872" id="213096986355872" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="213096986355872" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Formulario para tomar una materia extra
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Solo puedes tener una materia mas en tu expediente
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7">
          CURP
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_7" class="form-input-wide jf-required">
          <input type="text" id="input_7" name="q7_curp" data-type="input-textbox" class="form-readonly form-textbox validate[required, AlphaNumeric]" data-defaultvalue="" size="18" value="" maxLength="18" tabindex="-1" data-component="textbox" aria-labelledby="label_7" readonly="" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_3" data-compound-hint=",,">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3">
          Nombre
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input-wide jf-required">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="q3_nombre[first]" class="form-textbox validate[required]" data-defaultvalue="" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Nombre </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
              <input type="text" id="middle_3" name="q3_nombre[middle]" class="form-textbox" data-defaultvalue="" size="10" value="" data-component="middle" aria-labelledby="label_3 sublabel_3_middle" required="" />
              <label class="form-sub-label" for="middle_3" id="sublabel_3_middle" style="min-height:13px" aria-hidden="false"> Apellido Paterno </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="q3_nombre[last]" class="form-textbox validate[required]" data-defaultvalue="" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Apellido Materno </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_datetime" id="id_20">
        <label class="form-label form-label-top form-label-auto" id="label_20" for="lite_mode_20">
          Fecha Nacimiento
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_20" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="day_20" name="q20_fechaNacimiento20[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_20 sublabel_20_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_20" id="sublabel_20_day" style="min-height:13px" aria-hidden="false"> Día </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="month_20" name="q20_fechaNacimiento20[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_20 sublabel_20_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_20" id="sublabel_20_month" style="min-height:13px" aria-hidden="false"> Mes </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="year_20" name="q20_fechaNacimiento20[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_20 sublabel_20_year" />
                <label class="form-sub-label" for="year_20" id="sublabel_20_year" style="min-height:13px" aria-hidden="false"> Año </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_20" size="12" data-maxlength="12" maxLength="12" data-age="" value="" required="" data-format="ddmmyyyy" data-seperator="-" placeholder="dd-mm-aaaa" autoComplete="off" aria-labelledby="label_20 sublabel_20_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Seleccióna una fecha" id="input_20_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v1" />
              <label class="form-sub-label" for="lite_mode_20" id="sublabel_20_litemode" style="min-height:13px" aria-hidden="false"> Fecha </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14">
          Promedio
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_14" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <select class="form-dropdown validate[required]" id="input_14" name="q14_promedio" style="width:150px" data-component="dropdown" required="">
              <option value="">  </option>
              <option value="7"> 7 </option>
              <option value="8"> 8 </option>
              <option value="9"> 9 </option>
              <option value="10"> 10 </option>
            </select>
            <label class="form-sub-label" for="input_14" id="sublabel_input_14" style="min-height:13px" aria-hidden="false"> Si tienes un promedio menos de 7, no podrás solicitar una materia extra </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_57">
        <label class="form-label form-label-top form-label-auto" id="label_57" for="input_57_addr_line1">
          Dirección Particular
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_57" class="form-input-wide jf-required">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_57_addr_line1" name="q57_direccionParticular[addr_line1]" class="form-textbox validate[required] form-address-line" data-defaultvalue="" value="" data-component="address_line_1" aria-labelledby="label_57 sublabel_57_addr_line1" />
                  <label class="form-sub-label" for="input_57_addr_line1" id="sublabel_57_addr_line1" style="min-height:13px" aria-hidden="false"> Dirección de la calle </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_57_addr_line2" name="q57_direccionParticular[addr_line2]" class="form-textbox form-address-line" data-defaultvalue="" value="" data-component="address_line_2" aria-labelledby="label_57 sublabel_57_addr_line2" />
                  <label class="form-sub-label" for="input_57_addr_line2" id="sublabel_57_addr_line2" style="min-height:13px" aria-hidden="false"> Numeración Casa/Block/Dpto/sitio </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_57_city" name="q57_direccionParticular[city]" class="form-textbox validate[required] form-address-city" data-defaultvalue="" value="" data-component="city" aria-labelledby="label_57 sublabel_57_city" />
                  <label class="form-sub-label" for="input_57_city" id="sublabel_57_city" style="min-height:13px" aria-hidden="false"> Ciudad </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField form-address-hiddenLine" style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_57_state" name="q57_direccionParticular[state]" class="form-textbox validate[required] form-address-state" data-defaultvalue="" value="" data-component="state" aria-labelledby="label_57 sublabel_57_state" />
                  <label class="form-sub-label" for="input_57_state" id="sublabel_57_state" style="min-height:13px" aria-hidden="false"> Estado / Provincia </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField form-address-hiddenLine" style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_57_postal" name="q57_direccionParticular[postal]" class="form-textbox form-address-postal" data-defaultvalue="" value="" data-component="zip" aria-labelledby="label_57 sublabel_57_postal" />
                  <label class="form-sub-label" for="input_57_postal" id="sublabel_57_postal" style="min-height:13px" aria-hidden="false"> Código Postal </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_58">
        <label class="form-label form-label-top" id="label_58" for="input_58"> Selecciona la materia </label>
        <div id="cid_58" class="form-input-wide">
          <span class="form-sub-label-container" style="vertical-align:top">
            <select class="form-dropdown" id="input_58" name="q58_seleccionaLa" style="width:150px" data-component="dropdown">
              <option value="">  </option>
              <option value="CALCULO AVANZADO"> CALCULO AVANZADO </option>
              <option value="INFORMATICA"> INFORMATICA </option>
              <option value="BAILE"> BAILE </option>
              <option value="ARTES MARCIALES"> ARTES MARCIALES </option>
              <option value="COCINA"> COCINA </option>
              <option value="IDIOMAS"> IDIOMAS </option>
              <option value="NATACION"> NATACION </option>
              <option value="AJEDREZ"> AJEDREZ </option>
              <option value="BOXEO"> BOXEO </option>
              <option value="FUTBOL"> FUTBOL </option>
              <option value="VOLEYBOL"> VOLEYBOL </option>
            </select>
            <label class="form-sub-label" for="input_58" id="sublabel_input_58" style="min-height:13px" aria-hidden="false"> Materia </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5">
          Correo Electrónico Personal
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_5" name="q5_correoElectronico5" class="form-textbox validate[required, Email]" data-defaultvalue="" size="30" value="" data-component="email" aria-labelledby="label_5 sublabel_input_5" required="" />
            <label class="form-sub-label" for="input_5" id="sublabel_input_5" style="min-height:13px" aria-hidden="false"> ejemplo@ejemplo.com </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_59">
        <label class="form-label form-label-top form-label-auto" id="label_59" for="input_59">
          Correo Electrónico Institucional
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_59" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_59" name="q59_correoElectronico" class="form-textbox validate[required, Email]" data-defaultvalue="" size="30" value="" data-component="email" aria-labelledby="label_59 sublabel_input_59" required="" />
            <label class="form-sub-label" for="input_59" id="sublabel_input_59" style="min-height:13px" aria-hidden="false"> (nombre).(numero de control)@epccj.edu.com </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8_area">
          Número Celular personal (ingresar 10 dígitos)
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_8" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
              <input type="tel" id="input_8_area" name="q8_numeroCelular8[area]" class="form-textbox validate[required]" data-defaultvalue="" value="" data-component="areaCode" aria-labelledby="label_8 sublabel_8_area" required="" />
              <span class="phone-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="input_8_area" id="sublabel_8_area" style="min-height:13px" aria-hidden="false"> Código de área </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="input_8_phone" name="q8_numeroCelular8[phone]" class="form-textbox validate[required]" data-defaultvalue="" value="" data-component="phone" aria-labelledby="label_8 sublabel_8_phone" required="" />
              <label class="form-sub-label" for="input_8_phone" id="sublabel_8_phone" style="min-height:13px" aria-hidden="false"> Número de teléfono </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:center" data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_blue submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
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
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="213096986355872" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='213096986355872'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "213096986355872-213096986355872";
}
  </script>
  

</head>
</html>