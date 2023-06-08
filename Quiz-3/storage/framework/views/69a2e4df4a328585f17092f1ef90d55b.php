<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, autem. Explicabo, eos est necessitatibus aperiam excepturi cum animi nisi cumque quidem tenetur impedit aliquam tempora officiis qui corporis perspiciatis expedita? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos asperiores blanditiis cupiditate, perferendis, totam id placeat consectetur iusto quisquam qui fugiat temporibus ullam et nisi quo consequatur reiciendis facere Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi perferendis fugit, culpa laboriosam voluptate dolore soluta provident eius similique suscipit id reiciendis cumque laudantium distinctio natus ducimus minima velit sunt.</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, veniam? Nisi rem quaerat ipsa, debitis soluta eaque cum iusto quam, cumque architecto laboriosam minima beatae iste, inventore molestiae minus reprehenderit!</p> 
<p>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt asperiores doloribus ratione? Quaerat eum ea quas est corrupti, rerum ab aliquam fuga quibusdam facilis repellendus deleniti, quisquam sequi, labore hic.
</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus ipsam, tenetur sed qui quod fugiat provident quia rerum. Molestiae soluta, quis accusantium maxime iusto porro odit aperiam dolorum consequuntur eaque.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia vero, facilis repellat, laboriosam totam earum sapiente modi quibusdam voluptatum cupiditate voluptates at tenetur tempore esse mollitia ab dolorem, obcaecati officiis?</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum harum delectus eaque eligendi voluptatum ipsam praesentium dolores, quod sint cum animi maxime ullam at itaque quis quo, dicta molestiae eius.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi recusandae voluptatibus fugit atque quaerat animi nihil obcaecati, dolore nisi iste, nulla veritatis, placeat deserunt consectetur quia. Quo, hic reprehenderit?</p>
<?php

// Fungsi untuk menghasilkan nama acak
function generateRandomName() {
  $names = ['John', 'Jane', 'Michael', 'Emily', 'David', 'Sarah'];
  $lastNames = ['Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Miller'];
  
  $randomFirstName = $names[array_rand($names)];
  $randomLastName = $lastNames[array_rand($lastNames)];
  
  return $randomFirstName . ' ' . $randomLastName;
}

// Fungsi untuk menghasilkan NPM acak
function generateRandomNPM() {
  $npm = '';
  
  for ($i = 0; $i < 8; $i++) {
    $npm .= mt_rand(0, 9);
  }
  
  return $npm;
}

// Fungsi untuk menghasilkan prodi acak
function generateRandomProdi() {
  $prodi = ['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Teknik Kimia'];
  return $prodi[array_rand($prodi)];
}

// Jumlah data dummy yang ingin dibuat
$jumlahData = 10;

// Array untuk menyimpan data dummy
$dataDummy = [];

// Generate data dummy
for ($i = 0; $i < $jumlahData; $i++) {
  $nama = generateRandomName();
  $npm = generateRandomNPM();
  $prodi = generateRandomProdi();
  
  $dataDummy[] = [
    'nama' => $nama,
    'npm' => $npm,
    'prodi' => $prodi
  ];
}

// Tampilkan data dummy
foreach ($dataDummy as $data) {
  echo "Nama: " . $data['nama'] . "<br>";
  echo "NPM: " . $data['npm'] . "<br>";
  echo "Prodi: " . $data['prodi'] . "<br>";
  echo "<br>";
}

?>
<footer>
    <div class="card">
        <h6 class="card-header text-center">@copyright by fawaz</h6>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </footer>
</body>
</html><?php /**PATH D:\LAB-PW\Quiz-3\resources\views/header.blade.php ENDPATH**/ ?>