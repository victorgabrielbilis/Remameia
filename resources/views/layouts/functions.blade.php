<script type="text/javascript">
  var VarCodRatreio = document.getElementById("input_codRastreio");
  

  function cod_rastreio(){
	  var x = document.getElementById("select_linha").value;
	  if (x == 7) {
	  	document.getElementById("input_codRastreio").innerHTML = "<div id='InpCodRastreio'><input type='text' id='Input'></div>";
	  }
	  if (x == 8 ||x == 9) {
	  	Input.disabled = true;
	  	DatePrevista.disabled = true;
	  }

	  if (x == 11) {
	  	
	  }
  }

  //Após dar load na página
 $(window).on('load', function() {
 	var VarDataPrevista = document.getElementById("DivDataPrevista");
  document.getElementById("DivDataPrevista").innerHTML = "<input type='date' id='DatePrevista'>";
});
 
</script>
