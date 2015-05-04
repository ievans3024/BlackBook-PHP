<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlackBook<?php /* subtitle code here */ ?></title>
    <link type="text/css" rel="stylesheet" href="/static/css/lib/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/static/css/lib/bootstrap-theme.min.css">
    <link type="text/css" rel="stylesheet" href="/static/css/blackbook.min.css">
</head>
<body ng-app="BlackBook">
    <div class="navbar navbar-inverse navbar-top" role="navigation">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">BlackBook</a>
        </div>
        <div class="navbar-form navbar-left">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#new-entry">
                <span>New Contact</span>
                <span class="glyphicon glyphicon-plus"></span>
            </button>
        </div>
        <form id="contact-search" class="navbar-form navbar-right" role="form">
            <div class="form-group">
                <input id="search" class="form-control" type="text" placeholder="Search for a contact">
            </div>
        </form>
    </div>
</body>
</html>