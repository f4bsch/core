<?php
/**
 * Copyright (c) 2012 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

use OC\Archive\ZIP;

class Test_Archive_ZIP extends Test_Archive {
	protected function setUp() {
		parent::setUp();

		if (OC_Util::runningOnWindows()) {
			$this->markTestSkipped('[Windows] ');
		}
	}

	protected function getExisting() {
		$dir = OC::$SERVERROOT . '/tests/data';
		return new ZIP($dir . '/data.zip');
	}

	protected function getNew() {
		return new ZIP(OCP\Files::tmpFile('.zip'));
	}
}
