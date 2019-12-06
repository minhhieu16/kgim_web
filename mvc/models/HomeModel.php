<?php
class HomeModel extends DB
{
    public function Test()
    {
        $sql = "SELECT dr.Date,iss.IssueName, dr.MC, lv.Level, st.Status, s.ShiftName,dr.Start, dr.Finished, dr.Total ,emp.DisplayName, dr.Note, dr.Reason,dr.Solution FROM tbl_dailyreport dr 
            join tbl_issue iss on iss.ID_Issue=dr.ID_Issue
            join tbl_level lv on lv.ID_Level=dr.ID_Level
            join tbl_status st on st.ID_Status=dr.ID_Status
            join tbl_employee emp on emp.EmpID=dr.EmpID
            join tbl_shiftname s on s.ShiftID=dr.ShiftID
            ";
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
    public function Add_Issue(){
        $sql = "SELECT * FROM tbl_issue WHERE IsActive = 1 ORDER BY IssueName ASC";
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
    public function Add_Status(){
        $sql = "SELECT * FROM tbl_status";
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
    public function Add_Level(){
        $sql = "SELECT * FROM tbl_level";
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
    

}


?>