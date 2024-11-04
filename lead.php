<?php include 'include/header.php'; ?>

<?php include 'include/mainHeader.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Lead Management</h4>
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
                    Lead Management |
                    <small>Transform Every Aspect of Your Real Estate Business</small>
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
                    <div class="tableFilter">
                        <div class="members">
                            <h5>My Leads</h5>
                            <small>Active Members</small>
                        </div>
                        <div class="leads">
                            <small>Total Leads</small>
                            <h5>5,423</h5>
                            <span>
                                <span>
                                    <em class="icon-arrowUp"></em> 16%
                                </span> this month
                            </span>
                        </div>
                        <div class="selectBox">
                            <div class="form-group m-0">
                                <label for="">Action:</label>
                                <div class="inputBox">
                                    <select name="" id="" class="form-control">
                                        <option value="">Export</option>
                                        <option value="">Import</option>
                                        <option value="">Download</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="selectBox">
                            <div class="form-group m-0">
                                <label for="">Short by:</label>
                                <div class="inputBox">
                                    <select name="" id="" class="form-control">
                                        <option value="">Newest</option>
                                        <option value="">Oldest</option>
                                        <option value="">Relevence</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="btnSec">
                            <a href="javascript:void(0)" class="btn btnPrimary" data-bs-toggle="modal"
                                data-bs-target="#newLeadModal">
                                Add New <em class="icon-plus"></em>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="tableLead" class="table tableLead m-0">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>City</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Catagory</th>
                                    <th></th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jane Cooper</td>
                                    <td>Scottsdale</td>
                                    <td>(225) 555-0118</td>
                                    <td>jane@microsoft.com</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="" class="iconBtn deleteBtn">
                                            <em class="icon-trash"></em>
                                        </a>
                                        <a href="leadEdit.php" class="iconBtn editBtn">
                                            <em class="icon-pencil"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="statusBtn active">Active</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Floyd Miles</td>
                                    <td>Phoenix</td>
                                    <td>(205) 555-0100</td>
                                    <td>floyd@yahoo.com</td>
                                    <td>Seller</td>
                                    <td>
                                        <a href="" class="iconBtn deleteBtn">
                                            <em class="icon-trash"></em>
                                        </a>
                                        <a href="leadEdit.php" class="iconBtn editBtn">
                                            <em class="icon-pencil"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="statusBtn inactive">Inactive</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ronald Richards</td>
                                    <td>Phoenix</td>
                                    <td>(302) 555-0107</td>
                                    <td>ronald@adobe.com</td>
                                    <td>Cold Lead</td>
                                    <td>
                                        <a href="" class="iconBtn deleteBtn">
                                            <em class="icon-trash"></em>
                                        </a>
                                        <a href="leadEdit.php" class="iconBtn editBtn">
                                            <em class="icon-pencil"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="statusBtn inactive">Inactive</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marvin McKinney</td>
                                    <td>Phoenix</td>
                                    <td>(252) 555-0126</td>
                                    <td>marvin@tesla.com</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="" class="iconBtn deleteBtn">
                                            <em class="icon-trash"></em>
                                        </a>
                                        <a href="leadEdit.php" class="iconBtn editBtn">
                                            <em class="icon-pencil"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="statusBtn active">Active</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jerome Bell</td>
                                    <td>Phoenix</td>
                                    <td>(629) 555-0129</td>
                                    <td>jerome@google.com</td>
                                    <td>Seller</td>
                                    <td>
                                        <a href="" class="iconBtn deleteBtn">
                                            <em class="icon-trash"></em>
                                        </a>
                                        <a href="leadEdit.php" class="iconBtn editBtn">
                                            <em class="icon-pencil"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="statusBtn active">Active</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jane Cooper</td>
                                    <td>Scottsdale</td>
                                    <td>(225) 555-0118</td>
                                    <td>jane@microsoft.com</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="" class="iconBtn deleteBtn">
                                            <em class="icon-trash"></em>
                                        </a>
                                        <a href="leadEdit.php" class="iconBtn editBtn">
                                            <em class="icon-pencil"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="statusBtn active">Active</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jane Cooper</td>
                                    <td>Scottsdale</td>
                                    <td>(225) 555-0118</td>
                                    <td>jane@microsoft.com</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="" class="iconBtn deleteBtn">
                                            <em class="icon-trash"></em>
                                        </a>
                                        <a href="leadEdit.php" class="iconBtn editBtn">
                                            <em class="icon-pencil"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="statusBtn active">Active</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jane Cooper</td>
                                    <td>Scottsdale</td>
                                    <td>(225) 555-0118</td>
                                    <td>jane@microsoft.com</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="" class="iconBtn deleteBtn">
                                            <em class="icon-trash"></em>
                                        </a>
                                        <a href="leadEdit.php" class="iconBtn editBtn">
                                            <em class="icon-pencil"></em>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="statusBtn active">Active</a>
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