<?php
namespace App\Models;

use CodeIgniter\Model;

class CountriesModel extends Model
{
	protected $table="countries";
	protected $allowedFields = ["title",'iso_code',"calling_code","status","created_by"];
	protected $useTimestamps = true;
	protected $primaryKey = 'id';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	public function getCountries(): array
	{
		return $this->orderBy("title","ASC")->get()->getResultArray();
	}

}
