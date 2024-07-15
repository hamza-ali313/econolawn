<?php
$page = 'Home';
$pageDesc = '""';
$headerClass = 'account-pg';
include 'includes/header.php';
?>



<!-- lost-password pg start -->
<section class="lost-password account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="apt-form">
                    <p>
                        Lost your password? Please enter your username or email address. You will receive a link to
                        create a new password via email.
                    </p>
                    <form action="">
                        <label for="register-username-email">Username or email address <span>*</span></label>
                        <input type="text" id="register-username-email" class="form-control">
                        <div class="row lower justify-content-between mt-4">
                            <div class="col-12">
                                <button type="submit" class="btn1 " style="width:100%">Reset password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- lost-password pg end -->



















<?php
include 'includes/footer.php';
?>