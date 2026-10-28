<?php
$text = $_GET['text'] ?? 'Ничего не было передано';
header('Content-Type: text/plain; charset=UTF-8');
header('Content-Disposition: attachment; filename="downloaded.txt"');
echo $text;