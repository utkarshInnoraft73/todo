<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('./vendor/autoload.php');
require('./ConnectDB.php');


/**
 * @Constant BOOKREAD.
 *  That is for the select the books read by user.
 */
define('ALLLIST', "SELECT * FROM todolist");


/**
 * Create the instase of the class Query.
 */
$db = new ConnectDB();
$conn = $db->connectDB();
$stmt = $conn->prepare(ALLLIST);
$stmt->execute();

// Fetch the result.
$result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Linked custom CSS. -->
  <link rel="stylesheet" href="./../../Style/Style.css">
  <!-- Linked font awesome. -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Custom script file for form validation. -->
  <script src="../../JS/script.js"></script>
  <!-- <script src="script.js"></script> -->
</head>

<body>
  <div class="wrapper">
    <div class="container mt-5">
      <table class="table caption-top  table-hover" id="myTable">
        <h1>TODO Items</h1>
        <a class="btn btn-primary my-2" href="/add-list">Add Item</a>
        <a class="btn btn-primary my-2 ms-2" href="/done-list">See done items</a>
        <thead>
          <tr class="table-dark py-3">
            <th scope="col">#</th>
            <th scope="col">Items</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          // Print all data in the form of HTML table.
          foreach ($result as $value) {
          ?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td><?php echo $value['list']; ?></td>
              <td><?php if ($value['status'] == 'Pending') { ?> <span class="text-danger"><?php echo $value['status']; ?></span><?php } else { ?> <span class="text-success"><?php echo $value['status'];
                                                                                                                                                                      } ?></span></td>
              <td><a href="/edit-list?id=<?php echo $value['ID']; ?>" class="btn btn-primary">Edit List</a></td>
            </tr>
          <?php $i++;
          } ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
