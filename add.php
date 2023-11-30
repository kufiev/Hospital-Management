<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Add - Hospital Web</title>
        <link rel="icon" href="./assets/images/bb.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/tools.css">
    </head>
    
    <body>

        <section class="container">
        <a href="list.php">Back</h1></a><br>
        <h1>(ADD) Patients Data</h1>
            <hr>
            <form action="addprocess.php" class="form-login" method="post">
                <div>
                    <label for="name">Nama Lengkap</label>
                    <input type="text" placeholder="Nama Lengkap" name="nama" id="name" required>
                </div>
                <div>
                    <label for="idpasien">ID Pasien</label>
                    <input type="number" placeholder="ID Pasien" name="id" id="id" required>
                </div>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" required>
                        <option>Gender</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div>
                    <label for="penyakit">Penyakit</label>
                    <input type="text" placeholder="Penyakit" name="penyakit" id="penyakit" required>
                </div>
                <div class="submit">
                    <input type="submit" name="add" value="Submit">
                </div>
            </form>
        </section>
    </body>
</html>