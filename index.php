<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bulma.min.css">
        <style type="text/css">
            .container{
                margin-top:40px;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="content">

                <h1> What do you want to do? </h1>

                <a href="getkey.php"> Get an Access Key </a>  <br>
                <a href="enroll.php"> Enroll in a Class </a>
            </div>
        </div>

    </body>
</html>

<?php

$sql = "SELECT * FROM professors where seats Available > 0 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
}

else
{
    echo "No Seats Available";
}
$conn->close();
?>


