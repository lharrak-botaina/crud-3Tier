<?php
 

include 'business/studentBusiness.php';
$errorMessage = '';

 $StudentBLL = new StudentBLL();
if( !empty($_POST) ) {

    $newStudent = new Student();
    $newStudent ->setFirstName($_POST['firstName']) ;
    $newStudent ->setLastName($_POST['lastName']) ;
    $newStudent ->setBirthday($_POST['birthday']) ;

   
    $addStudentResult = $StudentBLL->AddStudent($newStudent);
    header("Location: index.php");

    // if($addStudentResult > 0) {
    //     header("Location: edit.php?id=". $addStudentResult .'&action=add');
   
    // }
}




?>
<div class="page-header">
    <h1>Add New Student</h1>
</div>




    <form action="" method="post" name="studentInfoForm" id="studentInfoForm" class="form-horizontal">
        <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">firt name</label>
            <div class="col-sm-4">
                <input type="text" value="" name="firstName" id="firstName" class="form-control" placeholder="first Name" />
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-2 control-label">Roll</label>
            <div class="col-sm-4">
                <input type="text" value="" name="lastName" id="lastName" class="form-control" placeholder="last name" />
            </div>
        </div>
        <div class="form-group">
            <label for="birthday" class="col-sm-2 control-label">birthday</label>
            <div class="col-sm-4">
                <input type="date" value="" name="birthday" id="birthday" class="form-control" placeholder="birthday" />
            </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <input type="submit" name="studentSubmitButton" id="studentSubmitButton" value="Add Student" class="btn  btn-primary" />
            </div>
        </div>

    </form>



