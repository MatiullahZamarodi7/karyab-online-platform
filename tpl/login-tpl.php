<?php
include "bootstrap/init.php";
global $msg;
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

  <head>
    <meta charset="UTF-8">
    <title>کاریاب | ثبت نام</title>
    <link rel='stylesheet' href='assets/css/tailwind-all.min.css'>
  </head>
    
  <body class="antialiased bg-gray-200 text-gray-900 font-sans">
    <div class="flex items-center h-screen w-full">
      <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
        <!-- form -->
      <span>
          <img src="" alt="">
      </span>
      <span class="block w-full text-xl uppercase font-bold mb-4">ورود به حساب</span>      
        <form class="mb-4" action="" method="post">
          <div class="mb-4 md:w-full">
            <label for="phone" class="block text-m mb-1">شماره مبایل</label>
            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="text" name="phone_no" id="phone" placeholder="شماره مبایل خود را وارد کنید!">
          </div>
          <div class="mb-6 md:w-full">
            <label for="password" class="block text-m mb-1">رمز عبور</label>
            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="password" name="pass" id="password" placeholder="رمز عبور حود را وارد کنید!">
          </div>
          <button name="login" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white uppercase text-sm font-semibold px-4 py-2 rounded" >ورود</button>
        </form>
          <p style="color: red; text-align: center;"><?= $msg ?></p>
          <!-- fend of form -->
        <a class="text-blue-700 text-center text-sm" href="auth.php?action=register">حساب کاربری ندارم</a>
    </div>
  </div>
</body>

</html>

<!-- created by infinate team / Khairullah Azad -->
