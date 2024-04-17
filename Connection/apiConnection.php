<?php
    // Constante donde guardamos la llamada a la API
    const API_URL = "https://whenisthenextmcufilm.com/api";
    
    // Inicializamos la llamada a la api con cURL; CH = cURL handle
    $ch = curl_init(API_URL);

    // Para no mostrar todo el resultado en la web, vamos a ocultarlo
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar y guardar el resultado
    $result = curl_exec($ch);
    $data = json_decode($result, true);

    // Cerramos el enlace para no dejarlo abierto permanentemente
    curl_close($ch);

    // Expulsamos la info para ver la data
    # var_dump($data); // (Lo ponemos aqui para comprobar la conexión a la API, pero lo quitamos para que no muestre la info en pantalla.)
?>