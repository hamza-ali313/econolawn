<?php
$page = 'Home';
$pageDesc = '""';
$headerClass = 'account-pg';
include 'includes/header.php';
?>

<!-- paynow pg start -->
<section class="paynow-pg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h1>PAY NOW</h1>
                <div class="account">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-xl-6 col-lg-6 col-md-6 ">
                                <label for="first-name">first name <span>*</span></label>
                                <input type="text" id="first-name" class="form-control">
                            </div>
                            <div class="col-12 col-xl-6 col-lg-6 col-md-6 ">
                                <label for="last-name">last name <span>*</span></label>
                                <input type="text" id="last-name" class="form-control">
                            </div>
                            <div class="col-12 col-xl-6 col-lg-6 col-md-6 ">
                                <label for="email">email address <span>*</span></label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="col-12 col-xl-6 col-lg-6 col-md-6 ">
                                <label for="phone">phone<span>*</span></label>
                                <input type="number" id="phone" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="your-order">
                    <h2>your order</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>SERVICE</th>
                                <th>SUBTOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gutter Cleaning &times; 1</td>
                                <td>$0.50</td>
                            </tr>
                            <tr>
                                <td>Landscaping &times; 1</td>
                                <td>$50.00</td>
                            </tr>
                            <tr>
                                <td>Ryan Old Invoice &times; 1</td>
                                <td>$0.00</td>
                            </tr>
                            <tr class="subtotal">
                                <td>Subtotal</td>
                                <td>$50.50</td>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <td>$50.50</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <input type="radio" id="credit-card" name="payment-method" value="credit-card">
                                    <label for="credit-card">
                                        <ul>
                                            <li>
                                                <h3>credit card</h3>
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
                                    </label>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="creditInput">
                                        <p>Pay securely using your credit card.</p>
                                        <div class="creditNumber">
                                            <i class="fas fa-credit-card"></i>
                                            <input class="cc-number" maxlength="19" name="credit-number" pattern="\d*"
                                                placeholder="Card Number" type="tel">
                                            <input class="cc-expires" maxlength="7" name="credit-expires" pattern="\d*"
                                                placeholder="MM / YY" type="tel">
                                            <input class="cc-cvc" maxlength="4" name="credit-cvc" pattern="\d*"
                                                placeholder="CVC" type="tel">
                                        </div>
                                    </div>
                                    <div class="form-group cust-checkbox mt-5">
                                        <input type="checkbox" id="remember-me">
                                        <label for="remember-me"> Securely Save to Account</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <input type="radio" id="Cash-App-Pay" name="payment-method" value="Cash-App-Pay">
                                    <label for="Cash-App-Pay">
                                        <ul>
                                            <li>
                                                <h3> Cash App Pay</h3>
                                            </li>
                                            <li>
                                                <img src="images/cash-app.svg" alt="">
                                            </li>
                                        </ul>
                                    </label>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Pay securely using Cash App Pay.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn1">place order</a>
                    <a href="" class="cash-app-btn"> <img src="images/cash-app.svg" alt=""> cash app pay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- paynow pg end -->


<?php
include 'includes/footer.php';
?>