<?php 

    $connect = mysqli_connect('localhost','root','','contact');
    if(!$connect)
    {
       echo ' Please Check Your Connection ';
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <title>Pagination</title>
</head>
<body>
    <h1 align="center">Список контактов с пагинацией</h1>
      <p align="center"> 
         <a href="search.php" class="btn btn-success">Поиск контакта</a>
         <a href="create_contact.php" class="btn btn-warning">CRUD Contact</a>
         <a href="create_contact_tel_email.php" class="btn btn-danger">Update Phone & Email</a>
      </p>

        <table class="table">
           <tr class="or">
                <td> ID </td>
                <td> Contact_Name </td>
                <td>Email </td>
                <td>Phone </td>
                <td>Created </td>
          </tr>

          <tr>
                <?php 
                if (isset($_GET['page'])) {
                    $page = $_GET['page']; 
                }
                else{
                    $page = 1;
                }
                if ($page == '' ||  $page == 1) {
                    $page1 = 0;
                }
                else{
                    $page1 = ($page*5)-5;
                }
                
                $sql = 'SELECT * FROM `contacts` ORDER BY id ASC LIMIT ' .$page1. ', 5 ';
                $data = $connect->query($sql);
                while($row = $data->fetch_assoc()){
                ?>
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['c_name'] ?> </td>
                    <td> <?php echo $row['email'] ?> </td>
                    <td> <?php echo $row['phone'] ?> </td>
                    <td> <?php echo $row['created'] ?> </td>
            </tr>

            <?php 
                }
            ?>
                
        </table>
        <?php
         //Pagination
         $sql = 'SELECT * FROM `contacts`';
         $data = $connect->query($sql);
         $records = $data->num_rows;
         $records_pages =  $records/5;
         $records_pages = ceil($records_pages);
         $prev = $page-1;
         $next = $page+1;

             echo '<div class="pagination">';
             if ($page >= 2) {
                echo '<li><a href="?page=1">First</a></li>';
             }

             if ($prev >= 1) {
                echo '<li><a href="?page='.$prev.'">Prev</a></li>';
             }
             if($records_pages >=2){
             for($r=1; $r <= $records_pages; $r++){
                 $active = $r == $page ? 'class="active"' : '';
                 echo '<li><a href="?page='.$r.'" '.$active.'>'.$r.'</a></li>';
               }
             }
             if ($next <= $records_pages && $records_pages >= 2) {
            echo '<li><a href="?page='.$next.'">Next</a></li>';
             }
             if($page != $records_pages && $records_pages >=2){
            echo '<li><a href="?page='.$records_pages.'">Last</a></li>';
              }
         echo '</div>';        
        ?>
</body>
</html>