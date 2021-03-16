<?php
    if (isset($_POST['search'])) {
        $valueToSearch =  $_POST['valueToSearch'];
        $query = "SELECT * FROM `contacts` WHERE CONCAT(`id`, `c_name`, `email`, `phone`, `created`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
    }
    else{
        $query = "SELECT * FROM `contacts`";
        $search_result = filterTable($query);
    }

    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "contact");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search_Contact</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
</head>
<body>
<a href="index.php" class="btn btn-success"><-- Home</a>
    <form action="search.php" method="post">
    <p align="center"> 
            <input type="text" name="valueToSearch" placeholder="Search..." class="text">
            <input type="submit" name="search" value="Search" class="btn btn-warning"> </p>
            <table class="table">
                <tr class="child">
                <th>ID</th>
                <th>Contact_Name</th>
                <th>Email_Contact</th>
                <th>Phone</th>
                <th>Created</th>
            </tr>
            <?php while($row = mysqli_fetch_array( $search_result)):?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['c_name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['created'];?></td>
            </tr>
            <?php endwhile;?>
       </table> 
    </form>
</body>
</html>