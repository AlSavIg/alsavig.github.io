<?php
$xml = simplexml_load_file("../data/comments.xml");

$id = uniqid();
$title = trim($_POST["title"]);
$text = trim($_POST["text"]);
$time = date("d.m.y");

$comment = $xml->addChild('comment');
$comment->addAttribute('id', $id);
$comment->addChild('title', $title);
$comment->addChild('text', $text);
$comment->addChild('time', $time);

$xml -> asXML("../data/comments.xml");

if (strlen($title) > 40) {
    header("Location: ../update.php?id=$id");
    die();
}

header("Location: ../list.php");