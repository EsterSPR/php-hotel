<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Hotels</title>
</head>
<body>
    <table class="hotel-table">

        <tr class="align-items-center">
            <td class="p-3 hotel-cell">
                <h3>Hotel</h3>
            </td>
            <td class="p-3 hotel-cell">
                <h3>Description</h3>
            </td>
            <td class="p-3 hotel-cell">
                <h3>Parking</h3>
            </td>
            <td class="p-3 hotel-cell">
                <h3>Rating</h3>
            </td>
            <td class="p-3 hotel-cell">
                <h3>KM from center</h3>
            </td>
        </tr>

    <?php foreach ($hotels as $hotel) { ?>

        <tr>
            <td class="p-3 hotel-cell"> <strong> <?php echo $hotel['name']; ?> </strong> </td>
            <td class="p-3 hotel-cell"> <i> <?php echo $hotel['description']; ?> </i> </td>
            <td class="p-3 hotel-cell text-center"> <?php echo $hotel['parking'] == true ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-xmark"></i>'; ?> </td>
            <td class="p-3 hotel-cell text-center"> <?php echo $hotel['vote']; ?> <i class="fa-solid fa-star"></i></td>
            <td class="p-3 hotel-cell text-center"> <?php echo $hotel['distance_to_center']; ?> KM </td>
    </tr>
        
    <?php } ?>

    </table>
</body>
</html>