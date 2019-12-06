<div class="row">
                <div class="col-lg-12">

                    <h3 class="page-header">
                        <span>
                            <button id="Add" type="button" class="btn btn-primary">
                            Add New
                            </button>
                        </span>
                        Vegas Caravelle Report - <span style="color: red"><?php echo $_SESSION['display_name']; ?></span></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div  class="col-lg-12">
                    <table id="example" class="display nowrap" cellpadding="0" width="100%">
                        <thead>
                            <tr>
                               <td>No</td>
                               <td>Date</td>
                               <td>List of Iusses</td>
                               <td>MC#</td>
                               <td>Level</td>
                               <td>Status</td>
                               <td>Start</td>
                               <td>Finish</td>
                               <td>Total</td>
                               <td>In charge</td>
                               <td>Note</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                                for ($i=1; $i <= 10; $i++) { 
                                    echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>10/11/19</td>
                                            <td>Top Monitor</td>
                                            <td>16</td>
                                            <td>Low</td>
                                            <td>Fixing</td>
                                            <td>13:20</td>
                                            <td>13:45</td>
                                            <td>0.25</td>
                                            <td>Mr. Thai</td>
                                            <td>More daily</td>
                                        </tr>';
                                }
                            ?>  
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12 bg-basic footer">
                    <p align="center" style="margin-top: 20px;">© 2019 KGIM</p>
                </div>
            </div>
            <!-- /.row -->