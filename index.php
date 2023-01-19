<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online notes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="styling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lobster&family=Quicksand:wght@700&display=swap" rel="stylesheet">
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModel" data-toggle="modal">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron" id="mycontainer">
        <h1>Online Notes App</h1>
        <p>Your Notes With You Whereever you go</p>
        <p>Easy to use,protects all your notes!</p>
        <button type="button" class="btn btn-lg green signup" data-target="#signupModel" data-toggle="modal">
            Sign up-It's free
        </button>
    </div>

    <!-- login -->
    <form action="" method="post" id="loginform">
    <div class="modal" id="loginModel" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-disvmiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Login:
              </h4>
          </div>
          <div class="modal-body">
            <!-- loginpmessage from php file -->
            <div id="loginmessage">
            </div>
           <div class="form-group">
            <label for="loginemail" class="sr-only">Email:</label>
            <input class="form-control" type="email" name="loginemail" placeholder="Email" maxlength="50" id="loginemail">
           </div>
           <div class="form-group">
            <label for="loginpassword" class="sr-only">Password:</label>
            <input class="form-control" type="password" name="loginpassword" placeholder="Password" maxlength="30" id="loginpassword">
           </div>
           <div class="checkbox">
            <label for="">
                <input type="checkbox" name="rememberme" id="rememberme">Remember me
            </label>
            <a href="" class="pull-right" style="cursor:pointer" data-dismiss="modal" data-target="#forgotpasswordModel" data-toggle="modal">Forget Password</a>
           </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn green" name="login" value="Login">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="#signupModel" data-toggle="modal">
              Register
            </button>
          </div>
      </div>
  </div>
                </div>
    </form>
<!-- Signup -->
    <form action="" method="post" id="signupform">
    <div class="modal" id="signupModel" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-disvmiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                sign up today and Start using our online Notes App! 
              </h4>
          </div>
          <div class="modal-body">
            <!-- signupmessage from php file -->
            <div id="signupmessage">

            </div>
           <div class="form-group">
            <label for="username" class="sr-only">Username:</label>
            <input class="form-control" type="text" name="username" placeholder="Username" maxlength="30" id="username">
           </div>
           <div class="form-group">
            <label for="email" class="sr-only">Email:</label>
            <input class="form-control" type="email" name="email" placeholder="Email Address" maxlength="50" id="email">
           </div>
           <div class="form-group">
            <label for="password2" class="sr-only">Choose a Password:</label>
            <input class="form-control" type="password" name="password" placeholder="Choose a Password" maxlength="30" id="password">
           </div>
           <div class="form-group">
            <label for="password2" class="sr-only">Confirm Password:</label>
            <input class="form-control" type="password" name="password2" placeholder="Confirm Password" maxlength="30" id="password2">
           </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn green" name="signup" value="Sign up">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
          </div>
      </div>
  </div>
                </div>
    </form>

    <!-- forgot Password page -->
    <form action="" method="post" id="forgotpasswordform">
    <div class="modal" id="forgotpasswordModel" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-disvmiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Forgot Password? Enter Your Email Address
              </h4>
          </div>
          <div class="modal-body">
            <!-- forgotmessage from php file -->
            <div id="forgotpasswordmessage">
            </div>
           <div class="form-group">
            <label for="forgotemail" class="sr-only">Forgot Email:</label>
            <input class="form-control" type="email" name="forgotemail" placeholder="Email" maxlength="50" id="forgotemail">
           </div>
          <div class="modal-footer">
            <input type="submit" class="btn green" name="forgotpassword" value="submit">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModel" data-toggle="modal">
              Register
            </button>
</div>
          </div>
      </div>
  </div>
</div>
</form>

    <div class="footer">
        <div class="container">
            <p>DheerajDeveloper.com copyright &copy;2022-<?php $today=date("Y"); echo $today?>.</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>