<?php

$titulo = (isset($titulo)) ? $titulo : "Titulo Padrão";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="index.php">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alkalami&family=Montserrat:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            outline: none;
            font-family: sans-serif;
        }

        :root {
            --purple: #9400d3;
            --blue: #00285f;
            --gray: #ededed;
        }

        html,
        body {
            width: 100%;
            overflow-x: hidden;
        }

        header {
            width: 100%;
            height: 500px;
            background: var(--blue);
        }

        .content {
            max-width: 1000px;
            min-width: 300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            padding: 10px;
            font-size: 15px;
            font-family: 'Lato', sans-serif;
        }

        nav {
            width: 100%;
            height: 125px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-size: 35px;
            color: white;
            cursor: pointer;
            font-family: 'Lato', sans-serif;
        }

        .brand strong {
            font-size: 35px;
            color: var(--purple);
            cursor: pointer;
            font-family: 'Lato', sans-serif;
        }

        nav ul {
            display: flex;
            flex-direction: row;
        }

        nav ul li {
            list-style: none;
            padding: 10px;
            cursor: pointer;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        nav ul li a:hover {
            color: #9400d3;
        }

        nav ul button {
            border: 1px solid white;
            background: transparent;
            padding: 8px 40px;
            cursor: pointer;
            margin-left: 30px;
            color: white;
            font-weight: bold;
            border-radius: 4px;
        }


        nav ul button:hover {
            transition: background, color 0.6s;
            background: var(--purple);
            color: white;
        }

        .content .header-block {
            max-width: 1000px;
            min-width: 300px;
            height: 450px;
            background: var(--purple);
            border-radius: 8px;
            box-shadow: 1px 0px 10px 0px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 1px 0px 10px 0px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 1px 0px 10px 0px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 10;
            padding: 10px;
        }

        .header-block img {
            width: 40%;
            position: absolute;
            right: 2%;
            bottom: 2%;
        }


        .header-block.text {
            position: absolute;
            bottom: 30%;
            left: 15%;
        }

        .header-block .text h2 {
            color: white;
            margin-bottom: 20px;
            text-align: right;
            transform: translateX(-20px);
            transition: transform 0.5s;
        }

        .header-block .text p {
            max-width: 280px;
            color: white;
            text-align: right;
            transition: transform 0.4s;
        }

        /* product catalogos */

        section .catalog {
            width: 100vw;
            padding: 100px;
        }

        section .filter-card {
            width: 980px;
            height: 150px;
            background-color: var(--gray);
            border-radius: 8px;
            margin: 0 auto;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        .search-input {
            width: 700px;
            height: 50px;
            border: none;
            border-radius: 4px 0px 0px 4px;
            text-indent: 10px;
        }

        .search-button {
            width: 150px;
            height: 50px;
            border-radius: 0px 4px 4px 0px;
            border: none;
            background-color: var(--purple);
            color: white;
            cursor: pointer;
            font-size: 1.1em;
            transition: 0.2s ease;
        }

        .search-button:hover {
            background-color: #dedede;
            color: var(--purple);
        }

        .title-wrapper-catalog {
            margin-top: 200px;
            padding-bottom: 20px;
        }

        section .card-wrapper {
            max-width: 1000px;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            grid-gap: 30px;
            padding-top: 50px;
        }


        section .card-item {
            height: 400px;
            background-color: var(--gray);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        .card-content {
            height: 40%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        .card-item img {
            width: 85%;
        }

        .card-item h4 {
            width: 90%;
        }

        .card-item p {
            width: 90%;
            font-style: italic;
            color: #00000070
        }

        .card-item button {
            width: 90%;
            padding: 15px 0px;
            border: none;
            background: var(--purple);
            border-radius: 4px;
            color: white;
            font-weight: bold;
            font-size: 1.1em;
            cursor: pointer;
            transition: 0.3s ease;
            margin-bottom: 10px;
        }

        .card-item button:hover {
            background: #dedede3b;
            color: var(--purple);
        }


        /* Sobre */

        .about {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 10px;
        }

        .about-content {
            max-width: 1000%;
            min-width: 300px;
            height: 600px;
            background: #dedede3b;
            margin: 0 auto;
            border-radius: 8px;
            z-index: 10;
            padding: 10px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }


        .left {
            width: 25%;
            min-width: 300px;
            height: 100%;
            background: white;
            border-radius: 8px;
        }

        .right {
            width: 55%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding-top: 10%;
        }

        .right h3 {
            text-align: right;
            width: 90%;
            margin-bottom: 20px;
        }

        .right p {
            max-width: 90%;
            font-size: 1em;
            letter-spacing: 2px;
            text-align: right;
            color: rgba(0, 0, 0, 0.5)
        }
    </style>

</head>

<body>
    <?php
    include __DIR__ . './nav.php';
    ?>