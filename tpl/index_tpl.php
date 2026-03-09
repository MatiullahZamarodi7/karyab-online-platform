<?php

require_once "helper/URL_helper.php";
require_once "functions/getPersonsByJobs.php";




// echo getNumberOfToilers();
$numberOfToiler = getNumberOfToilers();
$numberOfPainters = getNumberOfPainters();
$numberOfWorkers = getNumberOfWorkers();
$numberOfMystrys = getNumberOfMestrys();
$numberOfNajars = getNumberOfNajars();
$numberOfCook = getNumberOfCook();
$numberOfElecEng = getNumberOfElecEng();
$numberOfQalinShoyan = getNumberOfQalinShoyan();
$numberOfNumaKar = getNumberOfNumaKar();
$numberOfFlizKar = getNumberOfFlizKaran();
$numberOfDish = getNumberOfDish();
$numberOfMobEng = getNumberOfMobEng();



?>


<!DOCTYPE html>
<!-- saved from url=(0027)https://tosinso.com/courses -->
<html lang="fa" dir="rtl" style="scroll-behavior: smooth;">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="<?php echo links ?>/filter.css">
	<!-- image of website -->
	<link rel="icon" href="links/img_of_about/3128208.png">
	
	<style>
		
		@font-face {
		font-family:Shabnam;
		src: url('links/Shabnam.ttf')
		format('truetype');
		}
		.font-bold li a{
			font-family: Shabnam !important;
		}

	</style>
	<link rel="stylesheet" href="boot code/boot.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="boot code/boot.min.css">
	<link rel="preload" href="https://tosinso.com/fonts/Pinar-FD-Bold.woff2" as="font" type="font/woff2" crossorigin="">
	<link rel="preload" href="https://tosinso.com/fonts/Pinar-FD-Regular.woff2" as="font" type="font/woff2"
	crossorigin="">

	<!-- add font for index  -->



	<title>ویب سایت کاریاب</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- Google tag (gtag.js) -->
	<script async="" src="./links/"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-CDJL3PC8YM');
	</script>

	<script type="text/javascript">
		window.RAYCHAT_TOKEN = "8935f66a-7fb4-4967-bcfb-4a95d4aa5e02";
		window.LOAD_TYPE = "SEO_FRIENDLY";
		(function () {
			d = document;
			s = d.createElement("script");
			s.src = "https://widget-react.raychat.io/install/widget.js";
			s.async = 1;
			d.getElementsByTagName("head")[0].appendChild(s);
		})();
	</script>
	<script src="<?php echo links ?>/widget.js.download" async=""></script>


	<link rel="stylesheet" href="<?php echo links ?>/site.bundle.css">




	<link rel="stylesheet" href="<?php echo links ?>/discount-banner.css">


	<script>
		(function () {
			var spritePath = '/images/tosinso-sprite.svg';
			if (document.querySelector('svg[data-injected-sprite="true"]')) { return; }
			fetch(spritePath)
				.then(function (response) { return response.ok ? response.text() : null; })
				.then(function (svgContent) {
					if (svgContent) {
						var div = document.createElement('div');
						div.innerHTML = svgContent.replace('<svg', '<svg data-injected-sprite="true"');
						document.body.insertBefore(div.firstChild, document.body.firstChild);
					}
				})
				.catch(function (error) { console.error('Error fetching SVG sprite:', error); });
		})();
	</script>


	<meta name="description"
		content="دوره های آموزش شبکه، برنامه نویسی، بانک های اطلاعاتی، وب و ... با برترین مدرسین ایران به همراه پشتیبانی و صدور مدرک">
	<link rel="stylesheet" href="<?php echo links ?>/pagination.css">
	<link rel="stylesheet" href="<?php echo links ?>/course_all.css">
	<link rel="stylesheet" href="<?php echo links ?>/course_category_landing.css">

</head>
<!--
USER STATE CONTROL:
- To show the logged-in view, use class="user-logged-in"
- To show the guest view, use class="us  er-guest"
-->

