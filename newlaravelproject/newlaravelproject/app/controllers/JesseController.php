<?php
/**
 * Created by PhpStorm.
 * User: Jesse
 * Date: 24/02/2015
 * Time: 2:28 PM
 */

class JesseController extends BaseController
{
    public function greet()
    {
        $firstname = "George";

        return View::make('hello')->with('firstname', $firstname);
    }

    public function contactus()
    {
        return View::make('contactus');
    }
}