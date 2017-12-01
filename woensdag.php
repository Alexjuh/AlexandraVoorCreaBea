<?php
$result = dataFromBase($conn);
if($result !== NULL){
  ?>
  <table>
    <tr>
      <th class="item">Startijd</th>
      <th class="item">Eindtijd</th>
      <th class="item">Taak</th>
      <th class="item">Gedaan?</th>
    </tr>
  <?php
  while($row = $result->fetch(PDO::FETCH_ASSOC)){
    //hier data vullen met html
    //var_dump($result);
    echo
    '<tr><td>'. $row["start_time"]. '</td>'.
    '<td>'. $row["end_time"]. '</td>'.
    '<td class="item">'. $row["item_list"]. '</td>'.
    '<td><input type="checkbox" name="check" value="Done" class="checkbox" data-id="'.$row["item_id"].'" '.($row["done"] ? "checked" : '').' ></td></tr>';
    //'. $row["done"].'
  }
  ?>
</table>
<?php } ?>
