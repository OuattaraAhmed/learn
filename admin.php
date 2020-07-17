


<html lang="fr">
<head>
  <title>ADMINISTRATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.jss"></script>

  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
  
</head>
<body>  
               
                 <div class="container">
                            <h1 style="text-align: center; color: red">LISTE DES ELEVES</h1>
                          <div class="row">
                            <div class="col-md-offset-2">      
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                      <tr style="background-color: #5DADE2">                    
                                                  <td>Id</td>
                                                  <td>nom</td>
                                                  <td>Email</td>
                                                  <td>Mot de Passe</td>
                                                  <td> Date </td>
                                      </tr>
                                  </thead>
                                  <tbody>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "learning";
                            
                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            if (!$conn) {
                              die("Connection failed: " . mysqli_connect_error());
                            }
                            
                            $sql = "SELECT * FROM user";
                            $result = $conn->query($sql);
        
                            if ($result->num_rows > 0) {
                                  
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                                echo "<tr><td>".$row["id"]." </td><td> ".$row["nom"]."</td><td>".$row["email"]." </td><td>".$row["password"]."</td><td>".$row["datec"]." </td></tr>";
                              }
                              echo "</table>";
                            } else {
                              echo "0 results";
                            }
                            $conn->close();
                            ?>
            

                      </tbody>
            </table>
        </div> 

   </body>
</html> 

