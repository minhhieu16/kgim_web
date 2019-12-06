<?php
class DailyReport extends Controller 
{
    public function index()
    {
        $this->view("index",[
            "pages"=>"show"
        ]);
    }
    
}

?>