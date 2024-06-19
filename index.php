<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Strong Password Generator</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap -->
</head>
<body>
    <header>
        <div class="container text-center">
            <h1>
              PHP Strong Password Generator  
            </h1>
        </div>
    </header>
    <main>
      <div class="container">
        <form method="GET" action="index.php">
            <div>
                <label for="password-length">Inserisci la lunghezza della tua password</label>
                <input type="number" id="password" name="password" min="1" max="10">
                <button type="submit">Genera Password</button>
            </div>
        </form>
      </div>
    </main>
</body>
</html>