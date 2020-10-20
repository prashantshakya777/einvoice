<?php
class Sale extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->model('GenricModel');
        $this->load->model('User_model');
		} 

    /*
     * Listing of sale
     */
    function index()
    {
        $data['customer'] = $this->Customer_model->get_all_customer();
         $userid = $this->session->userdata('userid');
        $data['users'] = $this->User_model->get_user($userid);
        $data['_view'] = 'sale/index';
        $this->load->view('layouts/main1',$data);
    }

    /*
     * Adding a new customer
     */
    function add($productid)
    {   
        $data['product']=$this->GenricModel->singlequery('select * from product where ProductId='.$productid);
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Company' => $this->input->post('Company'),
				'FullName' => $this->input->post('FullName'),
				'Phone' => $this->input->post('Phone'),
				'Address' => $this->input->post('Address'),
				'Email' => $this->input->post('Email'),
				'Comment' => $this->input->post('Comment'),
            );
            
            $customer_id = $this->Customer_model->add_customer($params);
            redirect('sale/index');
        }
        else
        {       
	$userid = $this->session->userdata('userid');
	      $data['users'] = $this->User_model->get_user($userid);
            $data['_view'] = 'sale/add';
            $this->load->view('layouts/main1',$data);
        }
    }  

    /*
     * Editing a customer
     */
    function edit($CustomerId)
    {   
        // check if the customer exists before trying to edit it
        $data['customer'] = $this->Customer_model->get_customer($CustomerId);
        
        if(isset($data['customer']['CustomerId']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Company' => $this->input->post('Company'),
					'FullName' => $this->input->post('FullName'),
					'Phone' => $this->input->post('Phone'),
					'Address' => $this->input->post('Address'),
					'Email' => $this->input->post('Email'),
					'Comment' => $this->input->post('Comment'),
                );

                $this->Customer_model->update_customer($CustomerId,$params);            
                redirect('customer/index');
            }
            else
            {
				$userid = $this->session->userdata('userid');
				$data['users'] = $this->User_model->get_user($userid);
                $data['_view'] = 'customer/edit';
                $this->load->view('layouts/main1',$data);
            }
        }
        else
            show_error('The customer you are trying to edit does not exist.');
    } 

    /*
     * Deleting customer
     */
    function remove($CustomerId)
    {
        $customer = $this->Customer_model->get_customer($CustomerId);

        // check if the customer exists before trying to delete it
        if(isset($customer['CustomerId']))
        {
            $this->Customer_model->delete_customer($CustomerId);
            redirect('customer/index');
        }
        else
            show_error('The customer you are trying to delete does not exist.');
    }
    
}
