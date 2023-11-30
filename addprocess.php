<?php

    if(isset($_POST['add']))
    {
        include_once 'connect.php';
        $nama       = $_POST['nama'];
        $id       = $_POST['id'];
        $gender     = $_POST['gender'];
        $penyakit    = $_POST['penyakit'];
        
        $input  = mysqli_query($connect, "insert into pasien values
        ('$nama', '$id', '$gender', '$penyakit')");
        
        if($input)
        {
            echo "<h3>Data added successfuly</h3>";
            echo "<script>window.location='list.php'</script>";
        }
        else
        {
            echo "Failed to add data";
            echo "<a href = 'add.php'>kembali</a>";
        }
        
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }


?>