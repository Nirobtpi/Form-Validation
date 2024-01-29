<?php
include_once('functions.php');

$task = 'encode';
// echo $mode;

if (isset($_REQUEST['task']) && $_REQUEST['task'] != '') {
    $task = $_GET['task'];
    // print_r($task);
}

$key = 'abcdefghijklmnopqrstopwxyz1234567890';

if ('key' == $task) {
    // print_r($mode);
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join('', $key_original);
} elseif (isset($_POST['key']) && $_POST['key'] != '') {
    $key = $_POST['key'];
}

$scrambleData = '';
if ('encode' == $task) {
    $data = $_POST['data'] ?? '';

    if ($data != '') {
        $scrambleData = scrambleData($data, $key);
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Scrambler</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <!-- place navbar here -->
        <?php
        $nir = 'encode';

        $ke = "abcd123";
        $keyy = str_split($ke);
        shuffle($keyy);
        $ke = join("", $keyy);
        print_r($ke);
        if ('saba' == $nir) {
            $keyy = str_split($ke);
            shuffle($keyy);
            join("", $keyy);
        } elseif (isset($_POST['ni']) && $_POST['ni'] != '') {
            $ke = $_POST['ni'];
        }
        ?>
        <a href="?nirob=saba">Nirob</a>
        <input type="text" name="ni" value="<?php echo $ke; ?>">
    </header>
    <main class="p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-2">
                    <div class="card text-start p-4">
                        <div class="card-body">
                            <h4 class="card-title border-bottom py-3">Data Scrambler</h4>
                            <p>Use this aplicatio to scrambler your data</p>

                            <div class="button">
                                <a href="scrambler.php?task=encode" class="text-dark p-2" style="text-decoration: none;">Encode</a><span>|</span>
                                <a href="scrambler.php?task=decode" class="text-dark p-2" style="text-decoration: none;">Decode</a><span>|</span>
                                <a href="scrambler.php?task=key" class="text-dark p-2" style="text-decoration: none;">Generate Code</a>
                            </div>


                            <form action="scrambler.php" method="POST" class="mt-5">
                                <div class="mb-3">
                                    <label for="key" class="form-label">Key</label>
                                    <input type="text" <?php displayKey($key); ?> class="form-control" name="key" id="key" />
                                </div>

                                <div class="mb-3">
                                    <label for="data" class="form-label">Data</label>
                                    <textarea class="form-control" name="data" id="data"><?php if (isset($_POST['data'])) {
                                                                                                echo $_POST['data'];
                                                                                            }  ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="result" class="form-label">Result</label>
                                    <textarea class="form-control" name="result" id="result"><?php echo $scrambleData ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <input class="btn btn-success" name="submit" type="submit" value="Do It For Me">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>