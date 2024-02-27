<?php require_once "./init.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon-bear.png">
    <title>PHP Hotel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <form method="GET">
            <div class="d-flex gap-2">
                <input class="form-check" type="checkbox" name="parking" id="parking"
                    <?= $parking_filter ? 'checked' : '' ?>>
                <label class="form-check-label" for="parking">
                    Con Parcheggio
                </label>
            </div>
            <input type="number" name="vote" id="vote" min="1" max="5" value="<?= $vote_filter ?>" placeholder="Vote">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to center</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($hotels as $hotel): ?> <tr>
                    <td><?= $hotel["name"] ?></td>
                    <td><?= $hotel["description"] ?></td>
                    <td><?= $hotel["parking"] ? "Yes" : "No" ?></td>
                    <td><?= $hotel["vote"] ?></td>
                    <td><?= $hotel["distance_to_center"] ?></td>
                </tr>


                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</body>

</html>