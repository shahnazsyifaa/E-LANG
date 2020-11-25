<?php
class Register_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterModel');
        $this->load->model('LoginModel');
    }

    function index()
    {
        $this->load->view('Home');
    }

    function register_handle()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password2 = $this->input->post('password_conf');

        $cek = $this->RegisterModel->cek_username("user", $username);
        if (!$cek) {
            if ($password == $password2) {
                $data = array(
                    'username' => $username,
                    'password' => md5($password),
                    'nama' => $this->input->post('fullName'),
                    'no_handphone' => $this->input->post('handphone'),
                    'email' => $this->input->post('email'),
                    'alamat' => $this->input->post('alamat'),
                    'status' => 'user'
                );
                $this->RegisterModel->register_db('user', $data);

                $login = $this->RegisterModel->after_register("user", $username);
                if ($login) {

                    $data_session = array(
                        'nama' => $username,
                        'status' => "login"
                    );

                    $this->session->set_userdata($data_session);

                    redirect(base_url("index.php/Dashboard_controller"));
                } else {
                    // redirect(base_url("index.php/Home"));
                    echo $username, " ";
                    echo md5($password), " ";
                    echo "Username dan password salah !";
                }
            } else {
                ?><script type="text/javascript">
                alert("Password tidak sama");
                </script><?php
                $this->load->view('Home');
                // redirect(base_url("index.php/Home_controller"));
            }
        } else {
            ?><script type="text/javascript">
                alert("Username telah digunakan.");
            </script><?php
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
