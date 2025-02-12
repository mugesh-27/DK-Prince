<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page = in_array($page, ['home', 'shows', 'recommend', 'about', 'contact']) ? $page : 'home';
include "pages/{$page}.php";
?>
