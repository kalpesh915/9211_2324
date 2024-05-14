<?php
    require_once("commons/session.php");
    require_once("classes/Contactus.class.php");

    $result = $contactus->getContactDetails();

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
                        <h1 class="h3 mb-0 text-gray-800">Update Contact US</h1>
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
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                                    <div class="my-3">
                                        <label for="contactperson" class="form-label">Enter Contact Person Name</label>
                                        <input type="text" name="contactperson" id="contactperson" required class="form-control" value="<?php echo $contactperson; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="phone1" class="form-label">Enter Phone 1</label>
                                        <input type="text" name="phone1" id="phone1"  class="form-control" value="<?php echo $phone1; ?>" pattern="\d{10,15}">
                                    </div>
                                    <div class="my-3">
                                        <label for="phone2" class="form-label">Enter Phone 2</label>
                                        <input type="text" name="phone2" id="phone2"  class="form-control" value="<?php echo $phone2; ?>" pattern="\d{10,15}">
                                    </div>
                                    <div class="my-3">
                                        <label for="email1" class="form-label">Enter Email 1</label>
                                        <input type="email" name="email1" id="email1"  class="form-control" value="<?php echo $email1; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="email2" class="form-label">Enter Email 2  </label>
                                        <input type="email" name="email2" id="email2"  class="form-control" value="<?php echo $email2; ?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="whatsapp" class="form-label">Enter Whatsapp Number</label>
                                        <input type="text" name="whatsapp" id="whatsapp"  class="form-control" value="<?php echo $whatsapp; ?>" pattern="\d{10,15}">
                                    </div>
                                    <div class="my-3">
                                        <label for="address" class="form-label">Enter Address</label>
                                        <textarea name="address" id="address" required  class="form-control" style="resize: none;"><?php echo $address; ?></textarea>
                                    </div>
                                    <div class="my-3">
                                        <label for="googlemap" class="form-label">Enter Google Map URL</label> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewmap">View</button>
                                        <textarea name="googlemap" id="googlemap" required  class="form-control" style="resize: none;"><?php echo $googlemap; ?></textarea>
                                    </div>
                                    <div class="my-3">
                                        <input type="submit" value="Update" name="updateProcess" class="btn btn-primary">
                                        <input type="reset" value="Reset" class="btn btn-danger">
                                    </div>
                                    </form>

                                    <div class="my-3">
                                        <?php
                                            if(isset($_SESSION["msg"])){
                                                echo $_SESSION["msg"];
                                                unset($_SESSION["msg"]);
                                            }
                                        ?>
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

    <!-- Page level custom scripts -->
</body>
</html>

<!-- viewmap -->

<!-- The Modal -->
<div class="modal" id="viewmap">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Current Google Location</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <iframe src="<?= $googlemap; ?>" style="border:0; height: auto; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php
    if(isset($_POST["updateProcess"])){
        $contactperson = $users->filterData($_POST["contactperson"]);
        $phone1 = $users->filterData($_POST["phone1"]);
        $phone2 = $users->filterData($_POST["phone2"]);
        $email1 = $users->filterData($_POST["email1"]);
        $email2 = $users->filterData($_POST["email2"]);
        $whatsapp = $users->filterData($_POST["whatsapp"]);
        $address = $users->filterData($_POST["address"]);
        $googlemap = $users->filterData($_POST["googlemap"]);

        $contactus->updateContactus($contactperson, $phone1, $phone2, $email1, $email2, $whatsapp, $address, $googlemap);
        $contactus->logWriter($email, "Contact Details are Updated to $contactperson, $phone1, $phone2, $mail1, $email2, $whatsapp, $address, $googlemap");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Success ! </strong> Contact Details Updated
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button></div>";
        header("location:contactus.php");
    }
?>