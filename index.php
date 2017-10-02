<!DOCTYPE html>
<html>
<head>
    <title>Game</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/css/page.css">
    <link rel="stylesheet" type="text/css" href="/css/content.css">
	<link rel="stylesheet" type="text/css" href="/css/button.css">
    <link rel="stylesheet" type="text/css" href="/css/top-list.css">
</head>
<header class="header header_theme_ligth-wood">
    <h1 class="logo"><a class="logo-link" href="/index.php">HELPMEPLS</a></h1>
    <?php
        require('menu.php');
        require('content.php');
        echo Menu::renderMenu($_GET['page']);
    ?>
</header>
    <?php
        echo Content::getContent($_GET['page']);
    ?>
</html>