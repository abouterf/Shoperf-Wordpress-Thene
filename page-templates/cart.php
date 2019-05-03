<?php
/* Template Name: My Custom Page */
?>
    <!-- cart section end -->


<?php get_header(); ?>
<?php $items = basket::items(); ?>
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3 style="text-align: center">سبد خرید</h3>
                        <div class="cart-table-warp">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-th">محصول</th>
                                    <th class="quy-th">تعداد</th>
                                    <th class="size-th">سایز</th>
                                    <th class="total-th">قیمت</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
									<?php if ( isset( $_SESSION['basket'] ) ): ?>
									<?php foreach ( $items as $item ): ?>
                                <tr>
                                    <td class="product-col">
                                        <img src="img/cart/1.jpg" alt="">
                                        <div class="pc-title">
                                            <h4><?php echo $item['title']; ?></h4>
                                            <p><?php echo $item['price']; ?></  p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input name="qty" type="text" value="<?php echo $item['count'] ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-col"><h4>Size M</h4></td>
                                    <td class="total-col"><h4><?php echo $item['price'] * $item['count']; ?></h4></td>
                                </tr>


								<?php endforeach; ?>
                                <?php else: ?>
                                    <br><br>
                                <h5 class="error" dir="rtl" style="float: right">محصولی موجود نیست.</h5>
                                    <br><br>
								<?php endif; ?>


                                <!--                                    <td class="product-col">-->
                                <!--                                        <img src="img/cart/2.jpg" alt="">-->
                                <!--                                        <div class="pc-title">-->
                                <!--                                            <h4>Ruffle Pink Top</h4>-->
                                <!--                                            <p>$45.90</p>-->
                                <!--                                        </div>-->
                                <!--                                    </td>-->
                                <!--                                    <td class="quy-col">-->
                                <!--                                        <div class="quantity">-->
                                <!--                                            <div class="pro-qty">-->
                                <!--                                                <input type="text" value="1">-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </td>-->
                                <!--                                    <td class="size-col"><h4>Size M</h4></td>-->
                                <!--                                    <td class="total-col"><h4>$45.90</h4></td>-->
                                <!--                                </tr>-->
                                <!--                                <tr>-->
                                <!--                                    <td class="product-col">-->
                                <!--                                        <img src="img/cart/3.jpg" alt="">-->
                                <!--                                        <div class="pc-title">-->
                                <!--                                            <h4>Skinny Jeans</h4>-->
                                <!--                                            <p>$45.90</p>-->
                                <!--                                        </div>-->
                                <!--                                    </td>-->
                                <!--                                    <td class="quy-col">-->
                                <!--                                        <div class="quantity">-->
                                <!--                                            <div class="pro-qty">-->
                                <!--                                                <input type="text" value="1">-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </td>-->
                                <!--                                    <td class="size-col"><h4>Size M</h4></td>-->
                                <!--                                    <td class="total-col"><h4>$45.90</h4></td>-->
                                <!--                                </tr>-->
                                </tbody>
                            </table>
                        </div>
                        <div class="total-cost">
                            <h6>Total <span><?php echo basket::total_price(); ?></span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-right">
                    <form class="promo-code-form">
                        <input type="text" placeholder="Enter promo code">
                        <button>Submit</button>
                    </form>
                    <a href="" class="site-btn">Proceed to checkout</a>
                    <a href="" class="site-btn sb-dark">Continue shopping</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <!-- Related product section -->
    <section class="related-product-section">
        <div class="container">
            <div class="section-title text-uppercase">
                <h2>Continue Shopping</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/5.jpg" alt="">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/9.jpg" alt="">
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
                <div class="col-lg-3 col-sm-6">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Related product section end -->
<?php get_footer(); ?>