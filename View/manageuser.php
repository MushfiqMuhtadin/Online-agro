  <?php
    session_start();
@include '../model/config.php';
if (isset($_SESSION['flag'])) {
    
?>
  
  
  <?php
    require_once('../Model/usermodel.php');
    $conn = getConnection();
    $q = "SELECT * from users";
    $result = $conn->query($q);
    ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Manage Users</title>
      <style>
          table {
              border-collapse: collapse;
              width: 80%;
              color: black;
              font-family: monospace;
              font-size: 25px;
              text-align: center;
          }

          th {
              background-color: rgb(109, 104, 150);
              color: white;
              height: 100px;
              border: 1px black;
          }

          tr {
              background-color: bisque;
              height: 50px;
          }

          tr button {
              background-color: red;
              color: white;
              width: 70px;
          }
          tr a{
            text-decoration: none;
            color: white;
          }

          p {
              display: inline;
          }
      </style>
  </head>

  <body>
      <center>
          <table>
              <center>
                  <br><br><br><br>
                  <h1>Manage User</h1>
              </center>
              <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Usertype</th>
                  <th>Action</th>
              </tr>


              <?php
                

                $conn = mysqli_connect("localhost", "root", "", "agro");
                $sql = "SELECT id, username, email, phone, address, usertype from users";
                $result = $conn->query($sql);

                if (isset($_SESSION['flag'])) {

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["address"] . "</td><td>" . $row["usertype"] . "</td><td>" . "<button><a href='../controller/deleteuser.php?deleteid={$row["id"]}&'>Delete</a></button>" . "</td><tr>";
                        }
                        echo "</table>";
                    }
                }

                ?>

          </table>
      </center>
  </body>

  </html
  <?php } ?>