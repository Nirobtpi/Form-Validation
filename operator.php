<?php
// print_r($_POST['btn']);
if (isset($_POST['btn'])) {
    $fnumber = $_POST['fnumber'];
    $snumber = $_POST['snumber'];
    $finalres = '';
    if (empty($fnumber)) {
        $error = "Enter First Number";
    } elseif (empty($snumber)) {
        $error = "Enter Second Number";
    } elseif ($_POST['btn'] == '+') {
        $finalres = $fnumber + $snumber;
    } elseif ($_POST['btn'] == '-') {
        $finalres = $fnumber - $snumber;
    } elseif ($_POST['btn'] == '*') {
        $finalres = $fnumber * $snumber;
    } elseif ($_POST['btn'] == '/') {
        $finalres = $fnumber / $snumber;
    } else {
        $finalres = $fnumber % $snumber;
    }
}




?>

<!doctype html>
<html lang="en">

<head>
    <title>All Operator In Php</title>
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
    <main class="p-4">

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-2">
                    <div class="card text-start">

                        <div class="card-body">
                            <h4 class="card-title">All Operator</h4>

                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger">
                                    <?php echo $error ?>
                                </div>
                            <?php endif;  ?>
                            <!-- <p class="card-text">Body</p> -->

                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="fnumber" class="form-label">Fast Number</label>
                                    <input type="text" class="form-control" name="fnumber" id="fnumber" placeholder="Enter Fast Number" />
                                </div>
                                <div class="mb-3">
                                    <label for="snumber" class="form-label">Second Number</label>
                                    <input type="text" class="form-control" name="snumber" id="snumber" placeholder="Enter Second Number" />
                                </div>
                                <div class="mb-3">
                                    <label disable for="result" class="form-label">Result</label>
                                    <input disabled type="text" class="form-control" name="snumber" id="result" placeholder="Show Result" value="<?php if (isset($_POST['btn'])) {
                                                                                                                                                        echo $finalres;
                                                                                                                                                    } ?>" />
                                </div>
                                <div class="mb-3">
                                    <input type="submit" value="+" class="btn btn-success" name='btn'>
                                    <input type="submit" value="-" class="btn btn-success" name='btn'>
                                    <input type="submit" value="*" class="btn btn-success" name='btn'>
                                    <input type="submit" value="/" class="btn btn-success" name='btn'>
                                    <input type="submit" value="%" class="btn btn-success" name='btn'>
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