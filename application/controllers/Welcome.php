<?php defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'file'));
        $this->load->library(array('form_validation', 'Auth'));
        $this->load->model('Welcome_model');
        $this->load->library('session');
        $this->load->database();
    }

    public function index()
    {
        if (isset($_SESSION['user']['access'])) {
            $x = (int) $_SESSION['user']['access'];
            if ($x > 0) {
                $this->load->view('temp/header-user');
                $this->load->view('home');
                $this->load->view('temp/footer');
            } else if ($x === 0) {
                $this->load->view('temp/header-admin');
                $this->load->view('home');
                $this->load->view('temp/footer');
            }
        } else {
            $this->load->view('temp/header');
            $this->load->view('home');
            $this->load->view('temp/footer');
        }
    }

    public function error()
    {
        $this->load->view('temp/header');
        $this->load->view('404');
        $this->load->view('temp/header');
    }

    public function about()
    {
        if (isset($_SESSION['user']['access'])) {
            $x = (int) $_SESSION['user']['access'];
            if ($x > 0) {
                $this->load->view('temp/header-user');
                $this->load->view('about');
                $this->load->view('temp/footer');
            } else if ($x === 0) {
                $this->load->view('temp/header-admin');
                $this->load->view('about');
                $this->load->view('temp/footer');
            }
        } else {
            $this->load->view('temp/header');
            $this->load->view('about');
            $this->load->view('temp/footer');
        }
    }

    public function pricing()
    {
        $data['query'] = $this->Welcome_model->Read('products');

        if (isset($_SESSION['user']['access'])) {
            $x = (int) $_SESSION['user']['access'];
            if ($x > 0) {
                $this->load->view('temp/header-user');
                $this->load->view('pricing', $data);
                $this->load->view('temp/footer');
            } else if ($x === 0) {
                $this->load->view('temp/header-admin');
                $this->load->view('pricing', $data);
                $this->load->view('temp/footer');
            }
        } else {
            $this->load->view('temp/header');
            $this->load->view('pricing', $data);
            $this->load->view('temp/footer');
        }
    }

    public function bloghomeone()
    {
        // Not yet finished

        $data['query'] = $this->Welcome_model->Read('users');
        $this->load->view('temp/header');
        $this->load->view('blog-home-1', $data);
        $this->load->view('temp/footer');
    }

    public function bloghometwo()
    {
        $data['query'] = $this->Welcome_model->Read('users');
        $this->load->view('temp/header');
        $this->load->view('blog-home-2', $data);
        $this->load->view('temp/footer');
    }

    public function blogpost($id)
    {
        $data['query'] = $this->Welcome_model->Read_single($id);
        $this->load->view('temp/header');
        $this->load->view('blog-post', $data);
        $this->load->view('temp/footer');
    }

    public function contact()
    {
        if (isset($_SESSION['user']['access'])) {
            $x = (int) $_SESSION['user']['access'];
            if ($x > 0) {
                $this->load->view('temp/header-user');
                $this->load->view('contact');
                $this->load->view('temp/footer');
            } else if ($x === 0) {
                $this->load->view('temp/header-admin');
                $this->load->view('contact');
                $this->load->view('temp/footer');
            }
        } else {
            $this->load->view('temp/header');
            $this->load->view('contact');
            $this->load->view('temp/footer');
        }
    }

    public function faq()
    {
        if ($_SESSION['user']['access'] > 0) {
            $this->load->view('temp/header-user');
            $this->load->view('faq');
            $this->load->view('temp/footer');
        } else if ($_SESSION['user']['access'] === 0) {
            $this->load->view('temp/header-admin');
            $this->load->view('faq');
            $this->load->view('temp/footer');
        } else {
            $this->load->view('temp/header');
            $this->load->view('faq');
            $this->load->view('temp/footer');
        }
    }

    public function fullwidth()
    {
        $this->load->view('temp/header');
        $this->load->view('full-width');
        $this->load->view('temp/footer');
    }

    public function portfolioonecol()
    {
        $this->load->view('temp/header');
        $this->load->view('portfolio-1-col');
        $this->load->view('temp/footer');
    }

    public function portfoliotwocol()
    {
        $this->load->view('temp/header');
        $this->load->view('portfolio-2-col');
        $this->load->view('temp/footer');
    }

    public function portfoliothreecol()
    {
        $this->load->view('temp/header');
        $this->load->view('portfolio-3-col');
        $this->load->view('temp/footer');
    }

    public function portfoliofourcol()
    {
        $this->load->view('temp/header');
        $this->load->view('portfolio-4-col');
        $this->load->view('temp/footer');
    }

    public function portfolioitem()
    {
        $this->load->view('temp/header');
        $this->load->view('portfolio-item');
        $this->load->view('temp/footer');
    }

    public function services()
    {
        $this->load->view('temp/header');
        $this->load->view('services');
        $this->load->view('temp/footer');
    }

    public function sidebar()
    {
        $this->load->view('temp/header');
        $this->load->view('sidebar');
        $this->load->view('temp/footer');
    }

    public function blogcreate()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->load->view('temp/header');
            $this->load->view('blog-creation');
            $this->load->view('temp/footer');
        } else {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000;
            $config['max_width'] = 0;
            $config['max_height'] = 0;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                // I dont currently think is working correct, something to do with the size of the image

                $this->load->view('temp/header');
                $this->load->view('welcome/error');
                $this->load->view('temp/footer');
            } else {
                $this->Welcome_model->Create();
                redirect('welcome/bloghometwo');
            }
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->load->view('temp/header');
            $this->load->view('login');
            $this->load->view('temp/footer');
        } else {
            if (!isset($_SESSION['user'])) // Is the user logged in?
            {
                if ($row = $this->Welcome_model->Login($_POST['email'], $_POST['password'])) {

                    // STORE THE USERS DATA FOR THE SESSION

                    $_SESSION['user'] = array('id' => $row->id, 'name' => $row->name, 'email' => $row->email, 'access' => $row->access);

                    if ($_SESSION['user']['access'] != 0) {
                        redirect('welcome/pricing');
                    } else {
                        $this->load->view('temp/header-admin');
                        echo "<h2 style='text-align:center;'>Admin Access Level " . $_SESSION['user']['access'] . "</h2>";
                        $this->load->view('temp/footer');
                    }
                } else {
                    session_unset();
                    session_destroy();
                    redirect('welcome/error');
                }
            } else {
                $this->load->view('temp/header');
                $this->load->view('about');
                $this->load->view('temp/footer');
            }
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->load->view('temp/header');
        $this->load->view('about');
        $this->load->view('temp/footer');
    }

    public function signup()
    {
        session_unset();
        session_destroy();

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->load->view('temp/header');
            $this->load->view('signup');
            $this->load->view('temp/footer');
        } else {
            $_SESSION['user'] = array('name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'access' => 1);
            if ($_POST['password'] != $_POST['password-confirmation']) {
                $this->load->view('temp/header');
                echo "<center>The passwords do not match, please try again!</center>";
                $this->load->view('signup');
                $this->load->view('temp/footer');
            } else {
                $_SESSION['user'] = array('name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'access' => 1);
                if ($this->Welcome_model->Create($_SESSION['user'])) {
                    $this->load->view('temp/header');
                    echo "<center>Account not created, please try again!</center>";
                    $this->load->view('signup');
                    $this->load->view('temp/footer');
                } else {
                    $this->load->view('temp/header');
                    echo "<center>Account created</center>";
                    $this->load->view('login');
                    $this->load->view('temp/footer');
                }
            }
        }
    }

    public function users()
    {
        // Attention
        if (isset($_SESSION['user']['access'])) {
            $x = (int) $_SESSION['user']['access'];
            if ($x > 0) {
                $this->load->view('temp/header-user');
                $this->load->view('404');
                $this->load->view('temp/footer');
            } else if ($x === 0) {
                $this->load->view('temp/header-admin');
                $this->load->view('users');
                $this->load->view('temp/footer');
            }
        } else {
            $this->load->view('temp/header');
            $this->load->view('404');
            $this->load->view('temp/footer');
        }
    }

    public function shopping_cart()
    {
        if (!isset($_POST['checkout'])) {
            if (isset($_SESSION['user'])) 
            {
                $data['query'] = $this->Welcome_model->Read('products');
                $data['price'] = 0;
                

                if ($_SERVER['REQUEST_METHOD'] != 'POST') 
                {
                    
                    $this->load->view('temp/header-user');
                    $this->load->view('cart', $data);
                    $this->load->view('temp/footer');
                } 
                else 
                {
                    for ($x = 0; $x < count($data['query']->result()); $x++) {
                        $post_array[$x] = $_POST[$x];
                    }

                    $x = 0;
    
                    foreach ($data['query']->result() as $row) {
                        $data['price'] += $post_array[$x] * $row->price;
                        $x++;
                    }

                    $data['count'] = array($_POST[0], $_POST[1]);
    
                    $this->load->view('temp/header-user');
                    $this->load->view('cart', $data);
                    $this->load->view('temp/footer');

                    $_SESSION['count'] = array($_POST[0], $_POST[1]);
                    $_SESSION['price'] = $data['price'];
                }
            } else {
                redirect('welcome/login');
            } 
        } else {  
            $data['query'] = $this->Welcome_model->Read('products');
            $this->load->view('temp/header-user');
            $this->load->view('checkout', $data);
            $this->load->view('temp/footer');
        }
    }

    public function checkout() 
    {
        if (isset($_SESSION['user']['access'])) {
            $x = (int) $_SESSION['user']['access'];
            if ($x > 0) {
                $this->load->view('temp/header-user');
                $this->load->view('checkout');
                $this->load->view('temp/footer');
            } else if ($x === 0) {
                $this->load->view('temp/header-admin');
                $this->load->view('checkout');
                $this->load->view('temp/footer');
            }
        } else {
            $this->load->view('temp/header');
            $this->load->view('checkout');
            $this->load->view('temp/footer');
        }
    }
}
