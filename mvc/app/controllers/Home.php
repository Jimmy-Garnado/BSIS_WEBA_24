<?php

class Home extends Controller
{
    public function index()
    {
        // $x = new User();

        // $arr['firstname'] = 'Jimmy';
        // $data = $x->where($arr);
        // show($data);

        $x = new User();
        $data = $x->findAll();

        $this->view('home', [
            'users' => $data]);  
    }

}