<?php
namespace App\Controllers;
use App\Models\BankCreditTransactionModel;
use App\Models\ClassRecordModel;
use App\Models\CourseCategoryModel;
use App\Models\SchoolModel;
use App\Models\StaffModel;
use App\Models\StudentModel;
use App\Models\UserModel;
use App\Models\IntouchAccount;
use CodeIgniter\Controller;

define('version', "V1.1.2");
const PER_SMS=150;
//define("SMS_API","http://dstr.connectbind.com:8080/sendsms?username=kod-somanet&password=BDS2020&type=0&dlr=1&source=IDEYETU");
const SMS_API="https://www.intouchsms.co.rw/api/sendsms/.json";
const SMS_API_BU = 'http://api.rmlconnect.net:8080/bulksms/bulksms?username=ideyetu&password=12345678&type=0&dlr=1';
const SMS_API_DRC = 'https://api.keccel.com/sms/v1/message.asp?token=HK4R86Q44USFA62';
const APP_API_KEY = "A478yud1c6dd40f5%495b323k06336d12f2=";
//const BESOFT_CHARGES_ACCOUNT="250788784718";
const BESOFT_CHARGES_ACCOUNT="250785753712";
const SOMANET_CHARGES_ACCOUNT="250780699435";
const BESOFT_BPR_ACCOUNT="408469858310168";
const BESOFT_API_URL="https://mo.mopay.rw/api/v2/payment";
const ID_SUFFIX="SOMA";
const ID_SUFFIXREG="SOMAREG";
const BESOFT_API_TOKEN="895a3c5c-745e-78y8-od51-8210c5905e7y";
const FCM_SERVER_KEY = "AAAAL014UUM:APA91bHSS82I_IrgSCnClghup6fkKw_8dllhTuUh4u0yoNvrrh60AZRf7QFTuysXUGkvePQp_JVhynI3QDyPCmzmD_UrI180J1TVOrpMMdPkwPDANTzAFNYB6MkO3eDcSVvupxYkErop";

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];
	protected $session;
	protected $curl;
	protected $email;

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		$this->session = \Config\Services::session();
	}
	public function change_status($type,$value){
		switch ($type){
			case "school":
				$schoolMdl =  new SchoolModel();
				$id = $this->request->getPost("data");
				try {
					$schoolMdl->save(array("id" => $id, "status" => $value));
					return $this->response->setJSON(array("success"=>"School status changed"));
				}catch (\Exception $e){
					return $this->response->setJSON(array("error"=>"Error occurred: ".$e->getMessage()));
				}
				break;
			case "user":
				$userMdl =  new UserModel();
				$id = $this->request->getPost("data");
				try {
					$userMdl->save(array("id" => $id, "status" => $value));
					return $this->response->setJSON(array("success"=>"User status changed"));
				}catch (\Exception $e){
					return $this->response->setJSON(array("error"=>"Error occurred: ".$e->getMessage()));
				}
				break;
			case "staff":
				$staffMdl =  new StaffModel();
				$id = $this->request->getPost("data");
				try {
					$staffMdl->save(array("id" => $id, "status" => $value));
					return $this->response->setJSON(array("success"=>"Staff status changed"));
				}catch (\Exception $e){
					return $this->response->setJSON(array("error"=>"Error occurred: ".$e->getMessage()));
				}
				break;
			case "student":
				$stMdl =  new StudentModel();
				$crMdl =  new ClassRecordModel();
				$id = $this->request->getPost("data");
				$record_id = $this->request->getPost("record_id");
				if (strlen($id)==0 || strlen($record_id)==0){
					return $this->response->setJSON(array("error"=>"Error occurred: please provide all required data $id | $record_id "));
				}
				try {
					if($value == 1) {
						$stMdl->save(array("id" => $id, "status" => $value));
					}
					$crMdl->save(array("id" => $record_id, "status" => $value));
					return $this->response->setJSON(array("success"=>"Student status changed"));
				}catch (\Exception $e){
					return $this->response->setJSON(array("error"=>"Error occurred: ".$e->getMessage()));
				}
				break;
			case "category":
				$categoryMdl =  new CourseCategoryModel();
				$id = $this->request->getPost("data");
				try {
					$categoryMdl->save(array("id" => $id, "status" => $value));
					return $this->response->setJSON(array("success"=>"Course category status changed"));
				}catch (\Exception $e){
					return $this->response->setJSON(array("error"=>"Error occurred: ".$e->getMessage()));
				}
				break;
		}
	}
	public function random_password($length=10)
	{
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890+=-_!*&^%$#@)({}|?,.';
		$password = array();
		$alpha_length = strlen($alphabet) - 1;
		for ($i = 0; $i < $length; $i++)
		{
			$n = rand(0, $alpha_length);
			$password[] = $alphabet[$n];
		}
		$pass = implode($password);
		return $pass;
	}
	function _send_sms($phone,$message,&$result,$remaining_sms,$school_acronym="IDEYETU", $school_id=null, $country=null): bool
	{
		// $country = "rw";
		$country = $country??$_SESSION['ideyetu_country'];
		$countrCode = $country == "cd"?243:25;
		$phone = strlen($phone) > "10" ? $phone : $countrCode . $phone;
		$phone = substr($phone, 0, 1) == "+" ? $phone : "+" . $phone;
		if (in_array($country,['cd','bi'])) {
			$school_acronym = substr(str_replace(' ','-',$school_acronym),0,10);
			if ($remaining_sms <= 0){
				$result=array("code"=>200,"content"=>"SMS limit reached, contact Ideyetu admin");
				return false;
			}
			$link = $country=="cd"?SMS_API_DRC."&to={$phone}&message=" . urlencode($message)."&from=GLOBALFINE":SMS_API_BU. "&destination={$phone}&message=" . urlencode($message)."&source=".$school_acronym;
			$this->curl = \Config\Services::curlrequest();
			$response = $this->curl->request("get", $link);
			$code = $response->getStatusCode();
			$result = array("code" => $code, "content" => $response->getBody());
			if ($code == 200) {
				$res = explode("|", $response->getBody());
				if($country=='cd'){
					$res = explode(",", $response->getBody());
					if ($res[0] == 'SENT') {
						return true;
					}
				}
				if (count($res) == 3) {
					return true;
				}
			}
		} else {
			//check if we have custom account to be used for the transaction
			$username = "kigali.international";
			$password = "kigali.international";

//		$username = "patience.ruberandinda";
//		$password = "3pxDts06PDOIm5RRxr8u2wfFpB23zJa1";

			$check_balance = true;

			if (!is_null($school_id)) {
				//Check if the school has an account
				$intouchAccount = new IntouchAccount();

				$info = $intouchAccount->where('school_id', $school_id)->first();

				if ($info && trim($info['username']) && trim($info['password'])) {
					$username = $info['username'];
					$password = $info['password'];
					$check_balance = false;
				}
			}
			if ($check_balance && $remaining_sms <= 0) {
				$result = array("code" => 200, "content" => "SMS limit reached, contact IDEYETU admin");
				return false;
			}
			$phone = str_replace("+", "", $phone);
			$phone = strlen($phone) == 9 ? "0".$phone : $phone;
			$phone = substr($phone, 0, 3) == "250" ? $phone : "25" . $phone;
			$this->curl = \Config\Services::curlrequest();
			$response = $this->curl->setAuth($username, $password)
				->request("POST", SMS_API, [
					'form_params' => [
						'sender' => "$school_acronym",
						'recipients' => $phone,
						'message' => $message
					], 'verify' => false, 'http_errors' => false
				]);
			$code = $response->getStatusCode();
//		echo $response->getBody();
			$res = json_decode($response->getBody(), true);
			if ($code == 200) {
				if ($res['success'] == true) {
					return true;
				}
				$result = $res['response'][0]['errors']['error'];
			} else {
				$result = $res["detail"];
			}
		}
		return false;
	}
	function _send_email($email,$subject,$msg){
		$this->email=\Config\Services::email();
//		$config =array("SMTPHost"=>"smtp.gmail.com","SMTPUser"=>"somanetsms@gmail.com","SMTPPass"=>"ukpi2020"
//		,"protocol"=>"smtp","SMTPPort"=>587,"mailType"=>"html");
		$config =array("SMTPHost"=>"mail.qonics.com","SMTPUser"=>"somanet@qonics.com","SMTPPass"=>"NeoJxZGy2kAl"
		,"protocol"=>"smtp","SMTPPort"=>587,"mailType"=>"html");
		$this->email->initialize($config);
//		$this->email->setFrom("somanetsms@gmail.com","IDEYETU");
		$this->email->setFrom("somanet@qonics.com","KIAC");
		$this->email->setTo($email);
		$this->email->setSubject($subject);
		$this->email->setMessage($msg);
		if($this->email->send(false)){
			return true;
		}
//		var_dump($this->email->printDebugger());
		return false;
	}
	public function _get_parent_phone($student)
	{
		$stMdl = new StudentModel();
		$st_dt = $stMdl->select("fname,lname,father,ft_phone,mother,mt_phone,guardian,gd_phone")
			->where("id", $student)
			->get()->getRow();
		$phone = "";
		$name = "";
		if (strlen($st_dt->ft_phone)>3){
			$phone = $st_dt->ft_phone;
			$name = $st_dt->father;
		}else if (strlen($st_dt->mt_phone)>3){
			$phone = $st_dt->mt_phone;
			$name = $st_dt->mother;
		}else if (strlen($st_dt->gd_phone)>3){
			$phone = $st_dt->gd_phone;
			$name = $st_dt->guardian;
		}
		return array("parent_name"=>$name,"phone"=>$phone,"name"=>$st_dt->fname.' '.$st_dt->lname);
	}
	public function get_discipline_msg($name,$marks,$reason, $country = '1'): string
	{
		if ($country == '1') {
			return "Babyeyi dufatanyije kurera, umwana wanyu {$name} akuweho amanota {$marks} y'imyitwarire kubera {$reason}.\nMurakoze";
		} else {
			return  "Chers parents,
Nous vous informons que {$name} à {$reason} pour sanction nous lui avons retranché quelques points.
Merci et bonne compréhension";
		}
	}
	public function get_permission_msg($name,$destination,$reason, $country='1'): string
	{
		if ($country =='1') {
			return "babyeyi dufatanyije kurera umwana wanyu {$name} ahawe uruhushya rwo Kujya {$destination} Kubera {$reason}.\nMurakoze";
		} else {
			return "Chers parents Juste vous informer que nous Avons permis à l’ enfant #{$name} de sortir à cause de son état de santé. Merci.";
		}

	}
	/**
	 * This function is used to send push notification to user
	 * @param string $token device token to send message
	 * @param array $data array that contains custom data to send
	 * @param array $notification array that contains notification data (title,body,imageUrl,..)
	 * @throws \Exception throw an exception when error occurred
	 */
	public function sendNotificationMessage(string $token,array $data,array $notification){
		if(strlen($token)<10){
			throw(new \Exception("Invalid Token"));
		}
		if(!is_array($data) || count($data)==0){
			throw(new \Exception("Please provide a valid message to send"));
		}
		if(!is_array($notification)){
			throw(new \Exception("Notification must be array and contains title and message"));
		}
		$data = ["to"=>$token,"data"=>$data,"notification"=>$notification];
//		echo json_encode($data);die();
		$this->curl = \Config\Services::curlrequest();

//		$req = $this->curl->request("POST","https://fcm.googleapis.com/fcm/send",[
//			'form_params' => $data,"headers"=>["Authorization"=>"Key=".FCM_SERVER_KEY,"Content-Type"=>"application/json"],'verify' => false,'http_errors' => false
//		]);
		$req = $this->curl->setBody(json_encode($data))->setHeader("Authorization","Key=".FCM_SERVER_KEY)
			->setHeader("Content-Type","application/json")
			->request("POST","https://fcm.googleapis.com/fcm/send",
				['verify' => false,'http_errors' => false]
			);
		echo $req->getBody();
	}

	/**
	 * @param string $tx_id Transaction ID from database and prepend EDU
	 * @param object $input object that contains payment info (token,studentId,phone,amount,..)
	 * @param object $student object that contains student info (id,name,regno,..)
	 * @return string Returns Reference number of the payment from MTN #momo_ref_number
	 * @throws \Exception throw an exception when error occurred
	 */
	public function topUpMOMO(string $tx_id,object $input,object $student):string{
		if(strlen($input->phone)!=12){
			throw(new \Exception("Invalid Phone number"));
		}
		$amount = $input->amount;
		$phone = $input->schoolPhone;
		if($input->type == 4){
			//put all amount to BESOFT account
//			$input->amount += $input->charges;
//			$input->charges = 0;
//			$phone = BESOFT_CHARGES_ACCOUNT;
		}
		$data = [
			"token"=>BESOFT_API_TOKEN,
			"external_transaction_id"=>$tx_id,
			"callback_url"=>base_url('api/updatePaymentStatus'),
			"debit"=>[
				"phone_number"=>$input->phone,
				"amount"=>$input->grandTotal,
				"message"=>ucfirst($student->fname)." Wallet top up"
			],
			"transfers" => [
				[
					"phone_number"=>$phone,
					"amount" => $input->amount,
					"message" => "{$student->regno} Top up"
				],
				[
					"phone_number"=>BESOFT_CHARGES_ACCOUNT,
					"amount" => $input->charges-$input->somanetChargesAmount,
					"message" => "{$student->regno} Top up"
				]
			]
		];
		if($input->type == 4) {
			//school_fees
			$data['transfers'][] = [
				"phone_number" => SOMANET_CHARGES_ACCOUNT,
				"amount" => $input->somanetChargesAmount,
				"message" => "{$student->regno} Registration charges"
			];
		}
//		echo "resdfssdf".json_encode($data);die();
		$this->curl = \Config\Services::curlrequest();
		$req = $this->curl->setBody(json_encode($data))->setHeader("Content-Type","application/json")
			->request("POST",BESOFT_API_URL,
				['verify' => false,'http_errors' => false]
			);
		$res = $req->getBody();
		if (($resData = json_decode($res))===false){
			throw(new \Exception("Invalid API response: {$res}"));
		}else if($resData->status_code>300){
			throw(new \Exception("Error: {$resData->message}"));
		}
		//save credit
		$bMdl = new BankCreditTransactionModel();
		$bMdl->save(['wallet_id'=>$input->walletId, 'amount'=>$amount,'school_id'=>$input->schoolId,'status'=>0]);
		return $resData->momo_ref_number??'';
	}
	public function processPendingBprTransfer(){
		$bMdl = new BankCreditTransactionModel();
		$records = $bMdl->select("bank_credit_transactions.*,s.bank_account,p.txn_id,bank_credit_transactions.retryCount")
			->join("payment_transactions p","p.id = bank_credit_transactions.wallet_id")
			->join("schools s","s.id = bank_credit_transactions.school_id")
			->where("p.status",1)
			->where("bank_credit_transactions.status",0)
			->get()->getResult();
		echo "Pending transactions: ".count($records)."<br />";
		$success = 0;
		foreach ($records as $record) {
			$trans = [
				[
					"drcr"=>"D",
					"account" => BESOFT_BPR_ACCOUNT,
					"amount" => $record->amount,
					"narrative" => "IDEYETU FEES TRANSFER"
				],
				[
					"drcr"=>"C",
					"account" => $record->bank_account,
					"amount" => $record->amount,
					"narrative" => "IDEYETU FEES TRANSFER"
				]
			];
			try {
				$this->bprPayment($record->id,$record->txn_id . 'I' . $record->id. 'R'.$record->retryCount, $trans);
				$success++;
			} catch (\Exception $e) {
				log_message("critical","BPR BUG: ".$e->getMessage());
				$bMdl->save(['id' => $record->id, 'retryCount'=>($record->retryCount+1),'errorMessage' => $e->getMessage()]);
			}
		}
		echo "Succeeded transactions: ".$success."<br />";
	}

	/**
	 * @throws \Exception
	 */
	public function bprPayment(int $id,string $tx_id, array $trans){
		if(strlen($tx_id)<3){
			throw(new \Exception("Invalid Transaction ID"));
		}
		if(count($trans)<2){
			throw(new \Exception("Invalid Transaction data"));
		}

		$data = [
			"besoftId"=>$tx_id,
			"trans"=>$trans
		];
		$this->curl = \Config\Services::curlrequest();
		$req = $this->curl->setBody(json_encode($data))->setHeader("Content-Type","application/json")
			->request("POST",getenv('custom.bprUrl').'payment',
				['verify' => false,'http_errors' => false]
			);
		$res = $req->getBody();
		if (($resData = json_decode($res))===false){
			throw(new \Exception("Invalid API response: {$res}"));
		}else if($resData->status!=200){
			throw(new \Exception("Error: {$resData->message}"));
		}
		//update credit status
		log_message("critical","BPR RESPONSE: ".$res);
		$bMdl = new BankCreditTransactionModel();
		try {
			$bMdl->save(['id' => $id, 'status' => 1, 'refNo' => $resData->bprRefNo, 'errorMessage' => '']);
		} catch (\ReflectionException $e) {
			throw(new \Exception("Error:  Failed to update bankCredit {$e->getMessage()}"));
		}
	}
	public function verifyBprAccount(string $account,string $key='account'){
		if(strlen($account)<5){
			throw(new \Exception("Invalid Bank account"));
		}

		$data = [
			$key=>$account,
		];
		$this->curl = \Config\Services::curlrequest();
		$req = $this->curl->setBody(json_encode($data))->setHeader("Content-Type","application/json")
			->request("POST",getenv('custom.bprUrl').'customername',
				['verify' => false,'http_errors' => false]
			);
		$res = $req->getBody();
		echo $res;
		if (($resData = json_decode($res))===false){
			throw(new \Exception("Invalid API response: {$res}"));
		}else if($resData->status!=200){
			throw(new \Exception("Error: {$resData->message}"));
		}
		//update credit status
		log_message("critical","BPR RESPONSE: ".$res);

	}
	/**
	 * @param string $tx_id Transaction ID from database and prepend EDU
	 * @param object $input object that contains payment info (token,applicationId,phone,amount,..)
	 * @param object $student object that contains student info (id,name,applicationCode,..)
	 * @return string Returns Reference number of the payment from MTN #momo_ref_number
	 * @throws \Exception throw an exception when error occurred
	 */
	public function registrationPayment(string $tx_id,object $input,object $student):string{
//		var_dump($input->phone); die();
		if(strlen($input->phone)!=12){
			throw(new \Exception("Invalid Phone number"));
		}
		$SchoolPhone = $input->schoolPhone;
		$data = [
			"token"=>BESOFT_API_TOKEN,
			"external_transaction_id"=>$tx_id,
			"callback_url"=>base_url('updateRegistrationPaymentStatus'),
			"debit"=>[
				"phone_number"=>$input->phone,
				"amount"=>$input->grossAmount,
				"message"=>"{$student->code}"
			],
			"transfers" => [
				[
					"phone_number"=>$SchoolPhone,
					"amount" => $input->schoolAmount,
					"message" => "{$student->code} Registration payment"
				],
				// [
				// 	"phone_number"=>BESOFT_CHARGES_ACCOUNT,
				// 	"amount" => $input->chargesAmount,
				// 	"message" => "{$student->code} Registration charges"
				// ],
				[
					"phone_number"=>SOMANET_CHARGES_ACCOUNT,
					"amount" => $input->somanetChargesAmount,
					"message" => "{$student->code} Registration charges"
				]
			]
		];

		$this->curl = \Config\Services::curlrequest();
		$req = $this->curl->setBody(json_encode($data))->setHeader("Content-Type","application/json")
			->request("POST",BESOFT_API_URL,
				['verify' => false,'http_errors' => false]
			);
		$res = $req->getBody();
		if (($resData = json_decode($res))===false){
			throw(new \Exception("Invalid API response: {$res}"));
		}else if($resData->status_code>300){
			throw(new \Exception("Error: {$resData->message}"));
		}
		return $resData->momo_ref_number??'';
	}
}
