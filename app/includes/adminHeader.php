<header>
        <a href="<?php echo BASE_URL . '/index.php'?>" class="logo">
            <img src="../../assets/images/bja_logo.png" alt="logo" class="bja-logo" />
            <h1 class="logo-text"><span>Bogura-Joypurhat</span>Association</h1>
        </a>
        <i class="fa fa-bars menu-toggle "></i>
        <ul class="nav">
            <!-- <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li> -->
            <?php if(isset($_SESSION['username'])): ?>
                <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username'];?>
                    <i class="fa fa-chevron-down" style="font-size: .8em"></i>
                </a>
                <ul style="left: 0px;">
                    <li><a href="<?php echo BASE_URL . '/logout.php'?>" class="logout">Logout</a></li>
                </ul>
                </li>
            <?php endif;?>
            

        </ul>
    </header>