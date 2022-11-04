<?php

    $con = mysqli_connect("localhost","root","1234","tabledb")or die("MySQL 접속 실패!");

    $sql = "SELECT * FROM usertbl";

    $ret = mysqli_query($con,$sql);
    if($ret){
        $count = mysqli_num_rows($ret);
    }
    else{
        echo "userTBL 데이터 조회 실패"."<br>";
        echo "실패 원인: ".mysqli_error();
        exit();
    }

    echo "<h1>회원 조회 결과 </h1>";
    echo "<table border=1>";
    echo "<TR>";
    echo "<th>아이디</th><th>이름</th><th>출생년도</th><th>지역</th><th>국번</th>";
    echo "<th>전화번호</th><th>키</th><th>가입일</th><th>수정</th><th>삭제</th>";
    echo "</TR>";

    while($row=mysqli_fetch_array($ret)){
        echo "<TR>";
        echo "<TD>",$row['userID'],"</TD>";
        echo "<TD>",$row['name'],"</TD>";
        echo "<TD>",$row['birthYear'],"</TD>";
        echo "<TD>",$row['addr'],"</TD>";
        echo "<TD>",$row['mobile1'],"</TD>";
        echo "<TD>",$row['mobile2'],"</TD>";
        echo "<TD>",$row['height'],"</TD>";
        echo "<TD>",$row['mDate'],"</TD>";
        echo "<TD>","<a href='update.php?userID=",$row['userID'],"'>수정</a>","</TD>";
        echo "<TD>","<a href='delete.php?userID=",$row['userID'],"'>삭제</a>","</TD>";
        echo "</TR>";
    }
    mysqli_close($con);
    echo"</TABLE>";
    echo"<br> <a href = 'main.html'><--초기화면</a>";

?>