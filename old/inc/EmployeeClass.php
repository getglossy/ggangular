<?php

include "db.class.inc.php";

class EmployeeClass
{
    private $employeeName = null;
    private $employeeFaceHidden = null;
    private $employeeFaceShown = null;
    private $employeeProfileSnapShot = null;
    private $uploadTarget = null;

    /////////////////////Constructor////////////////////////
    public function __construct($data = array())
    {
        if (isset($data['employeeName'])) {
            $this->employeeName = stripslashes(strip_tags($data['employeeName']));
        }

        $this->uploadTarget = $_SERVER['DOCUMENT_ROOT'] . "/GG/employeePictures/";
    }

    /////////////////////Constructor////////////////////////

    /////////////////////Fetch Values From Form////////////////////////
    public function storeFormValues($params)
    {
        //store the parameters
        $this->__construct($params);
    }

    /////////////////////Fetch Values From Form////////////////////////

    ////////////////////Save Image///////////////////////////
    private function saveImage($fileParam)
    {
        $eFaceHiddenTemp = $_FILES["employeeFaceHidden"]['tmp_name'];
        $eFaceShownTemp = $_FILES["employeeFaceShown"]['tmp_name'];
        $eProfileSnapTemp = $_FILES["employeeProfileSnapShot"]['tmp_name'];

        $this->employeeFaceHidden = $_FILES["employeeFaceHidden"]['name'];
        $this->employeeFaceShown = $_FILES["employeeFaceShown"]['name'];
        $this->employeeProfileSnapShot = $_FILES["employeeProfileSnapShot"]['name'];

        move_uploaded_file($eFaceHiddenTemp, $this->uploadTarget . $this->employeeFaceHidden);
        move_uploaded_file($eFaceShownTemp, $this->uploadTarget . $this->employeeFaceShown);
        move_uploaded_file($eProfileSnapTemp, $this->uploadTarget . $this->employeeProfileSnapShot);

    }

    ////////////////////Save Image///////////////////////////

    /////////////////////User Register Function Start////////////////////////
    public function register($fileParam)
    {
        $this->saveImage($fileParam);

        try {
            $con = new GetGlossyDB('getglossylabs');
            $pdo = $con->getDBObj();
            $sql = "INSERT INTO employeeInformation(employeeName, employeeFaceHidden, employeeFaceShown, employeeProfileSnapShot) VALUES(:employeeName, :employeeFaceHidden, :employeeFaceShown, :employeeProfileSnapShot)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue("employeeName", $this->employeeName, PDO::PARAM_STR);
            $stmt->bindValue("employeeFaceHidden", $this->employeeFaceHidden, PDO::PARAM_STR);
            $stmt->bindValue("employeeFaceShown", $this->employeeFaceShown, PDO::PARAM_STR);
            $stmt->bindValue("employeeProfileSnapShot", $this->employeeProfileSnapShot, PDO::PARAM_STR);

            $stmt->execute();
            return '<script>
                    window.location.href = "registerEmployee.php";
                  </script>';
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }
    /////////////////////User Register Function End////////////////////////

    ////////////////////Get All Employees//////////////////////////////
    public function getAllEmployees()
    {
        try {
            $con = new GetGlossyDB('getglossylabs');
            $pdo = $con->getDBObj();
            $sql = "SELECT * FROM employeeInformation";

            $stmt = $pdo->prepare($sql);


            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    ////////////////////Get All Employees//////////////////////////////


    ////////////////////Get Profile//////////////////////////////
    public function getEmployeeProfile($id)
    {
        try {
            $con = new GetGlossyDB('getglossylabs');
            $pdo = $con->getDBObj();
            $sql = "SELECT employeeProfileSnapShot FROM employeeInformation WHERE employeeName = :employeeName";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue("employeeName", $id, PDO::PARAM_STR);

            $stmt->execute();

            $Profile = $stmt->fetch();

            echo $Profile[0];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ////////////////////Get Profile//////////////////////////////
}

if (isset($_GET['employeeProfileGet']))
{
    $employeeClass = new EmployeeClass;
    echo $employeeClass->getEmployeeProfile($_GET['employeeProfileGet']);
}