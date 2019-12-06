<?php
    if(!isset($_SESSION['ID']))
    {   
        #header('location: Login/IndexLogin');
        echo '<script language="javascript">location.href="./../index.php";</script>';
    }
    else
    {
        #echo '<script language="javascript">location.href="index";</script>';
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daily Report - Vegas</title>
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../public/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../public/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../public/vendor/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../public/vendor/datatables/css/buttons.dataTables.min.css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">KGIM</a>
            </div>
            <!-- /.navbar-header -->

            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> VENUES<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Vegas Club</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php
                include 'pages/'.$data["pages"].'.php';
            ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php
        include 'pages/model.php';
    ?>
    <!-- jQuery -->
    <script src="../public/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../public/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../public/vendor/raphael/raphael.min.js"></script>
    <script src="../public/vendor/morrisjs/morris.min.js"></script>
    <script src="../public/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../public/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../public/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../public/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../public/vendor/datatables/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="../public/vendor/datatables/js/pdfmake.min.js"></script>
    <script type="text/javascript" src="../public/vendor/datatables/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../public/vendor/datatables/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
</body>

</html>
