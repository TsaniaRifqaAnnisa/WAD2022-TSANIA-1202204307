    <?php
        require 'connector.php';

        $email = $_POST['email'];
        $password = $_POST['password'];

        $mysql = "SELECT * FROM user_tsania WHERE email = '$email'";
        $result = mysqli_query($connector, $mysql);
        $row = mysqli_fetch_assoc($result);

        if($row){
            if($password == $row["password"]){
                if(isset($_POST['rememberMe'])){
                    setcookie("email", $row['email'], time() + 3600, "/");
                }

                if(!isset($_SESSION))
                    session_start()
                
                $_SESSION['email'] = $row["email"];

            header("location: ../index.php");
            } else {
                echo "Password Anda Salah";
            }
        } else {
            echo "Email Belum Terdaftar, Silahkan Daftar Terlebih Dahulu";
        }