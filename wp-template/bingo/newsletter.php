<section class="newsletter" id="sec4">
    <article>
        <div class="row">
            <div class="col col--md-6 text--center"><h3>اشتراک در خبر نامه</h3><span class="bar"></span>
                <p>متنی است بی مفهوم که تشکیل شده از کلمات معنی دار یا بی معنی کنار هم. کاربر با دیدن متن لورم
                    ایپسوم تصور میکند متنی که در صفحه مشاهده میکند این متن واقعی و مربوط به توضیحات صفحه مورد نظر
                    است</p>
                <script type="text/javascript">
                    //<![CDATA[
                    if (typeof newsletter_check !== "function") {
                        window.newsletter_check = function (f) {
                            var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                            if (!re.test(f.elements["ne"].value)) {
                                alert("The email is not correct");
                                return false;
                            }
                            for (var i = 1; i < 20; i++) {
                                if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
                                    alert("");
                                    return false;
                                }
                            }
                            if (f.elements["ny"] && !f.elements["ny"].checked) {
                                alert("You must accept the privacy statement");
                                return false;
                            }
                            return true;
                        }
                    }
                    //]]>
                </script>
                <form method="post" action="<?= get_home_url() ?>/?na=s" onsubmit="return newsletter_check(this)">
                    <div class="input"><input type="email" name="ne" required class="tnp-email"
                                              placeholder="ایمیل خود را وارد کنید"></div>
                    <div class="share-btn">
                        <button type="submit" class="tnp-submit">اشتراک<span><i class="fa fa-arrow-left"></i></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>