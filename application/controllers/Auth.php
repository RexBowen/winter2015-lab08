<?php

//Login controller
class Auth extends Application {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    //renders the login page
    function index() {
        $this->data['pagebody'] = 'login';
        $this->render();
    }

    //handles the login post request
    function submit() {
        $key = $_POST['userid'];
        $user = $this->users->get($key);
        if (password_verify($this->input->post('password'), $user->password)) {
            $this->session->set_userdata('userID', $key);
            $this->session->set_userdata('userName', $user->name);
            $this->session->set_userdata('userRole', $user->role);
        } //else redirect('/auth');
        redirect('/');
    }

    //logs out the user by destroying the session
    function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

}
