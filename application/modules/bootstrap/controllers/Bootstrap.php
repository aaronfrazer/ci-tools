<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: andrewfrazer
 * Date: 6/12/16
 * Time: 3:30 AM
 */
class Bootstrap extends MX_Controller
{

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $data['title'] = 'Bootstrap';

        $this -> blade
            -> set('data', $data)
            -> render('bootstrap');
    }
}
