<?php
namespace App\Models;

use CodeIgniter\Model;

class AssessmentRecordsModel extends Model
{
	protected $table="assessment_records";
	protected $allowedFields = ["assessment_type_id",'academic_type_id',"multiple_marks_per_term","percentage","status"];
	protected $useTimestamps = true;
	protected $primaryKey = 'id';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';

}
