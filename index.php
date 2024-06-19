<?php
// salvo input utente in una variabile
$password_length = $_GET['password'];
// controllo se la variabile riceve correttamente il valore assegnato
#var_dump($_GET);
function generate_password($password_length) {
    // variabili che contengono i caratteri da usare
    $lower_case = 'abcdefghijklmnopqrstuvwxyz';
    $upper_case = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '123456789';
    $symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?';
   $symbols;
    $password = '';

    for ($i = 0; $i < $password_length; $i++) {
        /* genero un numero  csuale per rendere la password randomica i numeri csuali vanno da 1 a 4 se il numero genrato e 1 la password avra una lettera minuscola se il nuemro generato e 2 la password avra una lettera maiuscola se il nuemro generato e 3 la password avra un numero e se il numero genrato e 4 avremo un simbolo*/
        $random_choice = rand(1, 4);
        if ($random_choice == 1) {
            $password .= $lower_case[rand(0, strlen($lower_case) - 1)];
        } elseif ($random_choice == 2) {
            $password .= $upper_case[rand(0, strlen($upper_case) - 1)];
        } elseif ($random_choice == 3) {
            $password .= $numbers[rand(0, strlen($numbers) - 1)];
        } else {
             $password .= $symbols[rand(0, strlen($symbols) - 1)];
        }
    }
    
         return $password;
}

?>








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
        <!-- form -->
        <form method="GET" action="index.php">
            <div>
                <label for="password-length">Inserisci la lunghezza della tua password</label>
                <input type="number" id="password" name="password" min="1">
                <button type="submit">Genera Password</button>
            </div>
        </form>
        <!-- /form -->
         <?php
         if (isset($_GET['password'])) {
           $password_length = intval($_GET['password']);
            if ($password_length > 0) {
                $generated_password = generate_password($password_length);
                echo "<p>La tua password: {$generated_password} </p>";
            }
         }
         ?>
      </div>
    </main>
</body>
</html>