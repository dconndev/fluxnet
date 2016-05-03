<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php include "strings/str.flux.name.php"; ?></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Messages</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Friends</a></li>
            <li class="divider"></li>
            <li>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile Settings</a></li>
                    <li><a href="#">Account Settings</a></li>
                </ul>  
            </li>
            <li class="divider"></li>
            <li><a href="#">Search <?php include "strings/str.flux.name.php"; ?>... </a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>