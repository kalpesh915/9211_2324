<?php
require_once("commons/session.php");
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
                        <h1 class="h3 mb-0 text-gray-800">Add New Slider Image</h1>
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
                                    <?php
                                    if (isset($_SESSION["msg"])) {
                                        echo $_SESSION["msg"];
                                        unset($_SESSION["msg"]);
                                    }
                                    ?>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                        <div class="my-3">
                                            <label for="slidertitle">Enter Slider Title</label>
                                            <input type="text" name="slidertitle" id="slidertitle" class="form-control" required autofocus>
                                        </div>
                                        <div class="my-3">
                                            <label for="slidertext">Enter Slider Text</label>
                                            <textarea name="slidertext" id="slidertext" class="form-control" required style="resize: none;"></textarea>
                                        </div>
                                        <div class="my-3">
                                            <label for="sliderimage">Select Slider Image</label>
                                            <input type="file" name="file1" id="file1" class="form-control" required accept=".jpg, .png, .svg">
                                        </div>

                                        <div class="my-3">
                                            <input type="submit" value="Add New Slider" class="btn btn-primary" name="addProcess">
                                            <input type="reset" value="Reset" class="btn btn-danger">
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
    if(isset($_POST["addProcess"])){
        require_once("classes/Slider.class.php");

        $slidertitle = $slider->filterData($_POST["slidertitle"]);
        $slidertext = $slider->filterData($_POST["slidertext"]);
        $file1 = $_FILES["file1"];

        $name = $file1["name"];
        $type = $file1["type"];
        $source = $file1["tmp_name"];
        $time = date("dmYhisa");
        $random = rand(9999, 99999);
        $destination = "img/sliderimages/$time $random $name";

        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg"];

        if(in_array($type, $validTypes)){
            $slider->addNewSlider($slidertitle, $slidertext, $destination);
            move_uploaded_file($source, $destination);
            $slider->logWriter($email, "$name New Slider Added in Database ");
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success ! </strong>  New Slider Uploaded
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Error ! </strong>  Must Select Valid Image file Only
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
        }

        header("location:addslider.php");
    }
?>