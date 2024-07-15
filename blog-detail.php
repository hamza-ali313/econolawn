<?php
$page = 'Home';
$pageDesc = '""';
$headerClass = 'account-pg';
include 'includes/header.php';
?>

<!-- account pg start -->
<section class="blog-detail">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-9 col-md-9 col-sm-12">
                <div class="blog-detail-post">
                    <img src="images/blog1.png" alt="">
                    <h2>Lorem Ipsum Simply Text For Printing.
                    </h2>
                    <ul>
                        <li>
                            <i class="fas fa-user"></i>
                            <a href="">admin</a>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            November 22, 2023
                        </li>
                        <li>
                            <i class="fas fa-folder"></i>
                            <a href="">blog</a>
                        </li>
                        <li>
                            <i class="fas fa-comment"></i>
                            <a href=""><span>0</span>Comments</a>
                        </li>
                    </ul>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry’s standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic essentially unchanged.
                    </p>
                    <div class="might-also-like">
                        <h4><i class="fa-solid fa-chevron-right"></i> YOU MIGHT ALSO LIKE</h4>
                        <div class="row">
                            <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="box">
                                    <img src="images/blog2.png" alt="">
                                    <h5>Lorem Ipsum Simply Text For Printing.</h5>
                                    <h6><i class="fas fa-clock"></i>November 22, 2023</h6>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="box">
                                    <img src="images/blog2.png" alt="">
                                    <h5>Lorem Ipsum Simply Text For Printing.</h5>
                                    <h6><i class="fas fa-clock"></i>November 22, 2023</h6>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="box">
                                    <img src="images/blog2.png" alt="">
                                    <h5>Lorem Ipsum Simply Text For Printing.</h5>
                                    <h6><i class="fas fa-clock"></i>November 22, 2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leave-reply">
                        <h3>Leave a Reply</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-12">
                                    <textarea type="text" id="comment" placeholder="your comment here..."
                                        class="form-control"></textarea>
                                </div>
                                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <input type="text" placeholder="Name (required)" class="form-control">
                                </div>
                                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <input type="text" placeholder="Email (required)" class="form-control">
                                </div>
                                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <input type="text" placeholder="Website (required)" class="form-control">
                                </div>
                                <div class="col-12">
                                    <div class="form-group cust-checkbox">
                                        <input type="checkbox" id="remember-me">
                                        <label for="remember-me"> Save my name, email, and website in this browser for
                                            the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="" class="btn1">
                                        post comment
                                    </a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <div class="search-posts">
                <div class="search-sec">
                    <h3>search</h3>
                    <form action="">
                        <input type="text" class="form-control">
                        <button type="submit">
                            search
                        </button>
                    </form>
                </div>
                <div>
                    <h3>Recent Posts
                    </h3>
                    <ul>
                        <li>
                            <a href="">Lorem Ipsum Simply Text For Printing.</a>
                        </li>
                        <li>
                            <a href="">Lorem Ipsum Simply Text For Printing.</a>
                        </li>
                        <li>
                            <a href="">Lorem Ipsum Simply Text For Printing.</a>
                        </li>
                        <li>
                            <a href="">Lorem Ipsum Simply Text For Printing.</a>
                        </li>
                        <li>
                            <a href="">Lorem Ipsum Simply Text For Printing.</a>
                        </li>
                    </ul>
                </div>
                <div class="recent-com">
                    <h3>Recent Comments
                    </h3>
                    <ul>
                        <li>
                            <a href="">A WordPress Commenter on Hello world!</a>
                        </li>
                    </ul>
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