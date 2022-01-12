<?php

namespace SRF\Tests\Integration;

use SMW\Tests\PHPUnitCompat;
use SMW\Tests\Utils\UtilityFactory;

/**
 * @group SRF
 * @group SMWExtension
 *
 * @license GPL-2.0-or-later
 * @since 2.5
 *
 * @author mwjames
 */
class I18nJsonFileIntegrityTest extends \PHPUnit_Framework_TestCase {

	use PHPUnitCompat;

	/**
	 * @dataProvider i18nFileProvider
	 */
	public function testI18NJsonDecodeEncode( $file ) {

		$jsonFileReader = UtilityFactory::getInstance()->newJsonFileReader( $file );

		$this->assertInternalType(
			'integer',
			$jsonFileReader->getModificationTime()
		);

		$this->assertInternalType(
			'array',
			$jsonFileReader->read()
		);
	}

	public function i18nFileProvider() {

		$provider = [];
		$location = $GLOBALS['wgMessagesDirs']['SemanticResultFormats'];

		$bulkFileProvider = UtilityFactory::getInstance()->newBulkFileProvider( $location );
		$bulkFileProvider->searchByFileExtension( 'json' );

		foreach ( $bulkFileProvider->getFiles() as $file ) {
			$provider[basename( $file )] = [ $file ];
		}

		asort( $provider );
		return $provider;
	}

}
