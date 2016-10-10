<?php
/**
 * Created by PhpStorm.
 * User: andrewfrazer
 * Date: 6/12/16
 * Time: 1:41 AM
 */

class Googlemap extends MX_Controller
{
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $data = '';

        $this -> blade
            -> set('data', $data)
            -> render('googlemap');
    }
}
