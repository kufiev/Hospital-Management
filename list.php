<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Web</title>
    <link rel="icon" href="./assets/images/bb.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style1.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="list.php">Web Hospital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#pasien">Patients List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
            </div>
        </div>
    </nav>

    <!--Students Data Table-->
    <section id="pasien" class="section-padding">
        <div class="container">
            <div class="col-lg-12 text-center mt-5 mb-5" data-aos="fade-down" data-aos-delay="150">
                <h3 class="display-4 fw-semibold">Patients List</h3>
                <a href="add.php"><h4>Add Patients</h4></a>
                <table class="table table-hover" style="text-align: center">
                    <thead class="table-dark">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>ID Pasien</th>
                        <th>Gender</th>
                        <th>Penyakit</th>
                        <th>Opsi</th>
                    </thead>
            </div>
                
    <!--Patients Data-->
                <?php
                  include_once 'connect.php';
                    $no=1;
                    $data=mysqli_query($connect, "select * from pasien");
                    while ($d=mysqli_fetch_array($data)){
                    ?>
                
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['gender']; ?></td>
                        <td><?php echo $d['penyakit']; ?></td>
                        <td>
                            <a href="<?php echo 'update.php?id='. $d['id']; ?>">update</a>
                            <a href="<?php echo 'delete.php?id='. $d['id']; ?>" >delete</a>
                        </td>
                    </tr>
                    
                    <?php
                }
                ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>