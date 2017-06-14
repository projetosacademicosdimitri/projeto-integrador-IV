<?php
$parametros = array_slice(explode("/",$_SERVER['REQUEST_URI']), 2);


?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script>
    
	 $(location).attr('href', 'http://waves.terra.com.br/surf/ondas/<?php echo $parametros[1] ?>/<?php echo $parametros[2] ?>/<?php echo $parametros[3]?>?v=<?php echo time() ?>');

</script> 

<?php
//arquivo chupa cabra
include('../lib/simplehtmldom_1_5/simple_html_dom.php');
$url = "http://waves.terra.com.br/surf/ondas/".$parametros[1].'/'.$parametros[2].'/'.$parametros[3]."?v=".time();


echo file_get_html($url); 


 
?>

<script>

$(window).load(function () {
	

var thArray = [];

$("table").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('th');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        thArray.push(arrayOfThisRow);
    }
});


//console.log(thArray);

var tdArray = [];

$("table tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        tdArray.push(arrayOfThisRow);
    }
});

//alert(tdArray);
 
//sendData(tdArray);


processData(tdArray);


});



function processData(param)
{
	var sizeHoras = 0;
    var bag = new Array();
	var arr = new Array();


	
	//processa o numeros de horas do dia 
	for(j=0; j <  param[0].length; j++ )
	{
		if( param[0][j] == 0){ // adicione mais um da hora zero e pare de contar 
		   sizeHoras ++;
		  
          	break;
		}
	  
	  sizeHoras ++;
	  
	}
	
	
	//console.log("numero de horas do dia "+sizeHoras);
	
	
	for(i = 0; i < param.length ; i++) // read TR 
	 {

		
		for(j=0; j<sizeHoras; j++ )  //Read TD into TR on iterval of hours
		{
			bag.push(param[i][j]);
		} 
	
	}

arr = [sizeHoras, bag];
//console.log(arr);

sendData(arr);

}

function sendData(param)
{



var obj = {
    numero_horas :param[0],
    valores      :param[1],
	estado		 :'<?php echo $parametros[1]; ?>',
	cidade       :'<?php echo $parametros[2]; ?>',
	praia        :'<?php echo $parametros[3]; ?>'
};



$.ajax({
  url: "http://deuonda.esy.es/controller/extractor.php",
  data: obj,
  type: 'post',
  success: function(data) {
    console.log(data);
  }
});

	
}

</script>

