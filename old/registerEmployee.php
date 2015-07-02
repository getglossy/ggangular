<?php
include "inc/EmployeeClass.php";

if( !(isset( $_POST['register'] ) ) )
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Register Employee</title>
</head>

<body>

<form method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>
            <label for="employeeName">Employee Name</label>
        </td>
        <td>
            <input name="employeeName" id="employeeName" type="text">
        </td>
    </tr>

    <tr>
        <td>
            <label for="employeeFaceHidden">Employee Face Hidden Picture</label>
        </td>
        <td>
            <input name="employeeFaceHidden" id="employeeFaceHidden" type="file">
        </td>
    </tr>

    <tr>
        <td>
            <label for="employeeFaceShown">Employee Face Shown Picture</label>
        </td>
        <td>
            <input name="employeeFaceShown" id="employeeFaceShown" type="file">
        </td>
    </tr>

    <tr>
        <td>
            <label for="employeeProfileSnapShot">Employee Profile Snapshot</label>
        </td>
        <td>
            <input name="employeeProfileSnapShot" id="employeeProfileSnapShot" type="file">
        </td>
    </tr>

    <tr>
        <td>
            <input type="submit" value="Submit Employee" name="register" >
        </td>
    </tr>


</table>
</form>

</body>
</html>
<?php

//if register button was clicked.
}
else
{
    $employee = new EmployeeClass; //create new instance of the class Users
    $employee->storeFormValues( $_POST ); //store form values
    echo $employee->register( $_FILES ); //register employee
}
?>