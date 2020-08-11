<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf-8');

function requireValidSession($requiresAdmin = false)
{
    $user = $_SESSION['user'];
    if (!isset($user)) {
        header('Location: login.php');
        exit();
    } elseif ($requiresAdmin && !$user->is_admin) {
        addErrorMsg('Acesso negado!');
        header('Location: dashboard.php');
        exit();
    }
}
