<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
        }

        
//Function :selectApi**************************************************
//it will be working as an api****************************************
         function selectApi($num=true,$id=4)
            {
            $this->load->model('SelectData');       
            $result=$this->SelectData->selectbyid($id);  /*JSON encoded result is returned*/ 
            //echo 'JSON =='.$result;
            // return $result;
             if($num==false)                          
                {   
                return $result;                     /*result is returned to selectView*/
                }
            }
//*********END OF Function selectApi()**********************
    
    
//Function :selectView()
//it will be used to load view files of CI
        public function selectView()
            {   
            $return= $this->selectApi(false,3);       /*api function is called*/                
            $data['result']=json_decode($return);   /*Data is decoded*/
            $this->load->view('form',$data);        
            }
//*********END OF Function selectView()**********************
}
?>