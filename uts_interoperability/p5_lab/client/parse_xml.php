<?php

$xml = new SimpleXMLElement(file_get_contents("http://localhost/bahan_ajar/php_web_service/app/p5_lab/server/simple_xml.php"));
// $xml = new SimpleXMLElement(file_get_contents("http://localhost/bahan_ajar/php_web_service/app/p5_lab/server/dom_xml.php"));

echo("List of Students:\n");

foreach($xml->children() as $student) {
	echo $student['name'];
	echo " is " . $student->age . " years old";
	echo " and live in " . $student->adress;
	echo "\n";
}


