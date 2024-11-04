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
                    Anthony, It’s Time To Earn Credits!
                    <small>
                        Unlock New Opportunities with Innov8Agent Affiliate Program
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
                        <div class="col-12">
                            <div class="bgBox">
                                <h6>
                                    Your Affiliate Account
                                    <span>Earn Credits Towards Your Account</span>
                                </h6>
                                <canvas id="lineChart3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-y1">
                        <div class="col-md-5">
                            <div class="bgBox">
                                <div class="iconTitle">
                                    <div class="leftSec">
                                        <em class="icon-pieChart"></em>
                                        <span>
                                            Affiliate Sources
                                            <small>Which channels are responding to your Affiliate Links.</small>
                                        </span>
                                    </div>
                                </div>
                                <div class="graphTitle">
                                    <div class="row align-items-center m-0">
                                        <div class="col-7 p-0">
                                            <p class="m-0">
                                                <small>January, 2023</small>
                                                Channel Performance
                                            </p>
                                        </div>
                                        <div class="col-5 p-0">
                                            <canvas id="lineChartShare"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="pieChartChannels"></canvas>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="bgBox mb-3">
                                <div class="iconTitle">
                                    <div class="leftSec">
                                        <em class="icon-barChart"></em>
                                        <span>
                                            Commissions
                                            <small>Lifetime Accrued Commissions.</small>
                                        </span>
                                    </div>
                                    <div class="centerSec">
                                        <span>$890.93</span>
                                    </div>
                                    <div class="rightSec">
                                        <em class="icon-barChartTwo"></em>
                                    </div>
                                </div>
                            </div>
                            <div class="bgBoxTwo">
                                <div class="tableFilter mb-3">
                                    <div class="members">
                                        <h5>Affiliates</h5>
                                        <small>Active Affiliate Invites</small>
                                    </div>
                                    <div class="selectBox">
                                        <div class="form-group m-0">
                                            <div class="inputBox rightIcon">
                                                <select name="" id="" class="form-control">
                                                    <option value="">Newest</option>
                                                    <option value="">Oldest</option>
                                                    <option value="">Relevence</option>
                                                </select>
                                                <em class="icon-angleDown emRight"></em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tableAffiliate" class="table tableLead m-0">
                                        <thead>
                                            <tr>
                                                <th>Invited Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Channel</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jane Cooper</td>
                                                <td>(225) 555-0118</td>
                                                <td>jane@microsoft.com</td>
                                                <td>Facebook</td>
                                                <td>
                                                    <a href="#" class="statusBtn active">Active</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Floyd Miles</td>
                                                <td>(205) 555-0100</td>
                                                <td>floyd@yahoo.com</td>
                                                <td>Email</td>
                                                <td>
                                                    <a href="#" class="statusBtn inactive">Inactive</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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