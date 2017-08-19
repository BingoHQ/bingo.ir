<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/12/2017
 * Time: 04:36 PM
 */
add_theme_support( 'woocommerce' );
add_theme_support('html5', array('comment-list', 'comment-form', 'gallery'));

function register_my_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'about-menu' => __( 'About Menu' ),
        )
    );
}

/**
 * Add SVG capabilities
 */
function wpcontent_svg_mime_type($mimes = array())
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}

function setup_theme_admin_menus()
{
    add_menu_page('متغیر های قالب', 'متغیر های قالب', 'manage_options',
        'bingo_theme_settings', 'theme_settings_page', '', 60);

    add_submenu_page('bingo_theme_settings',
        'شبکه های اجتماعی', 'شبکه های اجتماعی', 'manage_options',
        'social-page-elements', 'social_logos_settings');
}

// We also need to add the handler function for the top level menu
function theme_settings_page()
{
    ?>
    <div class="wrap">
        <h2>متغیر های قالب</h2>
        <?php
        if (isset($_POST["update_settings"])) {
            $el = esc_attr($_POST["p1_title"]);
            update_option("bingo_theme_p1_title", $el);
            $el = esc_attr($_POST["p1_link"]);
            update_option("bingo_theme_p1_link", $el);
            $el = ($_POST["p1_img_code"]);
            update_option("bingo_theme_p1_img_code", htmlentities($el));

            $el = esc_attr($_POST["p2_title"]);
            update_option("bingo_theme_p2_title", $el);
            $el = esc_attr($_POST["p2_link"]);
            update_option("bingo_theme_p2_link", $el);
            $el = ($_POST["p2_img_code"]);
            update_option("bingo_theme_p2_img_code", htmlentities($el));

            $el = esc_attr($_POST["p3_title"]);
            update_option("bingo_theme_p3_title", $el);
            $el = esc_attr($_POST["p3_link"]);
            update_option("bingo_theme_p3_link", $el);
            $el = ($_POST["p3_img_code"]);
            update_option("bingo_theme_p3_img_code", htmlentities($el));


            $el = ($_POST["bingo_api_post_ticket_address"]);
            update_option("bingo_api_post_ticket_address", $el);
        }


        $p1_title = get_option("bingo_theme_p1_title");
        $p1_link = get_option("bingo_theme_p1_link");
        $p1_img_code = html_entity_decode(stripslashes(get_option("bingo_theme_p1_img_code")));

        $p2_title = get_option("bingo_theme_p2_title");
        $p2_link = get_option("bingo_theme_p2_link");
        $p2_img_code = html_entity_decode(stripslashes(get_option("bingo_theme_p3_img_code")));

        $p3_title = get_option("bingo_theme_p3_title");
        $p3_link = get_option("bingo_theme_p3_link");
        $p3_img_code = html_entity_decode(stripslashes(get_option("bingo_theme_p3_img_code")));

        $bingo_api_post_ticket_address = get_option("bingo_api_post_ticket_address");
        ?>
        <form method="post">
            <p style="text-align: left; padding: 10px;">
                <input type="submit" value="ذخیره تنظیمات" class="button-primary"/>
            </p>
            <table class="form-table" style="width: 90%;">
                <tr valign="top">
                    <th scope="row">
                        <label for="p1_title">عنوان محصول اول:</label>
                    </th>
                    <td>
                        <input type="text" name="p1_title" id="p1_title" value="<?= $p1_title ?>" style="width: 100%;"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="p1_link">لینک محصول اول:</label>
                    </th>
                    <td>
                        <input type="text" name="p1_link" value="<?= $p1_link ?>" id="p1_link" style="width: 100%;"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="p1_img_code"> کد تصویر محصول اول:</label>
                    </th>
                    <td>
                        <?php wp_editor($p1_img_code, 'p1_img_code', array('editor_height' => '300px')); ?>
                    </td>
                </tr>
            </table>
            <hr>
            <table class="form-table" style="width: 90%;">
                <tr valign="top">
                    <th scope="row">
                        <label for="p2_title">عنوان محصول دوم:</label>
                    </th>
                    <td>
                        <input type="text" name="p2_title" id="p2_title" style="width: 100%;" value="<?= $p2_title ?>"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="p2_link">لینک محصول دوم:</label>
                    </th>
                    <td>
                        <input type="text" name="p2_link" id="p2_link" style="width: 100%;" value="<?= $p2_link ?>"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="p2_img_code"> کد تصویر محصول دوم:</label>
                    </th>
                    <td>
                        <?php wp_editor($p2_img_code, 'p2_img_code', array('editor_height' => '300px')); ?>
                    </td>
                </tr>
            </table>
            <hr>
            <table class="form-table" style="width: 90%;">
                <tr valign="top">
                    <th scope="row">
                        <label for="p3_title">عنوان محصول سوم:</label>
                    </th>
                    <td>
                        <input type="text" name="p3_title" id="p3_title" style="width: 100%;" value="<?= $p3_title ?>"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="p3_link">لینک محصول سوم:</label>
                    </th>
                    <td>
                        <input type="text" name="p3_link" id="p3_link" style="width: 100%;" value="<?= $p3_link ?>"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="p3_img_code"> کد تصویر محصول سوم:</label>
                    </th>
                    <td>
                        <?php wp_editor($p3_img_code, 'p3_img_code', array('editor_height' => '300px')); ?>
                    </td>
                </tr>
            </table>
            <hr>
            <table class="form-table" style="width: 90%;">
                <tr valign="top">
                    <th scope="row">
                        <label for="p3_title">آدرس api ارسال تیکت:</label>
                    </th>
                    <td>
                        <input type="text" name="bingo_api_post_ticket_address" id="bingo_api_post_ticket_address"
                               style="width: 100%;" value="<?= $bingo_api_post_ticket_address ?>"/>
                    </td>
                </tr>
            </table>
            <p style="text-align: left; padding: 10px;">
                <input type="submit" value="ذخیره تنظیمات" class="button-primary"/>
            </p>
            <input type="hidden" name="update_settings" value="1">
        </form>
    </div>
    <?php
}

