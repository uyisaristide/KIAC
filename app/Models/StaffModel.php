<?php
namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
	protected $table="staffs";
	protected $allowedFields = ["school_id","fname","lname","phone","email","password","status","lastlogin"
		,"next_login","post","shift_id","country","city","address","photo","card","created_by","updated_by","updateVersion","reset_exp"];
	protected $useTimestamps = true;
	protected $primaryKey = "id";
	public function checkUser($email,$key="staffs.email"){
		$res = $this->select("staffs.id,staffs.photo,staffs.school_id,fname,lname,staffs.email,password,staffs.status,post
		,p.title as post_title,sc.name as school_name,sc.status as school_status,sc.active_term,at.academic_year, sc.school_code AS school_code
		,sc.academic_type, ct.title AS school_country,ct.iso_code,sc.email as school_email,sc.phone as school_phone,at.term,at.use_period")
			->where($key,$email)
			->join("posts p","p.id=staffs.post","inner")
			->join("schools sc","sc.id=staffs.school_id","inner")
			->join("countries ct","ct.id=sc.country","inner")
			->join("active_term at","sc.active_term=at.id","left")
			->get();
		return $res->getRow();
	}
	public function get_staff($val,$select="staffs.*,p.title as post_title"){
		$res = $this->select($select)
			->join("posts p", "staffs.post=p.id")
			->where($val)
			->where("school_id", $_SESSION['ideyetu_school_id'])
			->get()->getResultArray();
		return $res;
	}

	public function get_staff_simple2($val = null, $school_id = 0, $single = false)
	{
		$school_id    = $school_id == 0 ? $_SESSION['ideyetu_school_id'] : $school_id;
		$builder = $this->select('staffs.id,staffs.school_id,concat(staffs.fname," ",staffs.lname) as name,
		staffs.phone, staffs.email,p.title as post_title,staffs.photo,staffs.card,staffs.updated_at,staffs.updateVersion')
			->join("posts p", "staffs.post=p.id")
			->where('staffs.status !=', '0')
			->where('staffs.school_id', $school_id);
		if ($val !== null)
		{
			$builder->Where($val);
		}
		$data = $builder->orderBy('staffs.updated_at','ASC')->get(200);
		if ($single)
		{
			return $data->getRowArray();
		}
		return $data->getResultArray();
	}


	public function staff_post_phone()
	{
		$data = $this->db->query("SELECT p.id,sum(if(st.phone!='',1,0)) as phone,sum(if(st.phone='',1,0)) as no_phone,p.title from staffs st
inner join posts p on st.post = p.id where st.school_id={$_SESSION['ideyetu_school_id']} group by p.id");
		return $data->getResultArray();
	}
	public function search_staff($hint)
	{
		$data = $this->db->query("SELECT `staffs`.`id`, concat(`staffs`.`id`, ' ',`staffs`.`fname`, ' ', staffs.lname) as text FROM `staffs` WHERE (`staffs`.`fname` LIKE '%{$hint}%' ESCAPE '!' OR  `staffs`.`lname` LIKE '%{$hint}%' ESCAPE '!' OR `staffs`.`email` = '{$hint}')
AND `staffs`.`school_id`={$_SESSION['ideyetu_school_id']}");
		return $data->getResultArray();
	}

}
