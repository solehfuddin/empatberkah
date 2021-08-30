<?php

namespace App\Controllers;
use App\Models\CustomModel;
use App\Models\ArticleModel;

class Article extends BaseController
{
	public function index($slug = null)
	{
		if ($slug == null)
		{
			redirect('/');
		}
		$custom = new CustomModel();
		$article= new ArticleModel();
		
		$cek = $article->where('slug', $slug)->first();
		
		if ($cek == null)
		{
			return redirect()->to(base_url() . '/');
		}
		else
		{
			$data = [
				'title' => $custom->where('key', 'title-web')->first(),
				'navbar' => $custom->where('key', 'navbar-area')->first(),
				'footer' => $custom->where('key', 'footer-area')->first(),
				'sosmed' => $custom->where('key', 'sosmed-area')->find(),
				'contact' => $custom->where('key', 'contact-area')->first(),
				'article' => $cek,
			];

			//dd($data);
			return view('view_articles', $data);
		}
	}
}
