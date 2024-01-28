<?php

if (isset($_POST['submit'])) {
    $photo = $_FILES['file_upload']['tmp_name'];

    $terget_dir='uploads/';
    $target_file=$terget_dir . basename($_FILES['file_upload']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (empty($photo)) {
        $error = "Please Select A Photo";
    } elseif ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        $error = "Please Select A Jpg Photo";
    } else {

        if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["file_upload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        echo "<pre>";
        print_r($photo);
        echo "</pre>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>File Upload</title>
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
                <div class="col-md-6 offset-2 py-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Upload A Photo</h4>
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>

                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <div class="file-upload">
                                        <label class="mb-3" for="file_upload">File Upload</label>
                                        <div class="custom-file">
                                            <div class="input-group mb-3">
                                                <input id="file_upload" name="file_upload" type="file" class="custom-file-input form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="submit" class="btn btn-success" value="Submit Now">
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