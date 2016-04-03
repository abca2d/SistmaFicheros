<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<script  type="text/vbscript" src="Views/Resources/bootstrap/js/jquery-2.2.0.min.js"></script>
	<script  type="text/vbscript" src="Views/Resources/bootstrap/js/bootstrap.js"></script>
	<script  type="text/vbscript" src="Views/Resources/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Views/Resources/css/style.css">
	<link rel="stylesheet" href="Views/Resources/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="Views/Resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="Views/Resources/bootstrap/css/bootstrap-theme.css">
</head>
<body>
	    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="Views/Resources/img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin"  action='Views/validar.php' METHOD="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="user" name="inputEmail" id="inputEmail"  class="form-control" value="Martin" placeholder="Usuario"  required>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" value="Terrizano" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
            </form><!-- /form -->
            <a href='Views/validar.php' class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>