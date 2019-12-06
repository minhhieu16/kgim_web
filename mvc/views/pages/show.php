<div class="row">
    <div class="col-lg-12">

        <h3 class="page-header">
            <span>
                <a href="addNew"><button type="button"  class="btn btn-primary">
                Add New
                </button></a>
            </span>
            Vegas Caravelle Report - <span style="color: red"><?php echo $_SESSION['display_name']; ?></span></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
              
<div class="row">
    <div  class="col-lg-12 table-responsive">
        <table id="example" class="display nowrap table" cellpadding="0" width="100%">
            <thead>
                <tr>
                   <td>No</td>
                   <td>Date</td>
                   <td>List of Iusses</td>
                   <td>MC#</td>
                   <td>Level</td>
                   <td>Status</td>
                   <td>Shift</td>
                   <td>Start</td>
                   <td>Finish</td>
                   <td>Total</td>
                   <td>In charge</td>
                   <td>Note</td>
                   <td>Reason</td>
                   <td>Solution</td>
                   <td>Edit</td>
                </tr>
            </thead>
            <tbody>
                
                
                <?php
                    $dataD = json_decode($data["rep"]);
                    $i = 1;
                    foreach ($dataD as $data) {
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".date('d/m/y',strtotime($data->Date))."</td>";
                        echo "<td>".$data->IssueName."</td>";
                        echo "<td>".$data->MC."</td>";
                        echo "<td>".$data->Level."</td>";
                        echo "<td>".$data->Status."</td>";
                        echo "<td>".$data->ShiftName."</td>";
                        echo "<td>".$data->Start."</td>";
                        echo "<td>".$data->Finished."</td>";
                        echo "<td>".$data->Total."</td>";
                        echo "<td>".$data->DisplayName."</td>";
                        echo "<td>".$data->Note."</td>";
                        echo "<td>".$data->Reason."</td>";
                        echo "<td>".$data->Solution."</td>";
                        echo '<td><a class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>';
                        echo "</tr>";
                        $i++;

                    } 
                ?>
            </tbody>
        </table>
    </div>
    
</div>
<!-- /.row -->
