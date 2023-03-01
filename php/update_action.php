<?php

$xml = simplexml_load_file("../data/comments.xml");

$id = $_POST["id"];
$title = trim($_POST["title"]);
$text = trim($_POST["text"]);
$time = date("d.m.y");

if (strlen($title) > 40) {
    header("Location: ../update.php?id=$id");
    die();
}

$new_elem = "<comment id='$id'><title>$title</title>
<text>$text</text>
<time>$time</time></comment>";

$base = simplexml_load_string($new_elem);

$expression = "comment[@id='$id']";
$comment = $xml->xpath($expression)[0];

$domToChange = dom_import_simplexml($comment);
$domReplace  = dom_import_simplexml($base);
$nodeImport  = $domToChange->ownerDocument->importNode($domReplace, TRUE);
$domToChange->parentNode->replaceChild($nodeImport, $domToChange);

$xml->asXML("../data/comments.xml");

header("Location: ../list.php");