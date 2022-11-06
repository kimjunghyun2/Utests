<?php
    $con = mysqli_connect("localhost","root","1234","tabledb")or die("Mysql 접속 실패!");

        $userID = $_POST["userID"];

        $sql ="
        DELETE FROM usertbl WHERE userID='".$userID."'
        ";

        $ret = mysqli_query($con,$sql);


        echo "<h1>회원정보 수정 결과 </h1>";

        if($ret){
            echo"데이터가 성공적으로 삭제됨";
            
        }else{
            echo "userTBL 데이터 삭제 실패","<br>";
            echo "실패원인 : ",mysqli_error();
            
        }
        mysqli_close($con);
        echo "<br><a href='main.html'><-- 초기화면</a>"

?>
