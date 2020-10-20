<?php
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
		$userid = $this->session->userdata('userid');
        $data['users'] = $this->User_model->get_user($userid);
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $a= $_FILES ['userfile']['name'];
            $b = explode(" ", $a);
            $filename = implode("_",$b);

            date_default_timezone_set('Asia/Kathmandu');
            $now = date('Y:m:d H:i:s');
            $params = array(
                'FullName' => $this->input->post('FullName'),
                'Email' => $this->input->post('Email'),
                'Password' => $this->input->post('Password'),
                'Photo' =>  $filename,
            );
			//var_dump($params);die;
            $config['upload_path']          = './images/userimages/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
			$this->upload->initialize($config);
            if ($this->upload->do_upload('userfile'))
            {
                $user_id = $this->User_model->add_user($params);
                $error =array('error' => "Registered Successfully" );
                $this->session->set_flashdata('msg',$error);
//                    $data['_view'] = 'user/add';
//                    $this->load->view('layouts/main',$data);
                redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('msg',$error);

                $data['_view'] = 'user/add';
                $this->load->view('layouts/main',$data);
            }


//            $user_id = $this->User_model->add_user($params);
//            $this->session->set_flashdata('msg',"Successfully");
//            $this->session->set_flashdata('msg_class','alert-success');
//            redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a user
     */
    function edit($UserId)
    {
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($UserId);

        if(isset($data['user']['UserId']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
                    'FullName' => $this->input->post('FullName'),
                    'Email' => $this->input->post('Email'),
                    'Password' => $this->input->post('Password'),
                );

                $this->User_model->update_user($UserId,$params);
                redirect('user/index');
            }
            else
            {
				
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    }

    /*
     * Deleting user
     */
    function remove($UserId)
    {
        $user = $this->User_model->get_user($UserId);

        // check if the user exists before trying to delete it
        if(isset($user['UserId']))
        {
            $this->User_model->delete_user($UserId);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }

}

