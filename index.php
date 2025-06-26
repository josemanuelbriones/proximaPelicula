
    <?php
    const API_URL = "https://whenisthenextmcufilm.com/api/";
    
    #Inicialozacion de nueva sesion
    $ch= curl_init(API_URL);
    #indicar que se quiere devolver el resultado
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    #Ejecutar la peticion
    $response = curl_exec($ch);
    $data = json_decode($response, true);
    #Cerrar la sesion
    curl_close($ch);

   // var_dump($data);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxima Pelicula de Marvel</title>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Proxima Pelicula de Marvel</h1>

    <section>
        <img src="<?= $data["poster_url"];?>" alt="<?= $data["title"];?>">
    </section>
    <hgroup>
        <h2><?= $data["title"];?></h2>
        <h3>Dias para el estreno <?= $data["days_until"];?></h3>
        <h3>Se estrena el <?= $data["release_date"];?></h3>
        <p>La siguiente es: <?= $data["following_production"]["title"];?></p>
    </hgroup>


</body>
</html>