<?php
require_once ('../backend/connect.php');
require_once ('../backend/news.php');

$news = $_REQUEST['content'];
$date = $_REQUEST['date'];
$url =  $_REQUEST['url'];


$sql = "INSERT INTO news (news, url, date) VALUES ('$news', '$url', '$date')";
$result = $conn->query($sql);
header('Location: news.php');