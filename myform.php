<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $city = $_POST['city'];
    $myname = isset($_POST['myname']);
    $photo = $_FILES['file_upload']['tmp_name'];

    $terge_dir = 'uploads/';
    $terget_file = $terge_dir . basename($_FILES['file_upload']['name']);
    $filetype = strtolower(pathinfo($terget_file, PATHINFO_EXTENSION));

    if (empty($name)) {
        $error = "Please enter Your Name!";
    } elseif (is_numeric($name)) {
        $error = "Name Must Be User Letter!";
    } elseif (empty($email)) {
        $error = "Please Enter Your Email!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please Enter A Valid Email!";
    } elseif (empty($phone)) {
        $error = "Please Enter Your Phone Number!";
    } elseif (!is_numeric($phone)) {
        $error = "Number Must Be User Numeric Number";
    } elseif (strlen($phone) != 11) {
        $error = "Number Must Be Used 11 Digit";
    } elseif (empty($city)) {
        $error = "Please Enter a City";
    } elseif (!isset($myname)) {
        $error = "Please Cheek A Name";
    } elseif (empty($photo)) {
        $error = "Please Enter a  Photo";
    } elseif ($filetype != 'jpg' && $filetype != 'png' & $filetype != 'jpeg' && $filetype != 'gif') {
        $error = "Please Enter A Valid Photo";
    } else {

        (move_uploaded_file($photo, $terget_file));
        echo $name . "<br>";
        echo $email . "<br>";
        echo $phone . "<br>";
        echo $city . "<br>";
        print_r($_POST['myname']);
        echo "<br>";
        echo basename($_FILES["file_upload"]["name"]);

        $success = "Nirob Is Successfully Done";
    }
    // phpinfo();
}

function value($val)
{
    if (isset($_POST[$val])) {
        echo $_POST[$val];
    }
}


?>



<!doctype html>
<html lang="en">

<head>
    <title>Form Validation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <header class="border-bottom p-3 box-shadow">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="#">
                        <h2>Logo</h2>
                    </a>
                </div>
                <div class="col-md-6">
                    <ul class="d-flex">
                        <li class="px-3" style="list-style: none;"><a href="#">Home</a></li>
                        <li class="px-3" style="list-style: none;"><a href="#">About</a></li>
                        <li class="px-3" style="list-style: none;"><a href="#">Pages</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="p-3">

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title py-5">Validation Form</h5>

                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger">
                                    <?php echo $error ?>
                                </div>
                            <?php endif;  ?>

                            <?php if (isset($success)) : ?>
                                <div class="alert alert-success">
                                    <?php echo $success ?>
                                </div>
                            <?php endif;  ?>

                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="<?php value('name') ?>" placeholder="Enter Your Name" />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?php value('email') ?>" placeholder="Enter Your Email" />
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Phone Number</label>
                                    <input value="<?php value('number') ?>" type="text" class="form-control" name="number" id="number" placeholder="Enter Your Phone Number" />
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <select class="form-select form-select-lg" name="city" id="city">

                                        <option value="New Delhi">New Delhi</option>
                                        <option value="Istanbul">Istanbul</option>
                                        <option value="Jakarta">Jakarta</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="list-group">
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" name="myname[]" value="Nirob" />
                                            Nirob
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" name="myname[]" value="Saba" />
                                            Saba
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" name="myname[]" value="Sara" />
                                            Sara
                                        </label>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <div class="file-upload">
                                        <label for="file_upload">File Upload</label>
                                        <div class="custom-file">
                                            <div class="input-group mb-3">
                                                <input id="file_upload" name="file_upload" type="file" class="custom-file-input form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input class="btn btn-success" type="submit" name="submit" value="Submit Now">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>