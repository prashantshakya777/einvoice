<?php
class Sale_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get sale by SaleId
     */
    function get_sale($SaleId)
    {
        return $this->db->get_where('sale',array('SaleId'=>$SaleId))->row_array();
    }
        
    /*
     * Get all sale
     */
    function get_all_sale()
    {
        $this->db->order_by('SaleId', 'asc');
        return $this->db->get('sale')->result_array();
    }
        
    /*
     * function to add new sale
     */
    function add_sale($params)
    {
        $this->db->insert('sale',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update sale
     */
    function update_sale($SaleId,$params)
    {
        $this->db->where('SaleId',$SaleId);
        return $this->db->update('sale',$params);
    }
    
    /*
     * function to delete sale
     */
    function delete_sale($SaleId)
    {
        return $this->db->delete('sale',array('SaleId'=>$SaleId));
    }
}
