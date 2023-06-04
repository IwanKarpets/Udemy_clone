<?php

class Home extends Controller
{
    public function index()
    {
        $db = new Database();
        $data['title'] = 'Home';
        $this->view('home', $data);
    }

    public function edit()
    {
        echo "Edit page";
    }

    public function delete()
    {
        echo "Delete page";
    }
}
