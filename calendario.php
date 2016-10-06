<?php
$mes=date("n");
$año=date("Y");
$diaActual=date("j");

#con esto nos dara 0 si es domingo y 6 sabado
$diaSemana=date("w",mktime(0,0,0,$mes,1,$año));


#para saber cual es el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$año)-1));

$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<style>
	table, th, td {
    border: 1px solid black;
	}
	#calendario .hoy {
			background-color:red;
		}
	#calendario {
			width: 80%;
			height: 155px;
		}
	</style>
	<title>calendario</title>
</head>
<body>

<script language="JavaScript" type="text/javascript">
alert("ENRIC APRUEBAME PLIS!");
</script>

<script language="JavaScript" type="text/javascript">
function doTheClock() {
   window.setTimeout( "doTheClock()", 1000 );
   t = new Date();
   if(document.all || document.getElementById){
      document.title = t.toString();
   }else{   
      self.status = t.toString();
   }
}
doTheClock()
</script>

	<DIV ALIGN=center><h1>Ejercicio calendario(M-07)</h1></DIV>
	<h4>Ian Lopez Zamora AWS2 </h4>
	<h5>
		<script type="text/javascript">
			function startTime(){
			today=new Date();
			h=today.getHours();
			m=today.getMinutes();
			s=today.getSeconds();
			m=checkTime(m);
			s=checkTime(s);
			document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
			t=setTimeout('startTime()',500);}
			function checkTime(i)
			{if (i<10) {i="0" + i;}return i;}
			window.onload=function(){startTime();}
		</script>
	</h5>
<div id="reloj" style="font-size:20px;"></div>
</h4>
	<div style="text-align:center;">
	<table id="calendario" style="margin: 0 auto;">
		<caption><?php echo $meses[$mes]." ".$año?></caption>
		<tr></tr>

		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
		<tr>
			<?php
			$last_cell=$diaSemana+$ultimoDiaMes;
	
		for($i=1;$i<=35;$i++)
		{
			if($i==$diaSemana)
			{
				//esto Enric se usa para saber el dia en el que empezamos
				$day=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				// Printar vacio
				echo "<td>&nbsp;</td>";
			}else{
				// ver dia actual
				if($day==$diaActual)
					echo "<td class='hoy'>$day</td>";
				else
					echo "<td>$day</td>";
				$day++;
			}
			// cuando llega al final de la semana, iniciamos una columna nueva
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
			?>
		</tr>
	</table>
	</div>
</body>
</html>