function social_logos_settings()
{
    ?>

    <div class="wrap">
        <h2>شبکه های اجتماعی</h2>
        <?php
        if (isset($_POST["update_settings"])) {
            $el = esc_attr($_POST["twitter_link"]);
            update_option("bingo_theme_social_twitter_link", $el);
            $el = esc_attr($_POST["instagram_link"]);
            update_option("bingo_theme_social_instagram_link", $el);
            $el = ($_POST["linkedin_link"]);
            update_option("bingo_theme_social_linkedin_link", htmlentities($el));
        }


        $twitter_link = get_option("bingo_theme_social_twitter_link");
        $instagram_link = get_option("bingo_theme_social_instagram_link");
        $linkedin_link = get_option("bingo_theme_social_linkedin_link");
        ?>
        <form method="post">
            <p style="text-align: left; padding: 10px;">
                <input type="submit" value="ذخیره تنظیمات" class="button-primary"/>
            </p>
            <table class="form-table" style="width: 90%;">
                <tr valign="top">
                    <th scope="row">
                        <label for="twitter_link">لینک تویتر:</label>
                    </th>
                    <td>
                        <input type="text" name="twitter_link" id="twitter_link" value="<?= $twitter_link ?>"
                               style="width: 100%; direction: ltr;"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="instagram_link">لینک اینستاگرام:</label>
                    </th>
                    <td>
                        <input type="text" name="instagram_link" value="<?= $instagram_link ?>" id="instagram_link"
                               style="width: 100%; direction: ltr;"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="linkedin_link">لینک اینستاگرام:</label>
                    </th>
                    <td>
                        <input type="text" name="linkedin_link" value="<?= $linkedin_link ?>" id="linkedin_link"
                               style="width: 100%; direction: ltr;"/>
                    </td>
                </tr>
            </table>
            <p style="text-align: left; padding: 10px;">
                <input type="submit" value="ذخیره تنظیمات" class="button-primary"/>
            </p>
            <input type="hidden" name="update_settings" value="1">
        </form>
    </div>
    <?php
}

