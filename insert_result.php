<?php

    $con=mysqli_connect("localhost","root","1234","tabledb")or die("MySQL 접속 실패!");

    $userID = $_POST["userID"];
    $name = $_POST["name"];
    $birthYear = $_POST["birthYear"];
    $addr = $_POST["addr"];
    $mobile1 = $_POST["mobile1"];
    $mobile2 = $_POST["mobile2"];
    $height = $_POST["height"];
    $mDate = date("Y-m-g");

    $sql="insert into usertbl VALUES('".$userID."','".$name."','".$birthYear."','".$addr."','".$mobile1."','".$mobile2."','".$height."','".$mDate."')";

    $ret = mysqli_query($con,$sql);

    if($ret){
        echo "userTBL 데이터가 성공적으로 입력됨";
    }else{
        echo "userTBL 데이터 입력 실패","<br>";
        echo "실패원인 : ",mysqli_error();
    }
    mysqli_close($con);

    echo "<br><a href='main.html'><--초기화면</a>";

?>
