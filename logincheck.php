 <?php
    include('conn.php');

    if (isset($_POST['account']))
        {
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $pass = mysqli_real_escape_string($con, $_POST['pass']);

                $query = mysqli_query($con, "SELECT * FROM account WHERE email='$email' and pass='$pass'");
                $row = mysqli_fetch_array($query);
                $num_row = mysqli_num_rows($query);

                    if ($num_row > 0) 
                        {           
                            $_SESSION['login_ID']=$row['login_ID'];

                                if($_SESSION['login_ID'] == 2 || $_SESSION['login_ID'] == 3 || $_SESSION['login_ID'] == 4 || $_SESSION['login_ID'] == 5 )
                                {
                                    header('location: index2.php');
                                }
                                else
                                {
                                    header('location: index.html');
                                }
                        }
                    else
                        {
                            echo '<h2 style="color:black;">Invalid Username and or Password Combination</h2>';
                        }
        }

  ?>