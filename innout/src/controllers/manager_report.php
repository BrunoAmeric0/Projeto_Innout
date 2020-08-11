<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
requireValidSession(true);

$activeUsersCount = User::getActiveUsersCount();
$absentUsers = WorkingHours::getAbsentUsers();

$yearAndMonth = (new DateTime())->format('Y-m');
$seconds = WorkingHours::getWorkedTimeInMonth($yearAndMonth);
$hoursInMonth = explode(':', getTimeStringFromSeconds($seconds))[0];

loadTemplateView('manager_report', [
    'activeUsersCount' => $activeUsersCount,
    'absentUsers' => $absentUsers,
    'hoursInMonth' => $hoursInMonth,
]);