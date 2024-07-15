<?php
$page = 'Home';
$pageDesc = '""';
$headerClass = 'account-pg';
include 'includes/header.php';
?>

<!-- account pg start -->
<section class="account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-6 col-lg-7 col-md-8">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login"
                            aria-selected="true">Login</button>
                    </li>
                    <li>
                        <h2>or</h2>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register"
                            aria-selected="false">Register</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                        aria-labelledby="pills-login-tab">
                        <div class="apt-form">
                            <form action="">
                                <label for="login-username-email">Username or email address <span>*</span></label>
                                <input type="text" id="login-username-email" class="form-control">
                                <label for="login-password">Password <span>*</span></label>
                                <input type="password" id="login-password" class="form-control">
                                <div class="row lower justify-content-between mt-4">
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-12">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="form-group cust-checkbox">
                                                <input type="checkbox" id="remember-me">
                                                <label for="remember-me"> Remember me</label>
                                            </div>
                                            <button type="submit" class="btn1">Log in</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-12">
                                        <a href="lost-password.php">
                                            <p>Lost your password?</p>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                        <div class="apt-form">
                            <form action="">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="register-username-email">Username <span>*</span></label>
                                        <input type="text" id="register-username-email" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label for="email">email<span>*</span></label>
                                        <input type="email" id="email" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label for="Number">Number <span>*</span></label>
                                        <input type="number" id="Number" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label for="password">Password <span>*</span></label>
                                        <input type="passward" id="password" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label for="confirm-password">confirm password <span>*</span></label>
                                        <input type="passward" id="confirm-password" class="form-control">
                                    </div>
                                </div>
                                <p class="mt-2">A link to set a new password will be sent to your email address.</p>
                                <p>
                                    Your personal data will be used to support your experience throughout this website,
                                    to manage access to your account, and for other purposes described in our privacy
                                    policy.
                                </p>
                                <div class="row lower justify-content-between mt-4">
                                    <div class="col-12">
                                        <button type="submit" class="btn1 " style="width:100%">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- account pg end -->

<?php
include 'includes/footer.php';
?>