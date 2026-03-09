<?php
require_once "helper/URL_helper.php";
?>
<?php require_once "components/header.php"; ?>
<div class="container-fluid bg-light">

    <section class="row" >
        <div class="col-md-6 col-12  px-3 py-4 mt-md-5 mt-5 mb-5" style="border-radius: 12px;">
            <form id="ppp"  action="#" method="post">
                <h3 class="text-center text-muted">اینجا با ما پیام دهید</h3>
                <div style="text-align: right;">
                    <label for="name" class="form-lable mt-2">اسم</label>
                    <input style="text-align: right;" type="text" name="username" id="name" class="form-control">
                </div>
                <div style="text-align: right;">
                    <label for="email" class="form-lable mt-2">ایمیل</label>
                    <input style="text-align: right;" type="email" name="email" id="email" class="form-control">
                </div>
                <div style="text-align: right;">
                    <label for="phone" class="form-lable mt-2">تلفن</label>
                    <input style="text-align: right;" type="text" name="phone" id="phone" class="form-control">
                </div>
                <div style="text-align: right;">
                    <label for="message" class="form-lable mt-2">پیام</label>
                    <textarea style="text-align: right;" name="message" rows="8" cols="12" class="form-control"
                        id="message"></textarea>
                </div>

                <button type="submit" name="send" class="btn btn-primary w-100 mt-3">ارسال</button>
                <!-- <p class="text-danger"><?php if (!empty($error)) {
                    echo $error;
                } ?></p> -->
                <!-- <p class="text-success"><?php if (!empty($message)) {
                    echo $message;
                } ?></p> -->

            </form>
        </div>
        <div class="col-md-6 d-none d-md-block col-12 mt-md-5 mt-1">
            <img src="<?php echo links ?>/contact-bg.png" class="w-100" alt="" style="border-radius:12px;">
        </div>
    </section>
</div>
<?php require_once "components/footer.php"; ?>