add_action('wp_ajax_showProduct', 'ajaxShowProduct');

function ajaxShowProduct()
{
    $productId = $_POST['pid'];
    echo do_shortcode('[product_page id="' . $productId . '"]');
    wp_die();
}

/**
 * Redirect users after add to cart.
 */
function my_custom_add_to_cart_redirect($url)
{
    $url = wc_get_cart_url();
    return $url;
}

function isWoocommercePage()
{
    if (
        (wc_get_page_id('cart') == get_the_ID()) or
        (wc_get_page_id('shop') == get_the_ID()) or
        (wc_get_page_id('edit_address') == get_the_ID()) or
        (wc_get_page_id('pay') == get_the_ID()) or
        (wc_get_page_id('checkout') == get_the_ID()) or
        (wc_get_page_id('myaccount') == get_the_ID())
    )
        return true;
    return false;

}


// Zarinpal payment actions.
function afterSuccessPayment()
{

}

function afterFailedPayment()
{

}


add_action('WC_ZPal_Return_from_Gateway_Success', 'afterSuccessPayment');
add_action('WC_ZPal_Return_from_Gateway_Failed', 'afterFailedPayment');

// Contact us form handling
function contactUsForm()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $captcha = $_POST['g-recaptcha-response'];

    if (!class_exists('WP_Http')) {
        include_once(ABSPATH . WPINC . '/class-http.php');
    }

    $req = new WP_Http();
    $body = [
        'secret' => '6LceJCwUAAAAAECvjml-e3FLZXdkSubKs_oUzHJT',
        'response' => $captcha
    ];
    $response = $req->request("https://www.google.com/recaptcha/api/siteverify", [
        'method' => 'POST',
        'body' => $body
    ]);
    $data = json_decode($response['body'], true);
    $captchaValidation = isset($data['success']) ? $data['success'] : false;
    if ($captchaValidation) {
        $req = new WP_Http();
        $body = [
            "title" => $title,
            "content" => $content,
            "email" => $email,
            "name" => $name,
            "phone" => $phone,
            "ticket_department_id" => 3,
            "priority" => 2
        ];
        var_dump($body);
        $response = $req->request(get_option('bingo_api_post_ticket_address'), [
            'method' => 'POST',
            'body' => $body
        ]);

        $data = json_decode($response['body'], true);
        $code = isset($data['meta']['code']) ? $data['meta']['code'] : 500;
        $error = isset($data['meta']['message']) ? $data['meta']['message'] : 'ارتباط با سرور قطع شد.';
        if ($code == 200) {
            $status = 200;
            $message = urlencode("پیام شما با موفقیت برای ما ارسال شد. به زودی از طریق ایمیل به آن پاسخ خواهیم داد.");
        } else {
            $status = $code;
            $message = urlencode($error);
        }
    } else {
        $status = 403;
        $message = urlencode("اطلاعات کپچا صحیح نیست");
    }
//    die("contact/?status=$status&message=$message");
    wp_safe_redirect("contact/?status=$status&message=$message");

}

add_action('admin_post_nopriv_send_ticket', 'contactUsForm');
add_action('admin_post_send_ticket', 'contactUsForm');


add_filter('woocommerce_add_to_cart_redirect', 'my_custom_add_to_cart_redirect');

// This tells WordPress to call the function named "setup_theme_admin_menus"
// when it's time to create the menu pages.
add_action("admin_menu", "setup_theme_admin_menus");

add_action( 'init', 'register_my_menu' );
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_filter('upload_mimes', 'wpcontent_svg_mime_type');
