<?php
include "bootstrap/init.php";
global$msg;
$jobs=[
        'انجنیر برق','فلز کار','آشپز','نجار','رنگمال','انجنیر مبایل','مستری','خیاط','کارگر','قالین شویی','عیار دیش','نما کار','بیکار'
];
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

  <head>
    <meta charset="UTF-8">
    <title>کاریاب | ورود به حساب</title>
    <link rel='stylesheet' href='assets/css/tailwind-all.min.css'>
  </head>
    
  <body class="antialiased bg-gray-200 text-gray-900 font-sans">
    <div class="flex items-center">
      <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto ">
        <!-- form -->
      <h3 class="block w-full text-xl uppercase font-bold mb-2">ورود به حساب</h3>      
        <form class="mb-2" action="auth.php?action=register" method="post" enctype="multipart/form-data">  <!-- form  -->
            <p style="color: red; text-align: center;"><?= $msg ?></p>
            <div class="mb-2 md:w-full">
            <label for="phone" class="block text-m mb-1">نام کامل</label>
            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="text" name="name" id="name" placeholder=" نام کامل خود را وارد کنید!">
          </div>
          <div class="mb-2 md:w-full">
            <label for="phone" class="block text-m mb-1">شماره مبایل </label>
            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="text" name="phone" id="phone" placeholder="شماره مبایل خود را وارد کنید!">
          </div>
          <div class="mb-2 md:w-full">
            <label for="phone" class="block text-m mb-1">شغل</label>
            <select class="mb-2 md:w-full border p-2 rounded" name="job" id="job">
                <option value="" selected disabled>شغل تان را انتخاب کنید!</option>
                <?php foreach($jobs as $job):?>
              <option value="<?= $job ?>"><?= $job ?></option>
                <?php endforeach;?>
            </select>
          </div>
          <div class="mb-2 md:w-full">
            <label for="phone" class="block text-m mb-1">ولایت</label>
              <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="text" name="province" id="province" placeholder="لطفا اطلاعات مکانی تان را دقیق وارد کنید!!!">
          </div>
          <div class="mb-1 md:w-full">
            <label for="district" class="block text-m mb-1">ولسوالی</label>
              <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="text" name="district" id="district" placeholder="لطفا اطلاعات مکانی تان را دقیق وارد کنید!!!">
          </div>
          <div class="mb-2 md:w-full">
            <label for="password" class="block text-m mb-1">عکس پروفایل</label>
            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="file" name="profile_photo" id="profile_photo" placeholder="">
          </div>
            <div class="mb-1 md:w-full">
                <label for="introduce" class="block text-m mb-1">بیشتر در مورد من</label>
                <textarea class="w-full border rounded p-2 outline-none focus:shadow-outline" name="introduce" id="introduce" ></textarea>
            </div>
          <div class="mb-2 md:w-full">
            <label for="password" class="block text-m mb-1">رمز عبور</label>
            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="رمز عبور حود را وارد کنید!">
          </div>
          <div class="mb-2 md:w-full">
            <label for="password" class="block text-m mb-1">تکرار رمز عبور</label>
            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="password" name="conf_password" id="conf-password" placeholder="رمز عبور حود را تکرار کنید!">
          </div>
          <button type="submit" name="register" class="bg-blue-500 hover:bg-blue-700 text-white uppercase text-sm font-semibold px-4 py-2 rounded">ثبت نام</button>
        </form>
        <!-- fend of form -->
        <a class="text-blue-700 text-center text-sm" href="auth.php?action=login">حساب کاربری دارم</a>
    </div>
  </div>
</body>

</html>
<!-- created by infinate team / Khairullah Azad -->
