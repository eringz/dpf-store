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

        /*
            DOCU: This function update stored orders.
            OWNER: Ron Garcia Santos
        */

        /*
            DOCU: This funtion destroy stored orders.
            OWNER: Ron Garcia Santos
        */
    }
?>