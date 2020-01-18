<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {

        $this->load->view('admin/login');
    }

    public function register()
    {

        $this->load->view('admin/register');
    }

    public function forgotPassword()
    {

        $this->load->view('admin/forgetPassword');
    }


    public function Administration()
    {
        $data['package'] = $this->CustomModel->get('tour_activity', 'activity');

        $this->load->view('admin/layout/header');
        $this->load->view('admin/tourpackages',$data);
        $this->load->view('admin/layout/footer');
    }

    public function tourpackages()
    {
        $data['place'] = $this->CustomModel->get('place', 'name');

        $this->load->view('admin/layout/header');
        $this->load->view('admin/main', $data);
        $this->load->view('admin/layout/footer');
    }
    public function addtourPackagePost()
    {
        // echo "<pre>";
        // print_r($_FILES);
        // print_r($_POST);
        // die;



        if (isset($_POST) && isset($_FILES)) {

            $file_name = $_FILES['image']['name'];
            $file_temp_name = $_FILES['image']['tmp_name'];
            $folder = "upload/" . $file_name;
            move_uploaded_file($file_temp_name, $folder);

            $data = array(
                'name' => $this->input->post('Tour_Name'),
                'Description' => $this->input->post('description'),
                'valid_from' => $this->input->post('valid_from'),
                'valid_to' => $this->input->post('valid_to'),
                'place' => $this->input->post('place'),
                'cancellation_status' => $this->input->post('cancellation_status'),
                'cancellation_charge' => $this->input->post('cancellation_charge'),
                'cancellation_duraion' => $this->input->post('cancellation_duraion'),
                'status' => $this->input->post('status'),
                'image' => $folder
            );

            $result = $this->CustomModel->insertInto('tour', $data);
            if (!empty($result)) {
                // print_r($result);die;
                $this->session->set_flashdata("msg", "Tour Added.");
                redirect(base_url('Admin/tourpackages'));
            }
        } else {
            $this->session->set_flashdata("msg", "invalid entry");
        }
    }

    public function addActivity()
    {
        $data['tour'] = $this->CustomModel->get('tour', 'name');
        $data['pickUp'] = $this->CustomModel->get('pickup_point', 'pickup_point');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/addActivity', $data);
        $this->load->view('admin/layout/footer');
    }

    public function addActivityPost()
    {
        //    echo "<pre>";
        // print_r($_FILES);
        // print_r($_POST);
        // die;

        if (!empty($_POST) && $_FILES) {

            $file_name = $_FILES['file_input_Images']['name'];
            $file_temp_name = $_FILES['file_input_Images']['tmp_name'];
            $folder = "upload/" . $file_name;
            move_uploaded_file($file_temp_name, $folder);

            $places = $this->input->post('selectLpicup');

            $place = json_encode($places);

        //         echo $place;
        // die;
    

            $data = array(
                'activity' => $this->input->post('Tour_Name'),
                'inclusion' => $this->input->post('description'),
                'usefull_information' => $this->input->post('Information'),
                'duration' => $this->input->post('Duration'),
                'time_slots' => $this->input->post('selectTimeSlots'),
                'tp_id' => $this->input->post('tour_id'),
                'places' => $place,
                'image_name' => $folder
            );
            $result = $this->CustomModel->insertInto('tour_activity', $data);
            if (!empty($result)) {

                $amt_type = array(
                    'Adult' => $this->input->post('Adult'),
                    'Infont' => $this->input->post('Infont'),
                    'Child' => $this->input->post('Child')
                );
                $amt = json_encode($amt_type, true);
                $price = array(
                    'tpa_id' => $result,
                    'amt' => $amt,
                    'currency' => 'AED'
                );
                $price1 = $this->CustomModel->insertInto('price', $price);
                if (!empty($price1)) {
                    $this->session->set_flashdata("msg", "Activity Added");
                    redirect('Admin/addActivity');
                }
            }
        } else {
            $this->session->set_flashdata("msg", "invalid entry");
        }
    }
    // validate user login by role
    function auth()
    {
        // print_r($_POST);die;

        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email    = $this->input->post('email');
            $password = $this->input->post('password');
            $validate = $this->CustomModel->selectAllFromWhere('users', array('email' => $email, 'password' => $password));
            if (!empty($validate)) {
                $data  = $validate;
                $id    = $data[0]['id'];
                $username    = $data[0]['username'];
                $email = $data[0]['email'];
                $user_role = $data[0]['user_role'];

                $sesdata = array(
                    'id'       =>  $id,
                    'username'  => $username,
                    'email'     => $email,
                    'role'     => $user_role,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata("userInfo", $sesdata);
                //print_r($level);

                // access login for admin
                if ($user_role == '10') {
                    redirect('Admin/Administration');

                    // access login for process
                } elseif ($user_role === '20') {
                    redirect('Admin/users');
                    // access login for qc1
                } else {
                    echo $this->session->set_flashdata('msg', "Username or Password is Incorrect");
                    redirect('Admin/index');
                }
            } else {
                redirect('Admin/index');
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin/index');
    }
}
