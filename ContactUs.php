<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- /* navbar */ -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ContactUs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>


    </nav>

    <!-- <h1>Hello, world!</h1> -->

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];



        //connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contactus";

        // create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        echo "<br/>";
        if (!$conn) {
            die("sorry we faild to connect: " . mysqli_connect_error());
        } else {
            // echo "database successfully connected <br/>";

            $sql = "INSERT INTO `contactme` (`name`, `email`, `description`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                // echo " Not insert data in table Successfully" . mysqli_error($conn);
                echo '<div class="alert alert-danger fade show" role="alert">
                <strong>error! </strong> <a href="#" class="alert-link">We are facing some technical issue and your entry was not submited successfully! we regret the inconvinience coused!
                </div>';
            } else {
                echo '<div class="alert alert-success" role="alert">
                success? <a href="#" class="alert-link">your data inserted successfully
                </div>';
            }
        }
    }
    ?>

    <div class="container mt-3">
        <form action="/practices/ContactUs.php" method="post">
            <fieldset>
                <legend>ContactUs</legend>
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="enter name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="enter email">
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>