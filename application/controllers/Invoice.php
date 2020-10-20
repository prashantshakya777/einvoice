<?php
class Invoice extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Invoice_model');
		$this->load->model('GenricModel');
		$this->load->model('User_model');
    } 

    /*
     * Listing of invoice
     */
    function index()
    {
        //$data['invoice'] = $this->Invoice_model->get_all_invoice();
		$data['invoice']=$this->GenricModel->query('select distinct i.InvoiceId,i.BillNo,i.SupplierName,i.SupplierNumber,i.PurchaseDate,id.TAmount from invoice i join invoicedetail id on id.InvoiceId=i.InvoiceId');
		$userid = $this->session->userdata('userid');
        $data['users'] = $this->User_model->get_user($userid);
        $data['title']= 'e-Invoice';
		$data['_view'] = 'invoice/index';
        $this->load->view('layouts/main1',$data);
    }

    /*
     * Adding a new invoice
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
			'BillNo' => $this->input->post('BillNo'),
			'PurchaseDate' => $this->input->post('PurchaseDate'),
			'PurchaseDateBS' => $this->input->post('PurchaseDateBS'),
			'SupplierName' => $this->input->post('SupplierName'),
			'SupplierNumber' => $this->input->post('SupplierNumber'),
			'SupplierAddress' => $this->input->post('SupplierAddress'),
			'Description' => $this->input->post('Description'),
            );
            //var_dump($params);die;
            $invoice_id = $this->Invoice_model->add_invoice($params);
            $erowindex = count($this->input->post('itemdetail'));
			//var_dump($erowindex);die;
				for($i=0;$i<$erowindex;$i++){
				$paramsInvoice = array(
				'Item' => $this->input->post('Item['.$i.']'), 
				'Quantity' => $this->input->post('Quantity['.$i.']'), 
				'Price' => $this->input->post('Price['.$i.']'), 
				'Amount' => $this->input->post('Amount['.$i.']'),    
				'TAmount' => $this->input->post('TAmount'),    
				'InvoiceId' => $invoice_id ,	
				);
			
				//var_dump($param1);die;
				//var_dump($paramsInvoice);die;
					$bill =  $this->GenricModel->add('invoicedetail',$paramsInvoice);
					;
					
				}
			redirect('invoice/index');
        }
        else
        {   
		$userid = $this->session->userdata('userid');
        $data['users'] = $this->User_model->get_user($userid);	
        $data['_view'] = 'invoice/add';
        $this->load->view('layouts/main1',$data);
        }
    }  

    /*
     * Editing a invoice
     */
    function edit($InvoiceId)
    {   
        // check if the invoice exists before trying to edit it
        $data['invoice'] = $this->Invoice_model->get_invoice($InvoiceId);
        
        if(isset($data['invoice']['InvoiceId']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
				'BillNo' => $this->input->post('BillNo'),
				'PurchaseDate' => $this->input->post('PurchaseDate'),
				'PurchaseDateBS' => $this->input->post('PurchaseDateBS'),
				'SupplierName' => $this->input->post('SupplierName'),
				'SupplierNumber' => $this->input->post('SupplierNumber'),
				'SupplierAddress' => $this->input->post('SupplierAddress'),
				'Description' => $this->input->post('Description'),
				
            );
                $this->Invoice_model->update_invoice($InvoiceId,$params);            
                redirect('invoice/index');
            }
            else
            {
				 $userid = $this->session->userdata('userid');
				$data['users'] = $this->User_model->get_user($userid);
                $data['_view'] = 'invoice/edit';
                $this->load->view('layouts/main1',$data);
            }
        }
        else
            show_error('The invoice you are trying to edit does not exist.');
    } 


    /*
     * Editing a invoice
     */
    function detail($InvoiceId)
    {   
        // check if the invoice exists before trying to edit it
        $data['invoice'] = $this->Invoice_model->get_invoice($InvoiceId);
        $data['invoicedetail']=$this->GenricModel->singlequery('select distinct i.InvoiceId,i.BillNo,i.SupplierName,i.SupplierNumber,i.SupplierAddress,i.PurchaseDate,i.PurchaseDateBS,i.Description,id.TAmount,id.Item,id.Quantity,id.Price,id.Amount from invoice i join invoicedetail id on id.InvoiceId=i.InvoiceId where i.InvoiceId='.$InvoiceId);
		$data['item']=$this->GenricModel->query('select * from invoicedetail where InvoiceId='.$InvoiceId);
		
		//var_dump($data['item']);die;
        if(isset($data['invoice']['InvoiceId']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
				'BillNo' => $this->input->post('BillNo'),
				'PurchaseDate' => $this->input->post('PurchaseDate'),
				'PurchaseDateBS' => $this->input->post('PurchaseDateBS'),
				'SupplierName' => $this->input->post('SupplierName'),
				'SupplierNumber' => $this->input->post('SupplierNumber'),
				'SupplierAddress' => $this->input->post('SupplierAddress'),
				'Description' => $this->input->post('Description'),
				
            );
                $this->Invoice_model->update_invoice($InvoiceId,$params);            
                redirect('invoice/index');
            }
            else
            {
				 $userid = $this->session->userdata('userid');
				$data['users'] = $this->User_model->get_user($userid);
                $data['_view'] = 'invoice/detail';
                $this->load->view('layouts/main1',$data);
            }
        }
        else
            show_error('The invoice you are trying to edit does not exist.');
    } 


    /*
     * Deleting invoice
     */
    function remove($InvoiceId)
    {
        $invoice = $this->Invoice_model->get_invoice($InvoiceId);

        // check if the invoice exists before trying to delete it
        if(isset($invoice['InvoiceId']))
        {
            $this->Invoice_model->delete_invoice($InvoiceId);
            redirect('invoice/index');
        }
        else
            show_error('The invoice you are trying to delete does not exist.');
    }
    
}
