<?php include 'include/header.php'; ?>

<?php include 'include/mainHeader.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Member Tool List</h4>
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
                    Choose Your Genius |
                    <small>Transform Every Aspect of Your Real Estate Business</small>
                </h3>
            </div>
        </div>
    </div>
</section>

<!-- Member Two -->
<section class="memberTwo py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-3 col-md-4">
                <!-- Sidebar -->
                <?php include 'include/memberSidebar.php'; ?>
            </div>
            <div class="col-lg-4 col-md-4">
                <form action="">
                    <div class="progressArea">
                        <div class="progress customProgress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="70"></div>
                        </div>
                        <small>70 Complete%</small>
                    </div>
                    <div class="form-group">
                        <label for="">
                            What type of Social Post do you want to create? <sup>*</sup>
                        </label>
                        <div class="inputBox rightIcon">
                            <select name="" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="">Facebook</option>
                            </select>
                            <em class="icon-angleDown emRight"></em>
                        </div>
                        <small>Select your social media post type.</small>
                    </div>
                    <div class="form-group">
                        <label for="">
                            What is your post focus? <sup>*</sup>
                        </label>
                        <div class="inputBox rightIcon">
                            <select name="" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="">New Listing</option>
                            </select>
                            <em class="icon-angleDown emRight"></em>
                        </div>
                        <small>Select your product or service.</small>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Who is your intended audience? <sup>*</sup>
                        </label>
                        <div class="inputBox rightIcon">
                            <select name="" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="">Home Buyers, Age 18-30</option>
                            </select>
                            <em class="icon-angleDown emRight"></em>
                        </div>
                        <small>Select your product or service.</small>
                    </div>
                    <div class="mb-3">
                        <label class="customCheckbox">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Create 3 Headlines for A/B testing
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="">MLS #</label>
                        <div class="inputBox rightIcon">
                            <input type="text" class="form-control" placeholder="">
                            <em class="icon-info emRight"></em>
                        </div>
                        <small>This is not necessary if you do not want t show in the social post.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Enter Any Keywords You Would Like To Use</label>
                        <div class="inputBox rightIcon">
                            <input type="text" class="form-control" placeholder="">
                            <em class="icon-info emRight"></em>
                        </div>
                        <small>Keywords help your post resonate better with your audience .</small>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Select The Tone of Your Post <sup>*</sup>
                        </label>
                        <div class="inputBox rightIcon">
                            <select name="" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="">Professional, Informative</option>
                            </select>
                            <em class="icon-angleDown emRight"></em>
                        </div>
                        <small>Select your product or service.</small>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Select Your Language <sup>*</sup>
                        </label>
                        <div class="inputBox rightIcon">
                            <select name="" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="">English</option>
                            </select>
                            <em class="icon-angleDown emRight"></em>
                        </div>
                        <small>Select your product or service.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Your Details </label>
                        <div class="inputBox">
                            <input type="text" class="form-control" placeholder="Enter details...">
                        </div>
                        <small>The more details you add the better your content will be.</small>
                    </div>
                    <div class="">
                        <button class="btn btnPrimary w-100">
                            Create It <em class="icon-arrowRight"></em>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 col-md-4">
                <div class="form-group">
                    <label for="">Create your post</label>
                    <div class="inputBox rightIcon">
                        <input type="text" class="form-control" placeholder="">
                        <em class="icon-info emRight"></em>
                    </div>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quam veritatis
                        incidunt qui aliquam ad.</small>
                </div>
                <div class="form-group">
                    <div class="fileUploader">
                        <div class="row gap-y1">
                            <div class="col-12">
                                <h6>Upload Your Logo</h6>
                                <p>Upload image (8M Max)</p>
                            </div>
                            <div class="col-12">
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
                            <div class="col-12">
                                <div class="imgSec">
                                    <img src="https://placehold.co/540x300/EEE/31343C" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="postBox">
                    <h6 class="postTitle">
                        Post Version 1
                        <div class="togBox">
                            <label class="toggleSwitch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </h6>
                    <div class="imgSec">
                        <img src="images/member/1.jpg" alt="">
                    </div>
                    <p>
                        🏡🔑 OPEN HOUSE ALERT! 🔑🏡
                    </p>
                    <p>
                        We are thrilled to announce an exclusive open house event at the stunning property
                        located in the heart of Sasa, Sssasa. This is your golden opportunity to explore and
                        experience the charm of this beautiful home!
                    </p>
                    <p>
                        This property is a perfect blend of style, comfort, and convenience. It offers a unique
                        lifestyle that you've always dreamed of. The additional details of the property include
                        Sasa, which adds an extra layer of luxury and elegance.
                    </p>
                    <p>
                        Join us for a tour and see for yourself why this home is a true gem in the neighborhood.
                        You'll fall in love with its spacious rooms, modern amenities, and the serene
                        environment it's nestled in.
                    </p>
                    <p>
                        Don't miss out on this chance to find your dream home! 🏠💖
                    </p>
                    <p>
                        📆 Mark your calendars and save the date! We can't wait to welcome you and help you step
                        into a space where every corner tells a story.
                    </p>
                    <p>
                        If you know someone who's on the hunt for their perfect home, feel free to tag them or
                        share this post. Let's spread the word and help everyone find their dream abode. 🔄
                    </p>
                    <p>
                        Click the 'Like' button if you're as excited as we are about this open house! 👍 And
                        don't forget to hit 'Share' to let your friends and family know about this amazing
                        opportunity.
                    </p>
                    <p>
                        Stay tuned for more updates and sneak peeks! See you there! 🎈🎉
                    </p>
                    <p>
                        #OpenHouse #RealEstate #SasaSssasa #DreamHome #HouseHunting
                    </p>
                </div>
                <div class="btnShort my-3">
                    <a href="">
                        <em class="icon-copy"></em> Copy
                    </a>
                    <a href="">
                        <em class="icon-printer"></em> Print
                    </a>
                    <a href="">
                        <em class="icon-fileDocument"></em> Save
                    </a>
                    <a href="">
                        <em class="fab fa-facebook-f"></em>
                    </a>
                    <a href="">
                        <em class="fab fa-instagram"></em>
                    </a>
                    <a href="">
                        <em class="fab fa-x-twitter"></em>
                    </a>
                    <a href="">
                        <em class="fab fa-linkedin-in"></em>
                    </a>
                    <a href="">
                        <em class="fab fa-google"></em>
                    </a>
                </div>
                <div class="postBox bgPost">
                    <h6 class="postTitle">
                        Post Version 2
                        <div class="togBox">
                            <label class="toggleSwitch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </h6>
                    <p>
                        🏡🔑 OPEN HOUSE ALERT! 🔑🏡
                    </p>
                    <p>
                        We are thrilled to announce an exclusive open house event at the stunning property
                        located in the heart of Sasa, Sssasa. This is your golden opportunity to explore and
                        experience the charm of this beautiful home!
                    </p>
                    <p>
                        This property is a perfect blend of style, comfort, and convenience. It offers a unique
                        lifestyle that you've always dreamed of. The additional details of the property include
                        Sasa, which adds an extra layer of luxury and elegance.
                    </p>
                    <p>
                        Join us for a tour and see for yourself why this home is a true gem in the neighborhood.
                        You'll fall in love with its spacious rooms, modern amenities, and the serene
                        environment it's nestled in.
                    </p>
                    <p>
                        Don't miss out on this chance to find your dream home! 🏠💖
                    </p>
                    <p>
                        📆 Mark your calendars and save the date! We can't wait to welcome you and help you step
                        into a space where every corner tells a story.
                    </p>
                    <p>
                        If you know someone who's on the hunt for their perfect home, feel free to tag them or
                        share this post. Let's spread the word and help everyone find their dream abode. 🔄
                    </p>
                    <p>
                        Click the 'Like' button if you're as excited as we are about this open house! 👍 And
                        don't forget to hit 'Share' to let your friends and family know about this amazing
                        opportunity.
                    </p>
                    <p>
                        Stay tuned for more updates and sneak peeks! See you there! 🎈🎉
                    </p>
                    <p>
                        #OpenHouse #RealEstate #SasaSssasa #DreamHome #HouseHunting
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/mainFooter.php'; ?>

<?php include 'include/footer.php'; ?>