<body class="user-guest user-phone-unverified" data-phone-verified="false"><svg data-injected-sprite="true"
		xmlns="http://www.w3.org/2000/svg" style="position: absolute; width: 0; height: 0; overflow: hidden;">
		<symbol id="server" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M160 96C124.7 96 96 124.7 96 160L96 224C96 259.3 124.7 288 160 288L480 288C515.3 288 544 259.3 544 224L544 160C544 124.7 515.3 96 480 96L160 96zM376 168C389.3 168 400 178.7 400 192C400 205.3 389.3 216 376 216C362.7 216 352 205.3 352 192C352 178.7 362.7 168 376 168zM432 192C432 178.7 442.7 168 456 168C469.3 168 480 178.7 480 192C480 205.3 469.3 216 456 216C442.7 216 432 205.3 432 192zM160 352C124.7 352 96 380.7 96 416L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 416C544 380.7 515.3 352 480 352L160 352zM376 424C389.3 424 400 434.7 400 448C400 461.3 389.3 472 376 472C362.7 472 352 461.3 352 448C352 434.7 362.7 424 376 424zM432 448C432 434.7 442.7 424 456 424C469.3 424 480 434.7 480 448C480 461.3 469.3 472 456 472C442.7 472 432 461.3 432 448z">
			</path>
		</symbol>
		<symbol id="instagram" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z">
			</path>
		</symbol>
		<symbol id="telegram-plane" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M320 72C183 72 72 183 72 320C72 457 183 568 320 568C457 568 568 457 568 320C568 183 457 72 320 72zM435 240.7C431.3 279.9 415.1 375.1 406.9 419C403.4 437.6 396.6 443.8 390 444.4C375.6 445.7 364.7 434.9 350.7 425.7C328.9 411.4 316.5 402.5 295.4 388.5C270.9 372.4 286.8 363.5 300.7 349C304.4 345.2 367.8 287.5 369 282.3C369.2 281.6 369.3 279.2 367.8 277.9C366.3 276.6 364.2 277.1 362.7 277.4C360.5 277.9 325.6 300.9 258.1 346.5C248.2 353.3 239.2 356.6 231.2 356.4C222.3 356.2 205.3 351.4 192.6 347.3C177.1 342.3 164.7 339.6 165.8 331C166.4 326.5 172.5 322 184.2 317.3C256.5 285.8 304.7 265 328.8 255C397.7 226.4 412 221.4 421.3 221.2C423.4 221.2 427.9 221.7 430.9 224.1C432.9 225.8 434.1 228.2 434.4 230.8C434.9 234 435 237.3 434.8 240.6z">
			</path>
		</symbol>
		<symbol id="linkedin-in" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z">
			</path>
		</symbol>
		<symbol id="percent" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M288 192C288 139 245 96 192 96C139 96 96 139 96 192C96 245 139 288 192 288C245 288 288 245 288 192zM544 448C544 395 501 352 448 352C395 352 352 395 352 448C352 501 395 544 448 544C501 544 544 501 544 448zM534.6 150.6C547.1 138.1 547.1 117.8 534.6 105.3C522.1 92.8 501.8 92.8 489.3 105.3L105.3 489.3C92.8 501.8 92.8 522.1 105.3 534.6C117.8 547.1 138.1 547.1 150.6 534.6L534.6 150.6z">
			</path>
		</symbol>
		<symbol id="envelope" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z">
			</path>
		</symbol>
		<symbol id="chevron-down" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z">
			</path>
		</symbol>
		<symbol id="rocket" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M192 384L88.5 384C63.6 384 48.3 356.9 61.1 335.5L114 247.3C122.7 232.8 138.3 224 155.2 224L250.2 224C326.3 95.1 439.8 88.6 515.7 99.7C528.5 101.6 538.5 111.6 540.3 124.3C551.4 200.2 544.9 313.7 416 389.8L416 484.8C416 501.7 407.2 517.3 392.7 526L304.5 578.9C283.2 591.7 256 576.3 256 551.5L256 448C256 412.7 227.3 384 192 384L191.9 384zM464 224C464 197.5 442.5 176 416 176C389.5 176 368 197.5 368 224C368 250.5 389.5 272 416 272C442.5 272 464 250.5 464 224z">
			</path>
		</symbol>
		<symbol id="phone-alt" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M415.8 89C423.6 70.2 444.2 60.1 463.9 65.5L469.4 67C534 84.6 589.2 147.2 573.1 223.4C536 398.4 398.3 536.1 223.3 573.2C147 589.4 84.5 534.1 66.9 469.5L65.4 464C60 444.3 70.1 423.7 88.9 415.9L186.2 375.4C202.7 368.5 221.8 373.3 233.2 387.2L271.8 434.4C342.1 399.5 398.6 341.1 431.1 269.5L387 233.4C373.1 222.1 368.4 203 375.2 186.4L415.8 89z">
			</path>
		</symbol>
		<symbol id="facebook-f" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z">
			</path>
		</symbol>
		<symbol id="twitter" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M523.4 215.7C523.7 220.2 523.7 224.8 523.7 229.3C523.7 368 418.1 527.9 225.1 527.9C165.6 527.9 110.4 510.7 64 480.8C72.4 481.8 80.6 482.1 89.3 482.1C138.4 482.1 183.5 465.5 219.6 437.3C173.5 436.3 134.8 406.1 121.5 364.5C128 365.5 134.5 366.1 141.3 366.1C150.7 366.1 160.1 364.8 168.9 362.5C120.8 352.8 84.8 310.5 84.8 259.5L84.8 258.2C98.8 266 115 270.9 132.2 271.5C103.9 252.7 85.4 220.5 85.4 184.1C85.4 164.6 90.6 146.7 99.7 131.1C151.4 194.8 229 236.4 316.1 240.9C314.5 233.1 313.5 225 313.5 216.9C313.5 159.1 360.3 112 418.4 112C448.6 112 475.9 124.7 495.1 145.1C518.8 140.6 541.6 131.8 561.7 119.8C553.9 144.2 537.3 164.6 515.6 177.6C536.7 175.3 557.2 169.5 576 161.4C561.7 182.2 543.8 200.7 523.4 215.7z">
			</path>
		</symbol>
		<symbol id="bars" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z">
			</path>
		</symbol>
		<symbol id="th-large" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M480 160L352 160L352 288L480 288L480 160zM544 288L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 160C96 124.7 124.7 96 160 96L480 96C515.3 96 544 124.7 544 160L544 288zM160 352L160 480L288 480L288 352L160 352zM288 288L288 160L160 160L160 288L288 288zM352 352L352 480L480 480L480 352L352 352z">
			</path>
		</symbol>
		<symbol id="shopping-cart" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M24 48C10.7 48 0 58.7 0 72C0 85.3 10.7 96 24 96L69.3 96C73.2 96 76.5 98.8 77.2 102.6L129.3 388.9C135.5 423.1 165.3 448 200.1 448L456 448C469.3 448 480 437.3 480 424C480 410.7 469.3 400 456 400L200.1 400C188.5 400 178.6 391.7 176.5 380.3L171.4 352L475 352C505.8 352 532.2 330.1 537.9 299.8L568.9 133.9C572.6 114.2 557.5 96 537.4 96L124.7 96L124.3 94C119.5 67.4 96.3 48 69.2 48L24 48zM208 576C234.5 576 256 554.5 256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z">
			</path>
		</symbol>
		<symbol id="bell" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M320 64C302.3 64 288 78.3 288 96L288 99.2C215 114 160 178.6 160 256L160 277.7C160 325.8 143.6 372.5 113.6 410.1L103.8 422.3C98.7 428.6 96 436.4 96 444.5C96 464.1 111.9 480 131.5 480L508.4 480C528 480 543.9 464.1 543.9 444.5C543.9 436.4 541.2 428.6 536.1 422.3L526.3 410.1C496.4 372.5 480 325.8 480 277.7L480 256C480 178.6 425 114 352 99.2L352 96C352 78.3 337.7 64 320 64zM258 528C265.1 555.6 290.2 576 320 576C349.8 576 374.9 555.6 382 528L258 528z">
			</path>
		</symbol>
		<symbol id="user" viewBox="0 0 640 640">
			<path fill="currentColor"
				d="M320 312C386.3 312 440 258.3 440 192C440 125.7 386.3 72 320 72C253.7 72 200 125.7 200 192C200 258.3 253.7 312 320 312zM290.3 368C191.8 368 112 447.8 112 546.3C112 562.7 125.3 576 141.7 576L498.3 576C514.7 576 528 562.7 528 546.3C528 447.8 448.2 368 349.7 368L290.3 368z">
			</path>
			<symbol id="certificate" viewBox="0 0 640 640">
				<path fill="currentColor"
					d="M271.2 56C265.1 49.8 256.2 47.3 247.8 49.6C239.4 51.9 232.9 58.4 230.8 66.8L215.5 127C214.4 131.4 209.9 134 205.6 132.7L145.8 115.9C137.4 113.5 128.4 115.9 122.3 122C116.2 128.1 113.8 137.1 116.2 145.5L133.1 205.3C134.3 209.6 131.7 214.1 127.4 215.2L67.1 230.5C58.7 232.6 52.1 239.2 49.8 247.6C47.5 256 50 264.9 56.2 271L100.7 314.3C103.9 317.4 103.9 322.6 100.7 325.8L56.3 369.1C50.1 375.2 47.6 384.1 49.9 392.5C52.2 400.9 58.8 407.4 67.2 409.6L127.4 424.9C131.8 426 134.4 430.5 133.1 434.8L116.2 494.5C113.8 502.9 116.2 511.9 122.3 518C128.4 524.1 137.4 526.5 145.8 524.1L205.6 507.2C209.9 506 214.4 508.6 215.5 512.9L230.8 573.1C232.9 581.5 239.5 588.1 247.9 590.4C256.3 592.7 265.2 590.2 271.3 584L314.6 539.5C317.7 536.3 322.9 536.3 326.1 539.5L369.3 584C375.4 590.2 384.3 592.7 392.7 590.4C401.1 588.1 407.6 581.5 409.8 573.1L425.1 513C426.2 508.6 430.7 506 435 507.3L494.8 524.2C503.2 526.6 512.2 524.2 518.3 518.1C524.4 512 526.8 503 524.4 494.6L507.5 434.8C506.3 430.5 508.9 426 513.2 424.9L573.4 409.6C581.8 407.5 588.4 400.9 590.7 392.5C593 384.1 590.5 375.1 584.3 369.1L539.8 325.8C536.6 322.7 536.6 317.5 539.8 314.3L584.3 271C590.5 264.9 593 256 590.7 247.6C588.4 239.2 581.8 232.7 573.4 230.5L513.2 215.2C508.8 214.1 506.2 209.6 507.5 205.3L524.4 145.5C526.8 137.1 524.4 128.1 518.3 122C512.2 115.9 503.2 113.5 494.8 115.9L435 132.8C430.7 134 426.2 131.4 425.1 127.1L409.8 66.8C407.7 58.4 401.1 51.8 392.7 49.5C384.3 47.2 375.4 49.7 369.3 55.9L326 100.5C322.9 103.7 317.7 103.7 314.5 100.5L271.2 56z">
				</path>
			</symbol>
			<symbol id="youtube" viewBox="0 0 640 640">
				<path fill="currentColor"
					d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z">
				</path>
			</symbol>
			<symbol id="map-marker-alt" viewBox="0 0 640 640">
				<path fill="currentColor"
					d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z">
				</path>
			</symbol>

	</svg>

	<!-- این ستایل های دستی هیدر است چون نام اش همراه نام دیگه هدر ها خراب بود پس دستی وارد شده -->
	<style>
	
	.container_new{
		display: flex;
		justify-content: space-between;
		margin-left: 20px;
		margin-right: 20px;
	}
