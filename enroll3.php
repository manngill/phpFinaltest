<html>

<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "college";
$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
  } 
?>

    <head>
        <link rel="stylesheet" type="text/css" href="css/bulma.min.css">

        <style type="text/css">
            .container{
                margin-top:40px;
            }
            form {
                max-width:250px;
            }
            button {
                margin-top:10px;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();

        if (isset($_SESSION['key'])) {
            $name = $_SESSION["name"];
            $id = $_SESSION["id"];
            $insId = $_GET["ins"];
 $sql = "UPDATE professors SET seatsavailable = seatsavailable -1 where id  = '$insId'";

                if ($conn->query($sql) === TRUE) {

                 
                } else {
                  
                }
               
            $conn->close();
        } else {
  
        }
        ?>
        <div class="container">
            <div class="content">

                <h1> Welcome</h1>

                <h1> Enrollment Confirmation </h1>

                <p>
                    Success! You are enrolled!
                </p>


            </div>
        </div>

    </body>
</html>
