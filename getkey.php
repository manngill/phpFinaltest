<html>

<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "college";
$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
        

        <div class="container">
            <div class="content">

                <h1> Register for an Access Key </h1>

                <form action="getkey.php" method="POST">
                    Name:  <input class="input" type="text" name="name"> <br>
                    ID:    <input class="input" type="text" name="id"> <br>

                    <button type="Submit" class="button is-outlined is-link"> Generate Key </button>

                </form>

                <a href="index.php"> Go Back </a><br>

            </div>
        </div>

    </body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];
    session_start();
    $key = "";
    if ($name != null && $id != "" && strlen($id) == 8) {
        $sql = "SELECT * FROM student_information where name = '$name' and studentid  = '$id' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION["name"] = $name;
            $_SESSION["id"] = $id;
            $key = md5($name . '' . $id);
            $_SESSION["key"] = $key;

          
        } else {
            
        }
        $conn->close();

    } 
}
?>