</style>

	<!-- Main Header Section -->
	<header class="site-header">

		<div class="main-header" id="main-header">
			<div class="container_new">
				<div class="main-header__left">

					<!-- Mobile Nav Toggle -->
					<button class="mobile-nav-toggle" aria-label="Open navigation menu">
						<svg class="icon icon-bars" aria-hidden="true">
							<use xlink:href="#bars"></use>
						</svg>
					</button>
					<!-- Logo -->
					<a href="" class="main-header__logo">
						<img src="<?php echo links ?>/img_of_about/karyab-logo.png"
							alt="Tosinso Logo" class="logo-large">
					</a>


					<!-- Main Navigation -->
					<nav class="main-header__nav">
						<ul class="font-bold">
							<li><a class="text-muted"  href="<?php echo home_page?>">خانه</a></li>
							<li><a class="text-muted"  href="<?php  echo go_another_page ?>/about-tpl.php">درباره</a></li>
							<li><a class="text-muted"  href="<?php  echo go_another_page ?>/contact-tpl.php">تماس</a></li>
						</ul>
					</nav>
				</div>


				<div class="main-header__right">
					<!-- Search Bar -->
					<div class="main-header__search" style="border: 0;">
						<button class="main-header__category-btn form-control mt-2" id="filter_btn">
							<img style="height: 20px;" src="<?php echo links ?>/menue-down.png" alt="">
							فلتر کردن بر اساس....
						</button>
						<!-- <input type="text" placeholder="فلتر کردن بر اساس...." id="desktop-search-input">
						<svg class="icon icon-search main-header__search-icon" aria-hidden="true">
							<use xlink:href="#search"></use>
						</svg> -->
					</div>

					<!-- User Actions -->
					<div class="main-header__actions">
						<!-- Common Actions (Visible to all) -->
						<a href="https://tosinso.com/courses#" class="main-header__action-btn mobile-search-toggle"
							aria-label="Search">
							<svg class="icon icon-search" aria-hidden="true">
								<use xlink:href="#search"></use>
							</svg>
						</a>

						<!-- Logged-in User Actions -->
						<a id="notifications-popup-trigger" class="main-header__action-btn action-logged-in"
							aria-label="Notifications">
							<svg class="icon icon-bell" aria-hidden="true">
								<use xlink:href="#bell"></use>
							</svg>
							<span class="badge" id="notifications-badge" style="display: none;"></span>
						</a>

						<!-- Guest User Actions -->
						<a href="<?php echo goToLogin;?>"
							class="btn btn-primary action-guest login-btn">
							<svg class="icon icon-user" aria-hidden="true">
								<use xlink:href="#user"></use>
							</svg>
							<span class="login-text">ورود/ثبت نام</span>
						</a>
					</div>
				</div>
			</div>
			<!-- Mobile Search Overlay -->
			<div class="mobile-search-overlay">
				<div class="search-wrapper">
					<!-- <input type="text" placeholder="جستجو در دوره ها..." id="mobile-search-input"> -->
				</div>

				<button class="close-search-btn" aria-label="Close search">x</button>
			</div>
			<span class="filter_mobile_btn d-md-none rounded" style=" height: 47px; width: 70px; cursor: pointer; background-color: #1A73E8; color: white; display: flex; justify-content: space-between; align-items: center; padding: 4px 12px;" class="text-center" href=""><span>فلتر</span> <img width="15px" height="15px" src="<?php echo links ?>/down.png" alt=""></span>
		</div>
		<!-- Placeholder to prevent content jump when header becomes sticky -->
		<div class="header-placeholder" id="header-placeholder"></div>

	</header>



	<!-- filtering -->

	<div class="filter_btn_text" id="filterBtn">


		<!-- the province -->
		<form action="tpl/singles/single_search_page.php" method="post" class="bg-primar" id="province_dictrict">

			<div class="row">
				<div class="col-12 col-md-4 mt-2">
					<select class="form-control w-100" name="provinces" id="province_selection">
						<option value="select">ولایت خود را انتخاب نمایید</option>
						<option value="کندز">کندز</option>
						<option value="تخار">تخار</option>
						<option value="کابل">کابل</option>
						<option value="پروان">پروان</option>
						<option value="بغلان">بغلان</option>
						<option value="بدخشان">بدخشان</option>
						<option value="مزار">مزار</option>
					</select>
				</div>


				<div class="col-12 col-md-4 mt-2">
					<select class="form-control w-100" name="district" id="defult_district">
						<option value="-1">ولسوالی خود را انتخاب نمایید</option>
					</select>
				</div>

				<div class="col-12 col-md-4 mt-2">
					<select class="form-control w-100" name="job" id="defult_district">
						<option value="-1">شغل مورد نظر را انتخاب نمایید</option>
						<option value="نجار">نجار</option>
						<option value="آشپز">آشپز</option>
						<option value="خیاط">خیاط</option>
						<option value="رنگمال">رنگمال</option>
						<option value="انجنیر برق">انجنیر برق</option>
						<option value="فالین شویی">فالین شویی</option>
						<option value="نما کار">نما کار</option>
						<option value="عیار دیش">عیار دیش</option>
						<option value="مستری">مستری</option>
						<option value="فلز کار">فلز کار</option>
						<option value="انجنیر مبایل">انجنیر مبایل</option>
						<option value="کارگر">کارگر</option>
					</select>
				</div>

				<div class="btn">
					<input type="submit" name="button" value="جستجو" class="btn btn-primary">
				</div>

			</div>

		</form>



	</div>


	<!-- Mega Menu HTML Structure -->
	<div class="mega-menu" id="mega-menu-container">
		<div class="mega-menu__sidebar" id="mega-menu-sidebar">
			<!-- Category items will be injected by JS -->
		</div>
		<div class="mega-menu__content-wrapper">
			<div class="mega-menu__content" id="mega-menu-content">
				<!-- Content for the selected category will be injected by JS -->
			</div>
			<div class="mega-menu__featured-course" id="mega-menu-featured-course">
				<!-- "Featured Course" content will be injected by JS -->
			</div>
		</div>
	</div>

	<!-- Mobile Navigation Sidebar -->
	<div class="mobile-nav-overlay"></div>
	<aside class="mobile-nav-sidebar">
		<div class="mobile-nav__header">
			<img src="<?php echo links ?>/img_of_about/karyab-logo.png" alt="Tosinso"
				class="logo-small">
			<button class="mobile-nav__close-btn" aria-label="Close navigation menu">×</button>
		</div>
		<div class="mobile-nav__body">
			<ul>
				<li>

				</li>
				<li><a href="<?php echo home_page ?>">خانه</a></li>
				<li><a href="<?php  echo go_another_page ?>/about-tpl.php">درباره</a></li>
				<li><a href="<?php  echo go_another_page ?>/contact-tpl.php">تماس</a></li>
			</ul>
			<div class="submenu-toggle">
				<span>شغل ها</span>
				<svg class="icon icon-chevron-down arrow" aria-hidden="true">
					<use xlink:href="#chevron-down"></use>
				</svg>
			</div>
			<ul class="mobile-nav__submenu">
				<li><a href="<?php echo single_path ?>?job=فلز کار"> فلز کار </a></li>
				<li><a href="<?php echo single_path ?>?job=آشپز">آشپز</a></li>
				<li><a href="<?php echo single_path ?>?job=رنگمال">رنگمال</a></li>
				<li><a href="<?php echo single_path ?>?job=نما کار">نما کار</a></li>
				<li><a href="<?php echo single_path ?>?job=انجنیر برق">انجنیر برق</a></li>
				<li><a href="<?php echo single_path ?>?job=قالین شویی">قالین شویی</a></li>
				<li><a href="<?php echo single_path ?>?job=مستری">مستری</a></li>
				<li><a href="<?php echo single_path ?>?job=عیار دیش">عیار دیش</a></li>
				<li><a href="<?php echo single_path ?>?job=خیاط">خیاط</a></li>
				<li><a href="<?php echo single_path ?>?job=فلز کار">فلز کار</a></li>
				<li><a href="<?php echo single_path ?>?job=انجنیر مبایل">انجنیر مبایل</a></li>
				<li><a href="<?php echo single_path ?>?job=کارگر">کارگر</a></li>
			</ul>
		</div>
	</aside>

	<!-- Shopping Cart Sidebar Container -->
	<div id="cart-sidebar-container">
		<!-- The cart sidebar will be dynamically rendered here by js/cart.js -->
	</div>






	<!-- Main content of the page -->
	<main class="main-content-area">
		<section class="category-hero">
			<div class="container">
				<h1 class="scroll-animate fade-in " style="font-family: BYekan;">وب سایت کاریاب</h1>
				<p class="scroll-animate fade-in" style="animation-delay: 0.2s;">
					در ویب سایت کاریاب ما با هدف ایجاد پلی میان افراد دارای مهارت و کارفرمایان نیاز مند نیرویی متخصص این
					پلتفرم را طراحی کردیم در اینجا هر کس میتواند توانایی ها و مهارت خود را معرفی کند و کار فرمایان نیز
					میتواند به سادگی افراد مورد نیاز خود را بیایند
				</p>
				<div class="hero-cta-buttons scroll-animate fade-in" style="animation-delay: 0.4s;">
					<a href="#works"  class="btn btn-primary btn-sm">مشاهده تمام شغل های موجود</a>
				</div>
			</div>
		</section>

		<section class="page-section">
			<div class="container">
				<div class="section-title text-right scroll-animate fade-in">
					<h3>به ویب سایت فاریاب خوش امدید!</h3>
				</div>
				<div class="about-category-grid">
					<div class="about-category-text scroll-animate slide-in-right">
						<p>
						ویب‌سایت خدمات محلی افغانستان یک پلتفرم جامع، نوآور و ملی است که با هدف ایجاد سهولت در دسترسی مردم به خدمات مختلف در سراسر کشور طراحی و ساخته شده است. این وب‌سایت به عنوان پلی میان مردم و ارائه‌دهندگان خدمات فعالیت می‌کند تا هر شهروند افغان بتواند بدون محدودیت زمانی و مکانی، به خدمات مورد نیاز خود دسترسی پیدا کند. 

