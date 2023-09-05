<?php
namespace App\Models;

use CodeIgniter\Model;

class AssessmentTypeModel extends Model
{
	protected $table="assessment_type";
	protected $allowedFields = ["title",'translation_key',"status"];
	protected $useTimestamps = false;
	protected $primaryKey = 'id';

}
