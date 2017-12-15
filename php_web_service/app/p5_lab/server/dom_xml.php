<?php

$document = new DOMDocument();
$students = $document->createElement('students');
$document->appendChild($students);

$student = $document->createElement("student");
$name = $document->createAttribute('name');
$name->value = "Nurjaman";
$student->appendChild($name);
$age = $document->createElement("age", 20);
$student->appendChild($age);
$address = $document->createElement("address", "Jalan Cimahi No 10");
$student->appendChild($address);
$is_graduated = $document->createElement("is_graduated", false);
$student->appendChild($is_graduated);
$hobies = $document->createElement("hobies");
$hobies->appendChild($document->createElement("hoby", "Fishing"));
$hobies->appendChild($document->createElement("hoby", "Climbing"));
$hobies->appendChild($document->createElement("hoby", "Swiming"));

$student->appendChild($hobies);
$students->appendChild($student);

$student = $document->createElement("student");
$name = $document->createAttribute('name');
$name->value = "B Poltek";
$student->appendChild($name);
$age = $document->createElement("age", 21);
$student->appendChild($age);
$address = $document->createElement("address", "Jalan Bandung No 10");
$student->appendChild($address);
$is_graduated = $document->createElement("is_graduated", false);
$student->appendChild($is_graduated);
$hobies = $document->createElement("hobies");
$hobies->appendChild($document->createElement("hoby", "Fishing"));
$hobies->appendChild($document->createElement("hoby", "Climbing"));
$hobies->appendChild($document->createElement("hoby", "Swiming"));

$student->appendChild($hobies);
$students->appendChild($student);

$student = $document->createElement("student");
$name = $document->createAttribute('name');
$name->value = "Reno Poltek";
$student->appendChild($name);
$age = $document->createElement("age", 32);
$student->appendChild($age);
$address = $document->createElement("address", "Jalan Bandung Barat No 10");
$student->appendChild($address);
$is_graduated = $document->createElement("is_graduated", true);
$student->appendChild($is_graduated);

$hobies = $document->createElement("hobies");
$hobies->appendChild($document->createElement("hoby", "Fishing"));
$hobies->appendChild($document->createElement("hoby", "Climbing"));
$hobies->appendChild($document->createElement("hoby", "Swiming"));

$student->appendChild($hobies);

$students->appendChild($student);


echo $document->saveXML();

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