<?php
class SelectData extends CI_Model {

        public function __construct()
        {
        
        }
//********Function:selectbyid()******************************
//It will select all the data of table1 and return it to api
    public function selectbyid($id)
        {
        $this->db->where('id',$id);
        $q=$this->db->get('table1');
        
        return json_encode($q->result()); /*result is encoded into JSON*/
        }   

//*********END OF Function selectbyid()**********************
}
?>