<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
	protected $table         = 'students';
	protected $allowedFields = [
		'school_id',
		'fname',
		'lname',
		'phone',
		'email',
		'regno',
		'sex',
		'dob',
		'photo',
		'village_id',
		'studying_mode',
		'religion',
		'nationality',
		'father',
		'ft_phone',
		'mother',
		'mt_phone',
		'guardian',
		'gd_phone',
		'card',
		'transport_money',
		'wallet_pin',
		'wallet_balance',
		'permission_id',
		'national_id',
		'province',
		'district',
		'sector',
		'cell',
		'village',
		'status',
		'created_by',
		'updated_by',
		'updateVersion',
	];
	protected $useTimestamps = true;
	protected $primaryKey    = 'id';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';

	public function get_student($val = null, $key = 'students.id', $select = null, $single = false, $academicYear = 0)
	{

		$academicYear = $academicYear == 0 ? $_SESSION['ideyetu_academics_year'] : $academicYear;
		$select       = $select == null ? "students.id,students.regno,students.photo,concat(students.fname,' ',students.lname) as stdnames,ft_phone,mt_phone,gd_phone
		,c.id as class_id,c.title,d.title as department_name,d.code,l.title as level_name,f.type,f.abbrev as faculty_code,mk.marks as cat_marks
		,c.level,(select sum(ds.marks) from disciplines ds where students.id=ds.student_id AND ds.active_term = sk.active_term) as total_marks,sk.discipline_max" : $select;
		$builder      = $this->select($select)
			->join('class_records cr', 'cr.student=students.id')
			->join('classes c', 'c.id=cr.class')
			->join('departments d', 'd.id=c.department')
			->join('levels l', 'l.id=c.level')
			->join('faculty f', 'f.id=d.faculty_id')
			->join('schools sk', 'sk.id=students.school_id')
			->join('marks mk', 'students.id=mk.student_id AND mk.term = sk.active_term', 'LEFT')
			->where('students.status', '1')
			->where('cr.status', '1')
			->where('c.school_id', $_SESSION['ideyetu_school_id'])
			->orderBy('students.fname')
			->orderBy('students.lname')
			->groupBy('cr.id');
		if ($val !== null)
		{
			if ($key == null)
			{
				$builder->Where($val);
			}
			else
			{
				$builder->Where($key, $val);
			}
		}
		if($academicYear){
			$builder->where('cr.year', $academicYear);
		}
		$data = $builder->get();
		if ($single)
		{
			return $data->getRowArray();
		}

		return $data->getResultArray();
	}

	public function get_student_simple($val = null, $key = 'students.id', $single = false)
	{
		$academicYear = $_SESSION['ideyetu_academics_year'];
		$builder = $this->select('students.*,cr.status,cr.id as record_id,v.title as village_title,sc.title as cell_name,c.title as class,d.code as dept_code,d.title as dept_title
		,l.title as level, f.title as faculty')
			->join('class_records cr', 'cr.student=students.id')
			->join('classes c', 'c.id=cr.class')
			->join('departments d', 'd.id=c.department')
			->join('levels l', 'l.id=c.level')
			->join('faculty f', 'f.id=d.faculty_id')
			->join('soma_village as v', 'v.id=students.village_id', 'LEFT')
			->join('soma_cell as sc', 'sc.id=v.cell', 'LEFT')
			->where('cr.year', $academicYear)
			//          ->join('soma_sector as ss', 'ss.id=sc.sector', 'LEFT')
			//          ->join('soma_district as sd', 'sd.id=ss.district', 'LEFT')
			//          ->where("students.status",1)
			->where('students.school_id', $_SESSION['ideyetu_school_id']);
		if ($val !== null)
		{
			if ($key == null)
			{
				$builder->Where($val);
			}
			else
			{
				$builder->Where($key, $val);
			}
		}
		$data = $builder->get();
		if ($single)
		{
			return $data->getRowArray();
		}

		return $data->getResultArray();
	}

	public function get_student_simple2($val = null, $school_id = 0, $single = false, $academicYear = 0)
	{
		$school_id    = $school_id == 0 ? $_SESSION['ideyetu_school_id'] : $school_id;
		$academicYear = $academicYear == 0 ? $_SESSION['ideyetu_academics_year'] : $academicYear;

		$builder = $this->select('students.id,card,updateVersion,studying_mode,regno,concat(students.fname," ",students.lname) as name,d.code as class,d.title as dept_title,photo,father,mother,dob,ft_phone,mt_phone,gd_phone,students.sex,
		UNIX_TIMESTAMP(students.updated_at) as updated_at,c.id as class_id,COALESCE(students.ft_phone, students.mt_phone, gd_phone, "") AS phone')
			->join('class_records cr', 'cr.student=students.id')
			->join('classes c', 'c.id=cr.class')
			->join('departments d', 'd.id=c.department')
			->join('levels l', 'l.id=c.level')
			->where('students.status', '1')
			->where('cr.year', $academicYear)
			->where('students.school_id', $school_id);
		if ($val !== null)
		{
			$builder->Where($val);
		}
		$data = $builder->orderBy('students.updated_at','ASC')->get(200);
		if ($single)
		{
			return $data->getRowArray();
		}
		return $data->getResultArray();
	}

	public function search_student($hint)
	{
		$data = $this->db->query("SELECT `students`.`id`, concat(students.regno, ' - ', `students`.`fname`, ' ', students.lname) as text,card FROM `students` WHERE (`students`.`fname` LIKE '%{$hint}%' ESCAPE '!' OR  `students`.`lname` LIKE '%{$hint}%' ESCAPE '!' OR `students`.`regno` = '{$hint}')
AND `students`.`school_id`={$_SESSION['ideyetu_school_id']} AND students.status=1");
		return $data->getResultArray();
	}

	public function student_department_phone(): array
	{
		$data = $this->db->query("SELECT d.id,sum(if(st.studying_mode=0,1,0)) as boarding,sum(if((st.studying_mode=0 AND (ft_phone!='' OR mt_phone!='' OR gd_phone!='')),1,0)) as boarding_phone
,sum(if(st.studying_mode=1,1,0)) as day,sum(if((st.studying_mode=1 AND (ft_phone!='' OR mt_phone!='' OR gd_phone!='')),1,0)) as day_phone,d.title,d.code from students st
inner join class_records cl on st.id = cl.student inner join classes c on c.id = cl.class inner join departments d on d.id = c.department
where st.school_id={$_SESSION['ideyetu_school_id']} AND cl.status=1 group by d.id");
		return $data->getResultArray();
	}

	public function student_class_phone(): array
	{
		$data = $this->db->query("SELECT c.id,sum(if(st.studying_mode=0,1,0)) as boarding,sum(if((st.studying_mode=0 AND (ft_phone!='' OR mt_phone!='' OR gd_phone!='')),1,0)) as boarding_phone
,sum(if(st.studying_mode=1,1,0)) as day,sum(if((st.studying_mode=1 AND (ft_phone!='' OR mt_phone!='' OR gd_phone!='')),1,0)) as day_phone,c.title as class,d.code,l.title as level from students st
inner join class_records cl on st.id = cl.student inner join classes c on c.id = cl.class inner join departments d on d.id = c.department
 inner join levels l on l.id = c.level where st.school_id={$_SESSION['ideyetu_school_id']}  AND cl.status=1 group by c.id");
		return $data->getResultArray();
	}

	public function search_student_api($hint, $school, $type = 0)
	{
		$builder = $this->select("students.id,students.photo,students.sex,students.regno,concat(students.fname,' ',students.lname) as name
		,concat(l.title,' ',c.title,' ',d.code) as classe,at.term,students.card,ft_phone,mt_phone,gd_phone")
			->join('class_records cr', 'cr.student=students.id')
			->join('classes c', 'c.id=cr.class')
			->join('departments d', 'd.id=c.department')
			->join('levels l', 'l.id=c.level')
			->join('faculty f', 'f.id=d.faculty_id')
			->join('schools sk', 'sk.id=students.school_id')
			->join('active_term at', 'at.id=sk.active_term')
			->where('students.status', '1')
			->orderBy('students.fname')
			->orderBy('students.lname')
			->groupBy('students.id');
		if ($type == 0)
		{
			//search by name or regno
			$builder->Where("(`students`.`fname` LIKE '%{$hint}%' ESCAPE '!' OR  `students`.`lname` LIKE '%{$hint}%' ESCAPE '!' OR `students`.`regno` = '{$hint}')
AND `students`.`school_id`={$school}");
		}
		else
		{
			//search by card
			$builder->where('lower(students.card)', strtolower($hint));
			$builder->Where('students.school_id', $school);
		}
		$data = $builder->get();
		if ($type == 1)
		{
			return $data->getRowArray();
		}
		return $data->getResultArray();
	}
}
