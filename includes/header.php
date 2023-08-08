<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:	 #00004d;">
        <div class="container-fluid">
            <a href="index.php"> <img src="images/health-pharmacy-logo.jpg" id="image"></a><i style="color:greenyellow" font face = "Times New Roman">PHARMACY</i>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" style="color: white; " aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php" style="color: white; font-size:bold;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php" style="color: white; font-size:bold;">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php" style="color: white; font-size:bold;">Admin</a>
                    </li>
                </ul>
                <?php

                if (!isset($_SESSION['user_id'])) {
                    echo "<a class='nav-link' href='login.php' style='color: white; font-size:bold;'> Log in</a>";
                } else {
                    $check_user_id = check_user($_SESSION['user_id']);
                    if ($check_user_id == 1) {
                        echo "<a class='nav-link' href='logout.php' style='color: white; font-size:bold;'> Log out</a>  ";
                    } else {
                        post_redirect("logout.php");
                    }
                }
                ?>


            </div>
        </div>
    </nav>
</header>

