<?php
$page = 'Home';
$pageDesc = '""';
$headerClass = 'account-pg';
include 'includes/header.php';
?>

<!-- dashboard pg start -->
<section class="dashboard">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-3 col-lg-3 col-md-4 col-sm-12">
                <div class="dashboard-side">
                    <ul class="user-info">
                        <li>
                            <img src="images/pers.png" alt="">
                        </li>
                        <li>
                            <h2>axelstriker4</h2>
                            <a href="" class="logout">logout</a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-Dashboard-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Dashboard" type="button" role="tab"
                                aria-controls="pills-Dashboard" aria-selected="true">
                                Dashboard
                                <i class="fas fa-tachometer-alt"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Invoices-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Invoices" type="button" role="tab" aria-controls="pills-Invoices"
                                aria-selected="true">
                                Invoices
                                <i class="fas fa-shopping-basket"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-accountdetails-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-accountdetails" type="button" role="tab"
                                aria-controls="pills-accountdetails" aria-selected="false">
                                Account details
                                <i class="fas fa-user"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" type="button">
                                Log out
                                <i class="fas fa-sign-out-alt"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-paymentmethods-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-paymentmethods" type="button" role="tab"
                                aria-controls="pills-paymentmethods" aria-selected="false">
                                Payment methods
                                <i class="fas fa-sign-out-alt"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-xl-9 col-lg-9 col-md-8 col-sm-12">
                <div class="dashboard">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Dashboard" role="tabpanel"
                            aria-labelledby="pills-Dashboard-tab">
                            <div class="Dashboard_tab">
                                <p>Hello <strong>axelstriker4</strong> (not <strong>axelstriker4</strong> <a href=""
                                        class="logout">Log
                                        out</a>)</p>
                                <p>From your account dashboard you can view your recent orders, manage your shipping and
                                    billing addresses, and edit your password and account details.
                                </p>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-Dashboard2-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-Dashboard" type="button" role="tab"
                                            aria-controls="pills-Dashboard" aria-selected="true">
                                            <div class="dash-box">
                                                <i class="fas fa-tachometer-alt"></i>
                                                <h2>Dashboard</h2>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-Invoices2-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-Invoices" type="button" role="tab"
                                            aria-controls="pills-Invoices" aria-selected="true">
                                            <div class="dash-box">
                                                <i class="fas fa-shopping-basket"></i>
                                                <h2>Invoices</h2>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-accountdetails2-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-accountdetails" type="button" role="tab"
                                            aria-controls="pills-accountdetails" aria-selected="false">
                                            <div class="dash-box">
                                                <i class="fas fa-user"></i>
                                                <h2>Account details</h2>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-logout2-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-logout" type="button" role="tab"
                                            aria-controls="pills-logout" aria-selected="false">
                                            <div class="dash-box">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <h2>Log out</h2>
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Invoices" role="tabpanel"
                            aria-labelledby="pills-Invoices-tab">
                            <div class="Invoices_tab">
                                <ul>
                                    <li>
                                        <i class="fas fa-info"></i>
                                        <h5> NO ORDER HAS BEEN MADE YET.</h5>
                                    </li>
                                    <li>
                                        <a href="">BROWSE SERVICES</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-accountdetails" role="tabpanel"
                            aria-labelledby="pills-accountdetails-tab">
                            <div class="account_tab account">
                                <form action="">
                                    <div class="row">
                                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="login-username-email">First name
                                                <span>*</span></label>
                                            <input type="text" id="login-username-email" class="form-control">
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="login-username-email">First name
                                                <span>*</span></label>
                                            <input type="text" id="login-username-email" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label for="Display-name">Display name
                                                <span>*</span></label>
                                            <input type="text" id="Display-name" class="form-control">
                                            <p>
                                                This will be how your name will be displayed in the account section and
                                                in reviews
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <label for="Email-address">Email address
                                                <span>*</span></label>
                                            <input type="email" id="Email-address" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label for="Current-password">Current password (leave blank to leave
                                                unchanged)
                                                <span>*</span></label>
                                            <input type="password" id="Current-password" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label for="New-password">New password (leave blank to leave
                                                unchanged)
                                                <span>*</span></label>
                                            <input type="password" id="New-password" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label for="Confirm-new-password">Confirm new password
                                                <span>*</span></label>
                                            <input type="password" id="Confirm-new-password" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label for="Phone number">Phone number
                                                <span>*</span></label>
                                            <input type="number" id="Phone number" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn1">
                                        save changes
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-paymentmethods" role="tabpanel"
                            aria-labelledby="pills-paymentmethods-tab">
                            <div class="Invoices_tab paymentmethods_tab">
                                <ul>
                                    <li>
                                        <i class="fas fa-info"></i>
                                        <h5> NO SAVED METHODS FOUND.</h5>
                                    </li>
                                </ul>
                                <a href="#;" class="nav-link active" id="pills-addpaymentmethods-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-addpaymentmethods" type="button"
                                    role="tab" aria-controls="pills-addpaymentmethods" aria-selected="true">ADD PAYMENT
                                    METHOD</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-addpaymentmethods" role="tabpanel"
                            aria-labelledby="pills-paymentmethods-tab">
                            <div class="addpaymentmethods_tab">
                                <ul>
                                    <li>
                                        <h2>Credit Card</h2>
                                    </li>
                                    <li>
                                        <img src="images/credit1.svg" alt="">
                                        <img src="images/credit2.svg" alt="">
                                        <img src="images/credit3.svg" alt="">
                                        <img src="images/credit4.svg" alt="">
                                        <img src="images/credit5.svg" alt="">
                                        <img src="images/credit6.svg" alt="">
                                        <img src="images/credit7.svg" alt="">
                                    </li>
                                </ul>
                                <div class="creditInput">
                                    <p>Pay securely using your credit card.</p>
                                    <form class="option" disabled="disabled" id="credit">
                                        <i class="fas fa-credit-card"></i>
                                        <input class="cc-number" maxlength="19" name="credit-number" pattern="\d*"
                                            placeholder="Card Number" type="tel" /><input class="cc-expires"
                                            maxlength="7" name="credit-expires" pattern="\d*" placeholder="MM / YY"
                                            type="tel" /><input class="cc-cvc" maxlength="4" name="credit-cvc"
                                            pattern="\d*" placeholder="CVC" type="tel" />
                                    </form>
                                </div>
                                <a href="" class="btn1">ADD PAYMENT METHOD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dashboard pg end -->

<?php
include 'includes/footer.php';
?>

<script>



    // custom Tabs function start
    document.addEventListener('DOMContentLoaded', function () {
        const tabLinks = document.querySelectorAll('.nav-link');
        tabLinks.forEach(function (tabLink) {
            tabLink.addEventListener('click', function (event) {
                event.preventDefault();
                tabLinks.forEach(function (link) {
                    link.classList.remove('active');
                });
                const tabPanes = document.querySelectorAll('.tab-pane');
                tabPanes.forEach(function (pane) {
                    pane.classList.remove('show', 'active');
                });
                tabLink.classList.add('active');
                const targetPaneId = tabLink.getAttribute('data-bs-target');
                const targetPane = document.querySelector(targetPaneId);
                if (targetPane) {
                    targetPane.classList.add('show', 'active');
                }
            });
        });
    });
    // custom Tabs function end
</script>