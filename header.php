<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Manager</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/dashboard.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Client Manager</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav choose_page">
                <li><a href="/calendar"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>
                <li class="active"><a href="/projects"><span class="glyphicon glyphicon-briefcase"></span> Projects</a></li>
                <li><a href="/users"><span class="glyphicon glyphicon-user"></span> users</a></li>
                <li><a href="/reports"><span class="glyphicon glyphicon-flag"></span> Reports</a></li>
                <li><a href="/settings/edit"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                            class="glyphicon glyphicon-user"></span>Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>