<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Exchange of knowledge</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php?stranica=pocetna">Home</a>
                    </li>
                    <li>
                        <a href="index.php?stranica=onama">About</a>
                    </li>
                    <li>
                        <a href="index.php?stranica=postovi">Sample Post</a>
                    </li>
                    <?php if(!isset($_SESSION['korisnik'])): ?>
                        <li>
                            <a href="index.php?stranica=register">Register</a>
                        </li>
                        <li>
                            <a href="index.php?stranica=login">Login</a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="auth/logout.php">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
