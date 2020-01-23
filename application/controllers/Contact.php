<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    // public function sendMail()
    // {


    //     $mail_body = ;

    //     //; $this->input->post('message');
    //     //defining config to send email 

    //     $config = array(
    //         'protocol' => 'smtp',
    //         'smtp_host' => SMTP_HOST,
    //         'smtp_port' => SMTP_PORT,
    //         'smtp_user' => SMTP_EMAIL_FROM,
    //         'smtp_pass' => SMTP_EMAIL_PASS,
    //         'mailtype'  => 'html',
    //         'charset'   => 'iso-8859-1',
    //         'wordwrap' => true
    //     );

    // $CI->load->library('email', $config);
    // $CI->email->set_newline("\r\n");
    // $CI->email->initialize($config);

    // $CI->email->from($config["smtp_user"], 'noreply@travel.com');

    // $CI->email->to($to);
    // // $CI->email->cc($cc);
    // $CI->email->subject($subject);
    // $CI->email->message($mail_body);
    // $message = "TO= " . $to;
    // // $message .= "<br/>CC= " . $cc;
    // $message .= "<br/>FROM= " . $config['smtp_user'];
    // // $message .= "<br/>SUBJECT= " . $subject;
    // // $message .= "<br/>MESSAGE= " . $mail_body;
    // if ($CI->email->send()) {
    //             //insert_log("Email", "", "", "", $message);
    //             echo "sent";
    //             // return true;
    //         } else {
    //             echo $CI->email->print_debugger();
    //             // insert_log("Email ERROR", "", "", "", $CI->email->print_debugger());
    //             // return false;
    //         }
    //     }
    // }

    function sentmail()
    {
        $CI = &get_instance();

        // $email = base64_decode($email); 

        if (isset($_POST)) {
            $to = "nilesh.gautam@gennextit.com";
            $subject = 'Responces from Website' . $this->input->post('subject');
            $from = $this->input->post('email');
            $msg = $this->input->post('message');
            $name = $this->input->post('fname') . " " . $this->input->post('lname');
            $mail_body = "<p><b>Name:</b></p>" . $name . "<br/>" . "from:" . $from . "<br>" . "Subject:" . " $subject ". "<p>" . "$msg" . "</p>";

            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'subject' => $this->input->post('subject'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
            );
            $result = $this->CustomModel->insertInto('leads', $data);

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => SMTP_HOST,
                'smtp_port' => SMTP_PORT,
                'smtp_user' => SMTP_EMAIL_FROM,
                'smtp_pass' => SMTP_EMAIL_PASS,
                'mailtype'  => 'html',
                'charset'   => 'iso-8859-1'
            );
            $CI->load->library('email', $config);
            $CI->email->set_newline("\r\n");
            $CI->email->initialize($config);

            $CI->email->from($config["smtp_user"], 'Website Responce');
            $CI->email->to($to);
            // $CI->email->cc($cc);
            $CI->email->subject($subject);
            $CI->email->message($mail_body);
            $message = "TO= " . $to;
            // $message .= "<br/>CC= " . $cc;
            $message .= "<br/>FROM= " . $config['smtp_user'];
            $message .= "<br/>SUBJECT= " . $subject;
            $message .= "<br/>MESSAGE= " . $mail_body;
            if ($CI->email->send()) {
                //insert_log("Email", "", "", "", $message);
                echo "sent";
                redirect('Travel/contact');
                // return true;
            } else {
                echo $CI->email->print_debugger();
                echo "Fail";
                // insert_log("Email ERROR", "", "", "", $CI->email->print_debugger());
                // return false;
            }
        }
    }

    
}
