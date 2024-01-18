<?php  

class bulkMail extends controller
{
	
	  public function index()
    {
        
	
        $this->render("bulkMail/index",);
       
    }
	
    public function sendBulkMail()
    {
        
		$data = $this->model("bulkMailModel")->data();
        $this->render("bulkMail/sendBulkMail",["data" => $data]);
        
    }
	
	
 

   


}