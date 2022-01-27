<?php 
include 'connection.php';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * from invoice where id = ".$id;
    $a = mysqli_query($con,$query);
    while($i = mysqli_fetch_array($a))
    {
        $b = "SELECT name from customers where id=".$i['customerid'];
        $c = mysqli_query($con,$b);
        while($j = mysqli_fetch_array($c))
        {
            $res[] = $j['name'];
        }
        $res[] = $i['id'];
        $res[] = $i['datecreated'];
        
        $res[] = $i['subtotal'];
        $res[] = $i['total'] - $i['subtotal'];
        $res[] = $i['discount'];
        $res[] = $i['total'];
        $res[] = $i['received'];
        $res[] = $i['received'] - $['total'];
    }   
    $query = "SELECT * from sales where invoiceid = ".$id;
    $a = mysqli_query($con,$query);
    $count = 1;
    while($i = mysqli_fetch_array($a))
    {
        $item = array();
        $item[] = $count;
        $b = "SELECT name from products where id = ".$i['productid'];
        $r = mysqli_query($con,$b);
        while($z = mysqli_fetch_array($r))
        {
            $item[]  = $i['name'];
        }
        $item[] = $i['price'];
        $item[] = $i['qty'];
        $item[] = $i['total']
        $count++;
        $items[] = $item;
    }
}
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        @font-face {
            font-family: "DancingScript";
            src: url("fonts/DancingScript-VariableFont_wght.ttf");
        }
        @font-face {
            font-family: "Yanone";
            src: url("fonts/YanoneKaffeesatz-VariableFont_wght.ttf");
        }

        *{
            font-family: 'Yanone';
            color: black !important;
        }
        .invoice
        {
            width: 302.36px;
            border: 1px solid black;
            text-align: center;
            
        }
        .head h2
        {
            padding: 0px !important;
            margin-bottom: 0px;
        }
        .bill
        {
            margin: 10px auto;
            width: 90%;

        }
        .bill table
        {
            border: none;
            text-align: justify;
        }
        .bill table tr
        {
            border-bottom-width: 0px
        }
        .bill table th{
            padding: 4px
        }
        .bill table td{
            padding: 4px
        }
        /* .items thead tr{
            border-bottom: 1px solid black !important
        }
        .items table th{
            padding: 4px;
            border: 1px solid black;
        }
        .items table td{
            padding: 4px;
            border: 1px solid black;
        } */
        .footer, .welcome{
            font-family: 'DancingScript';
            font-weight: bold;
        }
        .items .table tr
        {
            border: 1px solid black;
        }
        
        .items td
        .items td{
            border: 1px solid black;
            font-size: 10px;
        }
    </style>
    <div class="invoice">
        <div class="welcome pt-1">
            <h5>Jee Ayan Nuu</h5>
        </div>
        <div class="head">
            <h2>Awan Products</h2>
            <span>Sabzi Mandi, Chakwal</span><br>
            <span>Proprietor: <b>Ghulam Yaseen</b></span><br>
            <span>Phone: <b>+923222357048</b></span>
        </div>
        <div class="bill">
            <table class="table p-0">
                <tr>
                    <th>Name:</th>
                    <td><?php echo $res[0]; ?></td>
                </tr>
                <tr>
                    <th>Invoice:</th>
                    <td><?php echo $res[1]; ?></td>
                </tr>
                <tr>
                    <th>Printed On:</th>
                    <td><?php echo $res[2]; ?></td>
                </tr>
            </table>
        </div>
        <div class="items">
            <table class="table table-bordered table-sm table-condensed">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 10px !important;">#</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        for ($i=0; $i < count($items); $i++) { 
                            echo '<td>'.$items[$i][0].'</td>';
                            echo '<td>'.$items[$i][1].'</td>';
                            echo '<td>'.$items[$i][2].'</td>';
                            echo '<td>'.$items[$i][3].'</td>';
                            echo '<td>'.$items[$i][4].'</td>';
                        }
                    ?>
                </tbody>
                <tbody class="total">
                    <tr>
                        <th colspan="3" style="text-align: right;">Subtotal</td>
                        <td colspan="2">Rs. <?php echo $res[3]; ?></td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: right;">Previous Balance</td>
                        <td colspan="2">Rs. <?php echo $res[4]; ?></td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: right;">Discount</td>
                        <td colspan="2">Rs. <?php echo $res[5]; ?></td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: right;">Total</td>
                        <td colspan="2">Rs. <?php echo $res[6]; ?></td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: right;">Paid</td>
                        <td colspan="2">Rs. <?php echo $res[7]; ?></td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: right;">Return</td>
                        <td colspan="2">Rs. <?php echo $res[8]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <h4>Shopping karne ka Shukria!</h4>
        </div>
    </div>
