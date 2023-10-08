<?php 

// for ($i = 1; $i <= 10; $i++){
//     for($j = 1; $j <= 10; $j++) {
//         echo "kerja bagus ($i, $j) <br> ";
//     }
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ketuaguild.ico" type="image/x-icon">
    <title>For Loop</title>
</head>

<body>

    <?php for ($i = 1; $i <= 5; $i++):  ?>
    <?php for($j = 1; $j <= 5; $j++): ?>
    <table border="1px solid">
        <tr>
            <td><?= $i; ?></td>
            <td><?= $j; ?></td>
        </tr>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $j; ?></td>
        </tr>
    </table>

    <br>

    <?php endfor; ?>
    <?php endfor; ?>

</body>

</html>