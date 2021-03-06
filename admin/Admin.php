<?php session_start();
include __DIR__."/../index.php";
if(isset($_SESSION['login_user'])){
	header("Location: /E-Commerce/views/home.php");
}
?>

<?php include __DIR__."/../components/Navbar.php"?>
    <style>
   

    .form-control {
        font-size: 15px;
    }

    .form-control,
    .form-control:focus,
    .input-group-text {
        border-color: #e1e1e1;
    }

    .form-control,
    .btn {
        border-radius: 13px;

    }

    .signup-form {
        width: 400px;
        margin: -20px auto;
        padding: 30px 0;
    }

    .signup-form form {
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .signup-form h4 {
        color: #333;
        font-weight: bold;
        margin-top: 0;
    }

    .signup-form hr {
        margin: 0 -30px 20px;
    }

    .signup-form .form-group {
        margin-bottom: 20px;
    }

    .signup-form label {
        font-weight: normal;
        font-size: 15px;
    }

    .signup-form .form-control {
        min-height: 38px;
        box-shadow: none !important;
    }

    .signup-form .input-group-addon {
        max-width: 42px;
        text-align: center;
    }

    .signup-form .btn,
    .signup-form .btn:active {
        font-size: 16px;
        font-weight: bold;
        background: #19aa8d !important;
        border: none;
        min-width: 140px;
        position: relative;
        left: 90px;

    }

    .signup-form .btn:hover,
    .signup-form .btn:focus {
        background: #179b81 !important;
    }

    .signup-form a {
        color: #fff;
        text-decoration: underline;
    }

    .signup-form a:hover {
        text-decoration: none;
    }

    .signup-form form a {
        color: #19aa8d;
        text-decoration: none;
    }

    .signup-form form a:hover {
        text-decoration: underline;
    }

    .signup-form .fa {
        font-size: 21px;
    }

    .signup-form .fa-paper-plane {
        font-size: 18px;
    }

    .signup-form .fa-check {
        color: #fff;
        left: 17px;
        top: 18px;
        font-size: 7px;
        position: absolute;
    }
    </style>
<div class ="container-fluid bg-light">
    <div class="signup-form bg-light">
        <form action="AdminSignup.php" method="post">
            <h4>Admin Sign Up</h4>
            <p>Please fill in this form to create an account!</p>
            <hr>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fa fa-user"></span>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="_name" placeholder="Username" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-paper-plane"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control" name="_email" placeholder="Email Address"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="_psw" placeholder="Password" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="confirm_psw" placeholder="Confirm Password"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a
                        href="#">Terms of Use</a> and Privacy Policy. </label>
            </div>
            <div class="form-group">
                <button name="sign_up" type="submit" class="btn btn-primary btn-lg" onclick="myFunction()">Sign Up</button>
            </div>
            Own a business??<a href="BusinessUserSignup.php"> Get a business account</a>
    </div>
    </form>
    <div class="text-center">Already have an account? <a href="LoginForm.php">Login here</a></div>
    </div>
    </div>

    <script>

function myFunction() {
    alert("SignUp successful. Please Login to continue.")
}
</script>
