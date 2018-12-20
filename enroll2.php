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

        <?php
        session_start();
        $key_post = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $key_post = $_POST["key"];
        
        }

        if (isset($_SESSION['key']))
            {
        $key = $_SESSION["key"];
        $name = $_SESSION["name"];
        if ($key == $key_post)
        {
        ?>

        <div class="container">
            <div class="content">

                <h1> Welcome</h1>

                <h1> Choose a Section </h1>


                <?php
  
                $sql = "SELECT * FROM professors ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                ?>
                <p>
                    instructors Name:  <?php echo $row["name"]; ?><br>
                    Spots Remaining:  <?php echo $row["seatsAvailable"]; ?> <br>

                    <?php
                    
                    if($row["seatsAvailable"]>0)
                    {
                    ?>                         
                    
                    <a href="enroll3.php?ins=<?php echo $row["id"]; ?>" class="button is-outlined is-link"> Enroll </a>

                    <?php
                    }
                    
                    ?>
                </p>

<?php
}
}
?>




            </div>
        </div>



<?php
} 
} 
?>


     </body>
</html>