خدمات محلی افغانستان یک پروژه مدرن دیجیتالی است که در راستای رشد تکنالوژی، حمایت از کسب‌وکارهای کوچک و متوسط، ترویج کارآفرینی، و تسهیل امور روزمره شهروندان شکل گرفته است. این سایت به کاربران اجازه می‌دهد تا خدمات متنوعی را در بخش‌های مختلف از جمله اجتماعی، فنی، آموزشی، تجارتی، صحی، و اداری بیابند. 

در بخش خدمات شهری و روستایی، مردم می‌توانند نیازهای خود را مانند خدمات آب‌رسانی، برق‌رسانی، پاک‌کاری محیط، ترمیم جاده‌ها و خانه‌ها برطرف کنند. در قسمت خدمات فنی و ساختمانی، افراد می‌توانند کارگران، انجینیران، معماران، برق‌کاران، و لوله‌کش‌های حرفه‌ای را پیدا کرده و با آنان در تماس شوند. 

در بخش آموزشی و فرهنگی، وب‌سایت خدمات محلی افغانستان زمینه‌ای برای دسترسی به استادان، مشاوران درسی، کلاس‌های آنلاین، و منابع آموزشی فراهم می‌کند تا جوانان کشور بتوانند مهارت‌های خود را گسترش دهند و آینده‌ای روشن‌تر برای خود بسازند. 

