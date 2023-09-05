<?php
namespace App\Models;

use CodeIgniter\Model;

class MarksRecordModel extends Model
{
	protected $table="marks_records";
	protected $allowedFields = ["student_id",'assessment_id',"marks","status","created_by"];
	protected $useTimestamps = true;
	protected $primaryKey = 'id';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';

}
