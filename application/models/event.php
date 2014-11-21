<?php
Class Event extends CI_Model
{
    
 function get_total_events()
 {
     return $this->db->count_all('events');
 }   
    
 function get_events()
 {
     $sql = "select e.*,u.first_name,u.last_name from events e 
                inner join users u on e.user_id=u.id
                 order by e.id desc" ;
     $query = $this->db->query($sql);
     $result = $query->result_array(); 
     $query->free_result();
     return $result;
 }     
    
 function get_event_detail($event_id)
 {
     $sql = "select u.first_name,u.last_name,e.* from events e 
            inner join users u on e.user_id=u.id 
            where e.id=$event_id" ;
     $query = $this->db->query($sql);
     $result = $query->result_array(); 
     $query->free_result();
     return $result[0];
 }     

 function get_event_users($event_id)
 {
    $sql = "select e.name,u.id as user_id,u.first_name,u.last_name from user_events ue 
            inner join users u on u.id=ue.user_id 
            inner join events e on e.id=ue.event_id 
            where event_id=$event_id";
    $query = $this->db->query($sql);
    $result = $query->result_array(); 
    $query->free_result();
    return $result;
 }
     
}
?>