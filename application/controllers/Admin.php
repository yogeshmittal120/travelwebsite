<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function index()
    {

        $this->load->view('admin/login');
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
    public function register()
    {

        $this->load->view('admin/register');
    }

    public function forgotPassword()
    {

        $this->load->view('admin/forgetPassword');
    }

    // function to  view tour packages 
    public function Administration()
    {
        $data['package'] = $this->CustomModel->get('tour', 'name');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/tourpackages', $data);
        $this->load->view('admin/layout/footer');
    }
    // function to  Add tour packages 
    public function tourpackages()
    {
        $data['place'] = $this->CustomModel->get('place', 'name');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/main', $data);
        $this->load->view('admin/layout/footer');
    }
    // function to edit view tour packages 
    public function edittourpackages($id)
    {
        $tour_id = base64_decode($id);
        $data['place'] = $this->CustomModel->get('place', 'name');
        $data['tour_package'] = $this->CustomModel->selectAllFromWhere('tour', array('id' => $tour_id));
        // print_r($data['tour_package']);

        $this->load->view('admin/layout/header');
        $this->load->view('admin/main', $data);
        $this->load->view('admin/layout/footer');
    }
    // function to edit tour packages into the database
    public function edittourpackagesPost()
    {


        if (!isset($_POST) && !isset($_FILES)) {
            $this->session->set_flashdata('error', 'fill details first');
            redirect(base_url('Admin/Administration'));
        } else {
            //     echo "<pre>";
            // print_r($_POST);
            // die;
            $folder = upload_img($_FILES);
            $tour_id = $this->input->post('id');
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

            $update_result = $this->CustomModel->update_table('tour', array('id' => $tour_id), $data);
            if ($update_result == true) {
                $this->session->set_flashdata('success', 'Update success');
                redirect(base_url('Admin/Administration'));
            } else {
                $this->session->set_flashdata('error', 'error');
                redirect(base_url('Admin/Administration'));
            }
        }
    }

    // function to insert tour packages into the database
    public function addtourPackagePost()
    {
        // echo "<pre>";
        // print_r($_FILES);
        // print_r($_POST);
        // die;

        if (isset($_POST) && isset($_FILES)) {
            $folder = upload_img($_FILES);
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
                $this->session->set_flashdata("success", "Tour Added.");
                redirect(base_url('Admin/Administration'));
            } else {
                $this->session->set_flashdata('error', 'error');
            }
        } else {
            $this->session->set_flashdata("error", "invalid entry");
        }
    }
    // function to show addactivity view
    public function addActivity()
    {
        $data['tour'] = $this->CustomModel->get('tour', 'name');
        $data['pickUp'] = $this->CustomModel->get('pickup_point', 'pickup_point');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/addActivity', $data);
        $this->load->view('admin/layout/footer');
    }

    // function to Edit addactivity view
    public function editActivity($id)
    {

        $data['tour'] = $this->CustomModel->get('tour', 'name');
        $data['pickUp'] = $this->CustomModel->get('pickup_point', 'pickup_point');
        $tour_id = base64_decode($id);
        $data['activity'] = $this->CustomModel->selectAllFromWhere('tour_activity', array('id' => $tour_id));
        $a_id = $data['activity'][0]['id'];
        $data['rate'] = $this->CustomModel->selectAllFromWhere('price', array('tpa_id' => $a_id));
        $data['amt'] = json_decode($data['rate'][0]['amt'], true);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/addActivity', $data);
        $this->load->view('admin/layout/footer');
    }

    // function to update activity into the database
    public function editActivityPost()
    {

        if (!empty($_POST) && $_FILES) {
            $folder = upload_img($_FILES);
            $places = $this->input->post('selectLpicup');
            $activity_id = $this->input->post('id');
            $pickup_point = json_encode($places);

            $data = array(
                'activity' => $this->input->post('Tour_Name'),
                'inclusion' => $this->input->post('description'),
                'usefull_information' => $this->input->post('Information'),
                'duration' => $this->input->post('Duration'),
                'time_slots' => $this->input->post('selectTimeSlots'),
                'tp_id' => $this->input->post('tour_id'),
                'places' => $pickup_point,
                'image_name' => $folder
            );
            //  $result = $this->CustomModel->insertInto('tour_activity', $data);
            $update_result = $this->CustomModel->update_table('tour_activity', array('id' => $activity_id), $data);
            if (!empty($update_result)) {

                $amt_type = array(
                    'Adult' => $this->input->post('Adult'),
                    'Infont' => $this->input->post('Infont'),
                    'Child' => $this->input->post('Child')
                );
                $amt = json_encode($amt_type, true);
                $rate_data = array(
                    'tpa_id' => $activity_id,
                    'amt' => $amt,
                    'currency' => 'AED'
                );
                //  $price1 = $this->CustomModel->insertInto('price', $price);
                $Updated_rate  = $this->CustomModel->update_table('price', array('id' => $activity_id), $rate_data);
                if (!empty($Updated_rate)) {
                    $this->session->set_flashdata("success", "Activity updated");
                    redirect('Admin/activity');
                } else {
                    $this->session->set_flashdata("error", "Error");
                    redirect('Admin/activity');
                }
            }
        } else {
            $this->session->set_flashdata("error", "invalid entry");
        }
    }

    // function to delete activity 
    function deleteActivity($id)
    {
        $tour_id = base64_decode($id);
        // print_r($_POST);
        // die;

        // $id = $_POST['t_id'];
        $data = $this->CustomModel->delete('tour_activity', array('id' => $tour_id));
        if ($data != true) {
            $this->session->set_flashdata("success", "Deleted.");
            redirect(base_url('Admin/activity'));
        } else {
            $this->session->set_flashdata("error", "Error");
            redirect(base_url('Admin/activity'));
        }
    }
    // function to show activity 
    function activity()
    {
        $data['activity'] = $this->CustomModel->get('tour_activity', 'activity');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/activity', $data);
        $this->load->view('admin/layout/footer');
    }

    // function to insert activity into the database
    public function addActivityPost()
    {
        //    echo "<pre>";
        // print_r($_FILES);
        // print_r($_POST);
        // die;

        if (!empty($_POST) && $_FILES) {
            $folder = upload_img($_FILES);
            $places = $this->input->post('selectLpicup');
            $place = json_encode($places);

            $data = array(
                'activity' => $this->input->post('Tour_Name'),
                'inclusion' => $this->input->post('description'),
                'usefull_information' => $this->input->post('Information'),
                'duration' => $this->input->post('Duration'),
                'time_slots' => $this->input->post('selectTimeSlots'),
                'tp_id' => $this->input->post('tour_id'),
                'tp_name' => $this->input->post('tp_name'),
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
                    $this->session->set_flashdata("success", "Activity Added");
                    redirect('Admin/activity');
                } else {
                    $this->session->set_flashdata("error", "Activity error");
                    redirect('Admin/activity');
                }
            }
        } else {
            $this->session->set_flashdata("error", "Invalid entry");
        }
    }

    // // function to show testimonial view 
    // function editTourpackage($id)
    // {
    //     // $id = $_POST['id'];

    //     $data = $this->CustomModel->selectAllFromWhere('tour', array('id' => $id));
    //     echo $json_data = json_encode($data, true);
    // }

    // function to delete from database
    function deleteTourpackage()
    {
        $id = $_POST['t_id'];
        $data = $this->CustomModel->delete('tour', array('id' => $id));
        if ($data != true) {
            echo "Deleted";
        } else {
            echo "error";
        }
    }

    // function to show testimonial view 
    function testimonial()
    {
        $data['testimonial'] = $this->CustomModel->get('testimonial', 'name');
        // echo '<pre>';
        // print_r($data);die;
        $this->load->view('admin/layout/header');
        $this->load->view('admin/testimonial', $data);
        $this->load->view('admin/layout/footer');
    }
    // function to show testimonial editview 
    function editTestimonial($id)
    {
        $tour_id = base64_decode($id);
        $data['testimonial'] = $this->CustomModel->selectAllFromWhere('testimonial', array('id' => $tour_id));
        // echo '<pre>';
        // print_r($data);die;
        $this->load->view('admin/layout/header');
        $this->load->view('admin/addTestimonial', $data);
        $this->load->view('admin/layout/footer');
    }
    // function to delete testimonial 
    function deleteTestimonial($id)
    {
        $tour_id = base64_decode($id);
        // print_r($_POST);
        // die;

        // $id = $_POST['t_id'];
        $data = $this->CustomModel->delete('testimonial', array('id' => $tour_id));
        if ($data != true) {
            $this->session->set_flashdata("success", "Deleted.");
            redirect(base_url('Admin/testimonial'));
        } else {
            $this->session->set_flashdata("error", "Error");
            redirect(base_url('Admin/testimonial'));
        }
    }


    // function to add testimonial view 
    function addtestimonial()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/addTestimonial');
        $this->load->view('admin/layout/footer');
    }
    // function  to insert  testinmonial data into database
    function testimonialPost()
    {
        // print_r($_FILES);
        // print_r($_POST);
        // die;
        if (!empty($_POST) && !empty($_FILES)) {

            $path = upload_img($_FILES);
            $data = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'description' => $this->input->post('description'),
                'image' => $path,
                'status' => $this->input->post('status')
            );
            $records = $this->CustomModel->insertInto('testimonial', $data);
            if (!empty($records)) {
                $this->session->set_flashdata('success', 'Testimonial added');
                redirect('Admin/testimonial');
            } else {
                $this->session->set_flashdata('error', 'error');
                redirect('Admin/testimonial');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid entry');
        }
    }
    // function  to update  testinmonial data into database
    function edittestimonialPost()
    {
        // print_r($_FILES);
        // print_r($_POST);
        // // die; 
        if (!empty($_POST) && !empty($_FILES)) {

            $path = upload_img($_FILES);
            $data = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'description' => $this->input->post('description'),
                'image' => $path,
                'status' => $this->input->post('status')
            );
            $tour_id = $this->input->post('id');
            $update_result = $this->CustomModel->update_table('testimonial', array('id' => $tour_id), $data);
            if ($update_result == true) {
                $this->session->set_flashdata('success', 'Update success');
                redirect(base_url('Admin/testimonial'));
            } else {
                $this->session->set_flashdata('error', 'error');
                redirect(base_url('Admin/testimonial'));
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid entry');
        }
    }

    // function to destroy session 
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin/index');
    }
}
