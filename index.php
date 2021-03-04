<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Bookstore</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php"><img class="nav-icon" src="./images/logo.png" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">BookStore
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkout.php">Checkout</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Book Price</th>
                            <th scope="col">Qunatity In Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
					require('mysqli_connect.php');
					$q1 = "SELECT * FROM `books`";
					$r1 = @mysqli_query($mysqli, $q1);
					while ($row = mysqli_fetch_array($r1, MYSQLI_ASSOC)) {;
						echo "<tr class='table-secondary'>"
							. "<td>" . $row['id'] . "</td>"
							. "<td>"
							. '<a href="session.php?id=' . $row['id'] .  '">'
							. $row['bookName']
							. '</a>'
							. "</td>"
							. "<td>" . "$" . $row['bookPrice'] . "</td>"
							. "<td>" . $row['quantity'] . "</td>"
							. "</tr>";
					}
					if (isset($_GET['a']) /*you can validate the link here*/) {
						$_SESSION['link'] = $_GET['a'];
					}
					?>
           	         </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>