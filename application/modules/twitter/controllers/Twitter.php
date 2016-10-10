<?php
/**
 * Created by PhpStorm.
 * User: andrewfrazer
 * Date: 6/12/16
 * Time: 2:31 AM
 */

class Twitter extends MX_Controller
{
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $data = '';

        $this -> blade
            -> set('data', $data)
            -> render('twitter');
    }
}
