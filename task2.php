<?php
echo "<link type='text/css' rel='stylesheet' href='style.css' />";
	$xmlString = file_get_contents("http://www.wextor.ru/udata:/content/menu/");
	$xml = new SimpleXMLElement($xmlString);

	echo "<ul>";	
foreach($xml->items->item as $data)
{

 echo "<a href='${data[link]}' ><li>${data[name]} </li></a>";
 
}
	echo "</ul> ";
?>