<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function __construct(){
        //   loding user model
        $this->user = new UserModel();       
    }

    public function index()
    {
        return view('welcome_message');
    }

    /**
     * 
     */
    public function getUsers()
    { 
        /**
         *  @var data
         *  @type array
         *  @use - to collect all data that need to show/use in view
         *  @return view with array data
         */
        $data = array();

        $data['users'] = $this->user->findAll();

        return view('users', $data);
    }
}
