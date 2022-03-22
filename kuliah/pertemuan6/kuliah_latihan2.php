<?php 
    //Array Associative
    // Array yang indexnya string
    
    $mahasiswa = [

        [
            "nama" => "Agung Purnama Rahmat", 
            "npm" => "213040084", 
            "email"=> "agungmamez@gmail.com", 
            "jurusan" => "Teknik Informatika"
        ],

        [
            "nama" => "Syahran Akbar", 
            "npm" => "213040099", 
            "email"=> "syahranakbar293@gmail.com", 
            "jurusan" => "Teknik Informatika"
        ]
    
    
    ];

//var_dump($mahasiswa[1]["email"][1]);
?>


<?php foreach($mahasiswa as $mhs) { ?>

<ul>
    <li>Nama : <?php echo $mhs ["nama"]; ?></li>
    <li>NPM : <?php echo $mhs ["npm"]; ?></li>
    <li>Email : <?php echo $mhs ["email"]; ?></li>
    <li>Jurusan : <?php echo $mhs ["jurusan"]; ?></li>
</ul>
<?php } ?>