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
     
}
?>