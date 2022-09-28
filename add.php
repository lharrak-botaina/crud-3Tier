<?php
 require_once './config.php';
 require_once './student.php';
 require_once './studentAccess.php';
 require_once './studentManager.php';

 $errorMessage = '';

if( isset($_POST['studentSubmitButton']) && $_POST['studentSubmitButton'] == 'Add Student' ) {

    $StudentBusniss = new StudentBLL();
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthday = $_POST['birthday'];

    $newStudent = new Student(0, $firstName, $lastName, $birthday, );
    $addStudentResult = $StudentBusniss->AddStudent($newStudent);

    if($addStudentResult > 0) {
        header("Location: edit.php?id=". $addStudentResult .'&action=add');
    } else {
        if ($StudentBusniss->errorMessage != '') {
            $errorMessage = $StudentBusniss->errorMessage;
        } else {
            $errorMessage = 'Record can\'t be added. Operation failed.';
        }
    }
}

$pageTitle = 'Add New Student';



?>
<div class="page-header">
    <h1>Add New Student</h1>
</div>

<?php if ($errorMessage != ''): ?>
    <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
<?php endif; ?>


    <form action="add.php" method="post" name="studentInfoForm" id="studentInfoForm" class="form-horizontal">
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



