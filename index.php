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
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FONT AWESOME CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- BOOTSTRAP CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- BOOTSTRAP JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
      defer
    ></script>
    <!-- AXIOS JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"
      defer
    ></script>

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>

    <!-- MY JS -->
    <script src="./js/main.js" defer></script>

    <!-- MY STYLE CSS -->
    <link rel="stylesheet" href="./css/style.css" />

    <title>Document</title>
    <link
      rel="shortcut icon"
      href="./img/mobile-logo.png"
      type="image/x-icon"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="./" method="get">
      <!-- FILTRO PARCHEGGIO -->
  <select name="parcheggio" class="w-25 my-3 form-select" aria-label="Default select example">
    <option selected>Parcheggio</option>
    <option value="true">si</option>
    <option value="false">no</option>
  </select>
<!-- TABELLA -->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">PARKING</th>
      <th scope="col">VOTE</th>
      <th scope="col">DISTANCE TO CENTER</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hotels as $hotel) { ?>
      <tr>
      <td><?php echo $hotel['name'] ?></td>
      <td><?php echo $hotel['description'] ?></td>
      <td>
        <i class="<?php echo $hotel['parking']
        ?'fa-regular fa-circle-check'
        :'fa-regular fa-circle-xmark' ?>" 
        style="<?php echo $hotel['parking']
        ?'color: #4dff00;'
        :'color: #ff0000;' ?>"></i>
        </td>
      <td><?php echo $hotel['vote'].'/5' ?></td>
      <td><?php echo $hotel['distance_to_center'].' km' ?></td>
    </tr>
      <?php  } ?>

  </tbody>
</table>
        </form>


      </div>
    </div>


</html>
