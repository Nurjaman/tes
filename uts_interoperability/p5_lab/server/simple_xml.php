<?php

$document = new SimpleXMLElement("<students />");

$student = $document->addChild("student");
$student->addAttribute("name", "Roni Poltek");
$student->addChild("age", 20);
$student->addChild("address", "Jalan Cimahi No 10");
$student->addChild("is_graduated", false);

$student = $document->addChild("student");
$student->addAttribute("name", "Rani Poltek");
$student->addChild("age", 21);
$student->addChild("address", "Jalan Bandung No 10");
$student->addChild("is_graduated", false);


$student = $document->addChild("student");
$student->addAttribute("name", "Reno Poltek");
$student->addChild("age", 22);
$student->addChild("address", "Jalan Bandung Barat No 10");
$student->addChild("is_graduated", true);

echo $document->asXML();

/*
<students>
	<student name="Roni Poltek">
		<age>20</age>
		<address>Jalan Cimahi No 10</address>
		<is_graduated />
	</student>
		<student name="Rani Poltek">
		<age>21</age>
		<address>Jalan Bandung No 10</address>
		<is_graduated />
	</student>
		<student name="Reno Poltek">
		<age>22</age>
		<address>Jalan Bandung Barat No 10</address>
		<is_graduated>1</is_graduated>
	</student>
</students>
*/