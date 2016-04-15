<?php
/**
 * Created by PhpStorm.
 * User: lalo
 * Date: 11/04/16
 * Time: 1:08 PM
 */
class User extends CI_Model
{
    function get_users()
    {
        return $this->db->get('user');
    }

    function get_user_details($user_id)
    {
        $where['id'] = $user_id;
        return $this->db->get_where('user', $where);
    }
}