
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
  $status_options = array("Pending", "Dispatched", "Delivered");
  foreach ($order_data as $row) {
      
      $product = getProductsById($conn,$row->product_id);
      $order_status= new OrderStatus($i,
                                     $product["name"],
                                     $row->unit,
                                     $row->total_price,
                                     $row->order_no,
                                     $row->status);
      $i = $i+1;
      // echo "$order_status->status";
      echo "<tr>";
        echo "<td>$order_status->si</td>";
        echo "<td>$order_status->items</td>";
        echo "<td>$order_status->unit</td>";
        echo "<td>$order_status->price</td>";
        echo "<td>$order_status->order_no</td>";
        echo "<td><select name='status{$order_status->si}' id='status{$order_status->si}'>";
        foreach ($status_options as $status) {
            $selected = (trim(strtolower($status)) == trim(strtolower($order_status->status))) ? "selected" : '';
            if ($selected!=''){
                echo "<option value='$status' selected='$selected'>$status</option>";
            }else{
                echo "<option value='$status'>$status</option>";
            }
            
        }
        echo "</select></td>";
      echo "</tr>";
    }
  ?>
</table>

<script>
  // Example to show or hide options, or handle change events
document.addEventListener('DOMContentLoaded', function() {
    const statusDropdowns = document.querySelectorAll('select[name="status"]');
    statusDropdowns.forEach(dropdown => {
        dropdown.addEventListener('change', function() {
            // Handle change event here, e.g., update the database
            console.log('Status changed to:', this.value);
        });
    });
});

    function toggleOptions(selectId) {
    var selectElement = document.getElementById(selectId);
    var options = selectElement.options;
    selectElement.size = options.length; // Optional: Make all options visible in an expanded list.
    selectElement.addEventListener('blur', function() {
        selectElement.size = 1; // Collapse the select box when it loses focus.
    });
}
</script>
