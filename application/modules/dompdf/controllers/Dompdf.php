<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: afrazer
 * Date: 11/21/16
 * Time: 1:20 PM
 */

class Dompdf extends MX_Controller
{
    public function index()
    {
        $data['title'] = 'Test Page';

        $this -> blade
            -> set('data', $data)
            -> render('dompdf');
    }
    
    public function generate_pdf()
    {
        $this->load->helper(array('dompdf', 'file'));

        $data = 'Test';
        $html = $this -> blade
                -> set('data', $data)
                -> render('welcome');

        pdf_create($html, 'filename');

//        $data = pdf_create($html, '', false);
//        write_file('name', $data);//if you want to write it to disk and/or send it as an attachment
    }
}