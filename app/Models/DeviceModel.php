<?php
namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model
{
	protected $table="attendance_device";
	protected $allowedFields = ["title",'device_id','type','school_id',"status",'last_com','last_staff_sync'];
	protected $useTimestamps = true;
	protected $primaryKey = 'id';
	public function get_devices($device_id = null, $key = "attendance_device.device_id")
	{
		$dataBuilder = $this->select("attendance_device.*,sk.name")->join("schools sk","sk.id = attendance_device.school_id");
		if ($device_id != null) {
			$dataBuilder->where($key, $device_id);
            return $dataBuilder->get()->getRowArray();
		} else {
            return $dataBuilder->get()->getResultArray();
        }
	}

}
