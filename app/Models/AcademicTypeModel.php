<?php
namespace App\Models;

use CodeIgniter\Model;

class AcademicTypeModel extends Model
{
	protected $table="academic_type";
	protected $allowedFields = ["title",'comment',"status"];
	protected $useTimestamps = false;
	protected $primaryKey = 'id';
	public function get_types($isAdmin = false): array
	{
		$dataBuilder = $this->select("academic_type.*");
		if (isset($_SESSION["academic_type"]) && !$isAdmin) {
			$dataBuilder->whereIn("academic_type.id", explode(',', $_SESSION["academic_type"]));
		}
		return $dataBuilder->get()->getResult();
	}

}
