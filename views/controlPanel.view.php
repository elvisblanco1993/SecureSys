<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../libraries/bootstrap/css/bootstrap.css">
    <meta charset="utf-8">
    <title>SecureSys | Control Panel</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SecureSys</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class='btn btn-xs' data-toggle='modal' data-target='#createUser'>Add user</a></li>
                        <li><a href="../server/activitytracker.php" target="_blank">Demo Open Door</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">NA</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">NA</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">username <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">System Settings</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Help</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- Activity -->
<div class="container-fluid">
    <div class="row">
<!-- User Info -->

<script src="../libraries/jquery/dist/jquery.js" charset="utf-8"></script>
<script src="../libraries/bootstrap/js/bootstrap.js" charset="utf-8"></script>
</body>
</html>
