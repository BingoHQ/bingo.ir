<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/12/2017
 * Time: 12:31 PM
 */?>
<!-- Footer Template--><!-- Created by Amin Keshavarz on 7/31/2017.-->
<footer>
    <div class="row">
        <div class="col col--md-4"><h4 class="colorful-text"> Bingo</h4>
            <p> لورم ایپسوم به انگلیسی متنی است بی مفهوم که تشکیل شده از کلمات معنی دار یا بی معنی کنار هم. کاربر با
                دیدن متن لورم ایپسوم تصور میکند.</p></div>
        <div class="col col--md-2"><h4> لینک ها</h4>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu') ); ?>
        </div>
        <div class="col col--md-2"><h4> درباره ما</h4>
            <?php wp_nav_menu( array( 'theme_location' => 'about-menu') ); ?>
        </div>
        <div class="col col--md-3"><h4> ارتباط با ما</h4>
            <p> منتظر نظـرات شما درباره بینگو هستیم</p>
            <div class="mobile">021-26850588</div>
            <div class="email"> hi@bingo.ir</div>
            <div class="social"><span id="instagram"><a
                            href="<?= get_option("bingo_theme_social_instagram_link"); ?>"><i
                                class="fa fa-instagram"></i></a></span><span
                        id="twitter"><a href="<?= get_option("bingo_theme_social_twitter_link"); ?>"><i
                                class="fa fa-twitter"></i></a></span><span id="linkedin"><a
                            href="<?= get_option("bingo_theme_social_linkedin_link"); ?>"><i
                                class="fa fa-linkedin"></i></a></span>
            </div>
        </div>
    </div>
</footer><!-- ./Footer Template-->
<?php wp_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/assets/js/app.js"></script>
</body>
</html>