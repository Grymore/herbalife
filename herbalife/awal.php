<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/signin.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->

    <script src="https://use.typekit.net/ayg4pcz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <title>Login User
    </title>

    <div class="container">
    <h1 class="welcome text-center">Welcome to <br> LA Mansoer</h1>
        <div class="card card-container">
        <h2 class='login_title text-center'>Login</h2>
        <hr>

            <form class="form-signin" action="includes/login.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Email</p>
                <input type="text" id="inputEmail" name="email" class="login_box" placeholder="Email" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="inputPassword" name="password" class="login_box" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        
                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit" name="login">Login</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->