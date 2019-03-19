<!doctype html>
<html>
<head>
  <title>MineQuest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #666;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;
    font-size: 20px;
    color: #111;
  }
  p{
    font-family: Montserrat, sans-serif;
    color: #222;
    font-size: 35px;
  }

  .cadre{
    display: block;
    border-bottom: #CCC 5px solid;
    position: absolute;
    left: 80px;
    background: #2d2d30;
    width: 30%;
    z-index: 8;
    padding: 20px;
    opacity: 1;
    overflow: hidden;
    margin-left: 31%;
    margin-top: 5%;
    max-height: 50%;
  }

  .container {
    padding: 80px 120px;
  }
  .fond{
    background-image: url("css/fond6.png");
    width: 100%;
    height: auto;
    background-repeat: no-repeat;
    background-size: cover;
    position:absolute;
    bottom:0;
    top:0;
  }
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 1;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 10px;
    right:0;
    width: 100%;
    position:absolute;
    bottom:0;
  }

  table{
    color: #d5d5d5;
    margin-left: 60px;
    padding: 10px;
  }

  .info{
    margin-left: 150px;

  }

  input{
    background-color: #DCDCDC;
    border: 0;
    color: #222;
    margin: 2px;
    width: 100%;
    margin-left: 20px;
    margin-bottom: 5px;

  }

  .bouton{
    background-color: #2d2d30;
    border: solid 1px;
    border-color: white;
    margin-top: 30px;
    margin-left: -80px;
    color:#DCDCDC;
  }
  .media{
    display: inline-block;
    position:absolute;
    bottom:100px;
    left: 30%;
    right: 34%;
    width: 40%;
  }
  </style>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="page">
