<?php
   include_once 'inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bakker test</title>
        <link href="styles.css" rel="stylesheet" />
        <link href="inc.php" rel="phpsheet" />
    </head>
    <body>
        <header>
        </header>
        <main>
            <h1>Lag Bakker</h1>
            <form action="https://server.mokkisjeva.com" method="POST">
                <fieldset>
                    <label for="firstname">Fornavn</label>
                    <input type="text" name="firstname" id="firstname">
                    <label for="surname">Etternavn</label>
                    <input type="text" name="surname" id="surname">
                </fieldset>
                <input type="submit" name="submit">
            </form> 
        </main>
        <footer></footer>
    </body>
</html>