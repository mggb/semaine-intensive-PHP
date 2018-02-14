<?php
/**
 * Created by PhpStorm.
 * User: gelbo
 * Date: 14/02/2018
 * Time: 19:14
 */

echo "sdffs";
session_start();
unset($_SESSION['connexion']);
header("Location: home.php");