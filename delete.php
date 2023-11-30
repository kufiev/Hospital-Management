<html>
    <head>
        <title>Delete - Hospital Web</title>
        <link rel="icon" href="./assets/images/bb.jpg">
    </head>
    
    <?php
        if(isset($_GET['id']))
        {
            include('connect.php');
            $id    = $_GET['id'];
            $cek    = mysqli_query($connect, "select id from pasien where id = '$id'") or die($mysqli_error());
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else
            {
                $del = mysqli_query($connect, "delete from pasien where id = '$id'");
                if ($del)
                {
                    echo "<h3>Data Deleted Successfully</h3>";   
                    echo "<script>window.location = 'list.php';</script>";    
                }
                else
                {
                    echo "<h2>Failed to Delete Data</h2>";
                    echo "<a href = 'list.php'>Kembali </a>";
                }
            }
        }
    
        else
        {
            echo "<script>window.history.back()</script>";
        }
    ?>
    
    <body>
        
    </body>
</html>