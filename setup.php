<?php require_once 'config.php'; ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
	<head> 
		<meta charset="utf-8">
		<title>Import Excel To MySQL</title>
	</head>
	<body>
		<form class="" action="" method="post" enctype="multipart/form-data">
			<input type="file" name="excel" required value="">
			<button type="submit" name="import">Import</button>
		</form>
		<hr>
		<table border = 1>
			<tr>
				<td>#</td>
				<td>Name</td>
				<td>Age</td>
				<td>Country</td>
			</tr>
			<?php
			$i = 1;
			$rows = mysqli_query($conn, "SELECT * FROM tb_data");
				while ($row = mysqli_fetch_assoc($rows)) {
  // Code to process each row

			?>
			<tr>
				<td> <?php echo $i++; ?> </td>
				<td> <?php echo $row["name"]; ?> </td>
				<td> <?php echo $row["age"]; ?> </td>
				<td> <?php echo $row["country"]; ?> </td>
			</tr>
			<?php } ?>
		</table>
		<?php
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
			$newFileName = $fileName."-".date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excel_reader2.php';
			require 'SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$name = $row[0];
				$age = $row[1];
				$country = $row[2];
				mysqli_query($conn, "INSERT INTO tb_data VALUES('', '$name', '$age', '$country')");
			}

			echo
			"
			<script>
			alert('Succesfully Imported');
			document.location.href = '';
			</script>
			";
		}
		?>
	</body>
</html>
