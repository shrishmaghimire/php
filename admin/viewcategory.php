<?php
include('inc_session.php');?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('inc_headsection.php');?>
    <link href="datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

     <?php include('inc_navbar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">

            <table class="table" id="myTable">
            <thead>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>status</td>
                 
                    
                </tr>
            </thead>

            <tfoot>
                <tr>
                   <td>id</td>
                    <td>name</td>
                    <td>status</td>
                  

                </tr>
            </tfoot>

            <tbody>
            <?php
            $stm="SELECT * FROM category";
            include('connection.php');
            $qry=mysqli_query($conn, $stm);
            $count=mysqli_num_rows($qry);
            if($count>=1)
            {
                while($row=mysqli_fetch_array($qry))
                {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['status']."</td>";
                    
                     echo "<td><a href =editdeletecategory.php?id=".$row['id']."&action=edit>EDIT</a>";
                      echo "<td><a href =editdeletecategory.php?id=".$row['id']."&action=delete>DELETE</a>";
                    echo "</tr>";
                }
            }
            else{
                echo "Soory no data found";
            }
            
            ?>
            </tbody>

            </table>
            </div>
               



            


            </div>
            <!-- /.row -->
      
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include('inc_footerscript.php');?>
    <script src="datatable/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>

</html>