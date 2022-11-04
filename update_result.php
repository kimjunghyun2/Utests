<?php
    $con = mysqli_connect("localhost","root","1234","sqldb")or die("Mysql 접속 실패!");



        $ret = mysqli_query($con,$sql);


        

        $userID = $_POST["userID"];
        $name = $_POST["name"];
        $birthYear = $_POST["birthYear"];
        $addr = $_POST["addr"];
        $moblie1 = $_POST["moblie1"];
        $moblie2 = $_POST["moblie2"];
        $height = $_POST["height"];
        $mDate = date("Y-m-g");

        $sql ="
        update userTBL SET name='".$name."',birthYear='".$birthYear."',addr='".$addr."',moblie1='".$moblie1."',moblie2='".$moblie2."',height='".$height."',mDate='".$mDate."' WHERE userID= '".$userID."'
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

