<?php
 

 include 'business/studentBusiness.php';

 $StudentBLL = new StudentBLL();

 if(isset($_GET['id'])){
    $displayValue = $StudentBLL->EditStudent($_GET['id']);
} 

if( !empty($_POST) ) {

    $id=$_POST['id'];
    $firstName =$_POST["firstName"];
    $lastName =$_POST["lastName"];
    $birthday=$_POST["birthday"];
    
   
     $StudentBLL->UpdateStudent($id,$firstName,$lastName , $birthday);
    header("Location: index.php");

    // if($addStudentResult > 0) {
    //     header("Location: edit.php?id=". $addStudentResult .'&action=add');
   
    // }
}




?>
<div class="page-header">
    <h1>Add New Student</h1>
</div>




    <form action="" method="POST" name="studentInfoForm" id="studentInfoForm" class="form-horizontal">
    <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">id</label>
            <div class="col-sm-4">
                <input type="number" value=<?php echo $displayValue->getId()?> name="id" id="" class="form-control" placeholder="id" />
            </div>
        </div>
        <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">firt name</label>
            <div class="col-sm-4">
                <input type="text" value=<?php echo $displayValue->getFirstName()?> name="firstName" id="firstName" class="form-control" placeholder="first Name" />
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-2 control-label">last Name</label>
            <div class="col-sm-4">
                <input type="text" value=<?php echo $displayValue->getLastName()?> name="lastName" id="lastName" class="form-control" placeholder="last name" />
            </div>
        </div>
        <div class="form-group">
            <label for="birthday" class="col-sm-2 control-label">birthday</label>
            <div class="col-sm-4">
                <input type="date" <?php echo $displayValue->getBirthday()?> name="birthday" id="birthday" class="form-control" placeholder="birthday" />
            </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <input type="submit" name="studentSubmitButton" id="studentSubmitButton" value="update Student" class="btn  btn-primary" />
            </div>
        </div>

    </form>



