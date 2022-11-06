<?php
    $con = mysqli_connect("localhost","root","1234","tabledb")or die("Mysql 접속 실패!");

    $sql ="
        SELECT * FROM usertbl WHERE userID='".$_GET['userID']."'
        ";

        $ret = mysqli_query($con,$sql);

        if($ret){
            $count = mysqli_num_rows($ret);
            if($count==0){
                echo $_GET['userID']."아이디의 회원이 없음!!"."<br>";
                echo "<br><a href='main.html'><-- 초기화면</a>";
                exit();
            }
        }else{
            echo "userTBL 데이터 조회 실패","<br>";
            echo "실패원인 : ",mysqli_error();
            echo "<br><a href='main.html'><-- 초기화면</a>";
            exit();
        }
        
        $row = mysqli_fetch_array($ret);

        $userID = $row["userID"];
        $name = $row["name"];
?>

<HTML>
    <HEAD>
        <meta http-equiv="content-type"content="text/html; charset=utf-8">
    </HEAD>
    <body>
        <h1>회원 삭제</h1>

        <form method="post" action = "delete_result.php">
            아이디 : <input type="text"name ="userID" value=<?php echo $userID ?> READONLY><br>
            이름 : <input type="text"name ="name" value=<?php echo $name ?> READONLY><br>
            <BR>
            <BR>
            위 회원을 삭제하시겠습니까?
            <input type="submit"value ="회원 삭제">

        </form>
    </body>


</HTML>
