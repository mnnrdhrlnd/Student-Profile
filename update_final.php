
<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "1234";
    $db_name = "student";

    // Create Connection
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

    //Check Connection
    if(!$conn){
        die("Connection Failed");
    }
    echo "<h4><center>Connected Successfully</center></h4><hr>";

    if(isset($_REQUEST['update'])){
        if( ($_REQUEST['Name'] == "" ) || ($_REQUEST['con_no'] == "" ) || ($_REQUEST['socialm'] == "" ) || ($_REQUEST['email'] == "" ) ){
            echo "<small>Fill all field...</small><hr>";
        }else{
            $Name = $_REQUEST['Name'];
            $con_no = $_REQUEST['con_no'];
            $socialm = $_REQUEST['socialm'];
            $sql = "UPDATE final_tbl SET Name = '$Name', con_no = '$con_no', socialm = '$socialm', email = '$email' WHERE id_num = '{$_REQUEST['id_num']}' ";
            if(mysqli_query($conn, $sql)){
                echo "Updated";
            }
            else{
                echo "Unable to update";
            }
        }
        
    }
?>



<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Update Data</title>
  </head>
  <body>
      <form action="" method="post">
<link rel="stylesheet" href="">
    <center>
<br><br><br>
   

    <style>
        
     body {
  background-image: url('rtu.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

      img {
  border-radius: 50%;
}

        body {
  font-family: Algerian;
}
p {
 color: white;
}
}
div.background {
  background: url(klematis.jpg) repeat;
  border: 2px solid black;
}

div.transbox {
  margin: 25px;
  background-color: #ffffff;
  border: 3px solid black;
  opacity: 0.9;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #618685;
}
  </style>
}

    <center><img src="logo-big.png" alt="Avatar" class="avatar"></center><br>
    <div class="background">
  <div class="transbox">
      <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <?php
                    if(isset($_REQUEST['edit'])){
                        $sql = "SELECT * FROM final_tbl where id_num = {$_REQUEST['id_num']}";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                    }
                ?>
               <h1> Search Record</h1>
                <form action="" method="POST">
                    <div class="form-group">

                        <label for="Name"><b>Name</label>
                        <input type="text" class="form-control" name="Name" id="Name" value=  "<?php if(isset($row["Name"])){echo$row["Name"];} ?>">
                    </div>
                    <div class="form-group">
                        <label for="con_no">Contact</label>
                        <input type="text" class="form-control" name="con_no" id="con_no" value="<?php if(isset($row["con_no"])){
                            echo $row["con_no"];
                        } ?>">
                    </div>
                    <div class="form-group">
                        <label for="socialm">SocialMedia</label>
                        <input type="text" class="form-control" name="socialm" id="socialm" value="<?php if(isset($row["socialm"])){
                            echo $row["socialm"];
                        } ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php if(isset($row["email"])){
                            echo $row["email"];
                        } ?>">
                    </div>
                    <input type="hidden" name="id_num" value="<?php echo $row['id_num'] ?>">
                    <button type="submit" class="btn btn-success" name="update"><b>Update</button>
                    <input type=button class="btn btn-success" onClick="parent.location='http://localhost/activities/distribution/index.html'" value='Home'>
                </form>
            </div>
            <div class="col-sm-6 offset-sm-1">
<center><h1>View Record</h1>
                <?php
                    $sql = "SELECT * FROM final_tbl";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        echo "<table class='table'>";
                            echo "<thead>";
                                echo "<tr>";
                                    
                                    echo "<th>Name</th>";
                                    echo "<th>Contact</th>";
                                    echo "<th>SocialMedia</th>";
                                    echo "<th>Email</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    
                                        echo "<td>".$row['Name']."</td>";
                                        echo "<td>".$row['con_no']."</td>";
                                        echo "<td>".$row['socialm']."</td>";
                                        echo "<td>".$row['email']."</td>";
                                        echo '<td><form action="" method="POST"><input type="hidden" name="id_num" value=' . $row["id_num"] . ' ><input type="submit" class="btn btn-sm btn-warning" name="edit" value="Edit" ></form></td>';

                                    echo "</tr>";
                                }
                            echo "</tbody>";
                        echo "<table>";
                    }else{
                        echo "0 result";
                    }

                ?>
</center>
</div>
</b>
</button>
</b>
</label>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

            </div>
        </div>
    </div>
    </div>


