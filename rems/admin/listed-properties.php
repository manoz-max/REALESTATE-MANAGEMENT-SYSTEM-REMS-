<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['remsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_GET['del']))
{
mysqli_query($con,"delete from tblproperty where ID = '".$_GET['id']."'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='listed-properties.php'</script>";
}

  ?>
<!doctype html>
<html lang="en">
 
<head>
   
    <title>Real Estate Managment System || Listed Properties</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
         <?php include_once('includes/header.php');?>
        
        <?php include_once('includes/sidebar.php');?>
       
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Listed Properties</h2>
                           
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Listed Properties</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Listed Properties</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                        <tr>
                                            <tr>
                  <th data-breakpoints="xs" style="color:gold;">S.NO</th>
            <th style="color:gold;">Property ID</th>
            <th style="color:gold;" >Property Title</th>
            <th style="color:gold;">Full Name</th>
   <th style="color:gold;">Mobile Number</th>
            
            <th style="color:gold;" >Listing Date</th>
            <th data-breakpoints="xs" style="color:gold;">Action</th>
                </tr>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php
$ret=mysqli_query($con,"select tbluser.FullName,tbluser.MobileNumber,tblproperty.PropertyID,tblproperty.PropertyTitle,tblproperty.ListingDate,tblproperty.ID from tblproperty left join tbluser on tbluser.ID=tblproperty.UserID");
$cnt=1;
while ($row=mysqli_fetch_array($ret)){

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
              <td><?php  echo $row['PropertyID'];?></td>
              <td><?php  echo $row['PropertyTitle'];?></td>
                  <td><?php  echo $row['FullName'];?></td>
                 <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['ListingDate'];?></td>
                  <td><a href="view-property-details.php?viewid=<?php echo $row['ID'];?>" class="btn btn-primary">View</a>

<a href="listed-properties.php?id=<?php echo $row['ID']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
                                        </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
               
               
                
                
            </div>
            <!-- ============================================================== -->
            <?php include_once('includes/footer.php');?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="../../../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
     <script src="assets/vendor/datatables/js/data-table.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</body>
 
</html>
<?php }  ?> 