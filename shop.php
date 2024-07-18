<?php
$page = 'Home';
$pageDesc = '""';
$headerClass = 'account-pg';
include 'includes/header.php';
?>

<!-- shop pg start -->
<section class="shop-pg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shopfilter">
                    <div>
                        <ul>
                            <li>
                                <i class="fas fa-th-large active" id="gridViewBtn"></i>
                            </li>
                            <li>
                                <i class="fas fa-list" id="listViewBtn"></i>
                            </li>
                            <li>
                                <select class="form-select" aria-label="-select-">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h6>VIEW :</h6>
                            </li>
                            <li>
                                <a href="#;">12 /</a>
                                <a href="#;">24 /</a>
                                <a href="#;">All</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="shopProducts grid" id="shopProducts">
                    <div class="prodItem">
                        <div class="img-sec">
                            <img src="images/landscaping1.png" alt="">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#shopModal">
                                <i class="far fa-eye"></i>
                                <h6>quick view</h6>
                            </button>
                        </div>
                        <div class="prodDesc-sec">
                            <div class="prodDesc">
                                <h5>service</h5>
                                <a href="#">Landscaping</a>
                                <h3>$50.00</h3>
                            </div>
                            <div class="prodRating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="paynow.php" class="pay_now">pay now</a>
                        </div>
                    </div>
                    <div class="prodItem">
                        <div class="img-sec">
                            <img src="images/landscaping1.png" alt="">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#shopModal">
                                <i class="far fa-eye"></i>
                                <h6>quick view</h6>
                            </button>
                        </div>
                        <div class="prodDesc-sec">
                            <div class="prodDesc">
                                <h5>service</h5>
                                <a href="#">Landscaping</a>
                                <h3>$50.00</h3>
                            </div>
                            <div class="prodRating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="paynow.php" class="pay_now">pay now</a>
                        </div>
                    </div>
                    <div class="prodItem">
                        <div class="img-sec">
                            <img src="images/landscaping1.png" alt="">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#shopModal">
                                <i class="far fa-eye"></i>
                                <h6>quick view</h6>
                            </button>
                        </div>
                        <div class="prodDesc-sec">
                            <div class="prodDesc">
                                <h5>service</h5>
                                <a href="#">Landscaping</a>
                                <h3>$50.00</h3>
                            </div>
                            <div class="prodRating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="paynow.php" class="pay_now">pay now</a>
                        </div>
                    </div>
                    <div class="prodItem">
                        <div class="img-sec">
                            <img src="images/landscaping1.png" alt="">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#shopModal">
                                <i class="far fa-eye"></i>
                                <h6>quick view</h6>
                            </button>
                        </div>
                        <div class="prodDesc-sec">
                            <div class="prodDesc">
                                <h5>service</h5>
                                <a href="#">Landscaping</a>
                                <h3>$50.00</h3>
                            </div>
                            <div class="prodRating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="paynow.php" class="pay_now">pay now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop pg end -->

<!-- shop modal start -->
<div class="modal fade" id="shopModal" tabindex="-1" aria-labelledby="shopModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-sm modal-dialog-centere">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row">
                    <div class="col-12 col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <div>
                            <img src="images/landscaping1.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 col-lg-7 col-md-7 col-sm-12">
                        <div class="shopmodeldesc">
                            <h4>Gutter Cleaning</h4>
                            <h2>$0.50</h2>
                            <p>
                                Safeguard your home with Econolawn’s gutter cleaning. Clear, reliable, and hassle-free
                                protection for your property’s well-being.
                            </p>
                            <div class="payquant">
                                <ul class="quant">
                                    <li><button class="decrement">-</button></li>
                                    <li class="quantity">0</li>
                                    <li><button class="increment">+</button></li>
                                </ul>
                                <a href="#;" class="btn1">pay now</a>
                            </div>
                            <ul class="Category">
                                <li>
                                    <h3>Category: </h3>
                                    <a href="#;">service</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- shop modal end -->

<?php
include 'includes/footer.php';
?>

<script>
    $(document).ready(function () {
        const $gridViewBtn = $('#gridViewBtn');
        const $listViewBtn = $('#listViewBtn');
        const $productsContainer = $('#shopProducts');

        $gridViewBtn.on('click', function () {
            if ($productsContainer.hasClass('list')) {
                $productsContainer.removeClass('list');
                $listViewBtn.removeClass('active');
            }
            $productsContainer.addClass('grid');
            $gridViewBtn.addClass('active');
        });

        $listViewBtn.on('click', function () {
            if ($productsContainer.hasClass('grid')) {
                $productsContainer.removeClass('grid');
                $gridViewBtn.removeClass('active');
            }
            $productsContainer.addClass('list');
            $listViewBtn.addClass('active');
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const decrementBtn = document.querySelector('.decrement');
        const incrementBtn = document.querySelector('.increment');
        const quantityEl = document.querySelector('.quantity');

        decrementBtn.addEventListener('click', () => {
            let quantity = parseInt(quantityEl.textContent, 10);
            if (quantity > 0) {
                quantityEl.textContent = quantity - 1;
            }
        });

        incrementBtn.addEventListener('click', () => {
            let quantity = parseInt(quantityEl.textContent, 10);
            quantityEl.textContent = quantity + 1;
        });
    });
</script>