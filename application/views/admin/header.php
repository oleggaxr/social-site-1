<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/admin.css">
</head>
<body>
<div id="content">
    <ul id="navbar">
        <li class="left_button<?php if(isset($section) && $section==="news") echo " active"; ?>"><a href="/admin/news">Новости</a></li>
        <li<?php if(isset($section) && $section==="donations") echo ' class="active"'; ?>><a href="/admin/donations">Просьбы о помощи</a></li>
        <li<?php if(isset($section) && $section==="volunteers") echo ' class="active"'; ?>><a href="/admin/volunteers">Добровольцы</a></li>
        <li class="rigth_button"><a href="#">Пока пусто</a></li>
    </ul>