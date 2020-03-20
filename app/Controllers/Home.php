<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'      => 'Cyber App - Base',
			'main_title' => 'Cyber App',
			'content'    => 'home/homeindex',
		];
		return view('layouts/base', $data);
	}
	public function about()
	{
		$data = [
			'title'      => 'Cyber App | About',
			'main_title' => 'Cyber App',
			'content'    => 'home/about',
		];
		return view('layouts/base', $data);
	}
	public function portofolio()
	{
		$data = [
			'title'      => 'Cyber App | Portofolio',
			'main_title' => 'Cyber App',
			'content'    => 'home/portofolio',
		];
		return view('layouts/base', $data);
	}
	public function team()
	{
		$data = [
			'title'      => 'Cyber App |  Piksi Team',
			'main_title' => 'Cyber App',
			'content'    => 'home/team',
		];
		return view('layouts/base', $data);
	}
	public function contact()
	{
		$data = [
			'title'      => 'Cyber App | Contact Us',
			'main_title' => 'Cyber App',
			'content'    => 'home/contact',
		];
		return view('layouts/base', $data);
	}
	public function admin()
	{
		return view('layouts/admin/test.php');
	}

	//--------------------------------------------------------------------

}
