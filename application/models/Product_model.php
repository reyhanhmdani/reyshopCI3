<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends MY_Model
{
	// $protected = 5
	public function getDefaultValues()
	{
		return [
			'id_category'  => '',
			'slug'         => '',
			'title'        => '',
			'description'  => '',
			'price'        => '',
			'is_available' => 1,
			'image'        => ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field' => 'id_category',
				'label' => 'Category',
				'rules' => 'required'
			],
			[
				'field' => 'slug',
				'label' => 'Slug',
				'rules' => 'trim|required|callback_unique_slug'
			],
			[
				'field' => 'title',
				'label' => 'Name Product',
				'rules' => 'trim|required'
			],
			[
				'field' => 'description',
				'label' => 'Description',
				'rules' => 'trim|required'
			],
			[
				'field' => 'price',
				'label' => 'Price',
				'rules' => 'trim|required|numeric'
			],
			[
				'field' => 'is_available',
				'label' => 'Available',
				'rules' => 'required'
			]
		];
		return $validationRules;
	}

	public function uploadImage($fieldName, $fileName)
	{
		$config = [
			'upload_path'      => './images/product',
			'file_name'        => $fileName,
			'allowed_types'    => 'jpg|gif|png|jpeg|JPG|PNG|webp',
			'max_size'         => 1024,
			'max_width'        => 0,
			'max_height'       => 0,
			'overwrite'        => true,
			'file_ext_tolower' => true
		];
		$this->load->library('upload', $config);
		if ($this->upload->do_upload($fieldName)) {
			return $this->upload->data();
		} else {
			$this->session->set_flashdata('image_error', $this->upload->display_errors('', ''));
			return false;
		}
	}

	public function deleteImage($fileName)
	{
		if (file_exists('./images/product/' . $fileName)) {
			unlink('./images/product/' . $fileName);
		}
	}
}

/* End of file ModelName.php */