در بخش خدمات صحی و درمانی، کاربران می‌توانند معلومات در مورد شفاخانه‌ها، کلینیک‌ها، دواخانه‌ها و داکتران معتبر در سراسر افغانستان دریافت کنند و حتی از طریق سیستم رزرو آنلاین، وقت ملاقات بگیرند. 

در قسمت تجارتی و خرید و فروش، این پلتفرم بستری مطمئن برای معرفی و فروش محصولات محلی فراهم کرده است تا تاجران، دهقانان، و صنعت‌کاران افغان بتوانند کالاهای خود را بدون واسطه به مردم عرضه کنند. این کار باعث رشد اقتصاد محلی و حمایت از تولیدات داخلی می‌گردد. 

بخش حمل‌ونقل و خدمات موتر به کاربران این امکان را می‌دهد که رانندگان، موترهای کرایی، شرکت‌های ترانسپورتی، و سرویس‌های باربری را به آسانی پیدا کنند. 

 


						</p>
						<p>
						</p>
						<p>



						</p>
					</div>
					<div class="about-category-image scroll-animate slide-in-left">
						<img src="<?php echo links ?>/all_w550.webp"
							alt="بهترین منبع آموزش های آنلاین کامپیوتر و فناوری اطلاعات">
					</div>
				</div>
			</div>
		</section>

		<section class="page-section stats-section">
			<div class="container">
				<div class="section-title scroll-animate fade-in">
					<h2>فاریاب در فاریاب امار و ارقام</h2>
					<p>نگاهی به مجموع کار گران در بخش های مخطلف </p>
				</div>
				<div class="category-numbers-card scroll-animate zoom-in">
					<div class="numbers-grid">
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/18398717.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfToiler; ?>"><?php echo $numberOfToiler; ?>
							</div>
							<div class="number-item-label">مجموع از خیاطان </div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/663002.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfMystrys; ?>"><?php echo $numberOfMystrys; ?>
							</div>
							<div class="number-item-label">مجموع از مستریان </div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/246607.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfPainters; ?>">
								<?php echo $numberOfPainters; ?></div>
							<div class="number-item-label">مجموع از رنگمالان </div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/10327118.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfWorkers; ?>"><?php echo $numberOfWorkers; ?>
							</div>
							<div class="number-item-label">مجموع از کارگران </div>
							<p class="number-item-description"></p>
						</div>
					</div>
				</div>



				<div class="category-numbers-card scroll-animate zoom-in">
					<div class="numbers-grid">
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/10059700.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfNajars; ?>"><?php echo $numberOfNajars; ?>
							</div>
							<div class="number-item-label">مجموع از نجاران</div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/1021641.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfCook; ?>"><?php echo $numberOfCook; ?>
							</div>
							<div class="number-item-label">مجموع از اشپزان</div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/7174962.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfElecEng; ?>"><?php echo $numberOfElecEng; ?>
							</div>
							<div class="number-item-label">مجموع از انجنیران برق</div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/17275298.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfQalinShoyan; ?>">
								<?php echo $numberOfQalinShoyan; ?>
							</div>
							<div class="number-item-label">مجموع از قالین شویان</div>
							<p class="number-item-description"></p>
						</div>
					</div>
				</div>


				<div class="category-numbers-card scroll-animate zoom-in">
					<div class="numbers-grid">
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/8976380.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfNumaKar; ?>"><?php echo $numberOfNumaKar; ?>
							</div>
							<div class="number-item-label">مجموع از نما کاران </div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/5246710.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfFlizKar; ?>"><?php echo $numberOfFlizKar; ?>
							</div>
							<div class="number-item-label">مجموع از فلز کاران </div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/663002.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfDish; ?>"><?php echo $numberOfDish; ?></div>
							<div class="number-item-label">مجموع از عیاران دیش</div>
							<p class="number-item-description"></p>
						</div>
						<div class="number-item">
							<i><img style="height: 3rem;" src="<?php echo links ?>/5655187.png" alt=""></i>
							<div class="number-item-value" data-animator="number"
								data-animator-target="<?php echo $numberOfMobEng; ?>"><?php echo $numberOfMobEng; ?>
							</div>
							<div class="number-item-label">مجموع از انجنیران موبایل </div>
							<p class="number-item-description"></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="page-section">
			<div class="container">
				<div class="section-title scroll-animate fade-in">
					<h2 id="works">لیست شغل های موجود</h2>
					<p>در این بخش شما میتوایند نظر به نوع کار شما افراد را طلب کنید</p>
				</div>
				<div class="subcategories-grid">
					<a href="<?php echo single_path ?>?job=رنگمال">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/246607.png" alt=""></i>
							<h4>رنگمال</h4>
						</div>
					</a>
					<a href="<?php echo single_path ?>?job=نجار">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/10059700.png" alt=""></i>
							<h4>نجار</h4>
						</div>
					</a>

					<a href="<?php echo single_path ?>?job=آشپز">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/1021641.png" alt=""></i>
							<h4>آشپز</h4>
						</div>
					</a>


					<a href="<?php echo single_path ?>?job=خیاط">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/18398717.png" alt=""></i>
							<h4>خیاط</h4>
						</div>
					</a>

					<a href="<?php echo single_path ?>?job=انجنیر برق">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/7174962.png" alt=""></i>
							<h4>انجنیر برق</h4>
						</div>
					</a>

					<a href="<?php echo single_path ?>?job=قالین شویی">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/17275298.png" alt=""></i>
							<h4>قالین شویی</h4>
						</div>
					</a>

					<a href="<?php echo single_path ?>?job=نما کار">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/8976380.png" alt=""></i>
							<h4>نما کار</h4>
						</div>
					</a>

					<a href="<?php echo single_path ?>?job=عیار دیش">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/663002.png" alt=""></i>
							<h4>عیار دیش</h4>
						</div>
					</a>

					<a href="<?php echo single_path ?>?job=مستری">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/4635207.png" alt=""></i>
							<h4>مستری</h4>
						</div>
					</a>

					<a href="<?php echo single_path ?>?job=فلز کار">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/5246710.png" alt=""></i>
							<h4>فلز کار</h4>
						</div>
					</a>

					<a href="<?php echo single_path ?>?job=انجنیر مبایل">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/5655187.png" alt=""></i>
							<h4>انجنیر مبایل</h4>
						</div>
					</a>


					<a href="<?php echo single_path ?>?job=کارگر">
						<div class="subcategory-card scroll-animate fade-in-up">
							<i><img style="height: 3rem;" src="<?php echo links ?>/10327118.png" alt=""></i>
							<h4>کارگر</h4>
						</div>
					</a>



				</div>
			</div>
		</section>



	</main>

	<!-- Site Footer -->
	<footer class="site-footer">
		<div class="main-footer">
			<div class="container">
				<!-- Column 1: About -->
				<div class="footer-col">
					<h3 class="footer-col__title">درباره کاریاب</h3>
					<p>در ویب سایت کاریاب ما با هدف ایجاد پلی میان افراد دارای مهارت و کارفرمایان نیاز مند نیرویی متخصص
						این پلتفرم را طراحی کردیم در اینجا هر کس میتواند توانایی ها و مهارت خود را معرفی کند و کار
						فرمایان نیز میتواند به سادگی افراد مورد نیاز
						خد را بیایند
					</p>
					<div class="footer-social-links">
						<a href="" aria-label="YouTube"><svg class="icon icon-youtube" aria-hidden="true">
								<use xlink:href="#youtube"></use>
							</svg></a>
						<a href="" aria-label="Telegram"><svg class="icon icon-telegram-plane" aria-hidden="true">
								<use xlink:href="#telegram-plane"></use>
							</svg></a>
						<a href="" aria-label="LinkedIn"><svg class="icon icon-linkedin-in" aria-hidden="true">
								<use xlink:href="#linkedin-in"></use>
							</svg></a>
						<a href="" aria-label="Instagram"><svg class="icon icon-linkedin-in" aria-hidden="true">
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
		<div class="sub-footer" >
			<div class="container" >
				<div class="copyright text-sm-center text-center d-flex justify-content-center">
					<p class="text-center">© ۱۴۰۴ تمام حقوق برای کاریاب محفوظ است.</p>
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


	<script src="<?php echo links ?>/index.js"></script>
	<script src="boot code/boot.min.js"></script>
	<script src="<?php echo links ?>/site.bundle.js.download"></script>
	<script src="<?php echo links ?>/course_discount_timer.js.download"></script>
	<script src="<?php echo links ?>/discount-banner.js.download"></script>
	<script src="<?php echo links ?>/captcha-validator.js.download"></script>
	<script src="<?php echo links ?>/pagination.js.download"></script>
	<script src="<?php echo links ?>/course_all.js.download"></script>
	<script src="<?php echo links ?>/course_category_landing.js.download"></script>





</body>

</html>