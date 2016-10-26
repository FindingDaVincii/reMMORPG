<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{

		$trending = [
			['name'=> 'Revelation', 'link' => 'http://somelinke.com/Revelation'],
			['name'=> 'Diablo 3', 'link' => 'http://somelinke.com/Revelation'],
			['name'=> 'Wild Terra', 'link' => 'http://somelinke.com/Revelation'],
			['name'=> 'World of Warships', 'link' => 'http://somelinke.com/Revelation']
		];

		$data = [
			'trending' => $trending
		];
		$this->load->view('homepage_view');
		$this->load->view('trendingbar',$data);
	}
}
