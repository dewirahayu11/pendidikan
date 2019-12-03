<?php
    session_start();

    $update = false;
    $nim = '';
    $nama = '';
    $jk = '';
    $hp = '';
    $alamat = '';
    $foto = '';

    $mysqli = new mysqli('localhost', 'root', '', 'tugas_mysql_1') or die(mysqli_error($mysqli));

    if(isset($_POST['save'])){
        //letak upload foto
        $target = "images/".basename($_FILES['foto']['name']);

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['name'];

        $sql = "INSERT INTO biodata VALUES ($nim, '$nama', '$jk', '$hp', '$alamat', '$foto')";
        mysqli_query($mysqli, $sql);

        //memindahkan foto yg diupload ke folder target
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target)){
            // $msg = "Image uploaded successfully";
        }else{
            // $msg = "There was a problem uploading image";
        }

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header('Location: table_tampil.php');
    }

    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $sql = "DELETE FROM biodata WHERE nim=$id";
        mysqli_query($mysqli, $sql);

        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";

        header('Location: table_tampil.php');
    }

    if(isset($_GET['ubah'])){
        $id = $_GET['ubah'];
        $update = true;
        $sql = "SELECT * FROM biodata WHERE nim=$id";
        $result = mysqli_query($mysqli, $sql);

        $row = $result->fetch_array();
        $nim = $row['nim'];
        $nama = $row['nama'];
        $jk = $row['jk'];
        $hp = $row['no_hp'];
        $alamat = $row['alamat'];
        $foto = $row['foto'];
    }

    if(isset($_POST['update'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['name'];

        $sql = "UPDATE biodata SET nama='$nama', jk='$jk', no_hp='$hp', alamat='$alamat', foto='$foto' WHERE nim=$nim";
        mysqli_query($mysqli, $sql);

        //memindahkan foto yg diupload ke folder target
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target)){
            // $msg = "Image uploaded successfully";
        }else{
            // $msg = "There was a problem uploading image";
        }

        $_SESSION['message'] = "Record has been updated!";
        $_SESSION['msg_type'] = "secondary";

        header('Location: table_tampil.php');
    }
?>