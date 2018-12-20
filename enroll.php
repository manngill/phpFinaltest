<html>
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

                <h1> Enter Your Access Key </h1>

                <form action="enroll2.php" method="POST">
                    Access Key:  <input class="input" type="text" name="key"> <br>
                    <button type="submit" class="button is-outlined is-link"> Next </button>
                </form>

                <a href="index.php"> Go Back </a>

            </div>
        </div>

    </body>
</html>
