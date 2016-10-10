<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Flatfile extends MX_Controller
{
	function __construct()
	{
		parent::__construct();

		$data['title'] = 'Flat File';
		$data['fileloc'] = base_url('assets/flatfile/file1.txt');
		$data['file'] = file_get_contents($data['fileloc']);
	}

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['title'] = 'Flat File';
		$data['fileloc'] = base_url('assets/flatfile/file1.txt');
		$data['file'] = file_get_contents($data['fileloc']);

		$this -> blade
			-> set('data', $data)
			-> render('flatfile');
	}
	
	
	public function submit()
	{
		$file_text = $this -> input -> post('ta');
		$filepath = './assets/flatfile/file1.txt';

		if (isset($file_text))
		{
			$newData = nl2br(htmlspecialchars($file_text));
			$handle = fopen($filepath, 'w');
			fwrite($handle, $newData);
			fclose($handle);
		}

		$this -> index();
	}
}
