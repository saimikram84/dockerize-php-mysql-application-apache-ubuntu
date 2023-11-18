<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
                <span>
                    Gym
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item <?= $pageName=='index.php'?'active':'' ?>">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?= $pageName=='why.php'?'active':'' ?>">
                            <a class="nav-link" href="why.php"> Why us </a>
                        </li>
                        </li>
                        <li class="nav-item <?= $pageName=='trainer.php'?'active':'' ?>">
                            <a class="nav-link" href="trainer.php"> trainers</a>
                        </li>
                        <li class="nav-item <?= $pageName=='contact.php'?'active':'' ?>">
                            <a class="nav-link" href="contact.php"> Contact Us</a>
                        </li>
                        <li class="nav-item <?= $pageName=='login.php'?'active':'' ?>">
                            <a class="nav-link" href="login.php"> Login</a>
                        </li>
                        <li class="nav-item <?= $pageName=='register.php'?'active':'' ?>">
                            <a class="nav-link" href="register.php"> Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->