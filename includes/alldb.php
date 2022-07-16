<?php
    session_start();
    $conn =mysqli_connect('localhost','root','','photoweb');
    if(isset($_POST['loginto']))
    {
            $user=$_POST['email'];
            $pwd=$_POST['password'];
            $query="SELECT * FROM admin WHERE email='$user' && password='$pwd'";
            $data=mysqli_query($conn, $query);
            $total=mysqli_num_rows($data);
            if($total==1)
            {
                
                $_SESSION['usrid'] = $user;
                echo $_SESSION['usrid'];
                
                header('location:../adminlogin/index.php');
            }
            else
            {
                ?>
                <script>
                    alert("Error while getting data");
                </script>
                <?php
                header('location:../index.php');
            }
    }
    


    if(isset($_POST['submitcontact']))
    {
        $date=$_POST['date'];
        $name=$_POST['name'];
        $mail=$_POST['email'];
        $mess=$_POST['message'];
        $query= " insert into event (edate, name, email,message) values('$date','$name','$mail', '$mess')";
        $done=mysqli_query($conn,$query);
        if($done)
        {
            ?>
            <script>
                alert("Data inserted success");
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Data insertion error");
            </script>
            <?php
        }
    }






?>