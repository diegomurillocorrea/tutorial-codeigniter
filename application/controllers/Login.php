<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("Login_m");
    }

    public function index()
    {
        $logged = $this->session->has_userdata("logged_in");
        if ($logged) {
            header("Location: " . site_url("dashboard"));
        } else {
            $this->load->view("login/index_login.php");
        }
    }

    public function login()
    {
        $user = $this->input->post("user");
        $pass = $this->input->post("pass");
        $res = $this->Login_m->login($user, $pass);
        if ($res->estado) {
            header("Location: " . site_url("dashboard"));
        } else {
            header("Location: " . site_url("login"));
        }
    }

    public function logOut()
    {
        $this->session->sess_destroy();
        session_write_close();
        header("Location: " . site_url("login"));
    }
}
