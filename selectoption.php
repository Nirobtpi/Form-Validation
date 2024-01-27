<?php
include_once('functions.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // input checked box proparty 

    $checked = isset($_POST['terms']);

    if (empty($name)) {
        $error = "Enter Your Name";
    } elseif (empty($email)) {
        $error = "Enter Your Email";
    } elseif (empty($checked)) {
        $error = "Please Checked First";
    } else {
        echo  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        echo  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        echo $checked;



        print_r($_POST['furits']);
    }
};

$class = ['First', 'Second', 'Third', 'Fourth'];

?>


<!doctype html>
<html lang="en">

<head>
    <title>Create Select Options</title>
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
                                    <label for="select" class="form-label">select Subject</label>
                                    <div class="mb-3">
                                        <label for="class" class="form-label">City</label>
                                        <select class="form-select form-select-lg" name="calss" id="class">

                                            <option selected disabled>Select one</option>
                                            <?php createOptions($class); ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <div class="list-group">
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" name="terms" value="1" />
                                            Hello Bangladesh
                                        </label>
                                    </div>
                                </div>
                                <h4>Secect Foods</h4>
                                <div class="mb-3">
                                    <div class="list-group">
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" name="furits[]" value="apple" />
                                            Apple
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" name="furits[]" value="orange" />
                                            Orange
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" name="furits[]" value="komola" />
                                            Komola
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" name="furits[]" value="jackfurits" />
                                            Jackfurits
                                        </label>
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