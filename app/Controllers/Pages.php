<?php

namespace App\Controllers;
use GuzzleHttp\Client;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use CodeIgniter\HTTP\Response;
use App\Libraries\Wkhtmltopdf;



class Home extends BaseController
{

    public function TechnicalCourses ()
	{

		return view('landingPage/technical_courses.php');
	}

	public function InternationalStudents()
	{

		return view('landingPage/international_students.php');
	}

	public function AdmissionRequirements()
	{

		return view('landingPage/international_students.php');
	}

	public function TrainingCalendar()
	{
		return view('landingPage/training_calendar.php');
	}

	public function Fees()
	{
		return view('landingPage/fees.php');
	}

	public function TrainingOutcome()
	{
		return view('landingPage/training_outcome.php');
	}

	public function regulationsPolicies()
	{
		return view('landingPage/regulations_policies.php');
	}

	public function  Elearning()
	{
		return view('landingPage/e-learning.php');
	}

	public function  ElectronicResources()
	{
		return view('landingPage/electronic_resources.php');
	}
	public function  Library()
	{
		return view('landingPage/library.php');
	}

	public function  Projects()
	{

		return view('landingPage/projects.php');
	}

	public function StudentsDiversity()
	{

		return view('landingPage/.php');
		//		return view('landing_new', $data);	
	}


}

?>