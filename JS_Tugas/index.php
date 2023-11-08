<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
        <?php
        include "koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM customer");
        ?>

        <center><h1>Data Customer:</h1></center>
        <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php"> Tambah Customer</a>
            <table class="table table-striped table-bordered" id="customerTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Dibuat Pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($query) > 0){
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $data["id"] ?></td>
                        <td><?php echo $data["first_name"]." ".$data["last_name"] ?></td>
                        <td><?php echo $data["email"] ?></td>
                        <td><?php echo $data["phone"] ?></td>
                        <td><?php echo $data["address"] ?></td>
                        <td><?php echo $data["created_at"] ?></td>
                        <td>
                            <a href="proses_hapus.php?id=<?php echo $data["id"]?>" id="hapus" class="btn btn-danger">Hapus</a>
                            <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-warning">Ubah</a>
                        </td>
                    </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#customerTable').DataTable();
    });
</script>
</body>
</html>
