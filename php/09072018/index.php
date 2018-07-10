<?php

$name = htmlspecialchars($_GET['name']);
$greeting = "Hello, $name";
require('views/index.view.php');