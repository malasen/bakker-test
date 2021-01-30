<?php
include_once 'includes/dp.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bakker test</title>
        <link href="styles.css" rel="stylesheet" />
        <link href="includes/db.php" rel="phpsheet" />
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
            <?php
              $sql = "SELECT * FROM Navn;":
              $results = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($results);

              if( $resultCheck > 0) {
                  while( $row = mysqli_fetch_assoc($results)){
                      echo $row['First_Name', 'Last_Name'];
                  }
              }
            ?>
        </main>
        <footer></footer>
    </body>
</html>