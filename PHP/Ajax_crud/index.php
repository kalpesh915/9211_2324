<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Crud with Ajax</title>
    <?php
    require_once("cdn.php");
    require_once("Students.class.php");
    ?>
</head>

<body>
    <!-- Add Student Modal -->
    <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="saveStudent">
                    <div class="modal-body">
                        <div id="errorMessage" class="alert alert-danger d-none"></div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" required>
                            <label for="fname">Enter First Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" required>
                            <label for="lname">Enter Last Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter City" required>
                            <label for="city">Enter City</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                            <label for="email">Enter Email Address</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" required pattern="\d{10,15}">
                            <label for="phone">Enter Phone Number</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="gender" id="gender" required>
                                <option>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label for="gender">Select Gender</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Student</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Edit Student Modal -->
    <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateStudent">
                    <div class="modal-body">
                        <div id="errorMessage" class="alert alert-danger d-none"></div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="id" id="edit_id" class="form-control" placeholder="Enter Student ID" readonly>
                            <label for="edit_id">Enter Student ID</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="fname" id="edit_fname" class="form-control" placeholder="Enter First Name" required>
                            <label for="edit_fname">Enter First Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="lname" id="edit_lname" class="form-control" placeholder="Enter Last Name" required>
                            <label for="edit_lname">Enter Last Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="city" id="edit_city" class="form-control" placeholder="Enter City" required>
                            <label for="edit_city">Enter City</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" name="email" id="edit_email" class="form-control" placeholder="Enter Email Address" required>
                            <label for="edit_email">Enter Email Address</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" name="phone" id="edit_phone" class="form-control" placeholder="Enter Phone Number" required pattern="\d{10,15}">
                            <label for="edit_phone">Enter Phone Number</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="gender" id="edit_gender" required>
                                <option>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label for="edit_gender">Select Gender</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- View Student Modal -->
    <div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateStudent">
                    <div class="modal-body">
                        <div id="errorMessageupdate" class="alert alert-danger d-none"></div>
                        <div class="mb-3 form-floating">
                            <input type="text" id="view_fname" class="form-control" placeholder="Enter First Name" readonly>
                            <label for="view_fname">Enter First Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" id="view_lname" class="form-control" placeholder="Enter Last Name" readonly>
                            <label for="view_lname">Enter Last Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" id="view_city" class="form-control" placeholder="Enter City" readonly>
                            <label for="view_city">Enter City</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" id="view_email" class="form-control" placeholder="Enter Email Address" readonly>
                            <label for="view_email">Enter Email Address</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" id="view_phone" class="form-control" placeholder="Enter Phone Number" readonly>
                            <label for="view_phone">Enter Phone Number</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" id="view_gender" class="form-control" placeholder="Selected Gender" readonly>
                            <label for="view_gender">Selected Gender is</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>PHP Ajax CRUD without page reload using Bootstrap Modal
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal">
                                Add Student
                            </button>
                        </h4>
                    </div>

                    <div class="card-body table-responsive">
                        <table id="myTable" class="table table-hover table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $result = $students->getAllStudents();

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                                <td>$row[fname]</td>
                                                <td>$row[lname]</td>
                                                <td>$row[city]</td>
                                                <td>$row[email]</td>
                                                <td>$row[phone]</td>
                                                <td>$row[gender]</td>
                                                <td>
                                                    <button type='button' class='btn btn-primary viewBtn' value='$row[id]'><i class='fa fa-eye'></i></button>

                                                    <button type='button' class='btn btn-dark editBtn' value='$row[id]'><i class='fa fa-pen'></i></button>

                                                    <button type='button' class='btn btn-danger deleteBtn' value='$row[id]'><i class='fa fa-trash'></i></button>
                                                </td>
                                            </tr>";
                                    }
                                } else {
                                    echo "<tr>
                                            <th colspan='7'>No Student Found in Database</th>
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
</body>

</html>

<script>
    /*
            JQuery code for AJAX Operations
    */

    // add new student code
    $(document).on('submit', '#saveStudent', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        formData.append("save_student", true);

        //console.log(formData);

        $.ajax({
            type : "POST",
            url : "crudAPI.php",
            data : formData,
            processData: false,
            contentType: false,
            success : function(response){
                response = jQuery.parseJSON(response);

                if(response.status === 422){
                    $('#errorMessage').removeClass('d-none');
                    $('#errorMessage').text(response.message);
                }else if(response.status === 200){
                    $('#errorMessage').addClass('d-none');
                    $('#studentAddModal').modal('hide');
                    $('#saveStudent')[0].reset();

                    alertify.set('notifier','position', 'top-right');
                    alertify.success(response.message);

                    $('#myTable').load(location.href + " #myTable");
                }else if(response.status === 500){
                    alert(response.message);
                }
            }
        });
    });

    // view data code
    $(document).on('click', '.viewBtn', function(){
        const id = $(this).val();
        //alert("ID is "+id);

        $.ajax({
            method : "GET",
            url : "crudAPI.php?id="+id,
            success : function(res){
                const response = jQuery.parseJSON(res);

                if(response.status == 200){
                    $("#view_fname").val(response.data.fname);
                    $("#view_lname").val(response.data.lname);
                    $("#view_city").val(response.data.city);
                    $("#view_email").val(response.data.email);
                    $("#view_phone").val(response.data.phone);
                    $("#view_gender").val(response.data.gender);
                    $('#studentViewModal').modal('show'); 
                }else if(response.status == 404){
                    alert(response.message);
                }
            }
        });
    });

    // get data for edit
    $(document).on('click', '.editBtn', function(){
        const id = $(this).val();
        //alert("ID is "+id);

        $.ajax({
            method : "GET",
            url : "crudAPI.php?id="+id,
            success : function(res){
                const response = jQuery.parseJSON(res);

                if(response.status == 200){
                    $("#edit_id").val(response.data.id);
                    $("#edit_fname").val(response.data.fname);
                    $("#edit_lname").val(response.data.lname);
                    $("#edit_city").val(response.data.city);
                    $("#edit_email").val(response.data.email);
                    $("#edit_phone").val(response.data.phone);
                    $("#edit_gender").val(response.data.gender);
                    $('#studentEditModal').modal('show'); 
                }else if(response.status == 404){
                    alert(response.message);
                }
            }
        });
    });

    // update data code
    $(document).on('submit', "#updateStudent", function(e){
        e.preventDefault();
        let formData = new FormData(this);
        formData.append("update_student", true);
        //console.log(formData);

        $.ajax({
            method : "POST",
            url : "crudAPI.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (res){
                //alert("Called");
                //alert(res);
                const response = jQuery.parseJSON(res);
                
                if(response.status == 422){
                    $('#errorMessageUpdate').removeClass('d-none');
                    $('#errorMessageUpdate').text(response.message);
                }else if(response.status == 200){
                    $('#errorMessageUpdate').addClass('d-none');
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(response.message);
                    $('#studentEditModal').modal('hide');
                    $('#updateStudent')[0].reset();
                    $('#myTable').load(location.href + " #myTable");
                }else if(response.status == 500){
                    alert(response.message);
                }
            } 
        });
    });

    // delete student code
    $(document).on('click', '.deleteBtn', function(e){
        e.preventDefault();
        const id = $(this).val();
        //alert(id);

        if(confirm("Are you sure to delete this data ?")){
            $.ajax({
                method : "POST",
                url : "crudAPI.php",
                data : {
                    "delete_student" : true,
                    "id" : id
                },
                success : function(res){
                    //alert(res);
                    const response = jQuery.parseJSON(res);

                    if(response.status == 200){
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(response.message);
                        $('#myTable').load(location.href + " #myTable");
                    }else if(response.status == 500){
                        alert(response.message);
                    }
                }
            });
        }
    })
</script>