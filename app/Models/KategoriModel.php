<?php 
namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
	protected $table = 'product_category'; 
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama_kategori','deskripsi','created_at','updated_at'
	];  
}