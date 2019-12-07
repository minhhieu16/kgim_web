<?php
class DailyReport extends Controller 
{
    public $checkUser;
    public function __construct ()
    {
        $this->checkUser = $this->SessionProcess();
        if(!$this->checkUser)
        {
            echo '<script language="javascript">location.href="./../index.php";</script>';
        }
    }
    public function index()
    {
        $rep = $this->model("HomeModel");
        
        if (isset($_POST['GamingDate'])) {
            $date = $_POST['GamingDate'];
        }else{
            $date = null;
        }
            $this->view("index",[
                "pages"=>"show",
                "date" => $date,
                "rep"=>$rep->getDate($date)
        ]);


        
    }
    public function addNew()
    {
        $add = $this->model("HomeModel");
        $this->view("index",[
            "pages"=>"addNew",
            "issue"=>$add->Add_Issue(),
            "status"=>$add->Add_Status(),
            "level"=>$add->Add_Level()]);

    }


}

?>