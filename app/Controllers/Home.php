<?php
namespace App\Controllers;
use App\Models\CustomModel;

class Home extends BaseController
{
	public function index()
	{
		$custom = new CustomModel();
		$data = [
			'navbar' => $custom->where('key', 'navbar-area')->first(),
			'header' => $custom->where('key', 'header-area')->first(),
			'counter' => $custom->where('key', 'counter-area')->find(),
			'intro' => $custom->where('key', 'intro-area')->first(),
			'details_header' => $custom->where('key', 'details-1h-area')->first(),
			'details_content' => $custom->where('key', 'details-1c-area')->find(),
			'details2_header' => $custom->where('key', 'details-2h-area')->first(),
			'invitation' => $custom->where('key', 'invitation-area')->first(),
		];
		
		//dd($data);
		return view('view_home', $data);
		
		//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
	}
}
