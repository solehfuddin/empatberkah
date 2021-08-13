<?php

namespace App\Controllers;

class Article extends BaseController
{
	public function index()
	{
		return view('view_articles');
	}
}
