<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Países</title>
</head>
<body>
    <h1>Consulta de Países</h1>
    <form method="GET" action="">
        <label for="country">Digite o país:</label>
        <input type="text" id="country" name="country" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    if (isset($_GET['country'])) {
        $country = $_GET['country'];
        $url = "https://countries.trevorblades.com/graphql?query={country(code:\"$country\"){name, native, capital, population}}";
        $data = file_get_contents($url);
        $countryData = json_decode($data, true);
        
        if (isset($countryData['data']['country'])) {
            $countryInfo = $countryData['data']['country'];
            echo "<h2>Informações sobre {$countryInfo['name']}</h2>";
            echo "<p>Nome: {$countryInfo['name']}</p>";
            echo "<p>Nome nativo: {$countryInfo['native']}</p>";
            echo "<p>Capital: {$countryInfo['capital']}</p>";
            echo "<p>População: {$countryInfo['population']}</p>";
        } else {
            echo "<p>País não encontrado.</p>";
        }
    }
    ?>

</body>
</html>
