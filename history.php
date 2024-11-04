<?php include 'include/header.php'; ?>

<?php include 'include/mainHeader.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Member Genius List</h4>
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
                    Your Genius
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
                    <div class="table-responsive">
                        <table id="tableHistory" class="table tableLead m-0">
                            <thead>
                                <tr>
                                    <th>SLNO</th>
                                    <th>Title</th>
                                    <th>Generate Date</th>
                                    <th>Actione</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <b>1</b>
                                    </td>
                                    <td>
                                        <p class="m-0">DemoGrapher Genius- Version 1-2024-01-18 12:29:14</p>
                                    </td>
                                    <td>2024-01-18 12:29:14</td>
                                    <td>
                                        <a href="" class="btn btnPrimary style2">Edit</a>
                                        <a href="" class="btn btnSecondary style2">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>2</b>
                                    </td>
                                    <td>
                                        <p class="m-0">DemoGrapher Genius- Version 1-2024-01-18 12:29:14</p>
                                    </td>
                                    <td>2024-01-18 12:29:14</td>
                                    <td>
                                        <a href="" class="btn btnPrimary style2">Edit</a>
                                        <a href="" class="btn btnSecondary style2">View</a>
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

<!-- Modal -->
<div class="modal fade userModalOne" id="newLeadModal" tabindex="-1" aria-labelledby="newLeadModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Add New Lead</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Avatar</label>
                            <div class="profileImg">
                                <img src="images/avatar/1.png" alt="">
                                <div class="uploadBtn">
                                    <input type="file" name="user_image" id="" accept=".png,.jpg">
                                    <span>Add</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Catagory</label>
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Address</label>
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="Street Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="State / Province">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btnWhite style2" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btnPrimary style2">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php include 'include/mainFooter.php'; ?>

<?php include 'include/footer.php'; ?>