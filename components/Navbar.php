
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand">E-commerce<b>Solution</b></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <a href="/E-Commerce/views/home.php" class="nav-item nav-link active">Home</a>
            <a href="/E-Commerce/views/products.php" class="nav-item nav-link">Products</a>
            <a href="/E-Commerce/views/Community.php" class="nav-item nav-link">Community</a>
            <a href="/E-Commerce/views/Contact.php" class="nav-item nav-link">Contact</a>
            <a href="/E-Commerce/views/About.php" class="nav-item nav-link">About</a>

        </div>
        <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown search-dropdown">
                <a data-toggle="dropdown" class="nav-item nav-link dropdown-toggle" href="#"><i
                        class="fa fa-search"></i></a>
                <a data-toggle="dropdown" class="nav-item nav-link dropdown-toggle d-none" href="#"><i
                        class="fa fa-close"></i></a>
                <div class="dropdown-menu">
                    <div>
                        <form action="search.php" method="POST">
                            <div class="input-group search-box">
                                <input type="text" id="search" class="form-control" placeholder="Search here..." name="search">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a href="/E-Commerce/views/cart.php" class="nav-item nav-link"> <i class="fa fa-shopping-cart px-1"></i>Cart<span
                    class="badge badge-success"><?php iF(isset($_SESSION['shopping_cart'])){echo count($_SESSION['shopping_cart']);}?></span></a>
                    <?php if(isset($_SESSION['login_user'])){?>
                        <a href="#" class="nav-item nav-link"><i class="fa fa-user px-1"></i><?php echo $_SESSION['login_user']?></i></a>
                        <a href="/E-Commerce/config/Logout.php" class="nav-item nav-link">Log Out</i></a>

                    <?php } else {?>   
                            <a href="/E-Commerce/views/Login.php" class="nav-item nav-link">Login</i></a>
                            <a href="/E-Commerce/views/SignUp.php" class="nav-item nav-link">Signup</i></a>
                    <?php }?>

        </div>
    </div>
</nav>