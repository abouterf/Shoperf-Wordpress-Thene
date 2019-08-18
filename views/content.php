<!-- Hero section -->
<?php
$product_query = new WP_Query( array( 'post_type' => 'products' ) );
?>
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="<?php Asset::img( 'bg.jpg' ) ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white" dir="rtl">
                        <span>تازه ها</span>
                        <h2>لورم ایپسام</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        <a href="#" class="site-btn sb-line">کشف کن</a>
                        <a href="#" class="site-btn sb-white">اضافه به سبد</a>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>از</span>
                    <h3>29 تومان</h3><br>
                    <p>خرید آنی</p>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="<?php Asset::img( 'bg-2.jpg' ) ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white" dir="rtl">
                        <span>جدیدها</span>
                        <h2>ژاکت ها</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        <a href="#" class="site-btn sb-line">کشف کن</a>
                        <a href="#" class="site-btn sb-white">اضافه به سبد</a>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>از</span>
                    <h3>29 تومان</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slide-num-holder" id="snh-1"></div>
    </div>
</section>
<!-- Hero section end -->


<!-- Features section -->
<section class="features-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0 feature" dir="rtl">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?php Asset::img( 'icons/1.png' ) ?>" alt="#">
                    </div>
                    <h2>پرداخت آنی</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature" dir="rtl">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?php Asset::img( 'icons/2.png' ) ?>" alt="#">
                    </div>
                    <h2>محصولات برتر</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature" dir="rtl">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?php Asset::img( 'icons/3.png' ) ?>" alt="#">
                    </div>
                    <h2>ارسال فوری</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->


<!-- letest product section -->
<section class="top-letest-product-section">
    <div class="container">
        <div class="section-title">
            <h2>آخرین محصولات</h2>
        </div>
        <div class="product-slider owl-carousel">
			<?php if ( $product_query->have_posts() ) : ?>
				<?php while ( $product_query->have_posts() ) : $product_query->the_post(); ?>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php Asset::img( 'product/1.jpg' ) ?>" alt="">
                            <div class="pi-links">
                                <a href="?add=<?php echo( $i ); ?>" class="add-card" name="add_to_cart"><i
                                            class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6><?php productPrice::render_price_for_present( get_the_ID() ); ?></h6>
                            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>

            <!--            <div class="product-item">-->
            <!--                <div class="pi-pic">-->
            <!--                    <div class="tag-new">جدید</div>-->
            <!--                    <img src="--><?php //Asset::img( 'product/2.jpg' ) ?><!--" alt="">-->
            <!--                    <div class="pi-links">-->
            <!--                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>-->
            <!--                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="pi-text">-->
            <!--                    <h6>35 تومان</h6>-->
            <!--                    <p>تاپ مشکی خوشگل</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="product-item">-->
            <!--                <div class="pi-pic">-->
            <!--                    <img src="--><?php //Asset::img( 'product/3.jpg' ) ?><!--" alt="">-->
            <!--                    <div class="pi-links">-->
            <!--                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>-->
            <!--                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="pi-text">-->
            <!--                    <h6>35 تومان</h6>-->
            <!--                    <p>تاپ خوشگل صورتی </p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="product-item">-->
            <!--                <div class="pi-pic">-->
            <!--                    <img src="--><?php //Asset::img( 'product/4.jpg' ) ?><!--" alt="">-->
            <!--                    <div class="pi-links">-->
            <!--                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>-->
            <!--                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="pi-text">-->
            <!--                    <h6>35 تومان</h6>-->
            <!--                    <p>تاپ صورتی خوشگل </p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="product-item">-->
            <!--                <div class="pi-pic">-->
            <!--                    <img src="--><?php //Asset::img( 'product/6.jpg' ) ?><!--" alt="">-->
            <!--                    <div class="pi-links">-->
            <!--                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>-->
            <!--                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="pi-text">-->
            <!--                    <h6>35 تومان</h6>-->
            <!--                    <p>تاپ صورتی خوشگل </p>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</section>
<!-- letest product section end -->


<!-- Product filter section -->
<section class="product-filter-section">
    <div class="container">
        <div class="section-title">
            <h2>پر فروش ترین ها</h2>
        </div>
        <ul class="product-filter-menu" dir="rtl">
            <li><a href="#">تاپها</a></li>
            <li><a href="#">پیراهنها</a></li>
            <li><a href="#">لباس زیر</a></li>
            <li><a href="#">شلوار ها</a></li>
            <li><a href="#">مجلسی</a></li>
            <li><a href="#">کتها</a></li>
            <li><a href="#">بلوز ها</a></li>
            <li><a href="#">ساپورت ها</a></li>
        </ul>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php Asset::img( 'product/5.jpg' ) ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>35 تومان</h6>
                        <p>لورم ایپسام </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-sale">فروش ویژه</div>
                        <img src="<?php Asset::img( 'product/6.jpg' ) ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>35 تومان</h6>
                        <p>لورم ایپسام</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php Asset::img( 'product/7.jpg' ) ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>35 تومان</h6>
                        <p>لورم ایپسام </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php Asset::img( 'product/8.jpg' ) ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>35 تومان</h6>
                        <p>لورم ایپسام </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php Asset::img( 'product/9.jpg' ) ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>35 تومان</h6>
                        <p>لورم ایپسام </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php Asset::img( 'product/10.jpg' ) ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>35 تومان</h6>
                        <p>لورم ایپسام</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php Asset::img( 'product/11.jpg' ) ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>35 تومان</h6>
                        <p>لورم ایپسام </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php Asset::img( 'product/12.jpg' ) ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>افزودن به سبد</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>35 تومان</h6>
                        <p>لورم ایپسام </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pt-5">
            <button class="site-btn sb-line sb-dark">موارد بیشتر</button>
        </div>
    </div>
</section>
<!-- Product filter section end -->


<!-- Banner section -->
<section class="banner-section">
    <div class="container">
        <div class="banner set-bg" data-setbg="<?php Asset::img( 'banner-bg.jpg' ) ?>">
            <div class="tag-new">تازه</div>
            <span>تازه رسیده ها</span>
            <h2>پیراهنها</h2>
            <a href="#" class="site-btn">الان خرید کن</a>
        </div>
    </div>
</section>
<!-- Banner section end  -->