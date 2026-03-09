<?php
require_once "../helper/URL_helper.php";
require_once "../functions/getPersonsByJobs.php";

$job = $_GET['job'];
$workers = getPersonsByJobs($job);

// echo $job;
?>
<?php require_once "../components/header.php"; ?>

	 <style>
				@font-face {
		font-family:Shabnam;
		src: url('../links/Shabnam.ttf')
		format('truetype');
		}
       *{
        font-family: Shabnam !important;
       }
	 </style>

<!-- Main content of the page -->
<main class="main-content-area">
	<section class="category-hero">
		<div class="container">
			<h1 class="scroll-animate fade-in">وب سایت کاریاب</h1>
			<p class="scroll-animate fade-in" style="animation-delay: 0.2s;">
				در وب سایت کاریاب ما با هدف ایجاد پل میان افراد دارای مهارت و کارفرمایان نیاز مند نیرویی متخصص این
				پلتفرم را طراحی کردیم در اینجا هر کس میتواند توانایی ها و مهارت خود را معرفی کند و کار فرمایان نیز
				میتواند به سادگی افراد مورد نیاز خود را بیابند
			</p>
			<div class="hero-cta-buttons scroll-animate fade-in" style="animation-delay: 0.4s;">
				<a href="<?php echo home_page ?>/#works" class="btn btn-primary btn-lg">مشاهده همه
					شغل های موجود</a>
			</div>
		</div>
	</section>


	<!-- the profile section -->
	<section class="page-section">
		<div class="container">
			<div class="section-title scroll-animate fade-in">
				<?php if ($job == "عیار دیش" || $job == "انجنیر مبایل" || $job == "انجنیر برق") { ?>
					<?php
					$arr = explode(" ", $job);
					?>
					<h2 style="color: #161616b0;">لیست <?php echo $arr[0] . 'ان ' . $arr[1]; ?></h2>
				<?php } else { ?>
					<h2 style="color: #161616b0;">لیست <?php echo $job . "ان"; ?></h2>
				<?php } ?>

			</div>

			<div class="subcategories-grid">
				<?php if ($workers) { ?>
					<?php foreach ($workers as $worker) { ?>
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 8rem; width: 8rem; border-radius: 50%;"
									src="../../uploads/<?php echo $worker->profile_photo ?>" alt=""></i>
							<h4 style="color: #161616b0; margin-top: 7px;"><?php echo $worker->name; ?></h4>
							<p class="text-muted" style="font-weight: 700;"><?php echo $worker->job ?></p>
							<p class="text-muted"><?php echo $worker->introduce; ?></p>
							<div class="meta" style="margin-top: 8px;">
								<a style="margin-left: 8px;" href="tel:<?php echo $worker->phone ?>"><img style="height: 2rem;"
										src="<?php echo links ?>/icons8_phone_1.ico" alt=""></a>
								<a href="https://wa.me/ <?php echo $worker->phone ?>"><img style="height: 2rem;"
										src="<?php echo links ?>/icons8_whatsapp_24px_1.png" alt=""></a>

							</div>

							<div style="color: #161616b0; margin-top: 10px;">
								<span> <?php echo $worker->province ?>, </span><span><?php echo $worker->district ?></span>
							</div>
						</div>
					<?php } ?>

				<?php } else { ?>
					<h2 style="text-align: center; color: #161616b0;"><?php echo $job ?> وجود ندارد...</h2>
				<?php } ?>


			</div>
		</div>
	</section>



</main>

<?php require_once "../components/footer.php"; ?>