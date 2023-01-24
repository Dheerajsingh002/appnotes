<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online notes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">    <link rel="stylesheet" href="styling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lobster&family=Quicksand:wght@700&display=swap" rel="stylesheet">
<style>
    #container{
        margin: 120px;
    }
    #notepad,#allNotes,#done{
        display:none;
    }
    .buttons{
        margin-bottom:20px;
    }
    textarea{
        width:100%;
        max-width:100%;
        color:#CA3DD9;
        font-size:16px;
        line-height:1.5em;
        border-left-width:20px;
        border-color:#CA3DD9;
        background-color:#FBEFFF;
        padding:10px;
    }
   
</style>
  </head>
  <body>
    <nav role="navigation" class="navbar-custom  navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Online Notes</a>
                <button type="button" class="navbar-toggle" data-target="#navbarcollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarcollapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li class="active"><a href="#">My Notes</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Logged in an <b>username</b></a></li>
                    <li><a href="#">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="buttons">
                    <button  type="button" id="addNote" class="btn btn-info btn-lg">Add Note</button>
                    <button  type="button" id="edit" class="btn btn-info btn-lg pull-right">Edit</button>
                    <button  type="button" id="done" class="btn green btn-lg pull-right">Done</button>
                    <button  type="button" id="allNotes" class="btn btn-info btn-lg">All Notes</button>
                </div>
                <div id="notepad">
                    <textarea name="" id=""  rows="10"></textarea>
                </div>
                <div id="notes" class="notes">


                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <p>DheerajDeveloper.com copyright &copy;2022-<?php $today=date("Y"); echo $today?>.</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>