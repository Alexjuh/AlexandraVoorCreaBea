<?php include_once 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Opdracht CreaBea</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/global.js"></script>
</head>
<body>

  <div class="wrapper">

    <div class="outer_header row">
      <div class="inner_header col-md-12 cl-sm-12">
        <h1>Opdracht voor CreaBea</h1>
        <p>Ontwerpen van een webapplicatie met een to-do-list</p>
      </div>
    </div>

    <div class="outer_content row">
      <div class="inner_content col-md-6 col-md-offset-3 col-md-onset-3 col-sm-12">
        <div class="today"><h2>Vandaag te doen</h2></div>
        <div class="table_data">
          <?php
          $result = dataFromBase($conn);
          if($result !== NULL){
            ?>
            <table>
              <tr>
                <th class="item">Taak</th>
                <th class="item">Startijd</th>
                <th class="item">Eindtijd</th>
                <th class="item">Gedaan?</th>
              </tr>
            <?php
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
              //hier data vullen met html
              //var_dump($result);
              echo
              '<tr><td class="item">'. $row["item_list"]. '</td>'.
              '<td>'. $row["start_time"]. '</td>'.
              '<td>'. $row["end_time"]. '</td>'.
              '<td><input type="checkbox" name="check" value="Done" class="checkbox" data-id="'.$row["item_id"].'" '.($row["done"] ? "checked" : '').' ></td></tr>';
              //'. $row["done"].'
            }
            ?>
          </table>
        <?php } ?>
        </div>
        <button class="add_new">Nieuwe taak</button>
      </div>
    </div>

    <div class="outer_footer row">
      <div class="inner_footer col-md-12">
        <p>&copy; <?php echo date ('Y '); echo 'Created by Alexjuh'; ?> </p>
      </div>
    </div>

  </div>

</body>
</html>