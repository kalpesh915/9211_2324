<?php
require_once("Students.class.php");

if (isset($_POST["save_student"])) {
    $fname = $students->filterData($_POST["fname"]);
    $lname = $students->filterData($_POST["lname"]);
    $city = $students->filterData($_POST["city"]);
    $email = $students->filterData($_POST["email"]);
    $phone = $students->filterData($_POST["phone"]);
    $gender = $students->filterData($_POST["gender"]);

    if ($fname == NULL || $lname == NULL || $city == NULL || $email == NULL || $phone == NULL || $gender == NULL) {
        $response = [
            "status" => 422,
            "message" => "Please fillout All the Fields"
        ];
    } else {
        $id = 0;

        $id = $students->createNewStudent($fname, $lname, $city, $email, $phone, $gender);

        if ($id === false) {
            $response = [
                "status" => 422,
                "message" => "$email username is already exist in Database"
            ];
        } else if ($id == 0) {
            $response = [
                "status" => 500,
                "message" => "Error while creating new Student"
            ];
        }else{
            $response = [
                "status" => 200,
                "message" => "$email username created in Database"
            ];
        }
    }

    echo json_encode($response);
    return;
}

// code for get student data
if(isset($_GET["id"])){
    $id = $students->filterData($_GET["id"]);
    $result = $students->getStudentData($id);

    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        $response = [
            "status" => 200,
            "message" => "Student Data Found on $id ID",
            "data" => $data
        ];
    }else{
        $response = [
            "status" => 404,
            "message" => "Student Data Not Found on $id ID"
        ];
    }

    echo json_encode($response);
    return;
}

// code for edit\update Student

if(isset($_POST["update_student"])){
    $id = $students->filterData($_POST["id"]);
    $fname = $students->filterData($_POST["fname"]);
    $lname = $students->filterData($_POST["lname"]);
    $city = $students->filterData($_POST["city"]);
    $email = $students->filterData($_POST["email"]);
    $phone = $students->filterData($_POST["phone"]);
    $gender = $students->filterData($_POST["gender"]);

    if ($fname == NULL || $lname == NULL || $city == NULL || $email == NULL || $phone == NULL || $gender == NULL) {
        $response = [
            "status" => 422,
            "message" => "Please fillout All the Fields"
        ];
    }else{
     
        $count = $students->updateStudent($id, $fname, $lname, $city, $email, $phone, $gender);
        
        if($count >= 1){
            $response = [
                "status" => 200,
                "message" => "Student Data Updated"
            ];  
        }else{
            $response = [
                "status" => 500,
                "message" => "No Data Updated"
            ];
        }   
    }

    echo json_encode($response);
    return;
}

if(isset($_POST["delete_student"])){
    $id = $students->filterData($_POST["id"]);
    
    $count = $students->deleteStudent($id);

    if($count >= 1){
        $response = [
            "status" => 200,
            "message" => "Data Deleted with $id ID"   
        ];
    }else{
        $response = [
            "status" => 404,
            "message" => "No Data Found with $id ID"   
        ];
    }

    echo json_encode($response);
    return;
}
