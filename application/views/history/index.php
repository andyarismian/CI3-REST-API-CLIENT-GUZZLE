<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>REST API CLIENT</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Data From REST API SERVER</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nama Pelanggan</td>
                    <td>Tanggal</td>
                    <td>Total Belanja</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $temp_data) { ?>
                    <tr>
                        <td><?php echo $temp_data['id'] ?></td>
                        <td><?php echo $temp_data['nama_pelanggan'] ?></td>
                        <td><?php echo $temp_data['tanggal'] ?></td>
                        <td><?php echo $temp_data['total_belanja'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>