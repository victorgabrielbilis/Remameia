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
  }

  //Após dar load na página
 $(window).on('load', function() {
 	var VarDataPrevista = document.getElementById("DivDataPrevista");
  document.getElementById("DivDataPrevista").innerHTML = "<input type='date' id='DatePrevista'>";
});

 //Filtro Tabela
 function Filtro() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>

</script>