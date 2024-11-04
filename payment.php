<?php include 'include/header.php'; ?>

<!-- Login -->
<section class="paymentPg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 leftSec">
                <div class="logoSec">
                    <a href="index.php">
                        <em class="icon-arrowLeft"></em>
                        <img src="images/logo/iconColor.svg" alt="">
                        <span>Innov8Agent</span>
                    </a>
                </div>
                <div class="titleSec">
                    <h6>The Agent Advantage</h6>
                    <h1>7 Days Free</h1>
                    <p>
                        All subscriptions start with a 7-day free trial and are a
                        <span>tax-deductible business write-off!</span> Then $79.00 per month
                    </p>
                </div>
                <div class="paymentSec">
                    <div class="borderCard">
                        <div class="headSec">
                            <h6>
                                <span>Agent Advantage</span>
                                <span>7 days free</span>
                            </h6>
                            <p>
                                <span>Qty 3</span>
                                <span>$125.00 / month after</span>
                            </p>
                        </div>
                        <div class="bodySec">
                            <div class="togBox">
                                <label class="toggleSwitch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                                <span>Switch to annual billing</span>
                            </div>
                            <span class="iconSec">
                                <img src="images/icons/piggyBank.svg" alt=""> SAVE $163.60/year
                            </span>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <span>Subtotal</span>
                            <span>$125.00</span>
                        </li>
                        <li>
                            <span>Total after trial</span>
                            <span>$125.00</span>
                        </li>
                        <li>
                            <span>Total due today</span>
                            <span>$0.00</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 rightSec">
                <div class="stepLabel">
                    <span class="active">STEP ONE</span>
                    <span>STEP TWO</span>
                </div>
                <div class="stepBox">
                    <div class="stepSec active">
                        <h5 class="mb-4">Enter account details</h5>
                        <div class="form-group">
                            <label for="">
                                Email <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-email emLeft"></em>
                                <input type="text" class="form-control" placeholder="demo@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Enter your full name <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-user emLeft"></em>
                                <input type="text" class="form-control" placeholder="Full name ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Contact no. <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-call emLeft"></em>
                                <input type="text" class="form-control" placeholder="Enter your mobile no.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Password <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-key emLeft"></em>
                                <input type="password" class="form-control" placeholder="Enter your Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Confirm Password <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-key emLeft"></em>
                                <input type="password" class="form-control" placeholder="Re-enter your password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="customCheckbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                I have read and agree with all of Innov8Agents <a href="#termsModal"
                                    data-bs-toggle="modal">Terms & Conditions</a>
                            </label>
                        </div>
                        <button class="btn btnPrimary w-100 style2" id="nextStep">NEXT STEP</button>
                    </div>
                    <div class="stepSec">
                        <h5 class="mb-4">Enter payment details</h5>
                        <h6>
                            <span>Payments method</span>
                            <img src="images/icons/payment/certified1.jpg" alt="">
                        </h6>
                        <div class="form-group style2">
                            <label for="">
                                Card information <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                    title="Add Card information"></em>
                            </label>
                            <div class="inputOne">
                                <div class="inputBox">
                                    <input type="text" class="form-control" placeholder="1234 1234 1234 1234">
                                    <div class="iconSec">
                                        <img src="images/icons/payment/visa.svg" alt="">
                                        <img src="images/icons/payment/amex.svg" alt="">
                                        <img src="images/icons/payment/jcb.svg" alt="">
                                        <img src="images/icons/payment/mastercard.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="inputTwo">
                                <div class="inputBox">
                                    <input type="text" class="form-control" placeholder="MM/YYYY">
                                </div>
                                <div class="inputBox">
                                    <input type="text" class="form-control" placeholder="CVC">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Cardholder name <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-user emLeft"></em>
                                <input type="text" class="form-control" placeholder="Full name on card">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Card Zipcode <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="fa fa-credit-card emLeft"></em>
                                <input type="text" class="form-control" placeholder="Zipcode">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Country <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-globeSearch emLeft"></em>
                                <select name="" id="" class="form-control">
                                    <option value="">United States</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btnPrimary w-100 style2">JOIN</button>
                        <div class="smallText">
                            <small>
                                Full data encryption, real-time transaction monitoring and buyer and seller protection
                                policies, PayPals one of the safest ways to pay.
                            </small>
                            <img src="images/icons/payment/certified2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Terms Modal -->
<div class="modal fade userModalOne" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="termsModalLabel">Terms</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="decimal-list">
                    <li>
                        <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe delectus libero pariatur
                            illum autem
                            dolorem.</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi rerum, error aliquid
                            praesentium
                            quaerat, dolore molestias optio distinctio deserunt impedit ab unde libero esse voluptatum
                            quod
                            ipsum illum accusamus illo.
                        </p>
                    </li>
                    <li>
                        <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe delectus libero pariatur
                            illum autem
                            dolorem.</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi rerum, error aliquid
                            praesentium
                            quaerat, dolore molestias optio distinctio deserunt impedit ab unde libero esse voluptatum
                            quod
                            ipsum illum accusamus illo.
                        </p>
                    </li>
                    <li>
                        <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe delectus libero pariatur
                            illum autem
                            dolorem.</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi rerum, error aliquid
                            praesentium
                            quaerat, dolore molestias optio distinctio deserunt impedit ab unde libero esse voluptatum
                            quod
                            ipsum illum accusamus illo.
                        </p>
                    </li>
                    <li>
                        <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe delectus libero pariatur
                            illum autem
                            dolorem.</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi rerum, error aliquid
                            praesentium
                            quaerat, dolore molestias optio distinctio deserunt impedit ab unde libero esse voluptatum
                            quod
                            ipsum illum accusamus illo.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>