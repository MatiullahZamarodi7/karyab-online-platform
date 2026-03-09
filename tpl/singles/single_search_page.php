<?php

require_once "../helper/URL_helper.php";
require_once "../functions/configure.php";
require_once "../functions/getPersonsByJobs.php";




if (isset($_POST['button'])) {
	if (
		isset($_POST['provinces']) && !empty($_POST['provinces'])
		&& isset($_POST['district']) && !empty($_POST['district'])
		&& isset($_POST['job']) && !empty($_POST['job'])
	) {
		// printArray($_POST);
		$findPersons = searchjobs($_POST['provinces'], $_POST['district'], $_POST['job']);

	}

}
// var_dump($findPerson);

// print_r($findPersons);
// if($findPerson){
// 	echo "true";
// }else{
// 	echo "false";	
// }
?>
	<?php require_once "../components/header.php"; ?>
	<!-- Main content of the page -->
	<main class="main-content-area">

		<!-- the profile section -->
		<section class="page-section">
			<?php if ($findPersons) { ?>
				<div class="section-title scroll-animate fade-in">
					<h2 class="text-muted">لیست افراد <?php echo $findPersons[0]->job; ?></h2>
					<p></p>
				</div>
			<?php } else { ?>
				<?php echo ""; ?>
			<?php } ?>


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


			<div class="subcategories-grid">
				<?php if ($findPersons) { ?>
					<?php foreach ($findPersons as $findPerson) { ?>
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 8rem; width: 8rem; border-radius: 50%;"
									src="../../uploads/<?php echo $findPerson->profile_photo ?>" alt=""></i>
							<h4 style="color: #161616b0; margin-top: 7px;"><?php echo $findPerson->name; ?></h4>
							<p class="text-muted" style="font-weight: 700;"><?php echo $findPerson->job ?></p>
							<p class="text-muted"><?php echo $findPerson->introduce; ?></p>
							<div class="meta" style="margin-top: 8px;">
								<a style="margin-left: 8px;" href="tel:<?php echo $findPerson->phone ?>"><img
										style="height: 2rem;" src="<?php echo links ?>/icons8_phone_1.ico" alt=""></a>
								<a href="https://wa.me/ <?php echo $findPerson->phone ?>"><img style="height: 2rem;"
										src="<?php echo links ?>/icons8_whatsapp_24px_1.png" alt=""></a>

							</div>

							<div style="color: #161616b0; margin-top: 10px;">
								<span> <?php echo $findPerson->province ?>,
								</span><span><?php echo $findPerson->district ?></span>
							</div>
						</div>
					<?php } ?>

				<?php } else { ?>
					<h2 style="text-align: center; color: #161616b0;"><?php ?> وجود ندارد...
					</h2>
				<?php } ?>


			</div>

		</section>



	</main>

	<?php require_once "../components/footer.php"; ?>