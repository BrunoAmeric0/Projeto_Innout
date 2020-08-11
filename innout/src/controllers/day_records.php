<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
requireValidSession();

$date = (new Datetime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);
loadTemplateView('day_records', ['today' => $today]);