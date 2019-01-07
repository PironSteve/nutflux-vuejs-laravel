
?php
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=dev", "dev", "dev");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abel|Allerta+Stencil|Allura" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Nutflux</title>
</head>
<body>
    <div id="app">
        <navbar></navbar>
        <general-movies></general-movies>

         <popupvid></popupvid>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
