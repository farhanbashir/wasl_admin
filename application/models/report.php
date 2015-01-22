<?php
Class Report extends CI_Model
{

 function get_reports()
 {
     $sql = "select e.name,u.first_name,u.last_name,r.* from reports r 
            inner join users u on r.user_id=u.id 
            inner join events e on r.event_id=e.id 
            order by r.report_id" ;
     $query = $this->db->query($sql);
     $result = $query->result_array();
     $query->free_result();
     return $result;
 }

 // function get_event_detail($event_id)
 // {
 //     $sql = "select u.first_name,u.last_name,u.is_admin,e.* from events e
 //            inner join users u on e.user_id=u.id
 //            where e.id=$event_id" ;
 //     $query = $this->db->query($sql);
 //     $result = $query->result_array();
 //     $query->free_result();
 //     return $result[0];
 // }

 function get_latest_five_reports()
 {
    $sql = "select * from reports order by report_id desc limit 5";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    $query->free_result();
    return $result;
 }
 
}
?>