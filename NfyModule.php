<?php

class NfyModule extends CWebModule
{
	/**
	 * @var string Name of user model class.
	 */
	public $userClass = 'User';

	public function init()
	{
		$this->setImport(array(
			'nfy.models.*',
			'nfy.components.*',
		));
	}
}