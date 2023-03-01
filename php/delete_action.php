<?php

$xml = simplexml_load_file("../data/comments.xml");

$id = $_POST["id"];
$expression = "comment[@id='$id']";

$comment = $xml->xpath($expression);
foreach ($comment as $item) unset($item[0]);

$xml->asXML("../data/comments.xml");

header("Location: ../list.php");
