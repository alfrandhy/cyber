<?php namespace App\Controllers;

class Blog extends BaseController
{
	public function index()
	{
		$data = array(	
					'title'			=> 'Cyber App - Base',
					'main_title'	=> 'Cyber App',
					'content'		=> 'blog/blogindex',
				);
		return view('layouts/base',$data);
	}
    public function read()
    {
        $data = array(
                    'title' => 'Read',
                    'main_title' => 'Cyber App',
                    'content' => 'blog/read',
                );
        return view('layouts/base', $data);
    }
}