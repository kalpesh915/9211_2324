<?php
    require_once("commons/session.php");
    require_once("classes/Social.class.php");

    $result = $social->getSocialDetails();

    while($row = $result->fetch_assoc()){
        extract($row);
    }
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
                        <h1 class="h3 mb-0 text-gray-800">Update Social Media Links</h1>
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
                                    <div class="my-3">
                                        <?php
                                            if(isset($_SESSION["msg"])){
                                                echo $_SESSION["msg"];
                                                unset($_SESSION["msg"]);
                                            }
                                        ?>
                                    </div>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                                    <div class="my-3">
                                        <label for="facebook" class="form-label">Enter Facebook Link</label>
                                        <input type="url" name="facebook" id="facebook" class="form-control" value="<?php echo $facebook; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="twitter" class="form-label">Enter Twitter Link</label>
                                        <input type="url" name="twitter" id="twitter" class="form-control" value="<?php echo $twitter; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="youtube" class="form-label">Enter Youtube Link</label>
                                        <input type="url" name="youtube" id="youtube" class="form-control" value="<?php echo $youtube; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="linkedin" class="form-label">Enter Linkedin Link</label>
                                        <input type="url" name="linkedin" id="linkedin" class="form-control" value="<?php echo $linkedin; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="github" class="form-label">Enter Github Link</label>
                                        <input type="url" name="github" id="github" class="form-control" value="<?php echo $github; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="telegram" class="form-label">Enter Telegram Link</label>
                                        <input type="url" name="telegram" id="telegram" class="form-control" value="<?php echo $telegram; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="snapchat" class="form-label">Enter Snapchat Link</label>
                                        <input type="url" name="snapchat" id="snapchat" class="form-control" value="<?php echo $snapchat; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="instagram" class="form-label">Enter Instagram Link</label>
                                        <input type="url" name="instagram" id="instagram" class="form-control" value="<?php echo $instagram; ?>">
                                    </div>
                                    
                                    <div class="my-3">
                                        <input type="submit" value="Update" name="updateProcess" class="btn btn-primary">
                                        <input type="reset" value="Reset" class="btn btn-danger">
                                    </div>
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

<?php
    if(isset($_POST["updateProcess"])){
        $facebook = $users->filterData($_POST["facebook"]);
        $twitter = $users->filterData($_POST["twitter"]);
        $youtube = $users->filterData($_POST["youtube"]);
        $linkedin = $users->filterData($_POST["linkedin"]);
        $github = $users->filterData($_POST["github"]);
        $telegram = $users->filterData($_POST["telegram"]);
        $snapchat = $users->filterData($_POST["snapchat"]);
        $instagram = $users->filterData($_POST["instagram"]);

        $social->updateSocialMedia($facebook, $twitter, $youtube, $linkedin, $github, $telegram, $snapchat, $instagram);
        $social->logWriter($email, "Social Media Links are Updated with : $facebook, $twitter, $youtube, $linkedin, $github, $telegram, $snapchat, $instagram");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Success ! </strong> Social Media Details Updated
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button></div>";
        header("location:social.php");
    }
?>