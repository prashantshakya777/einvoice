<?php
 
class Invoice_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get invoice by InvoiceId
     */
    function get_invoice($InvoiceId)
    {
        return $this->db->get_where('invoice',array('InvoiceId'=>$InvoiceId))->row_array();
    }
        
    /*
     * Get all invoice
     */
    function get_all_invoice()
    {
        $this->db->order_by('InvoiceId', 'asc');
        return $this->db->get('invoice')->result_array();
    }
        
    /*
     * function to add new invoice
     */
    function add_invoice($params)
    {
        $this->db->insert('invoice',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update invoice
     */
    function update_invoice($InvoiceId,$params)
    {
        $this->db->where('InvoiceId',$InvoiceId);
        return $this->db->update('invoice',$params);
    }
    
    /*
     * function to delete invoice
     */
    function delete_invoice($InvoiceId)
    {
        return $this->db->delete('invoice',array('InvoiceId'=>$InvoiceId));
    }
}
