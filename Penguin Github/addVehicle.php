<!DOCTYPE html>
<html lang="en">
<?php
include("vehicleTable.php");
include("insertVehicle.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<H>, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <title>Add Customer</title>
</head>

<body>

    <h1>
        <img class="penguin" src="images/penguinautopeng.png" alt="Penguin Auto - Add Customer"> Penguin Auto Specialist - Add Vehicle
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
    </nav><br><br>


    <form method="post">
        <label>
            Firstname: 
        </label>
        <input type="text" id="firstName" class="form-control" placeholder="First Name" name="firstName"><br><br>
        <label>
            Lastname:
        </label>
        <input type="text" id="lastName" class="form-control" placeholder="Last Name" name="lastName"><br><br>
        <label>
            Address: 
        </label>
        <input type="text" id="address" class="form-control" placeholder="Address" name="address"><br><br>
        <label>
            Phone: 
        </label>
        <input type="text" id="mobile" class="form-control" placeholder="##########" name="mobile"><br><br>
        <label>
            Email: 
        </label>
        <input type="email" id="email" class="form-control" placeholder="email" name="email"><br><br>
        <input type="submit" name="save" id="addCustSubmit">
    </form>
    <br><br>
    <table>
        <tr>
            <th>
                Vehicle ID
            </th>
            <th>
                Owner: 
            </th>
            <th>
                Model: 
            </th>
            <th>
                Manufacturer:
            </th>
            <th>
                Color:
            </th>
            <th>
                Year:
            </th>
            <th>
                VIN:
            </th>
            <th>
                License Plate: 
            </th>
        </tr>
        <?php
            if(is_array($fetchData)){      
            $sn=1;
            foreach($fetchData as $data){
        ?>
        <tr>
        <td><?php echo $data['id']??''; ?></td>
        <td><?php echo $data['customerid']??''; ?></td>
        <td><?php echo $data['model']??''; ?></td>
        <td><?php echo $data['manufacturer']??''; ?></td>
        <td><?php echo $data['color']??''; ?></td>
        <td><?php echo $data['year']??''; ?></td>
        <td><?php echo $data['VIN']??''; ?></td>
        <td><?php echo $data['licensePlate']??''; ?></td>
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