<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Input Biodata</title>
</head>

<body style="background-image:linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,12,69,1) 100%, rgba(0,212,255,1) 100%);">

    <div class="container">
        <div class="row align-items-center mt-5">
            <form action="proses.php" method="post">
                <div class="col-6 offset-3 align-self-center mb-2">
                    <label for="" class="text-light">Nama</label>
                    <input type="text" name="nama" autocomplete="off" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="col-6 offset-3 align-self-center mb-2">
                    <label for="" class="text-light">Nama Depan</label>
                    <input type="text" name="firstname" autocomplete="off" class="form-control" placeholder="Enter Your First Name">
                </div>
                <div class="col-6 offset-3 align-self-center mb-2">
                    <label for="" class="text-light">Nama Belakang</label>
                    <input type="text" name="lastnama" autocomplete="off" class="form-control" placeholder="Enter Your Last Name">
                </div>
                <div class="col-6 offset-3 align-self-center mb-2">
                    <label for="" class="text-light">Tanggal Lahir</label>
                    <input type="date" name="nama" autocomplete="off" class="form-control" placeholder="Enter Your Date Of Birth">
                </div>
                <div class="col-6 offset-3 align-self-center mb-2">
                    <label for="disabledSelect" class="form-label text-light">Jenis Kelamin</label>
                    <select id="disabledSelect" class="form-select" name="kelamin">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="col-6 offset-3 align-self-center mb-2">
                    <label for="" class="text-light">Alamat</label>
                    <textarea type="text" name="alamat" autocomplete="off" class="form-control" placeholder="Enter Your Addreas"></textarea>
                </div>
                <div class="col-6 offset-3 align-self-center mb-2">
                    <label for="" class="text-light">Hobby</label>
                    <input type="text" name="alamat" autocomplete="off" class="form-control" placeholder="Enter Your Hobby">
                </div>
                <div class="col-6 offset-3 align-self-center mb-2">
                    <label for="" class="text-light">Cita-Cita</label>
                    <input type="text" name="alamat" autocomplete="off" class="form-control" placeholder="Enter Your Dream">
                </div>
                <div class="col-6 offset-3 align-self-center mb-2">
                    <input type="submit" name="simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>