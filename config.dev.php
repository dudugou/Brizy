<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 8/1/17
 * Time: 10:26 AM
 */
class Brizy_Config {

	const EDITOR_PRIMARY_URL = 'https://api.brizy.io';

	const FE_S3_ASSET_URL = 'http://bitblox.local/static';

	const BRIZY_S3_ASSET_URL = 'http://editor:3000/static';
	const EDITOR_STATIC_URL = 'http://editor:3000/static';

	const LOCAL_PAGE_MEDIA_STATIC_URL = '/brizy/media';

	const LOCAL_PAGE_ASSET_SPLITTER = "/\/brizy\/pages\/(.[^\/]*)\/(.[^\/]*)/";
	const LOCAL_PAGE_ASSET_STATIC_URL = '/brizy/pages/%s';
	const BRIZY_WP_PAGE_ASSET_PATH = '/brizy/pages/%s/%s';

	const LOCAL_EDITOR_ASSET_STATIC_URL = '/brizy/editor';
	const LOCAL_EDITOR_ASSET_SPLITTER = "/\/brizy\/editor\/(.[^\/]*)\/(.[^\/]*)/";
	const BRIZY_WP_EDITOR_ASSET_PATH = '/brizy/editor/%s';

	const EDITOR_BASE_URL = 'http://www.testblox.info';
	const EDITOR_INTEGRATION_URL = 'http://integration.bitblox.site';
	const EDITOR_ASSETS_URL = "public/static";

	const MEDIA_IMAGE_PATH = '/storage/media';
	const MEDIA_IMAGE_URL = 'https://app.brizy.io/storage/media';

	const EDITOR_ORIGIN_URL = 'http://testblox.info';

	const EDITOR_HOST_API = 'api.testblox.info';
	const EDITOR_HOST_BASE = 'www.testblox.info';
	const EDITOR_HOST_ORIGIN = 'testblox.info';
	const EDITOR_HOST_PRIMARY = 'testblox.info';

	const GATEWAY_URI = 'https://api.brizy.io';
	const COMPILER_URI = 'http://editor:3000/projects/%s/pages/%s/htmls/%s';

	const BRIZY_REGISTRATION_CREDENTIALS = 'https://app.brizy.io/wordpress/credentials';

	const BRIZY_TEMPLATE_FILE_NAME = 'brizy-blank-template.php';
}