<?php

$host = 'localhost'; // адрес сервера 
$database = 'contact'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysqli_connect($host, $user, $password, $database); 

if (isset($_GET['delete'])){
    $id = (int)$_GET['delete'];

    mysqli_query($link, "DELETE FROM contacts WHERE id=$id LIMIT 1");
}

if (isset($_GET['update'])){
    $id = (int)$_GET['update'];
    
    $result = mysqli_query($link, "SELECT * FROM contacts WHERE id = $id LIMIT 1");
    $oneNews = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $oneNews = reset($oneNews);
}

if (!empty($_POST)){


$id = intval($_POST['id']);
$email = htmlspecialchars($_POST['email']);
$picture = htmlspecialchars($filesname ?? '');
$phone = $_POST['phone'];
$created = date('Y-m-d H:i:s', time());
$updated = date('Y-m-d H:i:s', time());

if($id > 0){
$query = "UPDATE contacts SET  email='$email', phone='$phone', updated='$updated' WHERE id = $id LIMIT 1";
}
else{
$query = "INSERT INTO contacts VALUES(null, '$c_name', '$picture', '$email', '$phone', '$created', '$updated')";
}

$result = mysqli_query($link, $query);

}

$result = mysqli_query($link, "SELECT * FROM contacts ORDER BY id ");
	$allNews = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!doctype html>
  <html>
		<head>
			<title>Update Contact</title>
            <link rel="stylesheet" href="styles/style.css">
			<link rel="stylesheet" href="styles/bootstrap.css"> 
		</head>
	 <body>
		<a href="index.php" class="btn btn-success"><-- Home</a>
        
            <h1>Update Phone & Email Contact</h1>
			<h6 align="center">Вы можете удалить или изменить(update) контакт. Нажмите на
				               Update  и через знак "," добавьте несколько Email-адресов и номера телефонов.
			</h6>
        <form action="create_contact_tel_email.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?=$oneNews['id'] ?? '' ?>" name="id">
					<div>
						<label>Email. Через знак " , " вы можете добавить несколько Email</label><br>
                        <input type="text" value="<?=$oneNews['email'] ?? '' ?>, " name="email" class="form-control">
					</div>

					<div>
						<label>Phone. Через знак " , " вы можете добавить несколько Phone</label><br>
					<input type="text" value="<?=$oneNews['phone'] ?? '' ?>, " name="phone" class="form-control">
					</div>

					<div>
						<input type="submit" class="btn btn-success">
						</div>
		</form>
				<table class="table" border="1">
					<thead>
						<th>ID</th>
						<th>C_name</th>
						<th>Email</th>
                        <th>Phone</th>
						<th>Created</th>
						<th>Updated</th>
						<th>Action</th>
					</thead>
                    <tbody>
						<?php foreach($allNews as $news) : ?>
							<tr>
								<td><?=$news['id']?></td>
								<td><?=$news['c_name']?></td>
								<td><?=$news['email']?></td>
                                <td><?=$news['phone']?></td>
								<td><?=$news['created']?></td>
								<td><?=$news['updated']?></td>
								<td style="width:200px;">
								<a href="?delete=<?=$news['id']?>" class="btn btn-danger"> Delete</a>
								<a href="?update=<?=$news['id']?>" class="btn btn-warning"> Update</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
		</body>
  </html>