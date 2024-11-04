<?php include 'include/header.php'; ?>

<?php include 'include/mainHeader.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Member Dashboard</h4>
            </div>
        </div>
    </div>
</section>

<!-- Member Heading -->
<section class="memberHeading">
    <div class="container">
        <div class="row gap-y1">
            <div class="col-lg-3 col-md-4">
                <a href="#" class="btn btnPrimary">
                    New Project <em class="icon-plus"></em>
                </a>
            </div>
            <div class="col-lg-9 col-md-8 text-center">
                <h5>
                    Anthony, Welcome to Your Innov8Agent Washboard!
                    <small>
                        Account analytics, track your progress, and gain insights to empower your real estate journey.
                    </small>
                </h5>
            </div>
        </div>
    </div>
</section>

<!-- Member One -->
<section class="memberOne py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-3 col-md-4">
                <!-- Sidebar -->
                <?php include 'include/memberSidebar.php'; ?>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="contentSec">
                    <div class="row gap-y1">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="dashboardCardOne increase">
                                <p>Words Generated</p>
                                <h4>8,265
                                    <span>
                                        +11.02% <em class="icon-increase"></em>
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="dashboardCardOne decrease">
                                <p>Images Created</p>
                                <h4>3,671
                                    <span>
                                        -0.03% <em class="icon-decrease"></em>
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="dashboardCardOne increase">
                                <p>Social Shares</p>
                                <h4>156
                                    <span>
                                        +15.03% <em class="icon-increase"></em>
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="dashboardCardOne increase">
                                <p>Leads Added</p>
                                <h4>2,318
                                    <span>
                                        +6.08% <em class="icon-increase"></em>
                                    </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-y1">
                        <div class="col-lg-9 col-md-8">
                            <div class="bgBox h-100">
                                <h6>
                                    Your Usage
                                    <span>Operating Status</span>
                                </h6>
                                <canvas id="lineChart3"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="bgBox h-100">
                                <h6>Shares by Platform</h6>
                                <ul class="menuListOne socialShareList">
                                    <li>
                                        <b>Google</b>
                                        <div>
                                            <span class="nthOne"></span>
                                            <span class="nthTwo"></span>
                                            <span class="nthThree"></span>
                                            <span class="nthFour"></span>
                                            <span class="nthFive"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <b>Facebook</b>
                                        <div>
                                            <span class="nthOne"></span>
                                            <span class="nthTwo"></span>
                                            <span class="nthThree"></span>
                                            <span class="nthFour"></span>
                                            <span class="nthFive"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <b>Instagram</b>
                                        <div>
                                            <span class="nthOne"></span>
                                            <span class="nthTwo"></span>
                                            <span class="nthThree"></span>
                                            <span class="nthFour"></span>
                                            <span class="nthFive"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <b>X</b>
                                        <div>
                                            <span class="nthOne"></span>
                                            <span class="nthTwo"></span>
                                            <span class="nthThree"></span>
                                            <span class="nthFour"></span>
                                            <span class="nthFive"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <b>TikTok</b>
                                        <div>
                                            <span class="nthOne"></span>
                                            <span class="nthTwo"></span>
                                            <span class="nthThree"></span>
                                            <span class="nthFour"></span>
                                            <span class="nthFive"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <b>LinkedIn</b>
                                        <div>
                                            <span class="nthOne"></span>
                                            <span class="nthTwo"></span>
                                            <span class="nthThree"></span>
                                            <span class="nthFour"></span>
                                            <span class="nthFive"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-y1">
                        <div class="col-12 text-center">
                            <h4 class="centerHeading m-0">
                                <img src="images/icons/emoji/1.svg" alt="">
                                Featured Geniuses
                            </h4>
                        </div>
                        <div class="col-md-4">
                            <div class="geniuseCardOne">
                                <div class="details">
                                    <h6>
                                        <img src="images/icons/member/brands/zapier.svg" alt="">
                                        Create purchase agreements.
                                    </h6>
                                    <p>
                                        Build custom automations and integrations with apps.
                                    </p>
                                </div>
                                <div class="views">
                                    <a href="geniusesDetails.php">View Genius</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="geniuseCardOne">
                                <div class="details">
                                    <h6>
                                        <img src="images/icons/member/brands/zendesk.svg" alt="">
                                        Create Google Ads copy.
                                    </h6>
                                    <p>
                                        Link and automate Zendesk tickets.
                                    </p>
                                </div>
                                <div class="views">
                                    <a href="geniusesDetails.php">View Genius</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="geniuseCardOne">
                                <div class="details">
                                    <h6>
                                        <img src="images/icons/member/brands/chrome.svg" alt="">
                                        Write blog posts.
                                    </h6>
                                    <p>
                                        Link your Google account share bookmark across your entire team.
                                    </p>
                                </div>
                                <div class="views">
                                    <a href="geniusesDetails.php">View Genius</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-y1">
                        <div class="col-12 text-center">
                            <div class="sectionTitle">
                                <h6 class="justify-content-center">
                                    <em class="icon-arrowBottomRight"></em> Updates
                                </h6>
                                <p>
                                    We have added 2 new Geniuses for you! Give them a try!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="geniuseCardOne">
                                <div class="details">
                                    <h6>
                                        <img src="images/icons/member/brands/zapier.svg" alt="">
                                        Create purchase agreements.
                                    </h6>
                                    <p>
                                        Build custom automations and integrations with apps.
                                    </p>
                                </div>
                                <div class="views">
                                    <a href="geniusesDetails.php">View Genius</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="geniuseCardOne">
                                <div class="details">
                                    <h6>
                                        <img src="images/icons/member/brands/zendesk.svg" alt="">
                                        Create Google Ads copy.
                                    </h6>
                                    <p>
                                        Link and automate Zendesk tickets.
                                    </p>
                                </div>
                                <div class="views">
                                    <a href="geniusesDetails.php">View Genius</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/mainFooter.php'; ?>

<?php include 'include/footer.php'; ?>