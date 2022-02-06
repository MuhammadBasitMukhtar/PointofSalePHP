<?php
include 'connection.php';
session_start();
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
    if($_GET['action'] == "listCustomer")
    {
        $query = "SELECT * FROM customers where isDeleted = 0";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        print(json_encode($rows));
    }
    if($_GET['action'] == "listSupplier")
    {
        $query = "SELECT * FROM suppliers where isDeleted = 0";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        print(json_encode($rows));
    }
    if($_GET['action'] == "listProduct")
    {
        $query = "SELECT * FROM products where isDeleted = 0";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        print(json_encode($rows));
    }
    if($_GET['action'] == "listExpense")
    {
        $query = "SELECT * FROM expenses where isDeleted = 0";
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
        $query = "SELECT * FROM transactions where isDeleted = 0 order by datecreated desc";
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
    if($_POST['action'] == "loadProductSales")
    {
        $from = $_POST['from'];
        $to = $_POST['to'];
        $id = $_POST['id']; 
        $customerid = $_POST['customerid'];
        $supplierid = $_POST['supplierid'];
        $type = $_POST['type'];
        $query = "";
        if($customerid == 0)
        {
            if($supplierid == 0)
            {
                if($type == 0)
                {
                    $query = "select id, invoiceid,(SELECT cost from products where id = productid) as cost, (SELECT name from customers where id = (select customerid from invoice where id=invoiceid)) as customername,(SELECT name from suppliers where id = (select supplierid from invoice where id=invoiceid)) as suppliername, productid, (select name from products where id = productid) as productname, qty, price, total,(select datecreated from invoice where id = invoiceid) as datesold, type from sales where productid = $id and (select datecreated from invoice where id = invoiceid) between '$from' and '$to' order by datesold desc";
                    
                }
                else
                {
                    $query = "select id, invoiceid,(SELECT cost from products where id = productid) as cost, (SELECT name from customers where id = (select customerid from invoice where id=invoiceid)) as customername,(SELECT name from suppliers where id = (select supplierid from invoice where id=invoiceid)) as suppliername, productid, (select name from products where id = productid) as productname, qty, price, total,(select datecreated from invoice where id = invoiceid) as datesold, type from sales where productid = $id and type = '$type' and (select datecreated from invoice where id = invoiceid) between '$from' and '$to' order by datesold desc";
                }
            }
            else
            {
                $query = "select id, invoiceid,(SELECT cost from products where id = productid) as cost, (SELECT name from customers where id = (select customerid from invoice where id=invoiceid)) as customername,(SELECT name from suppliers where id = (select supplierid from invoice where id=invoiceid)) as suppliername, productid, (select name from products where id = productid) as productname, qty, price, total,(select datecreated from invoice where id = invoiceid) as datesold, type from sales where productid = $id and (select supplierid from invoice where id = invoiceid) = $supplierid and (select datecreated from invoice where id = invoiceid) between '$from' and '$to' order by datesold desc";
            }
        }
        else
        {
            $query = "select id, invoiceid,(SELECT cost from products where id = productid) as cost, (SELECT name from customers where id = (select customerid from invoice where id=invoiceid)) as customername,(SELECT name from suppliers where id = (select supplierid from invoice where id=invoiceid)) as suppliername, productid, (select name from products where id = productid) as productname, qty, price, total,(select datecreated from invoice where id = invoiceid) as datesold, type from sales where productid = $id and (select customerid from invoice where id = invoiceid) = $customerid and (select datecreated from invoice where id = invoiceid) between '$from' and '$to' order by datesold desc";
        }
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        echo json_encode($rows);
    }
    if($_POST['action'] == "loadIndexStatsTop")
    {
        $query = "SELECT DISTINCT (Select SUM(total) FROM `sales` where type = 'S') as sales ,(SELECT SUM(total) from `sales` where type = 'P')as purchases, (Select COUNT(id) from products) as total_products, (Select COUNT(id) from customers) as total_customers,((Select SUM(total) FROM `sales` where type = 'S') -  (SELECT SUM(total) from `sales` where type = 'P')) as profit";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        echo json_encode($rows);
    }
    if($_POST['action'] == "loadProductStats")
    {
        $id = $_POST['id']; 
        $query = "SELECT productid,(select name from products where id = productid) as name,(select cost from products where id = productid) as cost,(select price from products where id = productid) as price,(select qty from products where id = productid) as qty, SUM(qty) as sold_qty, (SUM(qty) * price) as sale ,((SUM(qty) * price) - ((select cost from products where id = productid) * SUM(qty))) as earning FROM sales where type = 'S' and productid = $id GROUP BY productid";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        echo json_encode($rows);
    }
    if($_POST['action'] == "loadProfile")
    {
        $query = "SELECT * from users where id = 1";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        echo json_encode($rows);
    }
    if($_POST['action'] == "loadShop")
    {
        $query = "SELECT * from profile where id = 1";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        echo json_encode($rows);
    }
    if($_POST['action'] == "checkPass")
    {
        $pass = $_POST['oldPassword'];
        $query = "SELECT password from users where id = 1";
        $res = mysqli_query($con,$query);
        $rows = array();
        $message = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows['pass'] = $r;
        }        
        if($rows['pass'][0] == $pass)
        {
            $message['success'] = 1;
        }
        else
        {
            $message['error'] = 1;
            $message['rows'] = $rows['pass'][0];
        }
        echo json_encode($message);
    }
    if($_POST['action'] == "updateProfile")
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $newPass = $_POST['newPassword'];
        $check = $_POST['updatePass'];
        $query = "UPDATE users set name = '$name', username = '$username' where id = 1";
        if($check == 1)
        {
            $query = "UPDATE users set name = '$name', username = '$username', password = '$newPass' where id = 1";
        }
        $res = mysqli_query($con,$query);
        $_SESSION['name']=$name;
        $rows = array();
        $rows['success'] = 1;
        echo json_encode($rows);
    }
    if($_POST['action'] == "updateShop")
    {
        $name = $_POST['shopname'];
        $slogan = $_POST['slogan'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];
        $messagepurchase = $_POST['messagepurchase'];
        $query = "UPDATE profile set name = '$name', slogan = '$slogan', address = '$address', contact = '$contact', message = '$message', messagepurchase = '$messagepurchase' where id = 1";
        $res = mysqli_query($con,$query);
        $rows = array();
        $rows['success'] = 1;
        echo json_encode($rows);
    }
    if($_POST['action'] == "authSign")
    {
        $uname=$_POST['username'];
        $password=$_POST['password'];
    
        $sql="select * from users where username='".$uname."'AND password='".$password."' limit 1";
    
        $result=mysqli_query($con,$sql);
        $arr = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)==1){
            print_r($arr['name']);
            $_SESSION['name'] = $arr['name'];
            header("location: ../index.php");
        }
        else{
            echo " You Have Entered Incorrect Password";
            exit();
        }
    }

    if($_POST['action'] == "loadTransaction")
    {
        $from = $_POST['from'];
        $to = $_POST['to']; 
        $query = "SELECT * FROM transactions where datecreated between '$from' and '$to' and isDeleted = 0 order by datecreated desc";
        $res = mysqli_query($con,$query);
        $rows = array();
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }        
        echo json_encode($rows);
    }
    if($_POST['action'] == "prevPay")
    {
        $id = $_POST['id'];
        $type=$_POST['type'];
        $cid = $_POST['cid'];
        $amount = $_POST['amount'];
        $received = $_POST['received'];
        if($received >= $amount)
        {
            $query = "INSERT INTO `transactions`(`amount`, `invoiceid`, `description`, `isdebit`) 
            VALUES ($amount,$id,'Previous Amount Paid',0)";
            $ans = mysqli_query($con,$query);
            $query = "UPDATE invoice set received = received + $amount, status = 1 where id = $id";
            $ans = mysqli_query($con,$query);
            if($type == 'S')
            {
                $query = "UPDATE customers set balance = 0 where id = $cid";
                $ans = mysqli_query($con,$query);
            }
            else
            {
                $query = "UPDATE suppliers set balance = 0 where id = $cid";
                $ans = mysqli_query($con,$query);
            }
        }
        else
        {
            $query = "INSERT INTO `transactions`(`amount`, `invoiceid`, `description`, `isdebit`) 
            VALUES ($received,$id,'Previous Amount Paid',0)";
            $ans = mysqli_query($con,$query);
            $query = "UPDATE invoice set received = received + $received where id = $id";
            $ans = mysqli_query($con,$query);
            if($type == "S")
            {
                $query = "UPDATE customers set balance = balance - $received where id = $cid";
                $ans = mysqli_query($con,$query);
            }
            else
            {
                $query = "UPDATE suppliers set balance = balance - $received where id = $cid";
                $ans = mysqli_query($con,$query);
            }
        }

        
        echo json_encode("Successfull");
    }

    if($_POST['action'] == "loadInvoiceID")
    {
        $id = $_POST['id'];
        $rows = array();
        $items = array();
        $query = "SELECT id,supplierid,customerid,(select name from customers where id = customerid) as customername,(select name from suppliers where id = supplierid) as suppliername, subtotal, (IF(`status` = 1, 'Paid', 'Due')) As status, discount,total,received,datecreated, type FROM invoice where id = $id";
        $res = mysqli_query($con,$query);
        while($r = mysqli_fetch_array($res))
        {
            $rows[] = $r;
        }
        $query = "SELECT id, (select name from products where id = productid) AS name, qty, price, total FROM `sales` where invoiceid = $id";
        $res = mysqli_query($con,$query);
        while($r = mysqli_fetch_array($res))
        {   
            $item = array();
            $item[] = $r;
            $items[] = $item;
        }        
        $rows[0]['items'] = $items;
        echo json_encode($rows);
    }
    if($_POST['action'] == "loadInvoice")
    {
        $query = "";
        $type = $_POST['type'];
        $customerid = $_POST['customerid'];
        $supplierid = $_POST['supplierid'];
        $from = $_POST['from'];
        $to = $_POST['to']; 
        if($customerid == 0)
        {
            if($supplierid == 0)
            {
                if($type == 0)
                {
                    $query = "SELECT id, (select name from suppliers where id = supplierid) as suppliername,(select name from customers where id = customerid) as customername, subtotal, discount , total, received, datecreated, (IF(`status` = 1, 'Paid', 'Due')) As status, type FROM invoice where datecreated between '$from' and '$to' order by datecreated desc";
                }
                else
                {
                    $query = "SELECT id, (select name from suppliers where id = supplierid) as suppliername,(select name from customers where id = customerid) as customername, subtotal, discount , total, received, datecreated, (IF(`status` = 1, 'Paid', 'Due')) As status, type FROM invoice where type = '$type' and datecreated between '$from' and '$to' order by datecreated desc";
                }
            }
            else
            {
                $query = "SELECT id, (select name from suppliers where id = supplierid) as suppliername, subtotal, discount , total, received, datecreated, (IF(`status` = 1, 'Paid', 'Due')) As status, type FROM invoice where datecreated between '$from' and '$to' and supplierid = $supplierid order by datecreated desc";
            }
        }
        else
        {
            $query = "SELECT id, (select name from customers where id = customerid) as customername, subtotal, discount , total, received, datecreated, (IF(`status` = 1, 'Paid', 'Due')) As status, type FROM invoice where datecreated between '$from' and '$to' and customerid = $customerid  order by datecreated desc";
        }
        
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
    if($_POST['action'] == "editCustomer")
    {
        $phone = $_POST['phone'];
        $address = $_POST['address']; 
        $id =$_POST['editid'];
        $name = $_POST['name'];
        $insertquery ="UPDATE `customers` SET `name`='$name', `phone`='$phone', `address`='$address' where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
        }
    }
    if($_POST['action'] == "delCustomer")
    {
        $id =$_POST['delid'];
        $insertquery ="UPDATE `customers` SET `isDeleted`=1 where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
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
    if($_POST['action'] == "editSupplier")
    {
        $phone = $_POST['phone'];
        $address = $_POST['address']; 
        $id =$_POST['editid'];
        $name = $_POST['name'];
        $insertquery ="UPDATE `suppliers` SET `name`='$name', `phone`='$phone', `address`='$address' where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
        }
    }
    if($_POST['action'] == "delSupplier")
    {
        $id =$_POST['delid'];
        $insertquery ="UPDATE `suppliers` SET `isDeleted`=1 where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
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
    if($_POST['action'] == "editProduct")
    {
        $cost = $_POST['cost'];
        $price = $_POST['price']; 
        $id =$_POST['editid'];
        $name = $_POST['name'];
        $insertquery ="UPDATE `products` SET `name`='$name', `cost`='$cost', `price`='$price' where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
        }
    }
    if($_POST['action'] == "delProduct")
    {
        $id =$_POST['delid'];
        $insertquery ="UPDATE `products` SET `isDeleted`=1 where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
        }
    }
    if($_POST['action'] == "addExpense")
    {
        $details = $_POST['details'];
        $amount = $_POST['amount'];
        
        $insertquery ="INSERT INTO `expenses` (`details`, `amount`,`isDeleted`)
        VALUES ('$details', $amount ,0 )";
        
          $res = mysqli_query($con,$insertquery);
          if($res) {
            $id = mysqli_insert_id($con);
            $query = "INSERT INTO `transactions`(`amount`, `expenseid`, `description`, `isdebit`) 
            VALUES ($amount,$id,'Expense Debited',1)";
            $ans = mysqli_query($con,$query);
            echo "<script>alert('data inserted properly');</script>";
          }else {
            echo "<script>alert('data not inserted properly');</script>";
          }
    }
    if($_POST['action'] == "editExpense")
    {
        $amount = $_POST['amount'];
        $details = $_POST['details']; 
        $id =$_POST['editid'];
        $insertquery ="UPDATE `expenses` SET `details`='$details', `amount`='$amount' where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
        }
        $insertquery ="UPDATE `transactions` SET `amount`='$amount' where expenseid=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
        }
    }
    if($_POST['action'] == "delExpense")
    {
        $id =$_POST['delid'];
        $insertquery ="UPDATE `expenses` SET `isDeleted`=1 where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
        }
        $insertquery ="UPDATE `transactions` SET `isDeleted`=1 where expenseid=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
        }
    }
    if($_POST['action'] == "updateProductStatus")
    {
        $id =$_POST['id'];
        $insertquery ="UPDATE `products` SET `isActive`= IF(`isActive` = 1, 0, 1) where id=".$id;
        $res = mysqli_query($con,$insertquery);
        if($res) {
            echo "<script>alert('data updated properly');</script>";
        }else {
            echo "<script>alert('data not updated properly');</script>";
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
                                $output .= '<tr>';
                                $output .= '<td>'.$items[$i][0].'</td>';
                                $output .= '<td>'.$items[$i][1].'</td>';
                                $output .= '<td>'.$items[$i][2].'</td>';
                                $output .= '<td>'.$items[$i][3].'</td>';
                                $output .= '<td>'.$items[$i][4].'</td>';
                                $output .= '</tr>';
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
                                $output .= '<tr>';
                                $output .= '<td>'.$items[$i][0].'</td>';
                                $output .= '<td>'.$items[$i][1].'</td>';
                                $output .= '<td>'.$items[$i][2].'</td>';
                                $output .= '<td>'.$items[$i][3].'</td>';
                                $output .= '<td>'.$items[$i][4].'</td>';
                                $output .= '</tr>';
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