<?php
require_once "configure.php";
 
function getPersonsByJobs($job){
    $sql = "SELECT * FROM users WHERE job=?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$job]);
    return $stmt->fetchAll();
}

function getNumberOfToilers(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["خیاط"]);
    return $stmt->rowCount();
}

function getNumberOfMestrys(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["مستری"]);
    return $stmt->rowCount();
}

function getNumberOfPainters(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["رنگمال"]);
    return $stmt->rowCount();
}

function getNumberOfWorkers(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["کارگر"]);
    return $stmt->rowCount();
}

function getNumberOfNajars(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["نجار"]);
    return $stmt->rowCount();
}

function getNumberOfCook(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["آشپز"]);
    return $stmt->rowCount();
}

function getNumberOfElecEng(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["انجنیر برق"]);
    return $stmt->rowCount();
}

function getNumberOfQalinShoyan(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["قالین شویی"]);
    return $stmt->rowCount();
}

function getNumberOfNumaKar(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["نما کار"]);
    return $stmt->rowCount();
}


function getNumberOfFlizKaran(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["فلز کار"]);
    return $stmt->rowCount();
}

function getNumberOfDish(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["عیار دیش"]);
    return $stmt->rowCount();
}

function getNumberOfMobEng(){
    $sql = "SELECT * FROM users WHERE job =?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute(["انجنیر مبایل"]);
    return $stmt->rowCount();
}

function searchjobs($province, $district, $job){
    $sql = "SELECT * FROM users WHERE province=? AND district=? AND job=?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$province, $district, $job]);
    return $stmt->fetchAll();
    
}