<?php ?>

<form role="search" method="get" class="search-form flex items-center relative z-50" action="<?php echo home_url( '/' ); ?>">
    <input type="hidden" value="post" name="post_type" id="post_type" />
    <label class="relative block">
        <span class="visually-hidden"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <span class="search-icon">
            <svg class="fill-current" width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.45969 0.75C2.8585 0.75 0.75 2.8585 0.75 5.45969C0.75 8.06088 2.8585 10.1694 5.45969 10.1694C6.52194 10.1694 7.50625 9.8148 8.29717 9.21563V9.68003L11.9779 13.3534L13.3534 11.9779L9.75328 8.37057L9.57633 8.54717V8.29717H9.21563C9.8148 7.50625 10.1694 6.52194 10.1694 5.45969C10.1694 2.8585 8.06088 0.75 5.45969 0.75ZM2.62221 5.45969C2.62221 3.88936 3.88936 2.62221 5.45969 2.62221C7.03003 2.62221 8.29717 3.88936 8.29717 5.45969C8.29717 7.03003 7.03003 8.29717 5.45969 8.29717C3.88936 8.29717 2.62221 7.03003 2.62221 5.45969Z"/>
            </svg>
        </span>
        <input type="search" class="search-input text-sm flex items-center bg-grey-100 text-grey-800 py-1 px-2 pl-8 rounded w-56" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit uppercase text-sm font-bold flex items-center bg-gradient text-white py-1 px-6 rounded ml-4 cursor-pointer" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>