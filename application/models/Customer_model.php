<?php
class Customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get customer by CustomerId
     */
    function get_customer($CustomerId)
    {
        return $this->db->get_where('customer',array('CustomerId'=>$CustomerId))->row_array();
    }
        
    /*
     * Get all customer
     */
    function get_all_customer()
    {
        $this->db->order_by('CustomerId', 'desc');
        return $this->db->get('customer')->result_array();
    }
        
    /*
     * function to add new customer
     */
    function add_customer($params)
    {
        $this->db->insert('customer',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update customer
     */
    function update_customer($CustomerId,$params)
    {
        $this->db->where('CustomerId',$CustomerId);
        return $this->db->update('customer',$params);
    }
    
    /*
     * function to delete customer
     */
    function delete_customer($CustomerId)
    {
        return $this->db->delete('customer',array('CustomerId'=>$CustomerId));
    }
}
