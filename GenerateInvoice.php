<!DOCTYPE html>
<html lang="en">

<?php
include("invoiceTable.php");
include("insertInvoice.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/RO.css">
    <script src="js/GenerateInvoice.js"></script>
    <title>Generate Invoice</title>
</head>
<body>
     <h1>
        <img class="penguin" src="images/penguinautopeng.png" alt="penguin auto">    
        Penguin Auto Specialist - Generate Invoice
    </h1>
    <nav>
        <a href="index.html">
            <p>Home</p>
        </a>
        <a href="ServiceHome.html">
            <p>Service</p>
        </a>
        <a href="PartsPortal.html">
            <p>Parts</p>
        </a>
    </nav>
    <form>
        <br>
        <label for="Customer">Customer: </label>
        <select id="Customer">
            <option value="placeholder"> Customer placeholder</option>
        </select><br><br>
        <label for="Vehicle">Vehicle: </label>
        <select id="Vehicle">
            <option value="placeholder">Vehicle placeholder</option>
        </select><br><br>   
        <label>Date Recieved</label>
        <input type="date" id="ScheduleDate">
        <label>Time Started</label>
        <input type="time">
        <label>Time Completed</label>
        <input type="time"><br><br>
        <label for="vehicle">Technician: </label>
        <select id="Customer">
            <option value="Tech1">Tech 1</option>
            <option value="Tech2">Tech 2</option>
            <option value="Tech3">Tech 3</option>
            <option value="Tech4">Tech 4</option>            
        </select>
        <label for="SA">Service Advisor: </label>
        <select id="SA">
            <option value="SA1">Service Advisor 1</option>
            <option value="SA2">Service Advisor 2</option>
        </select><br><br>
        <label>Repair Task:</label>
        <input type="search" id="repairTask"><br><br>
        <label>Repair Price</label>
        <input type="number" id="repairPrice"><br><br>
        <label>Paid:</label>
        <label class="switch">
            <input type="checkbox">            
            <span class="slider"></span>
        </label><br><br>
        <input type="submit" id="generateRO" value="Generate">
        
    </form><br><br>
    <table>
        <th>
            RO Number
        </th>
        <th>
            Customer Name
        </th>        
        <th>
            Vehicle ID
        </th>
        <th>
            Repair Task
        </th>
        <th>
            Price
        </th>
        <th>
            Paid
        </th>
        <th>
            Technician
        </th>
        <?php
            if(is_array($fetchData)){      
            $sn=1;
            foreach($fetchData as $data){
        ?>
        <tr>
        <td><?php echo $data['id']??''; ?></td>
        <td><?php echo $data['id']??''; ?></td>
        <td><?php echo $data['vehicleid']??''; ?></td>
        <td><?php echo $data['taskName']??''; ?></td>
        <td><?php echo $data['taskPrice']??''; ?></td>
        <td><?php echo $data['paid']??''; ?></td>
        <td><?php echo $data['techId']??''; ?></td>
       </tr>
       <?php
        $sn++;}}else{ ?>
        <tr>
          <td colspan="8">
      <?php echo $fetchData; ?>
    </td>
      <tr>
      <?php
      }?>
    </table>
</body>
</html>