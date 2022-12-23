<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Order extends CI_Model
    {
        
        /*
            DOCU: This function retrieve all stored orders.
            OWNER: Ron Garcia Santos
        */
        function fetch_all()
        {
            return $this->db->query('SELECT * FROM orders')->result_array();
        }

        /*
            DOCU: This function adds and stores a new orders.
            OWNER: Ron Garcia Santos
        */
        function create($new_order)
        {
            $query = 'INSERT INTO orders(orders.description, created_at, updated_at) VALUES(?, NOW(), NOW())';
            return $this->db->query($query, $new_order['description']);
        }

        /*
            DOCU: This function update stored orders.
            OWNER: Ron Garcia Santos
        */
        function update($update_order, $id)
        {
            $query = 'UPDATE orders SET description=?, updated_at=NOW() WHERE id=?';
            $values = array($update_order['description'], $id);
            return $this->db->query($query, $values);
        }

        /*
            DOCU: This funtion destroy stored orders.
            OWNER: Ron Garcia Santos
        */
        function destroy($id)
        {
            $query = 'DELETE FROM orders WHERE id=?';
            return $this->db->query($query, $id);
        }
    }
?>