<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Update - Hospital Web</title>
        <link rel="icon" href="./assets/images/bb.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/tools.css">
    </head>
    
    <body>      
    <!--update data siswa-->   
        <?php        
            include('connect.php');
            $id = $_GET['id'];
            $show = mysqli_query($connect, "select * from pasien where id = '$id'");
            if(mysqli_num_rows($show) == 0)
            {
                echo '<script>window.history.back()</script>';
            }
            else
            {
                $d = mysqli_fetch_assoc($show);
            }      
        ?>
    <!--update data siswa-->
        <section class="container">
        <a href="list.php">Back</h1></a><br>
        <h1>(UPDATE) Patients Data</h1>
        <hr>
        <form action="updateprocess.php" class="form-login" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <label for="name">Nama Lengkap</label>
                    <input type="text" placeholder="Nama Lengkap" name="nama" id="name" value="<?php echo $d['nama']; ?>" required>
                </div>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" required>
                        <option>Gender</option>
                        <option value="Pria" <?php if($d['gender'] == 'Pria'){echo 'selected';} ?>>Pria</option>
                        <option value="Wanita" <?php if($d['gender'] == 'Wanita'){echo 'selected';} ?>>Wanita</option>
                    </select>
                </div>
                <div>
                    <label for="alamat">Penyakit</label>
                    <input type="text" placeholder="Penyakit" name="penyakit" id="penyakit" value="<?php echo $d['penyakit'];?>" required>
                </div>
                <div class="submit">
                    <input type="submit" name="simpan" value="Save">
                </div>
        </form>
    </body>
</html>