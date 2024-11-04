<?php include 'include/header.php'; ?>

<?php include 'include/mainHeader.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Account Settings</h4>
            </div>
        </div>
    </div>
</section>

<!-- Member One -->
<section class="memberOne py-60 pt-0">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-3 col-md-4">
                <!-- Sidebar -->
                <?php include 'include/memberSidebar.php'; ?>
            </div>
            <div class="col-lg-9 col-md-8">
                <form action="post" class="contentSec bgBox">
                    <div class="alert alert-primary m-0" role="alert" id="cat-add" style="display:block">
                        Profile updated successfully completed.
                    </div>
                    <div class="profileImg">
                        <img src="images/avatar/1.png" alt="">
                        <div class="uploadBtn">
                            <input type="file" name="user_image" id="" accept=".png,.jpg">
                            <span>Update</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">
                                    Username <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                        title="Add username"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-user emLeft"></em>
                                    <input type="text" class="form-control" placeholder="Morty Smith">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">
                                    Welcome Message <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                        title="Add welcome message"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-edit emLeft"></em>
                                    <input type="text" class="form-control"
                                        placeholder="Welcome to my scheduling page. Please follow the instructions to add an event to my calendar.">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">
                                    Real Estate Name (Your Company) <em class="icon-info" data-toggle="tooltip"
                                        data-placement="top" title="Add Company name"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-edit emLeft"></em>
                                    <input type="text" class="form-control" placeholder="Century 21 Real Estate">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">
                                    Date Format <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                        title="Select date format"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-calender emLeft"></em>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">DD/MM/YYYY</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">
                                    Time Format <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                        title="Select time format"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-clock emLeft"></em>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">12h (am/pm)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">Country</label>
                                <div class="inputBox">
                                    <select name="" id="" class="form-control searchSelect" name="state">
                                        <option value="">Select</option>
                                        <option value="">United States</option>
                                        <option value="">India</option>
                                        <option value="">Japan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">Time ZOne</label>
                                <div class="inputBox">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">Central Time - US & Canada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="fileUploader">
                                <div class="row gap-y1">
                                    <div class="col-12">
                                        <h6>Upload Your Logo</h6>
                                        <p>Upload image (8M Max)</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="imgUploaer">
                                            <input type="file" name="" accept="">
                                            <div class="boxSec">
                                                <em class="icon-upload"></em>
                                                <p>
                                                    <span>Click to upload</span> or drag and drop
                                                    <small>PNG, JPG, GIF, or MP4 (max. 8MB)</small>
                                                </p>
                                            </div>
                                            <span class="btn btnPrimary style2 w-100">Add Logo</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="imgSec">
                                            <img src="https://placehold.co/440x150/EEE/31343C" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-3">
                            <div class="form-group m-0">
                                <h6>Connect to social media</h6>
                                <ul class="socialConnect">
                                    <li>
                                        <span>
                                            <img src="images/icons/facebook.svg" alt=""> Facebook
                                        </span>
                                        <a href="" class="btn btnPrimary style2">Connect</a>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="images/icons/twitter.svg" alt=""> X (Twitter)
                                        </span>
                                        <a href="" class="btn btnPrimary style2">Connect</a>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="images/icons/instagram.svg" alt=""> Instagram
                                        </span>
                                        <a href="" class="btn btnPrimary style2">Connect</a>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="images/icons/linkedIn.svg" alt=""> LinkedIn
                                        </span>
                                        <a href="" class="btn btnPrimary style2">Connect</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-y1">
                        <div class="col-md-8">
                            <button class="btn btnPrimary">
                                Save changes <em class="icon-arrowRight"></em>
                            </button>
                            <button class="btn btnSecondaryBorder style2">Cancel</button>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <button class="btn btnSecondary style2">Delete Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'include/mainFooter.php'; ?>

<?php include 'include/footer.php'; ?>