<?php
class Product_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get product by ProductId
     */
    function get_product($ProductId)
    {
        return $this->db->get_where('product',array('ProductId'=>$ProductId))->row_array();
    }
        
    /*
     * Get all product
     */
    function get_all_product()
    {
        $this->db->order_by('ProductId', 'asc');
        return $this->db->get('product')->result_array();
    }
        
    /*
     * function to add new product
     */
    function add_product($params)
    {
        $this->db->insert('product',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update product
     */
    function update_product($ProductId,$params)
    {
        $this->db->where('ProductId',$ProductId);
        return $this->db->update('product',$params);
    }
    
    /*
     * function to delete product
     */
    function delete_product($ProductId)
    {
        return $this->db->delete('product',array('ProductId'=>$ProductId));
    }
}
