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
					'title'			=> 'Cyber App - Base',
					'main_title'	=> 'Cyber App',
					'content'		=> 'home/about',
				);
		return view('layouts/base',$data);
	}

	//--------------------------------------------------------------------

}
