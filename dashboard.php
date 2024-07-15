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
            <div class="col-12 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="dashboard-side">
                    <ul class="user-info">
                        <li>
                            <img src="images/pers.png" alt="">
                        </li>
                        <li>
                            <h2>hamza2</h2>
                            <a href="">logout</a>
                        </li>
                    </ul>
                    <ul class="dash-sidebar">
                        <li>
                            <a href="">
                                <h3>Dashboard</h3>
                                <i class="fas fa-tachometer-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>New Invoices</h3>
                                <i class="fas fa-shopping-basket"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>Old Invoices</h3>
                                <i class="fas fa-file-download"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>Account details</h3>
                                <i class="fas fa-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>Log out</h3>
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-xl-9 col-lg-9 col-md-9 col-sm-12">
                <div class="dashboard">
                    <p>From your account dashboard you can view your recent orders, manage your shipping and billing
                        addresses, and edit your password and account details.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dashboard pg end -->

<?php
include 'includes/footer.php';
?>