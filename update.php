<?php
    $con = mysqli_connect("localhost","root","1234","sqldb")or die("Mysql 접속 실패!");

    $sql ="
        SELECT * FROM userTBL WHERE userID='".$_GET['userID']."'
        ";

        $ret = mysqli_query($con,$sql);

        if($ret){
            $count = echo mysqli_num_rows($ret);
            if($count==0){
                echo $_GET['userID']."아이디의 회원이 없음!!"."<br>";
                echo "<br><a href='main.html'><-- 초기화면</a>"
                exit();
            }
        }else{
            echo "userTBL 데이터 조회 실패","<br>";
            echo "실패원인 : ",mysqli_error();
            echo "<br><a href='main.html'><-- 초기화면</a>"
            exit();
        }
        
        $row = mysqli_fetch_array($ret);

        $userID = $_POST["userID"];
        $name = $_POST["name"];
        $birthYear = $_POST["birthYear"];
        $addr = $_POST["addr"];
        $moblie1 = $_POST["moblie1"];
        $moblie2 = $_POST["moblie2"];
        $height = $_POST["height"];
        $mDate = date("Y-m-g");

?>

<HTML>
    <HEAD>
        <meta http-equiv="content-type"content="text/html; charset=utf-8">
    </HEAD>
    <body>

        <form method="post" action = "update_result.php">
            아이디 : <input type="text"name ="userID" value=<?php echo $userID ?>READONLY><br>
            이름 : <input type="text"name ="name" value=<?php echo $name ?>><br>
            출생년도 : <input type="text"name ="birthYear" value=<?php echo $birthYear ?>><br>
            지역 : <input type="text"name ="addr" value=<?php echo $addr ?>><br>
            휴대폰 앞번호 : <input type="text"name ="mobile1" value=<?php echo $moblie1 ?>><br>
            휴대폰 뒷번호 : <input type="text"name ="mobile2" value=<?php echo $moblie2 ?>><br>
            키 : <input type="text"name ="height" value=<?php echo $height ?>><br>
            회원 가입일 : <input type="text"name ="mDate" value=<?php echo $mDate ?>READONLY><br>
            <BR>
            <BR>
            <input type="submit"value ="정보 수정">

        </form>
    </body>


</HTML>