<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = array(	
					'title'			=> 'Cyber App - Base',
					'main_title'	=> 'Cyber App',
					'content'		=> 'home/homeindex',
				);
		return view('layouts/base',$data);
	}
	public function about()
	{
		$data = array(	
					'title'			=> 'Cyber App | About',
					'main_title'	=> 'Cyber App',
					'content'		=> 'home/about',
				);
		return view('layouts/base',$data);
	}
	public function portofolio()
	{
		$data = array(	
					'title'			=> 'Cyber App | Portofolio',
					'main_title'	=> 'Cyber App',
					'content'		=> 'home/portofolio',
				);
		return view('layouts/base',$data);
	}
	public function team()
	{
		$data = array(	
					'title'			=> 'Cyber App |  Piksi Team',
					'main_title'	=> 'Cyber App',
					'content'		=> 'home/team',
				);
		return view('layouts/base',$data);
	}
	public function contact()
	{
		$data = array(	
					'title'			=> 'Cyber App | Contact Us',
					'main_title'	=> 'Cyber App',
					'content'		=> 'home/contact',
				);
		return view('layouts/base',$data);
	}

	//--------------------------------------------------------------------

}
