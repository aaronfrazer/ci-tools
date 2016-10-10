<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Paginationsearch extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

        $this -> load -> database();
        $this -> load -> model('paginationsearch_model');
        $this -> load -> library('pagination');
    }

	public function index()
	{
        $data['title'] = 'CodeIgniter Pagination Example with Search Query Filter';

        //pagination settings
		$config['base_url'] = site_url('paginationsearch/index');
		$config['total_rows'] = $this -> db -> count_all('tbl_books');
		$config['per_page'] = "5";
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"]/$config["per_page"];
		$config["num_links"] = floor($choice);

		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '«';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '»';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this -> pagination -> initialize($config);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// get books list
		$data['booklist'] = $this->paginationsearch_model->get_books($config["per_page"], $data['page'], NULL);

		$data['pagination'] = $this->pagination->create_links();

		// load view
        $this -> blade
            -> set('data', $data)
            -> render('paginationsearch');
	}

	function search()
	{
        $data['title'] = 'CodeIgniter Pagination Example with Search Query Filter';

		// get search string
		$search = ($this->input->post("book_name"))? $this->input->post("book_name") : "NIL";

		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

		// pagination settings
		$config = array();
		$config['base_url'] = site_url("paginationsearch/search/$search");
		$config['total_rows'] = $this->paginationsearch_model->get_books_count($search);
		$config['per_page'] = "5";
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"]/$config["per_page"];
		$config["num_links"] = floor($choice);

		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		// get books list
		$data['booklist'] = $this->paginationsearch_model->get_books($config['per_page'], $data['page'], $search);

		$data['pagination'] = $this->pagination->create_links();

		//load view
        $this -> blade
            -> set('data', $data)
            -> render('paginationsearch');
	}
}
?>