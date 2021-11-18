<?php

    $id = $_POST["userid"];
    $pwd = $_POST["pwd"];

    $con = mysqli_connect("localhost", "chopeanut", "axc1841341!", "twosome");
    $sql = "select * from member where userid ='$id'";
    $result = mysqli_query($con, $sql);
    $record_num = mysqli_num_rows($result);

    if ( !$record_num ){ // 입력한 아이디와 같은 아이디가 없으면 등록되지 않은것
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><script>
            alert('등록되지 않은 아이디입니다');
            history.go(-1);
        </script>";
    } else {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pwd"];

        mysqli_close($con);

        if ( $pwd != $db_pass ) {
            echo "<script>
            alert('잘못된 비밀번호입니다.');
            history.go(-1);
        </script>";
        } else {
            session_start();
            $_SESSION["userid"] = $row["userid"];
            $_SESSION["username"] = $row["irum"];

            echo "<script>
                location.href = 'index.php';
            </script>";
        }
    }
?>