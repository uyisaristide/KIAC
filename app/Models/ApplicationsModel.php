<?php
namespace App\Models;

use CodeIgniter\Model;

class ApplicationsModel extends Model
{
    // The table name
    protected $table = 'applications';

    // The primary key of the table
    protected $primaryKey = 'id';

    // The fields that can be inserted or updated
    protected $allowedFields = [
        'level',
        'finish_secondary',
        'finish_university',
        'secondary_level',
        'university_level',
        'school_id',
        'fname',
        'lname',
        'nationality',
        'gender',
        'phone',
        'email',
        'country',
        'district',
        'sector',
        'city_relatives',
        'course',
        'id_passport',
        'transcript',
        'approved'
    ];
}
