<?php include('conn.php');?>
<?php
    session_start();
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $t = new conn();
    $connect = $t->connection();

        $query = "SELECT * FROM user WHERE name=? LIMIT 1";
        $stmt = $connect->prepare($query);
        $stmt->bind_param('s', $username);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if ($password === $user['pwd']) { // if password matches
                $stmt->close();

                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['number'] = $user['number'];
                header('location: ../view/dashboard.php');
                exit(0);
            } else { // if password does not match
                echo '<script>alert("Wrong password or username!")</script>';
            	header('location: ../index.php');
            }
        } else {
            echo '<script>alert("login failed")</script>';
        }
?>