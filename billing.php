<?php include 'include/header.php'; ?>

<?php include 'include/mainHeader.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Billing Dashboard</h4>
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
            <div class="col-lg-9 col-md-8">
                <h3>
                    <img src="images/icons/emoji/1.svg" alt="">
                    Billing Dashboard
                </h3>
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
                <div class="contentSec bgBox">
                    <div class="tableFilterTwo">
                        <div class="row align-items-center gap-y1">
                            <div class="col-md-6 col-12">
                                <h6>Monthly Charges</h6>
                            </div>
                            <div class="col-md-4 col-12 offset-md-2 text-end">
                                <div class="form-group m-0">
                                    <div class="inputBox">
                                        <input type="date" class="form-control" />
                                    </div>
                                </div>
                                <h5 class="m-0">
                                    <small>Total paid</small> $0.00
                                </h5>
                            </div>
                        </div>
                    </div>
                    <canvas id="linechartBill"></canvas>
                    <div class="table-responsive">
                        <h6>Transaction History</h6>
                        <table id="tableBilling" class="table tableLead m-0">
                            <thead>
                                <tr>
                                    <th>Subscription</th>
                                    <th>Status</th>
                                    <th>Total Ammount</th>
                                    <th>Plan Name</th>
                                    <th>Created at</th>
                                    <th>Monthly Statement</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Annual</td>
                                    <td>Active</td>
                                    <td>$74.00</td>
                                    <td>Agent Excellence Plan</td>
                                    <td>01/01/2024</td>
                                    <td>
                                        $711.40
                                        <a href="" class="iconBtn downloadBtn">
                                            <em class="icon-documentDownload"></em>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/mainFooter.php'; ?>

<?php include 'include/footer.php'; ?>