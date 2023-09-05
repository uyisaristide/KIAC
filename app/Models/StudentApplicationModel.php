<?php
namespace App\Models;

use CodeIgniter\Model;

class StudentApplicationModel extends Model
{
	protected $table         = 'applications';
	protected $allowedFields = [
		'schoolId',
		'fname',
		'lname',
		'gender',
		'phoneNumber',
		'parentType',
		'parentPhoneNumber',
		'parentNames',
		'dateOfBirth',
		'level',
		'studyingMode',
		'status',
		'code',
		'faculty_id',
		'department_id',
		'code',
		'admitted',
		'settingsId'
	];
	protected $useTimestamps = true;
}
