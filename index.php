<!DOCTYPE html>
<html>
<head>
	<title>My Store</title>
</head>
<body>
	<h1>Лабораторна Робота 3 <br>
		Коробєйніков Олександр КІУКІ-19-7<br> 
		Варіант 5
	</h1>
	<main>
		<form action="get1.php" method="get">
			<label for="vendor">Выберите производителя:</label>
			<select name="vendor" id="vendor">
				<?php
					include('connect.php');
					try {
						$stmt = $dbh->query("SELECT ID_Vendors, v_name FROM vendors");
						$res = $stmt->fetchAll();

						foreach($res as $row)
						{
							echo "<option value='$row[0]'>$row[1]</option>";
						}
					}
					catch(PDOException $ex) {
						echo $ex->GetMessage();
					}

					$dbh = null;
				?>
			</select>
			<input type="submit" value="Get!">
		</form>
		<form action="get2.php" method="get">
			<label for="category">Выберите категорию:</label>
			<select name="category" id="category">
				<?php
					include('connect.php');
					try {
						$stmt = $dbh->query("SELECT ID_Category, c_name FROM category");
						$res = $stmt->fetchAll();

						foreach($res as $row)
						{
							echo "<option value='$row[0]'>$row[1]</option>";
						}
					}
					catch(PDOException $ex) {
						echo $ex->GetMessage();
					}

					$dbh = null;
				?>
			</select>
			<input type="submit" value="Get!">
		</form>
		<form action="get3.php" method="get">
			<label for="min_price">Мин. цена:</label>
			<input type="text" name="min_price" id="min_price">
			<label for="max_price">Макс. цена:</label>
			<input type="text" name="max_price" id="max_price">
			<input type="submit" value="Get!">
		</form>
	</main>
</body>
</html>
