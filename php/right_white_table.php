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
  include '../config/database_connection.php';
  include '../database/retreive_data.php';
  include '../model/OrderStatus.php';
  $order_data = getAllOrders($conn);
  $new_order_data = array();
  $i=1;
  //  $customer = getCustomersById($conn,$row->customer_id);
  foreach ($order_data as $row) {
      
      $product = getProductsById($conn,$row->product_id);
      $order_status= new OrderStatus($i,
                                     $product["name"],
                                     $row->unit,
                                     $row->total_price,
                                     $row->order_no,
                                     $row->status);
      $i = $i+1;
      echo "<tr>";
        echo "<td>$order_status->si</td>";
        echo "<td>$order_status->items</td>";
        echo "<td>$order_status->unit</td>";
        echo "<td>$order_status->price</td>";
        echo "<td>$order_status->order_no</td>";
        echo "<td>$order_status->status</td>";
      echo "</tr>";
    }
  ?>
</table>
