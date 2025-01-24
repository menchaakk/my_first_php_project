<html>

<head>
    <title> My first PHP kotskasivu</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Heipparalla!</h1>
    
    <?php
    $conn = new PDO("pgsql:host=possukka;port=5432;dbname=postgres;user=postgres;password=example");  
    //console.log 
    var_dump(value:$conn);
    print_r(value:$conn);    
    $query = $conn->query("SELECT * FROM person");
    $rows = $query->fetchAll(PDO::FETCH_ASSOC); 
    ?>

    <?php echo "My first PHP echo"; ?>

    <p>
        Mina olen Pavlo Menskyi, opettajista parhain!
    </p>
    <ul>
        <?php foreach( $rows as $row):?>
            <li><?php echo $row['name'];?></li>
        <?php endforeach; ?>
    </ul>
    <p>
        Tänään opetan PHP:tä, huomenna opetan kyynistymista työelämöön!
    </p>
</body>

</html>