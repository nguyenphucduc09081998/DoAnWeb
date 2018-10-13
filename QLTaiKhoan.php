<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/13/2018
 * Time: 2:17 PM
 */
session_start();
$_SESSION('username');
if(!$_SESSION('username'));{
    header("location:serverLogin_Register.php");
}
$username = isset($_SESSION[$username]);
$password = isset($_SESSION([$password]);
echo $username;
echo $password;
