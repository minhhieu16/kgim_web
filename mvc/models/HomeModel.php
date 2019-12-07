<?php
class HomeModel extends DB
{
    public function ShowReport()
    {
        $sql = "SELECT dr.ID_Report,dr.Date,iss.IssueName, dr.MC, lv.Level, st.Status, s.ShiftName,dr.Start, dr.Finished, dr.Total ,emp.DisplayName, dr.Note, dr.Reason,dr.Solution FROM tbl_dailyreport dr 
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
        $sql = "SELECT * FROM tbl_status WHERE IsActive = 1";
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
    public function Add_Shift(){
        $sql = "SELECT * FROM tbl_shiftname WHERE IsActive = 1";
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
    public function Add_Level(){
        $sql = "SELECT * FROM tbl_level WHERE IsActive = 1";
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
    public function getDate($date){
        if ($date != null) {
            $date = str_replace(" ","",$date);
            $s = explode("-",$date);
            $s1 = explode("/",$s[0]);
            $s2 = explode("/",$s[1]);
            $date1 = $s1['2'].'-'.$s1['1'].'-'.$s1['0'];
            $date2 = $s2['2'].'-'.$s2['1'].'-'.$s2['0'];
            $where = "WHERE dr.Date BETWEEN '".$date1." 00:00:00' AND '".$date2." 23:59:59'";
        }else{
            $where = '';
        }
        $sql = "SELECT dr.ID_Report,dr.EmpID,dr.Date,iss.IssueName, dr.MC, lv.Level, st.Status, s.ShiftName,dr.Start, dr.Finished, dr.Total ,emp.DisplayName, dr.Note, dr.Reason,dr.Solution FROM tbl_dailyreport dr 
            join tbl_issue iss on iss.ID_Issue=dr.ID_Issue
            join tbl_level lv on lv.ID_Level=dr.ID_Level
            join tbl_status st on st.ID_Status=dr.ID_Status
            join tbl_employee emp on emp.EmpID=dr.EmpID
            join tbl_shiftname s on s.ShiftID=dr.ShiftID
            ".$where;
        $arr = array();
        $row = mysqli_query($this->con,$sql);
        while($rows = mysqli_fetch_array($row))
        {
            $arr[]= $rows;
        }
        return json_encode($arr);
    }
    
    public function selectType($id)
    {
        $sql = "select Type from tbl_issue where ID_Issue = '$id' ";
        $res = mysqli_query($this->con, $sql);
        $arr = array();
        if(mysqli_num_rows($res)>0)
        {
            while($row = mysqli_fetch_assoc($res))
            {
                $arr[] = $row;
            }
        }
        return $arr;

    }

    public function addNewReportModel($data)
    {
        $sql = "insert into tbl_dailyreport values(null,CURRENT_TIMESTAMP,'".$data['issue']."',
        '".$data['mc']."','".$data['level']."','".$data['status']."','".$data['shift']."',
        '".$data['start']."','".$data['finish']."','".$data['issue']."',
        '".$_SESSION['ID']."','".$data['note']."','".$data['reason']."',
        '".$data['solution']."',1)";
        $result = mysqli_query($this->con,$sql);
        return $result;
        
    }

    public function checkEdit($id)
    {
        $sql = "select * from tbl_dailyreport where ID_Report = $id";
        $res = mysqli_query($this->con,$sql);
        $arr = array();
        if(mysqli_num_rows($res)>0)
        {
            while($row=  mysqli_fetch_assoc($res))
            {
                $arr[] = $row;
                
                
            }
            
        }
        return json_encode($arr);
    }

    public function getName($idUser)
    {
        $sql = "select DisplayName from tbl_employee where EmpID = $idUser";
        $res = mysqli_query($this->con,$sql);
        $arr = array();
        if(mysqli_num_rows($res)>0)
        {
            while($row=  mysqli_fetch_assoc($res))
            {
                $arr[] = $row;
                
                
            }
            
        }
        return $arr;
    }

    public function EditReportModel($data)
    {
        

        $sql ="UPDATE tbl_dailyreport 
        SET ID_Issue = '".$data['issue']."' ,  MC = '".$data['mc']."',
            ID_Level = '".$data['level']."' ,  ID_Status = '".$data['status']."',
            ShiftID = '".$data['shift']."' ,  Start = '".$data['start']."',
            Finished = '".$data['finish']."' ,  Total = '".$data['total']."',
            Note = '".$data['note']."' ,  Reason = '".$data['reason']."',
            Solution = '".$data['solution']."'
        WHERE ID_Report = '".$data['idReport']."'";
        $result = mysqli_query($this->con,$sql);
        return $result;
    }
}


?>