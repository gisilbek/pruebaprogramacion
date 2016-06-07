<html>
<head>
<script languaje="javascript">
var asunto=new Array(7);
var hora=new Array(7);


function almacenar(){
switch (document.form1.combodia.value) {
case "0":
Asunto[0]=document.form1.campoasunto.value;
Hora[0]=document.form1.campohora.value;
break;


case "1":
Asunto[1]=document.form1.campoasunto.value;
Hora[1]=document.form1.campohora.value;
break;

case "2":
Asunto[2]=document.form1.campoasunto.value;
Hora[2]=document.form1.campohora.value;
break;

case "3":
Asunto[3]=document.form1.campoasunto.value;
Hora[3]=document.form1.campohora.value;
break;

case "4":
Asunto[4]=document.form1.campoasunto.value;
Hora[4]=document.form1.campohora.value;
break;

case "5":
Asunto[5]=document.form1.campoasunto.value;
Hora[5]=document.form1.campohora.value;
break;

case "6":
Asunto[6]=document.form1.campoasunto.value;
Hora[6]=document.form1.campohora.value;
break;

}
}
function dia(){ 
switch (document.form1.combodia.value){
case "0":
document.form1.campoasunto.value=Asunto[0];
document.form1.campohora.value=Hora[0];
break;


case "1":
document.form1.campoasunto.value=Asunto[1];
document.form1.campohora.value=Hora[1];
break;

case "2":
document.form1.campoasunto.value=Asunto[2];
document.form1.campohora.value=Hora[2];
break;

case "3":
document.form1.campoasunto.value=Asunto[3];
document.form1.campohora.value=Hora[3];
break;

case "4":
document.form1.campoasunto.value=Asunto[4];
document.form1.campohora.value=Hora[4];
break;

case "5":
document.form1.campoasunto.value=Asunto[5];
document.form1.campohora.value=Hora[5];
break;

case "6":
document.form1.campoasunto.value=Asunto[6];
document.form1.campohora.value=Hora[6];
break;

}
} 


function cita(){

switch (document.form1.combocita.value){
case "0":
document.form1.campoasunto.value=Asunto[0];
document.form1.campohora.value=Hora[0];
break;


case "1":
document.form1.campoasunto.value=Asunto[1];
document.form1.campohora.value=Hora[1];
break;

case "2":
document.form1.campoasunto.value=Asunto[2];
document.form1.campohora.value=Hora[2];
break;

case "3":
document.form1.campoasunto.value=Asunto[3];
document.form1.campohora.value=Hora[3];
break;

case "4":
document.form1.campoasunto.value=Asunto[4];
document.form1.campohora.value=Hora[4];
break;

case "5":
document.form1.campoasunto.value=Asunto[5];
document.form1.campohora.value=Hora[5];
break;

}
} 




function borrar(){
document.form1.campoasunto.value="";
document.form1.campohora.value="";
}

</script>

</head>
<body>
<form name="form1" method="" action="">
Dia:
<label>
<select name="combodia" id="combodia" onChange="dia();">
<option value="0">Lunes</option>
<option value="1">Martes</option>
<option value="2">Miércoles</option>
<option value="3">Jueves</option>
<option value="4">Viernes</option>
<option value="5">Sabado</option>
<option value="6">Domingo</option>
</select>

Cita: 
<label>
<select name="combocita" id="combocita" onchange"cita();">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</label>
<p>Asunto:

<input name="campoasunto" type="text" id="campoasunto">

</p>
<p>Hora:

<input name="campohora" type="text" id="campohora">

</p>
<p>

<input type="button" name="Guardar" value="guardar" onClick="almacenar();">



<input type="button" name="Borrar" value="Borrar" onClick="borrar();">

</p>
<p></p>
</form>
</body>
</html>