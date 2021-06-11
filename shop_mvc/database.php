<?php
function connectDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ass2_php";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_errno){
        die("connect error...");
    }
    return $conn;
}


function queryDB($sql_txt){
    $conn = connectDB();
    $rs = $conn->query($sql_txt);
    $list = [];
    if($rs->num_rows > 0){
        while($row = $rs->fetch_assoc()){
            $list[] = $row;
        }
    }
    return $list;
}

function queryDBelement($sql_txt){
    $conn = connectDB();
    $rs = $conn->query($sql_txt);
    $loai = null;
    if($rs->num_rows > 0){
        while($row = $rs->fetch_assoc()){
            $loai = $row;
        }
    }
    return $loai;
}

function updateDB($sql_txt){
    $conn = connectDB();
    return $conn->query($sql_txt) === true;
}
