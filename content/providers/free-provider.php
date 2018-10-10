<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/10/18
 * Time: 2:47 PM
 */

class Brizy_Content_Providers_FreeProvider extends Brizy_Content_Providers_AbstractProvider {

	/**
	 * @return array|mixed
	 */
	public function getGroupedPlaceholders() {
		return array();
	}

	/**
	 * @return array|int
	 * @throws Exception
	 */
	public function getAllPlaceholders() {

		return array(
			new Brizy_Content_Placeholders_ImageAttributes( 'Internal Image Attributes', 'brizy_dc_image_attributes' )
		);
	}
}
