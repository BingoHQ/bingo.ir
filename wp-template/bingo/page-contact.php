<?php
/* Template Name: صفحه ارتباط با ما */
get_header('contact');
?>
<style>
    .message {
        padding: 25px 10px;
        margin: 15px auto;
        font-weight: 500;
        text-align: center;
    }

    .message.success {
        color: #008647;
    }

    .message.error {
        color: #cf4944;
    }
</style>
<main class="contact-layout">
    <section class="contact-info">
        <div class="info address"> نشانی: تهران، خیابان میرزای شیرازی، خیابان میرزاحسنی، پلاک 22</div>
        <div class="info telephone"> تلفن: 8342-021 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp مرکز پشتیبانی: 89362000
        </div>
        <div class="info email"> ایمیل: info@teskaco.com
            <div class="social"><span id="instagram"><a
                            href="<?= get_option("bingo_theme_social_instagram_link"); ?>"><i
                                class="fa fa-instagram"></i></a></span><span
                        id="twitter"><a href="<?= get_option("bingo_theme_social_twitter_link"); ?>"><i
                                class="fa fa-twitter"></i></a></span><span id="linkedin"><a
                            href="<?= get_option("bingo_theme_social_linkedin_link"); ?>"><i class="fa fa-linkedin"></i></a></span>
            </div>
        </div>
    </section>
    <section class="contact-form"><p class="text--center">برای تماس مستقیم با تسکا فرم زیر را تکمیل نمایید.<br> مشخص
            نمودن موضوع پیام، پاسخگویی را دقیق‌تر و سریع‌تر خواهد نمود</p>
        <?php if ($status = $_GET['status'] and $message = $_GET['message']) : ?>
            <div class="message <?= ($status == 200) ? 'success' : 'error'; ?>">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <div class="row">
                <div class="col col--md-6"><label> نام</label><input type="text" name="name" required></div>
                <div class="col col--md-6"><label> ایمیل</label><input type="text" name="email" required></div>
                <div class="col col--md-6"><label> شماره موبایل</label><input type="text" name="phone" required></div>
                <div class="col col--md-6"><label> عنوان پیام</label><input type="text" name="title" required></div>
                <div class="col col--md-12"><label> متن پیام</label><textarea rows="5" name="content"
                                                                              required></textarea></div>
                <input type="hidden" name="action" value="send_ticket">
            </div>
            <div class="row">
                <dic class="col col--md-6">
                    <div class="g-recaptcha" data-sitekey="6LceJCwUAAAAACRkdsjJVUzBTxumHOp4AebcGSKK"></div>
                </dic>
                <dic class="col col--md-6">
                    <button type="submit" class="bingo-btn">ارسال پیام<span><i class="fa fa-arrow-left"></i></span>
                    </button>
                </dic>
            </div>
        </form>
    </section>
</main><!-- ./Page Content--></aside><!-- Page js assets-->
