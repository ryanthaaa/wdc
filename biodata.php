<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Input Biodata</title>
</head>

<body>

    <div class="container">
        <div class="row align-items-center mt-5">
            <form action="proses.php" method="post">
                <div class="col align-self-center mb-2">
                    <label for="" class="">Nama</label>
                    <input type="text" name="nama" autocomplete="off" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="col align-self-center mb-2">
                    <label for="" class="">Nama Depan</label>
                    <input type="text" name="firstname" autocomplete="off" class="form-control" placeholder="Enter Your First Name">
                </div>
                <div class="col align-self-center mb-2">
                    <label for="" class="">Nama Belakang</label>
                    <input type="text" name="lastnama" autocomplete="off" class="form-control" placeholder="Enter Your Last Name">
                </div>
                <div class="col align-self-center mb-2">
                    <label for="" class="">Tanggal Lahir</label>
                    <input type="date" name="nama" autocomplete="off" class="form-control" placeholder="Enter Your Date Of Birth">
                </div>
                <div class="col align-self-center mb-2">
                    <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                    <select id="disabledSelect" class="form-select" name="kelamin">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="col align-self-center mb-2">
                    <label for="" class="">Alamat</label>
                    <textarea type="text" name="alamat" autocomplete="off" class="form-control" placeholder="Enter Your Addreas"></textarea>
                </div>
                <div class="col align-self-center mb-2">
                    <label for="" class="">Hobby</label>
                    <input type="text" name="alamat" autocomplete="off" class="form-control" placeholder="Enter Your Hobby">
                </div>
                <div class="col align-self-center mb-2">
                    <label for="" class="">Cita-Cita</label>
                    <input type="text" name="alamat" autocomplete="off" class="form-control" placeholder="Enter Your Dreams">
                </div>
                <div class="col align-self-center mb-2">
                    <input type="submit" name="simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>