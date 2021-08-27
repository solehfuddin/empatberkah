<?php
namespace App\Controllers;
use App\Models\CustomModel;
use App\Models\TestimoniModel;
use App\Models\ArticleModel;
use App\Models\ContactusModel;

class Home extends BaseController
{
	public function index()
	{
		$custom = new CustomModel();
		$testi  = new TestimoniModel();
		$article= new ArticleModel();
		$data = [
			'defaultImg' => $this->defaultImg(),
			'title' => $custom->where('key', 'title-web')->first(),
			'navbar' => $custom->where('key', 'navbar-area')->first(),
			'header' => $custom->where('key', 'header-area')->first(),
			'counter' => $custom->where('key', 'counter-area')->find(),
			'intro' => $custom->where('key', 'intro-area')->first(),
			'details_header' => $custom->where('key', 'details-1h-area')->first(),
			'details_content' => $custom->where('key', 'details-1c-area')->find(),
			'details2_header' => $custom->where('key', 'details-2h-area')->first(),
			'invitation' => $custom->where('key', 'invitation-area')->first(),
			'service_h' => $custom->where('key', 'services-area-h')->first(),
			'service_i' => $custom->where('key', 'services-area-i')->find(),
			'service_item' => $custom->where('key', 'services-item')->find(),
			'footer' => $custom->where('key', 'footer-area')->first(),
			'sosmed' => $custom->where('key', 'sosmed-area')->find(),
			'contact' => $custom->where('key', 'contact-area')->first(),
			'testimoni' => $testi->find(),
			'article' => $article->where('kode_type', 'TART001')->find(),
		];
		
		//dd($data);
		return view('view_home', $data);
		
		//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
	}

	function hubungikami()
	{
		if ($this->request->isAJAX())
		{
			$validationCheck = $this->validate([
				'input_name' => [
					'label' => 'Nama',
					'rules' => [
						'required',
					],
					'errors' => [
						'required' 		=> '{field} wajib terisi',
					],
				],

				'input_mail' => [
					'label' => 'Alamat Email',
					'rules' => [
						'required',
						'valid_email',
					],
					'errors' => [
						'required' 		=> '{field} wajib terisi',
						'valid_email'	=> '{field} tidak valid'
					],
				],

				'input_msg' => [
					'label' => 'Pesan',
					'rules' => 'required',
					'errors' => [
						'required' 		=> '{field} wajib terisi'
					],
				]
			]);
		}
		else
		{
			return view('errors/html/error_404');
		}

		if (!$validationCheck) {
			$msg = [
				'error' => [
					"input_name" => $this->validation->getError('input_name'),
					"input_mail" => $this->validation->getError('input_mail'),
					"input_msg" => $this->validation->getError('input_msg'),
				]
			];
		}
		else
		{
			$data = [
				'name' => $this->request->getVar('input_name', FILTER_SANITIZE_STRING),
				'email' => $this->request->getVar('input_mail', FILTER_SANITIZE_STRING),
				'message'  => $this->request->getVar('input_msg', FILTER_SANITIZE_STRING),
			];

			$m_contactus = new ContactusModel($request);

			$m_contactus->insert($data);

			$msg = [
				'success' => [
				   'data' => 'Terima kasih telah menghubungi kami, tim kami akan segera menghubungi anda',
				   'link' => base_url() . '/'
				]
			];
		}

		echo json_encode($msg);
	}
}
