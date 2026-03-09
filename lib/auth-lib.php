<?php

global $params;
#create user
function createUser($params, $uploadImg)
{
    global $pdo;
    $name = $params['name'];
    $phone = $params['phone'];
    $job = $params['job'];
    $province = $params['province'];
    $district = $params['district'];
    $profile_photo = $params['profile_photo'];
    $hash = password_hash($params['password'], PASSWORD_DEFAULT);
    $introduce = $params['introduce'];
    $sql = "INSERT INTO users SET name=?,phone=?,job=?,province=?,district=?, profile_photo=?, password=?,introduce=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $phone, $job, $province, $district, time().$uploadImg['name'], $hash, $introduce]);
    return $stmt->rowCount();
}
#user exestance validation
function isUserExist($phone_no){
    global $pdo;
    $sql = "SELECT * FROM `users` WHERE `phone`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$phone_no]);
    return $stmt->fetch();
}
# user login

//var_dump($phone);
