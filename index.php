<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulário</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Formulário com POST</h2>
                    <?php
                        echo '<p>Dados capturados na array superglobal $_POST:</p>';
                        foreach ($_POST as $key => $value){
                            echo "<p><strong>" . $key . " - </strong> " . htmlspecialchars($value) . "</p>";
                        }
                    ?>
                    <p>
                        <a href="./index.html">Voltar</a>
                    </p>
                </div>
            </div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
    </body>
</html>
