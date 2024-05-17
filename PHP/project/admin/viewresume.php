<?php
    require_once("commons/session.php");
    require_once("classes/Career.class.php");

    $careerid = $career->filterData($_GET["careerid"]);

    $result = $career->getApplication($careerid);

    while($row = $result->fetch_assoc()){
        extract($row);
    }

    $career->updateApplicationStatus($careerid);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    require_once("commons/meta.php");
    require_once("commons/title.php");
    ?>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php require_once("commons/sidebar.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require_once("commons/topbar.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">View Job Application</h1>
                        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="history.back();"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</button>
                    </div>

                    <?php
                    //require_once("commons/datacount.php");
                    ?>

                    <div class="row">

                    
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!--  Code Here -->
                                    <table class="table table-hover table-striped">
                                        <tr>
                                            <th>First Name</th>
                                            <td><?= $fname;?></td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td><?= $lname;?></td>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <td><?= $gender;?></td>
                                        </tr>
                                        <tr>
                                            <th>Date of Birth</th>
                                            <td><?= $dateofbirth;?></td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td><?= $phone;?></td>
                                        </tr>
                                        <tr>
                                            <th>Email Address</th>
                                            <td><?= $emailaddress;?></td>
                                        </tr>
                                        <tr>
                                            <th>Job Type</th>
                                            <td><?= $jobtype;?></td>
                                        </tr>
                                        <tr>
                                            <th>Qualification</th>
                                            <td><?= $qualification;?></td>
                                        </tr>
                                        <tr>
                                            <th>Experience</th>
                                            <td><?= $experience;?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">
                                                <object style="width: 100%; height: 500px;" data="<?= $resumepath;?>"></object>
                                            </th>
                                        </tr>
                                    </table>

                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?delete=1&careerid=$careerid"?>" method="post" id="deleteForm">
                                        <input type="button" value="Delete This Job Application" class="btn btn-danger" onclick="confirmDelete()">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
           <?php require_once("commons/footer.php"); ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level custom scripts -->
</body>
</html>

<script>
    function confirmDelete(){
        if(confirm("Are you sure to Delete this job Application?")){
            document.getElementById("deleteForm").submit();
        }
    }
</script>

<?php
    if(isset($_GET["delete"])){
        $careerid = $career->filterData($_GET["careerid"]);
        $career->deleteJobApplication($careerid);

        header("location:alljobapplications");
    }
?>