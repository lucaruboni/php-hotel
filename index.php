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

$parkingYorN = $_GET['parkings'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL RATINGS</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
<body>

<div class="container">

        
        <h1 class="text-center my-5">HOTELS RATINGS</h1>

        <form  method="get">
         <label for="parkings">Filters</label>   
        <select name="parkings" id="parkings">
            <option value="" selected>No Filter</option>
            <option  value="1">parking</option>
            <option value="2">vote</option>
        </select>
        <button class="btn btn-primary my-5" type="submit">SUBMIT</button>
        </form>
        
        <?php

        if ($parkingYorN === '') : ?>




                <table class="table">
          <thead>
            <tr>
            <th>
                Name
            </th>
            <?php foreach ($hotels as $key => $value): ?>
                <th scope="col">
                      <?php echo $value['name']; ?>
                </th>
            <?php endforeach;?>
                
                
            </tr>
          </thead>
          <tbody>
       
            <tr>
            <th>
                Description
            </th>
                <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['description']; ?>
                    </th>
                <?php endforeach;?>
            </tr>
            
            <tr>

            <th>
                Parkings
            </th>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['parking']; ?>
                    </th>
                <?php endforeach;?>
            </tr>


            <tr>
            <th>
                Vote
            </th>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['vote']; ?>
                    </th>
                <?php endforeach;?>
            </tr>


            <tr>
            <th>
                Distance to Center
            </th>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['distance_to_center']; ?>
                    </th>
                <?php endforeach;?>
            </tr>
          </tbody>
        </table>
        




<!-- ELSEIF -->

        <?php elseif($parkingYorN === '1') : ?>
            
            
            <?php if($value['parking'] === true) : ?>
                
            <thead>
            <tr>
            <th>
                Name
            </th>
            <?php foreach ($hotels as $key => $value): ?>
                <th scope="col">
                      <?php echo $value['name']; ?>
                </th>
            <?php endforeach;?>
                
                
            </tr>
          </thead>
          <tbody>
       
            <tr>
            <th>
                Description
            </th>
                <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['description']; ?>
                    </th>
                <?php endforeach;?>
            </tr>
            
            <tr>

            <th>
                Parkings
            </th>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['parking']; ?>
                    </th>
                <?php endforeach;?>
            </tr>


            <tr>
            <th>
                Vote
            </th>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['vote']; ?>
                    </th>
                <?php endforeach;?>
            </tr>


            <tr>
            <th>
                Distance to Center
            </th>
            <?php foreach ($hotels as $key => $value): ?>
                    <th scope="col">
                          <?php echo $value['distance_to_center']; ?>
                    </th>
                <?php endforeach;?>
            </tr>
          </tbody>
        </table>

        <?php else : ?>
            
            <?php endif; ?>
        

        <?php endif; ?>



      </div>
    </div>




</body>
</html>