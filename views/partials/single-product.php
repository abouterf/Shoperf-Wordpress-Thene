<?php if ( isset( $_POST['add_to_cart'] ) ) {
	$product_id = intval( $_POST['product_id'] );
    $product_qty = intval($_POST['quantity']);
    if ($product_id > 0 && $product_qty){
	    do_action('add_to_cart',$product_id,$product_qty);
    }
} ?>


<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Category PAge</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Shop</a>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- product section -->

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ):the_post(); ?>
        <section class="product-section">
            <div class="container">
                <div class="back-link">
                    <a href="./category.html"> &lt;&lt; Back to Category</a>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="img/single-product/1.jpg" alt="">
                        </div>
                        <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                            <div class="product-thumbs-track">
								<?php $product_slider_images = ProductImages::get_slider_images( get_the_ID() ); ?>
								<?php if ( $product_slider_images && count( $product_slider_images ) > 0 ): ?>
									<?php foreach ( $product_slider_images as $product_slider_image ): ?>
                                        <div class="pt" data-imgbigurl="<?php echo $product_slider_image; ?>"><img
                                                    src="<?php echo $product_slider_image; ?>" alt=""></div>
									<?php endforeach; ?>
								<?php endif; ?>

                                <!--                                <div class="pt" data-imgbigurl="img/single-product/2.jpg"><img-->
                                <!--                                            src="img/single-product/thumb-2.jpg" alt=""></div>-->
                                <!--                                <div class="pt" data-imgbigurl="img/single-product/3.jpg"><img-->
                                <!--                                            src="img/single-product/thumb-3.jpg" alt=""></div>-->
                                <!--                                <div class="pt" data-imgbigurl="img/single-product/4.jpg"><img-->
                                <!--                                            src="img/single-product/thumb-4.jpg" alt=""></div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 product-details">
                        <h2 class="p-title"><?php the_title(); ?></h2>
                        <h3 class="p-price"><?php productPrice::render_price_for_present( get_the_ID() ); ?></h3>
                        <h4 class="p-stock">Available: <span>In Stock</span></h4>
                        <div class="p-rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o fa-fade"></i>
                        </div>
                        <div class="p-review">
                            <a href="">3 reviews</a>|<a href="">Add your review</a>
                        </div>
                        <div class="fw-size-choose">
                            <p>Size</p>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xs-size">
                                <label for="xs-size">32</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="s-size">
                                <label for="s-size">34</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="m-size" checked="">
                                <label for="m-size">36</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="l-size">
                                <label for="l-size">38</label>
                            </div>
                            <div class="sc-item disable">
                                <input type="radio" name="sc" id="xl-size" disabled>
                                <label for="xl-size">40</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xxl-size">
                                <label for="xxl-size">42</label>
                            </div>
                        </div>

                        <form method="post" class="cart">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" name="quantity" value="1">
                                </div>
                            </div>
                            <input type="hidden" name="product_id" value="<?php echo get_the_ID(); ?>">
                            <button type="submit" name="add_to_cart" class="site-btn">SHOP NOW</button>
                        </form>
                        <div id="accordion" class="accordion-area">
                            <div class="panel">
                                <div class="panel-header" id="headingOne">
                                    <button class="panel-link active" data-toggle="collapse" data-target="#collapse1"
                                            aria-expanded="true" aria-controls="collapse1">اطلاعات
                                    </button>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="panel-body">
										<?php echo the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingTwo">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse2"
                                            aria-expanded="false" aria-controls="collapse2">care details
                                    </button>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="panel-body">
                                        <img src="./img/cards.png" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra
                                            tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales
                                            arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod
                                            nec.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingThree">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse3"
                                            aria-expanded="false" aria-controls="collapse3">shipping & Returns
                                    </button>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="panel-body">
                                        <h4>7 Days Returns</h4>
                                        <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra
                                            tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales
                                            arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod
                                            nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-sharing">
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-pinterest"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product section end -->


	<?php endwhile; ?>
<?php endif; ?>

<!-- RELATED PRODUCTS section -->
<section class="related-product-section">
    <div class="container">
        <div class="section-title">
            <h2>RELATED PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">
            <div class="product-item">
                <div class="pi-pic">
                    <img src="./img/product/1.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Flamboyant Pink Top </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <div class="tag-new">New</div>
                    <img src="./img/product/2.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Black and White Stripes Dress</p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="./img/product/3.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Flamboyant Pink Top </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="./img/product/4.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Flamboyant Pink Top </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="./img/product/6.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Flamboyant Pink Top </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- RELATED PRODUCTS section end -->
