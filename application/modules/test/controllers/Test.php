<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: andrewfrazer
 * Date: 6/12/16
 * Time: 11:12 AM
 */

class Test extends MX_Controller
{
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $data['title'] = 'Test Page';

        $this -> blade
            -> set('data', $data)
            -> render('test');
    }
}