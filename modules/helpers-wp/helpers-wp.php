<?php

/**
 * Class _WPLib_WP_Helpers
 *
 * Provide a WordPress Helper class for WPLib.
 *
 * Basically, this class contributes static methods to the WPLib class using magic methods.
 *
 */
class _WPLib_WP_Helpers extends WPLib_Helper_Base {

	/**
	 * Is the Front Page configured to display a $post_type='page'?
	 *
	 * @param int $page_id
	 *
	 * @return bool
	 */
	static function is_page( $page_id ) {

		return $page = get_post( $page_id ) ? WPLib_Page::POST_TYPE == $page->post_type : false;

	}


}
