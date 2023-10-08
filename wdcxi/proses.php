<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Proses</title>
</head>

<body>
    <?php

    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['kelamin'];


        echo "<div class='container text-align-center'>
            Hello $nama, kamu adalah seorang $jk, Senang Bertemu Denganmu!!
        </div>";
    }

    ?>
</body>

</html>