<?php 

// airports array;
$airports = [
    
    [
        'id' => 1,
        'name' => 'Milano Malpensa',
        'code' => 'MPX',
        'lat' => 48.555,
        'lng' => 6.456

    ],
    [
        'id' => 2,
        'name' => 'Amsterdam Schiphol',
        'code' => 'AMS',
        'lat' => 46.567,
        'lng' => 8.894
    ]
];

// flights array;
$flights = [
    
    [
        'code_departure' => 'MPX',
        'code_arrival' => 'AMS',
        'price' => 100
    ],
    [
        'code_departure' => 'MPX',
        'code_arrival' => 'AMS',
        'price' => 80
    ],
    [
        'code_departure' => 'MPX',
        'code_arrival' => 'AMS',
        'price' => 134
    ],
    [
        'code_departure' => 'MPX',
        'code_arrival' => 'AMS',
        'price' => 65
    ],
    [
        'code_departure' => 'MPX',
        'code_arrival' => 'AMS',
        'price' => 72
    ]  
];

// find the lowest price with math function min();
$lowest = min($flights);

// compare the code in airports array with the code in the lowest flight to get the name od the airport;
foreach ($airports as $airport) {
    if ($airport['code'] == $lowest['code_departure']) {
        $departure_airport = $airport['name'];
    } elseif ($airport['code'] == $lowest['code_arrival']) {
        $arrival_airport = $airport['name'];
    }
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shippypro Challenge</title>
</head>
<body>

<h2><?php echo "Miglior prezzo per il volo in partenza da: " .  $departure_airport . " con destinazione " . $arrival_airport  ?></h2>

<p><strong>Departure airport: </strong><?php echo $departure_airport . ' - ' . $lowest['code_departure'] ?> </p>
<p><strong> Arrival airport: </strong> <?php echo $arrival_airport . ' - ' . $lowest['code_arrival'] ?> </p>
<p><strong>Price: </strong> <?php echo $lowest['price'] ?></p>

    
</body>
</html>