<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends MY_Model
{
	protected $perPage = 5;

	public function getDefaultValues()
	{
		return [
			'id'    => '',
			'slug'  => '',
			'title' => '',
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field' => 'slug',
				'label' => 'Slug',
				'rules' => 'trim|required|callback_unique_slug'
			],
			[
				'field' => 'title',
				'label' => 'Category',
				'rules' => 'trim|required'
			],
		];

		return $validationRules;
	}

}

/* End of file ModelName.php */

