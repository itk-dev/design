<!DOCTYPE html>
<html>
<head>
    <title>Innovationscenteret</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/menu_toggle.js"></script>
</head>
<body>
<div class="overlay" onclick="menu_toggle()"></div>
<header role="banner">
    <nav class="nav">
        <div class="nav--logo"><a href="#">Logo</a></div>
        <div class="nav--links">
            <a href="#" class="nav--link">MenuPunkt1</a>
            <a href="#" class="nav--link">MenuPunkt2</a>
            <a href="#" class="nav--link">MenuPunkt3</a>
            <a href="#" class="nav--link">Menupunkt4</a>
        </div>
        <button class="nav--menu c-hamburger" onclick="menu_toggle()">
            <span>toggle menu</span>
        </button>
    </nav>
    <nav class="hamburger-menu">
        <button class="c-hamburger c-hamburger--htx" onclick="menu_toggle()">
            <span>toggle menu</span>
        </button>
        <div class="hamburger-menu--links">
            <a href="#" class="hamburger-menu--link">MenuPunkt1</a>
            <a href="#" class="hamburger-menu--link">MenuPunkt2</a>
            <a href="#" class="hamburger-menu--link">MenuPunkt3</a>
            <a href="#" class="hamburger-menu--link">Menupunkt4</a>
        </div>
    </nav>

</header>