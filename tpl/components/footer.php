	<footer class="site-footer w-100">
		<div class="main-footer">
			<div class="container"  id="container_about">
				<!-- Column 1: About -->
				<div class="footer-col">
					<h3 class="footer-col__title">درباره کاریاب</h3>
					<p>در ویب سایت کاریاب ما با هدف ایجاد پلی میان افراد دارای مهارت و کارفرمایان نیاز مند نیرویی متخصص
						این پلتفرم را طراحی کردیم در اینجا هر کس میتواند توانایی ها و مهارت خود را معرفی کند و کار فرمایان نیز میتواند به سادگی افراد مورد نیاز 
						خد را بیایند
					</p>
					<div class="footer-social-links">
						<a href="" aria-label="YouTube"><svg class="icon icon-youtube"
								aria-hidden="true">
								<use xlink:href="#youtube"></use>
							</svg></a>
						<a href="" aria-label="Telegram"><svg class="icon icon-telegram-plane"
								aria-hidden="true">
								<use xlink:href="#telegram-plane"></use>
							</svg></a>
						<a href="" aria-label="LinkedIn"><svg
								class="icon icon-linkedin-in" aria-hidden="true">
								<use xlink:href="#linkedin-in"></use>
							</svg></a>
						<a href="" aria-label="Instagram"><svg
								class="icon icon-linkedin-in" aria-hidden="true">
								<use xlink:href="#instagram"></use>
							</svg></a>
					</div>
				</div>

				<!-- Column 2: Quick Links -->
				<div class="footer-col">
					<h3 class="footer-col__title">لینک‌های سریع</h3>
					<ul>
					    <li><a href="">خدمات</a></li>
						<li><a href="<?php  echo go_another_page ?>/about-tpl.php">در باره ما</a></li>
						<li><a href="<?php  echo go_another_page ?>/contact-tpl.php">تماس با ما</a></li>
					</ul>
				</div>

				<!-- Column 4: Contact & Newsletter -->
				<div class="footer-col">
					<h3 class="footer-col__title">تماس با ما</h3>
					<div class="footer-contact-item">
						<svg class="icon icon-map-marker-alt" aria-hidden="true">
							<use xlink:href="#map-marker-alt"></use>
						</svg>
						<span>لیله پوهنتون کندز اطاق نمبر 39 محصلین کمپیوتر ساینش</span>
					</div>
					<div class="footer-contact-item">
						<svg class="icon icon-envelope" aria-hidden="true">
							<use xlink:href="#envelope"></use>
						</svg>
						<a href="mailto:info@tosinso.com" aria-label="ایمیل توسینسو">infinite@gmail.com</a>
					</div>
					<div class="footer-contact-item">
						<svg class="icon icon-phone-alt" aria-hidden="true">
							<use xlink:href="#phone-alt"></use>
						</svg>
						<a href="tel:02634209662" aria-label="شماره تماس توسینسو">0777436799 , 0791242511 ,
							0730607517</a>
					</div>
					<div class="footer-contact-item">
						<svg class="icon icon-telegram-plane" aria-hidden="true">
							<use xlink:href="#telegram-plane"></use>
						</svg>
						<a href="" target="_blank" aria-label="پشتیبانی تلگرام">پشتیبانی
							تلگرام</a>
					</div>
				</div>

			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				<div class="copyright">
					© ۱۴۰۴ تمام حقوق برای کاریاب محفوظ است.
				</div>
				<!-- <div class="sub-footer__links">
					<a href="">شرایط و قوانین</a>
				</div> -->
			</div>
		</div>
	</footer>

	<!--
FIX: Moved search results popup to the end of the body tag.
This prevents it from affecting the layout of other elements before it's positioned by JavaScript.
-->
	<div class="search-results-popup" id="global-search-results">
		<!-- Content will be injected by JS -->
	</div>


	<script src="<?php echo links ?>/site.bundle.js.download"></script>









































	
	<script
		src="<?php echo links ?>/course_discount_timer.js.download"></script>



	<script src="<?php echo links ?>/discount-banner.js.download"></script>


	<script src="<?php echo links ?>/captcha-validator.js.download"></script>
	<script src="<?php echo links ?>/pagination.js.download"></script>
	<script src="<?php echo links ?>/course_all.js.download"></script>
	<script
		src="<?php echo links ?>/course_category_landing.js.download"></script>

	<script src="../boot code/boot.min.js"></script>
    <script src="<?php echo links ?>/scriptAbout.js"></script>


</body>

</html>