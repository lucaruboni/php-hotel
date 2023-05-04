<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        p{
            border:1px solid black;
            width: 200px;
            padding: 5px;
            align-self: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL RATINGS</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
<body>

<div class="container">

        
        <h1 class="text-center my-5">HOTELS RATINGS</h1>

        <form action="" method="get"></form>


        <table class="table">
          <thead>
            <tr>

            <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
              <th scope="col">Handle</th>
                
                
            </tr>
          </thead>
          <tbody>
          <tr>
                
            <?php foreach ($hotels as $key => $value): ?>
                <th scope="col">
                      <?php echo $value['name']; ?>
                </th>
            <?php endforeach;?>
            
            
          </tr>
            <tr>
                <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['description']; ?>
                    </th>
                <?php endforeach;?>
            </tr>
            <tr>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['parking']; ?>
                    </th>
                <?php endforeach;?>
            </tr>
            <tr>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['vote']; ?>
                    </th>
                <?php endforeach;?>
            </tr>
            <tr>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['distance_to_center']; ?>
                    </th>
                <?php endforeach;?>
            </tr>
          </tbody>
        </table>

      </div>
    </div>




</body>
</html>