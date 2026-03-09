<?php require_once "helper/URL_helper.php"; ?>

<!-- -----------------------------------------------company---------------------------------------------------------------- -->
<?php include "components/header.php"; ?>
<div class="company" dir="ltr">
	<div class="img">
		<img src="<?php echo links ?>/img_of_about/about_img.jpeg" alt="" />
	</div>
	<div class="company-info">
		<span>ABOUT <span class="our">INFINATE </span></span>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore vero, ex, pariatur cum asperiores iusto
			reprehenderit adipisci beatae eum voluptate exercitationem est voluptatum minima ipsum? Tempora at dolorum
			iste nesciunt!

		</p>
	</div>
</div>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------team-------------------------------------------------------------- -->
<div class="team"><span>OUR TEAM</span></div>
<div class="container_about">
	<div class="card">
		<div class="card-image loading"><img src="<?php echo links ?>/img_of_about/rafi.jpg" alt="" /></div>
		<div class="card-info" dir="ltr">
			<h3 class="card-title loading"><span>Sayed Rafiullah <span class="yellow-surname">Amini</span></span></h3>
			<p class="card-description loading">
				<span class="personal-info">
					<span class="info">Fullstack developer</span> <br>
					Backend delopment and security managing <br>
					Email: <a href="mailto:'sayedrafiullahamini410@gmail.com'">sayedrafiullahamini410@gmail.com </a>
					<span>Link Protofolio: <b><a href="sayedrafiullah.wuaze.com">Sayed Rafiullah Amini</a></b></span>
				</span>
			</p>
			<div class="card-mediaIcons">
				<a href="#" class="loading" target="on_blank"><i class="fab fa-facebook-f"></i><img
						src="<?php echo links ?>/img_of_about/3128208.png" alt=""></a>
				<a href="{% url 'viewprofile' 6 %}" class="loading" target="on_blank"><i><img
							src="<?php echo links ?>/img_of_about/542689.png" alt="Pico"></a></i>
				<a href="#" class="loading" target="on_blank"><i class="fab fa-instagram"></i>
					<img src="<?php echo links ?>/img_of_about/icons8_whatsapp_3.ico" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-image loading"><img src="<?php echo links ?>/img_of_about/matiullah.jpg" alt="" /></div>
		<div class="card-info" dir="ltr">
			<h3 class="card-title loading"><span>Matiullah <span class="yellow-surname">Zamarodi</span></span></h3>
			<p class="card-description loading">
				<span class="personal-info">
					<span class="info">Fullstack developer</span> <br>
					UI design and frontend development <br>
					Email: <a href="mailto:'zamarodimatiullah@gmail.com'">zamarodimatiullah@gmail.com</a>
					<span>Link Protofolio: <b><a href="#"> matiullah zamarodi</a></b></span>
				</span>
			</p>
			<div class="card-mediaIcons">
				<a href="#" class="loading" target="on_blank"><i class="fab fa-facebook-f"></i><img
						src="<?php echo links ?>/img_of_about/3128208.png" alt=""></a>
				<a href="{% url 'viewprofile' 6 %}" class="loading" target="on_blank"><i><img
							src="<?php echo links ?>/img_of_about/542689.png" alt="Pico"></a></i>
				<a href="#" class="loading" target="on_blank"><i class="fab fa-instagram"></i>
					<img src="<?php echo links ?>/img_of_about/icons8_whatsapp_3.ico" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-image loading"><img src="<?php echo links ?>/img_of_about/azad.jpg" alt="" /></div>
		<div class="card-info" dir="ltr">
			<h3 class="card-title loading"><span>Khairullah <span class="yellow-surname">Azad</span></span></h3>
			<p class="card-description loading">
				<span class="personal-info">
					<span class="info">Fullstack developer</span> <br>
					Database design and backend devlopment<br>
					Email: <a href="mailto:'khairullah.azad.786@gmail.com'">khairullah.azad.786@gmail.com</a>
					<span>Link Protofolio: <b><a href="#"> matiullah zamarodi</a></b></span>
				</span>
			</p>
			<div class="card-mediaIcons">
				<a href="#" class="loading" target="on_blank"><i class="fab fa-facebook-f"></i><img
						src="<?php echo links ?>/img_of_about/3128208.png" alt=""></a>
				<a href="{% url 'viewprofile' 6 %}" class="loading" target="on_blank"><i><img
							src="<?php echo links ?>/img_of_about/542689.png" alt="Pico"></a></i>
				<a href="#" class="loading" target="on_blank"><i class="fab fa-instagram"></i>
					<img src="<?php echo links ?>/img_of_about/icons8_whatsapp_3.ico" alt="">
				</a>
			</div>
		</div>
	</div>
	<?php require_once "components/footer.php"; ?>