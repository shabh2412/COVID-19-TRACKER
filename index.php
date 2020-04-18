<?php

include "logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Tracker</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/c17529f9fe.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Covid - 19 Tracker</h1>
        <h5 class="text-muted">A simple and opensource project to keep track of all COVID-19 Cases around the world</h5>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
            <a href="./CORONA-TRACKER/CovidMap.php" class="my-anchor">Check Out Map version</a>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <h5>Confirmed</h5>
                <p class="text-danger">
                    <?php echo $totalConfirmed?>
                </p>
            </div>
            <div class="col-4">
                <h5>Recovered</h5>
                <p class="text-success">
                    <?php echo $totalRecovered?>
                </p>
            </div>
            <div class="col-4">
                <h5>Deceased</h5>
                <p class="text-muted">
                    <?php echo $totalDeaths?>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Countries</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deceased</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $key => $value) { 
                        $increase = $value[$daysCount]['confirmed'] - $value[$prev]['confirmed'];
                ?>
                <tr>
                    <th><?php echo $key; ?></th>
                    <td>
                        <?php echo $value[$daysCount]['confirmed']." ";?>
                        <?php if($increase!=0){?>
                            <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase?></small>
                        <?php }?>
                    </td>
                    <td><?php echo $value[$daysCount]['recovered'];?></td>
                    <td><?php echo $value[$daysCount]['deaths'];?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>