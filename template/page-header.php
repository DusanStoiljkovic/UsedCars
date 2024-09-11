<header>
        <div class="container">
            <a href="index.php"><h1>Used Cars</h1></a>
            <div class="right-header-wrapper">
                <!-- <form method="post" action="">
                    <input type="text" name="search">
                    <button>Trazi</button>
                </form> -->
                <div class="log-wrapper">
                    <?php if (!isset($_SESSION['log_status'])): ?>
                        <a class="btn btn-warning" href="index.php?module=login">Log in</a>
                    <?php else: ?>
                        <a class="btn btn-warning" href="index.php?module=logout">Log out</a>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['log_status'])): ?>
                    <a class="btn btn-warning" href="index.php?module=register">Register</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="index.php?module=">HOME</a></li>
                <li><a href="index.php?module=search">SEARCH</a></li>
                <li><a href="index.php?module=fast_search">FAST VIEW OF NEW CARS</a></li>
                <li><a href="index.php?module=add_car">CREATE NEW AD</a></li>
                <?php if (isset($_SESSION['log_status'])): ?>
                    <li><a href="index.php?module=mycars">MY ADS</a></li>
                <?php endif ?>
                <li><a href="index.php?module=contact">CONTACT</a></li>
            </ul>
        </div>
    </nav>

   