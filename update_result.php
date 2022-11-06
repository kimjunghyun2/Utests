<?php
    $con = mysqli_connect("localhost","root","1234","tabledb")or die("Mysql 접속 실패!");

        $userID = $_POST["userID"];
        $name = $_POST["name"];
        $birthYear = $_POST["birthYear"];
        $addr = $_POST["addr"];
        $mobile1 = $_POST["mobile1"];
        $mobile2 = $_POST["mobile2"];
        $height = $_POST["height"];
        $mDate = $_POST['mDate'];

        $sql ="
        update usertbl SET name='".$name."',birthYear='".$birthYear."',addr='".$addr."',mobile1='".$mobile1."',mobile2='".$mobile2."',height='".$height."',mDate='".$mDate."' WHERE userID= '".$userID."'
        ";

        $ret = mysqli_query($con,$sql);


        echo "<h1>회원정보 수정 결과 </h1>";

        if($ret){
            echo"데이터가 성공적으로 수정됨";
            
        }else{
            echo "userTBL 데이터 수정 실패","<br>";
            echo "실패원인 : ",mysqli_error();
            
        }
        mysqli_close($con);
        echo "<br><a href='main.html'><-- 초기화면</a>"

?>

