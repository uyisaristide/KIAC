<?php namespace App\Models;

use CodeIgniter\Model;

class AssessmentModel extends Model
{
	protected $table = 'assessments';
	protected $allowedFields = [
		'term',
		'examDate',
		'course_id',
		'class_id',
		'mark_type',
		'outof',
		'cat_type',
		'period',
		'source',
		'created_by',
	];
	protected $useTimestamps = true;
}
