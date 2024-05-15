<?php
require_once("commons/session.php");
require_once("classes/Team.class.php");

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
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">Add / Manage Team</h1>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Add Team Member</h6>
                                    <button class="btn btn-primary" data-toggle="collapse" data-target="#addTeam">Add New</button>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!--  Code Here -->
                                    <?php
                                    if (isset($_SESSION["msg"])) {
                                        echo $_SESSION["msg"];
                                        unset($_SESSION["msg"]);
                                    }
                                    ?>
                                    <div id="addTeam" class="collapse">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="my-3">
                                                <label for="membername">Enter Team Member Name</label>
                                                <input type="text" name="membername" id="membername" class="form-control" required>
                                            </div>

                                            <div class="my-3">
                                                <label for="memberdesignation">Enter Member Designation</label>
                                                <input type="text" name="memberdesignation" id="memberdeisgnation" class="form-control" required>
                                            </div>

                                            <div class="my-3">
                                                <label for="mamberdescription">Enter Member Description</label>
                                                <input type="text" name="memberdescription" id="memberdescription" class="form-control" required>
                                            </div>

                                            <div class="my-3">
                                                <label for="teamtwitter">Enter URL of Twitter Profile</label>
                                                <input type="url" name="teamtwitter" id="teamtwitter" class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <label for="teamfacebook">Enter URL of Facebook Profile</label>
                                                <input type="url" name="teamfacebook" id="teamfacebook" class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <label for="teamlinkedin">Enter URL of Linkedin Profile</label>
                                                <input type="url" name="teamlinkedin" id="teamlinkedin" class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <label for="teaminstagram">Enter URL of Instagram Profile</label>
                                                <input type="url" name="teaminstagram" id="teaminstagram" class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <label for="teamgithub">Enter URL of Github Profile</label>
                                                <input type="url" name="teamgithub" id="teamgithub" class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <label for="teamyoutube">Enter URL of Youtube Profile</label>
                                                <input type="url" name="teamyoutube" id="teamyoutube" class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <label for="teamsnapchat">Enter URL of Snapchat Profile</label>
                                                <input type="url" name="teamsnapchat" id="teamsnapchat" class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <label for="teamtelegram">Enter URL of Telegram Profile</label>
                                                <input type="url" name="teamtelegram" id="teamtelegram" class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <label for="image1">Select Member Image</label>
                                                <input type="file" name="file1" id="file1" class="form-control" required accept=".jpg, .jpeg, .png, .svg, .gif">
                                            </div>

                                            <div class="my-3">
                                                <input type="submit" value="Add New Member" class="btn btn-primary" name="addProcess">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </div>

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Member Name</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Member Name</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $result = $team->getAllMembers();

                                                while ($row = $result->fetch_assoc()) {

                                                    if ($row["status"] == 1) {
                                                        $statusbtn = "<a href='team?teamid=$row[teamid]&status=0' class='btn btn-danger'>Disable</a>";
                                                    } else {
                                                        $statusbtn = "<a href='team?teamid=$row[teamid]&status=1' class='btn btn-success'>Enable</a>";
                                                    }

                                                    echo "<tr>
                                                            <td>$row[membername]</td>
                                                            <td>
                                                            <div class='text-center'>
                                                                <img src='$row[memberimage]' class='img rounded-circle' style='height:50px; width:50px;'>
                                                            </div>
                                                            </td>
                                                            <td>$statusbtn</td>
                                                            <td><a href='editteam?teamid=$row[teamid]' class='btn btn-primary'>Edit</a></td>
                                                        </tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>
</html>

<?php
if (isset($_POST["addProcess"])) {
    $membername = $team->filterData($_POST["membername"]);
    $memberdesignation = $team->filterData($_POST["memberdesignation"]);
    $memberdescription = $team->filterData($_POST["memberdescription"]);
    $teamtwitter = $team->filterData($_POST["teamtwitter"]);
    $teamfacebook = $team->filterData($_POST["teamfacebook"]);
    $teamlinkedin = $team->filterData($_POST["teamlinkedin"]);
    $teaminstagram = $team->filterData($_POST["teaminstagram"]);
    $teamgithub = $team->filterData($_POST["teamgithub"]);
    $teamyoutube = $team->filterData($_POST["teamyoutube"]);
    $teamsnapchat = $team->filterData($_POST["teamsnapchat"]);
    $teamtelegram = $team->filterData($_POST["teamtelegram"]);

    $file1 = $_FILES["file1"];

    $name = $file1["name"];
    $source = $file1["tmp_name"];
    $type = $file1["type"];
    $random = rand(9999,99999);
    $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/svg"];

    //echo $type;

    if(in_array($type, $validTypes)){
        $destination = "img/team/$random $membername $name";
        $team->addNewMember($membername, $memberdesignation, $memberdescription, $teamtwitter, $teamfacebook, $teamlinkedin, $teaminstagram, $teamgithub, $teamyoutube, $teamsnapchat, $teamtelegram, $destination);

        move_uploaded_file($source, $destination);

        $team->logWriter($email, "$membername Team Member Added in Database");

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Success ! </strong> $membername team Member Added in Database.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
    
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error ! </strong> Must Select Valid Image File Only
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";    
    }

    header("location:team");
}

// change FAQ Status

if (isset($_GET["status"])) {
    $teamid = $team->filterData($_GET["teamid"]);
    $status = $team->filterData($_GET["status"]);

    $team->changeMemberStatus($teamid, $status);
    header("location:team");
}
?>