<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: andrewfrazer
 * Date: 6/12/16
 * Time: 11:12 AM
 */

class Clock extends MX_Controller
{
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $data = 15;

        $this -> blade
            -> set('data', $data)
            -> render('clock');
    }
}