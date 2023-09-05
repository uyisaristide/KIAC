<?php namespace App\Models;
use CodeIgniter\Model;

class DrcToken extends Model{
	protected $table = "drc_tokens";
	protected $allowedFields = ["id","school_id","token", "expires_at"];
	protected $useTimestamps = true;
	protected $primaryKey = 'id';

}