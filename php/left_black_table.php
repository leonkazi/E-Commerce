<div class="container">
        <div class="row">
            <div  class="table-one black-table">
                <div id = "black-table-text">
                    <!-- PHP code to generate HTML with JavaScript -->
                    <!-- Clickable text that submits the form -->
                    <!-- Form to pass value to PHP method -->
                            <!-- Hidden input to store the value -->
                        <a href="#" onclick ="showOrderStatus();" >
                           Order Status
                        </a>
                    <!-- Hidden form to submit on click -->
                </div>
                <div id = "black-table-text">Order History</div>
                <div id = "black-table-text">Vehicle Management</div>
                <div id = "black-table-text">Customer(s)</div>
                <div id = "black-table-text">Payments</div>
                <div id = "black-table-text-bottom">Delivery</div>
            </div> 
            <!-- onclick display : Order History -->
            <div id = "table-right" class="column-right" style = "display: none">
                <?php include 'right_white_table.php'; ?>
            </div> 

        </div>
    </div>

    <script>
        function showOrderStatus() {
            var textElement = document.getElementById('table-right');
            textElement.style.display = 'block';
        }
    </script>
