
<table>
  <tr>
    <th>Sl</th>
    <th>Items</th>
    <th>Unit</th>
    <th>Price</th>
    <th>Order no.</th>
    <th>Status</th>
  </tr>
  <?php
  // Example data array
  $data = array(
    array("Sl 1", "Item A", "Unit A", "$10", "Order 123", "In Progress"),
    array("Sl 2", "Item B", "Unit B", "$20", "Order 456", "Completed")
  );

  // Loop through the data array to generate table rows and cells
  foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
      echo "<td>$cell</td>";
    }
    echo "</tr>";
  }
  ?>
</table>
