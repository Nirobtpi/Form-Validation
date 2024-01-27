<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];

    if(empty($name)){
        $error="Enter Your Name";
    }elseif(empty($email)){
        $error="Enter Your Email";
    }


    echo  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    echo  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Form 01</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-2 py-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title border-bottom">Form Validation</h4>

                            <?php if (isset($error)) :  ?>
                                <div class="alert alert-danger py-3 border-bottom">
                                    <?php echo $error ?>
                                </div>
                            <?php endif; ?>

                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="abc@mail.com" />
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