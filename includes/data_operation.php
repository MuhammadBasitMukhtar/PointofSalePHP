<?php
include 'connection.php';
if(isset($_GET['action']))
{
    if($_GET['action'] == "loadProduct")
    {
        $query = "SELECT * FROM products";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        print(json_encode($rows));
    }
    if($_GET['action'] == "loadTransaction")
    {
        $query = "SELECT * FROM transactions order by datecreated desc";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        print(json_encode($rows));
    }
}

if(isset($_POST['action']))
{
    if($_POST['action'] == "loadTransaction")
    {
        $from = $_POST['from'];
        $to = $_POST['to']; 
        $query = "SELECT * FROM transactions where datecreated between '$from' and '$to' order by datecreated desc";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        echo json_encode($rows);
    }
    if($_POST['action'] == "loadCustomers")
    {
        $query = "SELECT id, name, balance FROM customers order by id desc";
        $res = mysqli_query($con,$query);
        $output = "<option value='0'>Select Customer</option>";
        while($cus = mysqli_fetch_array($res))
        {
            $output .= "<option value='".$cus['id']."' prev='".$cus['balance']."'>".$cus['name']."</option>";
        }
        echo json_encode($output);
    }
    if($_POST['action'] == "loadSupplier")
    {
        $query = "SELECT id, name, balance FROM suppliers order by id desc";
        $res = mysqli_query($con,$query);
        $output = "<option value='0'>Select Supplier</option>";
        while($cus = mysqli_fetch_array($res))
        {
            $output .= "<option value='".$cus['id']."' prev='".$cus['balance']."'>".$cus['name']."</option>";
        }
        echo json_encode($output);
    }
    if($_POST['action'] == "addCustomer")
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];  

      $insertquery ="INSERT INTO `customers` (`name`, `phone`, `address` ,`balance`)
      VALUES ('$name', '$phone' ,'$address' ,0 )";
      
        $res = mysqli_query($con,$insertquery);
        if($res) {
          echo "data inserted properly";
        }else {
          echo "data not inserted properly";
        }
    }
    if($_POST['action'] == "addSupplier")
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];  

      $insertquery ="INSERT INTO `suppliers` (`name`, `phone`, `address` ,`balance`)
      VALUES ('$name', '$phone' ,'$address' ,0 )";
      
        $res = mysqli_query($con,$insertquery);
        if($res) {
          echo "data inserted properly";
        }else {
          echo "data not inserted properly";
        }
    }
    if($_POST['action'] == "addProduct")
    {
        $name = $_POST['name'];
      $cost = $_POST['cost'];
      $price = $_POST['price']; 
      

      $insertquery ="INSERT INTO `products`(`name`, `cost`, `price`,`qty`  )
      VALUES ('$name', $cost ,$price , 0 )";
        $res = mysqli_query($con,$insertquery);
        if($res) {
          echo "data inserted properly";
        }else {
          echo "data not inserted properly";
        }
    }
    if($_POST['action'] == "saleItem")
    {
        $id = 0;
        $customerid = $_POST['customerid'];
        $subtotal = $_POST['subtotal'];
        $discount = $_POST['discount'];
        $total = $_POST['total'];
        $received = $_POST['received']; 
        $return = $_POST['return'];
        $itemsid = $_POST['id'];
        $itemsqty = $_POST['qty'];
        $itemsprice = $_POST['itemsprice'];
        $insertquery = '';
        $diff = $received - $total; 
        $checkBalance = 0;
        if($diff < 0)
        {
            $checkBalance = 1;
            $insertquery = "INSERT INTO `invoice`(`customerid`, `subtotal`, `discount`, `total`, `received`, `type`,`status`) 
            VALUES ($customerid,$subtotal,$discount,$total,$received,'S',0)";    
        }
        else
        {
            $insertquery = "INSERT INTO `invoice`(`customerid`, `subtotal`, `discount`, `total`, `received`, `type`) 
            VALUES ($customerid,$subtotal,$discount,$total,$received,'S')";
        }
        $res = mysqli_query($con,$insertquery);
        if($res) {
          $id = mysqli_insert_id($con);
          
          for ($i=0; $i < count($itemsid); $i++) {
             $total = $itemsqty[$i] * $itemsprice[$i];
             $query = "INSERT INTO `sales`(`invoiceid`, `productid`, `qty`, `price`, `total`, `type`) 
             VALUES ($id,".$itemsid[$i].",".$itemsqty[$i].",".$itemsprice[$i].",".$total.",'S')"; 
             $res = mysqli_query($con,$query);

             if($res)
             {
                 $query = "UPDATE `products` SET `qty`=`qty` - ".$itemsqty[$i]." WHERE id=".$itemsid[$i];
                 $res = mysqli_query($con,$query);
                 if($res)
                 {
                 }
                 else
                 {
                    echo $query;
                 }
             }
             else
             {
                 echo $query;
             }
          }
          if($checkBalance == 1)
          {
              $query = "INSERT INTO `transactions`(`amount`, `invoiceid`, `description`, `isdebit`) 
              VALUES ($received,$id,'Items Sold',0)";
              $ans = mysqli_query($con,$query);
            
              $diff = $diff * (-1);
              $query = "UPDATE customers set balance = $diff where id = ".$customerid;
              $res = mysqli_query($con,$query);
              if($res)
              {
                  echo $id;
              }
              else
              {
                  echo 'Balance Not Updated';
              }
          }
          else
          {
            $query = "INSERT INTO `transactions`(`amount`, `invoiceid`, `description`, `isdebit`) 
            VALUES (".($received-$return).",$id,'Items Sold',0)";
            $ans = mysqli_query($con,$query);
            $query = "UPDATE customers set balance = 0 where id = ".$customerid;
            $res = mysqli_query($con,$query);
            if($res)
            {
                echo $id;
            }
            else
            {
                echo 'Balance Not Updated';
            }
          }
        }else {
          echo "data not inserted properly";
        }
    }
    if($_POST['action'] == "purchaseItem")
    {
        $id = 0;
        $supplierid = $_POST['supplierid'];
        $subtotal = $_POST['subtotal'];
        $discount = $_POST['discount'];
        $total = $_POST['total'];
        $received = $_POST['received']; 
        $return = $_POST['return'];
        $itemsid = $_POST['id'];
        $itemsqty = $_POST['qty'];
        $itemsprice = $_POST['itemsprice'];
        $insertquery = '';
        $diff = $received - $total; 
        $checkBalance = 0;
        if($diff < 0)
        {
            $checkBalance = 1;
            $insertquery = "INSERT INTO `invoice`(`supplierid`, `subtotal`, `discount`, `total`, `received`, `type`,`status`) 
            VALUES ($supplierid,$subtotal,$discount,$total,$received,'P',0)";    
        }
        else
        {
            $insertquery = "INSERT INTO `invoice`(`supplierid`, `subtotal`, `discount`, `total`, `received`, `type`) 
            VALUES ($supplierid,$subtotal,$discount,$total,$received,'P')";
        }
        $res = mysqli_query($con,$insertquery);
        if($res) {
          $id = mysqli_insert_id($con);
          
          for ($i=0; $i < count($itemsid); $i++) {
             $total = $itemsqty[$i] * $itemsprice[$i];
             $query = "INSERT INTO `sales`(`invoiceid`, `productid`, `qty`, `price`, `total`, `type`) 
             VALUES ($id,".$itemsid[$i].",".$itemsqty[$i].",".$itemsprice[$i].",".$total.",'P')"; 
             $res = mysqli_query($con,$query);

             if($res)
             {
                 $query = "UPDATE `products` SET `qty`=`qty` + ".$itemsqty[$i]." WHERE id=".$itemsid[$i];
                 $res = mysqli_query($con,$query);
                 if($res)
                 {
                 }
                 else
                 {
                    echo $query;
                 }
             }
             else
             {
                 echo $query;
             }
          }
          if($checkBalance == 1)
          {
              $query = "INSERT INTO `transactions`(`amount`, `invoiceid`, `description`, `isdebit`) 
              VALUES ($received,$id,'Items Purchased',1)";
              $ans = mysqli_query($con,$query);
            
              $diff = $diff * (-1);
              $query = "UPDATE suppliers set balance = $diff where id = ".$supplierid;
              $res = mysqli_query($con,$query);
              if($res)
              {
                  echo $id;
              }
              else
              {
                  echo 'Balance Not Updated';
              }
          }
          else
          {
            $query = "INSERT INTO `transactions`(`amount`, `invoiceid`, `description`, `isdebit`) 
            VALUES (".($received-$return).",$id,'Items Purchased',1)";
            $ans = mysqli_query($con,$query);
            $query = "UPDATE suppliers set balance = 0 where id = ".$supplierid;
            $res = mysqli_query($con,$query);
            if($res)
            {
                echo $id;
            }
            else
            {
                echo 'Balance Not Updated';
            }
          }
        }else {
          echo "data not inserted properly";
        }
    }
    if($_POST['action'] == "generateBill")
    {
        $id = $_POST['id'];
        $res = array();
        $items = array();
        $query = "SELECT * from invoice where id = ".$id;
        $a = mysqli_query($con,$query);
        while($i = mysqli_fetch_array($a))
        {
            $b = "SELECT name from customers where id=".$i['customerid'];
            $c = mysqli_query($con,$b);
            $j = mysqli_fetch_assoc($c);
            $res[] = $j['name'];

            $res[] = $i['id'];
            $res[] = $i['datecreated'];
            
            $res[] = $i['subtotal'];
            $res[] = $i['total'] - $i['subtotal'] + $i['discount'];
            $res[] = $i['discount'];
            $res[] = $i['total'];
            $res[] = $i['received'];
            if(($i['received'] - $i['total']) < 0)
            {
                $res[] = '-';
            }
            else
            {
                $res[] = $i['received'] - $i['total'];
            }
            
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
                $item[]  = $z['name'];
            }
            $item[] = $i['price'];
            $item[] = $i['qty'];
            $item[] = $i['total'];
            $count++;
            $items[] = $item;
        }
        $output = '<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
                font-family: "Yanone";
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
                font-family: "DancingScript";
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
                        <td>'.$res[0].'</td>
                    </tr>
                    <tr>
                        <th>Invoice:</th>
                        <td>'.$res[1].'</td>
                    </tr>
                    <tr>
                        <th>Printed On:</th>
                        <td>'.$res[2].'</td>
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
                        '; 
                            for ($i=0; $i < count($items); $i++) { 
                                $output .= '<td>'.$items[$i][0].'</td>';
                                $output .= '<td>'.$items[$i][1].'</td>';
                                $output .= '<td>'.$items[$i][2].'</td>';
                                $output .= '<td>'.$items[$i][3].'</td>';
                                $output .= '<td>'.$items[$i][4].'</td>';
                            }
                        $output .='
                    </tbody>
                    <tbody class="total">
                        <tr>
                            <th colspan="3" style="text-align: right;">Subtotal</td>
                            <td colspan="2">Rs. '.$res[3].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Previous Balance</td>
                            <td colspan="2">Rs. '.$res[4].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Discount</td>
                            <td colspan="2">Rs. '.$res[5].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Total</td>
                            <td colspan="2">Rs. '.$res[6].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Paid</td>
                            <td colspan="2">Rs. '.$res[7].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Return</td>
                            <td colspan="2">Rs. '.$res[8].'</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="footer">
                <h4>Shopping karne ka Shukria!</h4>
            </div>
        </div>
    ';

    $out = array();
    $out[] = $output;
    echo json_encode($out);
    }
    if($_POST['action'] == "generateBillS")
    {
        $id = $_POST['id'];
        $res = array();
        $items = array();
        $query = "SELECT * from invoice where id = ".$id;
        $a = mysqli_query($con,$query);
        while($i = mysqli_fetch_array($a))
        {
            $b = "SELECT name from suppliers where id=".$i['supplierid'];
            $c = mysqli_query($con,$b);
            $j = mysqli_fetch_assoc($c);
            $res[] = $j['name'];

            $res[] = $i['id'];
            $res[] = $i['datecreated'];
            
            $res[] = $i['subtotal'];
            $res[] = $i['total'] - $i['subtotal'] + $i['discount'];
            $res[] = $i['discount'];
            $res[] = $i['total'];
            $res[] = $i['received'];
            if(($i['received'] - $i['total']) < 0)
            {
                $res[] = '-';
            }
            else
            {
                $res[] = $i['received'] - $i['total'];
            }
            
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
                $item[]  = $z['name'];
            }
            $item[] = $i['price'];
            $item[] = $i['qty'];
            $item[] = $i['total'];
            $count++;
            $items[] = $item;
        }
        $output = '<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
                font-family: "Yanone";
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
                font-family: "DancingScript";
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
                        <td>'.$res[0].'</td>
                    </tr>
                    <tr>
                        <th>Invoice:</th>
                        <td>'.$res[1].'</td>
                    </tr>
                    <tr>
                        <th>Printed On:</th>
                        <td>'.$res[2].'</td>
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
                        '; 
                            for ($i=0; $i < count($items); $i++) { 
                                $output .= '<td>'.$items[$i][0].'</td>';
                                $output .= '<td>'.$items[$i][1].'</td>';
                                $output .= '<td>'.$items[$i][2].'</td>';
                                $output .= '<td>'.$items[$i][3].'</td>';
                                $output .= '<td>'.$items[$i][4].'</td>';
                            }
                        $output .='
                    </tbody>
                    <tbody class="total">
                        <tr>
                            <th colspan="3" style="text-align: right;">Subtotal</td>
                            <td colspan="2">Rs. '.$res[3].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Previous Balance</td>
                            <td colspan="2">Rs. '.$res[4].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Discount</td>
                            <td colspan="2">Rs. '.$res[5].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Total</td>
                            <td colspan="2">Rs. '.$res[6].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Paid</td>
                            <td colspan="2">Rs. '.$res[7].'</td>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: right;">Return</td>
                            <td colspan="2">Rs. '.$res[8].'</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="footer">
                <h4>Business karne ka Shukria!</h4>
            </div>
        </div>
    ';

    $out = array();
    $out[] = $output;
    echo json_encode($out);
    }


}

?>