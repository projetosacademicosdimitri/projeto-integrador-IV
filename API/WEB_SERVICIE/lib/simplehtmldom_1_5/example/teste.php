<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<a id='start_link' onclick="this.href='data:text/html;charset=UTF-8,'+encodeURIComponent(document.documentElement.outerHTML)" href="http://waves.terra.com.br/surf/ondas/bahia/salvador/barravento" download="page.html">Download</a>

<script>
$('#start_link')[0].click(); 
</script>

<div style="display:none" id="frameDiv"></div>
<?php
/*
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');

echo "teste <br/>";
 
// get DOM from URL or file
$html = file_get_html('http://www.google.com/');

// find all link
foreach($html->find('a') as $e) 
    echo $e->href . '<br>';

// find all image
foreach($html->find('img') as $e)
    echo $e->src . '<br>';

// find all image with full tag
foreach($html->find('img') as $e)
    echo $e->outertext . '<br>';

// find all div tags with id=gbar
foreach($html->find('div#gbar') as $e)
    echo $e->innertext . '<br>';

// find all span tags with class=gb1
foreach($html->find('span.gb1') as $e)
    echo $e->outertext . '<br>';

// find all td tags with attribite align=center
foreach($html->find('td[align=center]') as $e)
    echo $e->innertext . '<br>';
    
// extract text from table
echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// extract text from HTML
echo $html->plaintext; */
?>
<html

<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
echo "<h1>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</h1><br>";
echo $html = file_get_html('https://www.surfguru.com.br/previsao/brasil/bahia/salvador/');


$url = 'Waves.html';

$url = 'file:///C:/Users/BoardMiranda/Downloads/'.date('y_m_d').'_waves_web_page.html';

echo file_get_html($url); 

//var_dump($ret);



?>




<script>

var test = $('table').html();


var myTableArray1 = [];

$("table ").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('th');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray1.push(arrayOfThisRow);
    }
});


console.log(myTableArray1);

var myTableArray = [];

$("table tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray.push(arrayOfThisRow);
    }
});

alert(myTableArray);

console.log(myTableArray);

</script>
<div id='x'></div>

</html>
