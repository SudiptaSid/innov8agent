<div class="mainHeader" id="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg align-items-center">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo/logoColor.svg" alt="">
            </a>
            <a href="login.php" class="btn btnPrimary">
                Sign In <em class="icon-arrowRight"></em>
            </a>
            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                aria-controls="navbarOffcanvas">
                <em class="icon-bars"></em>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="promo.php" class="nav-link">How It Works</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Why Innov8Agent</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="compare.php">Why Us</a></li>
                            <li><a class="dropdown-item" href="#.php">About Us</a></li>
                            <li><a class="dropdown-item" href="#.php">We Giveback</a></li>
                            <li><a class="dropdown-item" href="#.php">General Info</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link">The Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="mobileSidebar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="index.html" class="logo">
            <img src="images/logo/logoColor.svg" alt="">
        </a>
        <button type="button" class="closeBtn" data-bs-dismiss="offcanvas" aria-label="Close">
            <em class="fa fa-close"></em>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">
            <div class="accordion-item">
                <a class="accordion-button noIcon active" href="index.php">home</a>
            </div>
            <div class="accordion-item">
                <a class="accordion-button noIcon" href="promo.php">How It Works</a>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseService" aria-expanded="false" aria-controls="collapseService">Why
                    Innov8Agent</button>
                <div id="collapseService" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <ul class="menuListOne">
                            <li><a href="compare.php">Why Us</a></li>
                            <li><a href="#.php">About Us</a></li>
                            <li><a href="#.php">We Giveback</a></li>
                            <li><a href="#.php">General Info</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <a class="accordion-button noIcon" href="blog.php">The Blog</a>
            </div>
            <div class="accordion-item">
                <a class="accordion-button noIcon" href="contact.php">Contact Us</a>
            </div>
        </div>
        <div class="offcanvasBtn">
            <a href="register.php" class="btn btnPrimary">
                Sign Up! <em class="icon-arrowRight"></em>
            </a>
        </div>
    </div>
</div>