 
 <?php
  $json = file_get_contents("persons.json"); //parsing the content of Json in php
  //var_dump($json);          //parsing the encrypted content of json 
  $data=json_decode($json,true); //after parsing the data of json decoding the array content to show it in a php

  // echo "<pre>";
  //var_dump($data);    //showing the decode array content in a seperate container
  //echo "</pre>";

 /* foreach($data as $element) //for loop 
  {
    echo "<hr/>";   //horizontal display
     echo "<pre>";
     var_dump($element); //showing each array of data in a seperate container
     echo "</pre>";

  }*/

  foreach($data as $element)
  {
    echo "<hr/>";
     echo "<pre>";
     echo($element["name"]["first"]); //showing only the data of first name in a seperate container
     echo "<br>";
     echo($element["name"]["last"]); //showing only the  data of last name in a seperate container
     echo "</pre>";

  }


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random People!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body class="bg-danger-subtle">
  <div class="container">

    <div class="mt-4 mb-5 d-flex justify-content-between align-items-center">

      <h1 class="text-white">Random People Here! </h1>

    </div>

    <table class="table table-info">

      <thead>
        <tr>
              
            <th scope="col">Profile</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>

        </tr>
      </thead>

      <tbody>

        <?php foreach($data as $element);?>
        <tr>

          <th scope="row"><img src="<?php echo $element ["picture"]["large"];?>"></th>
          <td><?php echo $element ["name"]["first"];?></td>
          <td><?php echo $element ["email"];?></td>
     
          <!-- <td>Mark</td>
          <td>Otto</td>       initial table data
          <td>@mdo</td> -->

         </tr>


        <!-- <tr>

          <td>Jacob</td>
          <td>Thornton</td>   initial table data
          <td>@fat</td> 

        </tr> -->

        <!-- <tr>
      
          <td colspan="2">Larry the Bird</td> initial table data
          <td>@twitter</td>

        </tr> -->
      </tbody>
    </table>
  </div>
</body>
</html>