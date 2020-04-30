<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function get_sub_menu() 
    {
        $q = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
        FROM `user_sub_menu`
        JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";
        
        return $this->db->query($q)->result_array();
    }
}