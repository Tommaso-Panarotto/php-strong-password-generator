<?php

$script = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!£$%&?|_-';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <main>
        <div class="container">
            <div class="vote pt-5">
                <form class="text-center" action="index.php" method="GET">
                    <div class="mb-3">
                        <label for="password" class="form-label">lunghezza password</label>
                        <input type="number" class="form-control" id="password" name="Password" placeholder="Lunghezza della password" min="5" max="30">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    <button type="submit" class="btn btn-primary btn-warning mt-3">Reset</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>