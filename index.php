<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lista Film</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Lista Film</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Regista</th>
                    <th scope="col">Anno</th>
                    <th scope="col">Generi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $movie) : ?>
                    <tr>
                        <td><?php echo $movie->titolo; ?></td>
                        <td><?php echo $movie->regista; ?></td>
                        <td><?php echo $movie->anno; ?></td>
                        <td><?php echo implode(", ", $movie->generi); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>