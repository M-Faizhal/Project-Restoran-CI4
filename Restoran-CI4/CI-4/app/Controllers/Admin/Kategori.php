<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		echo '<h1>belajar ci4</h1>';
	}

	public function select()
	{
		$model = new Kategori_M();
		$kategori = $model -> findAll();

		$data = [
			'judul' => 'SELECT DATA Dari Controller',
			'kategori' => $kategori
		];

		return view ("Kategori/Select", $data);
	}

	public function selectWhere($id = null)
	{
		echo "<h1>menampilkan data yang dipilih $id</h1>";
	}

	public function formInsert()
	{
		return view ("Kategori/Forminsert");
	}

	public function formUpdate($id = null)
	{
		echo view ("Template/Header");
		echo view ("Kategori/Update");
		echo view ("Template/Footer");
	}

	public function update($id = null)
	{
		echo "proses update data $id";
	}

	public function delete($id = null)
	{
		echo "proses delete data";
	}

	//--------------------------------------------------------------------

}
