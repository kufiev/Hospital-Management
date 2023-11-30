<?php

if (isset($_POST['simpan']))
{
    include('connect.php');
    $nama       = $_POST['nama'];
    $id       = $_POST['id'];
    $gender     = $_POST['gender'];
    $penyakit    = $_POST['penyakit'];
    $update     = mysqli_query($connect, "update pasien set
        nama        = '$nama',
        id          = '$id',
        gender      = '$gender',
        penyakit    = '$penyakit' 
        where id  = '$id'")
        
    or die($mysqli_error());
    
    if($update)
    {
        echo "<h2>Data Updated Successfully</h2>";
        echo "<script>window.location = 'list.php'</script>";
    }
    
    else
    {
        echo "<h2>Failed to save data</h2>";
        echo "<a href ='update.php ?id = ".$id."'>kembali</a>";
    } 
}

else
{
        echo "<script>window.history.back()</script>";
}

?>