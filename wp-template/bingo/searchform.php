<form role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <section class="search-box"><input class="search" name="s" id="search-input"
                                       value="<?php echo esc_attr(get_search_query()); ?>" type="search"
                                       placeholder="جستجو در مطالب سایت"></section>
</form>