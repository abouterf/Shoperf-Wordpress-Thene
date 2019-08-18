<!-- Footer section -->
	<section class="footer-section" dir="rtl">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="./img/logo-light.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
                        <?php if (is_active_sidebar('wpdev-main-sidebar')): ?>
                            <?php dynamic_sidebar('wpdev-main-sidebar') ?>
                        <?php endif; ?>
<!--						<h2>درباره</h2>-->
<!--						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>-->
<!--						<img src="img/cards.png" alt="">-->
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>سوالات</h2>
						<ul>
							<li><a href="">درباره ما</a></li>
							<li><a href="">بازگشت وجه</a></li>
							<li><a href="">بازگزداندن محصول</a></li>
							<li><a href="">موقعیت های شغلی</a></li>
							<li><a href="">فروشگاه</a></li>
							<li><a href="">بلاگ</a></li>
						</ul>
						<ul>
							<li><a href="">همکاران</a></li>
							<li><a href="">نویسنده ها</a></li>
							<li><a href="">پشتیبانی</a></li>
							<li><a href="">شرایط استفاده</a></li>
							<li><a href="">یه چیزی</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>سوالات</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>چه کفشی بپوشیم</h6>
									<span>12 اسفند 97</span>
									<a href="#" class="readmore">خواندن بیشتر</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>خوبای امسال</h6>
									<span>1 فروردین 98</span>
									<a href="#" class="readmore">خواندن بیشتر</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>سوالات</h2>
						<div class="con-info">

							<p>شرکت شما </p>
						</div>
						<div class="con-info">

							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
						</div>
						<div class="con-info">

							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">

							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links" dir="rtl">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>اینستاگرام</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>گوگل پلاس</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>پینترست</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>فیس بوک</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p class="text-white text-center mt-5">تمامی حقوق محفوظ است. &copy;<script>document.write(new Date().getFullYear());</script> یه چیزایی در اینجا درج کن. <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="<?php Asset::js('jquery-3.2.1.min') ?>"></script>
	<script src="<?php Asset::js('bootstrap.min') ?>"></script>
	<script src="<?php Asset::js('jquery.slicknav.min') ?>"></script>
	<script src="<?php Asset::js('owl.carousel.min') ?>"></script>
	<script src="<?php Asset::js('jquery.nicescroll.min') ?>"></script>
	<script src="<?php Asset::js('jquery.zoom.min') ?>"></script>
	<script src="<?php Asset::js('jquery-ui.min') ?>"></script>
	<script src="<?php Asset::js('main') ?>"></script>
<?php wp_footer(); ?>

	</body>
</html>