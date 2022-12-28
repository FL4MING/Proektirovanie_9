<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Лабораторная работа №9</title>
</head>
<body>
	<?php 
		$str = file_get_contents("file.txt");
		$reg = "/([1-9]|[1]?[0-9][0-9]|[2][0-4][0-9]|25[0-5])\.([1]?[0-9]?[0-9]|[2][0-4][0-9]|25[0-5])\.([1]?[0-9]?[0-9]|[2][0-4][0-9]|25[0-5])\.([1]?[0-9]?[0-9]|[2][0-4][0-9]|25[0-5])/";
		if (preg_match_all($reg, $str, $arr, PREG_PATTERN_ORDER)!=0) {
			echo ("В файле присутствует ip-адрес"."<br>");
			for ($i=0; $i < 1; $i++) { 
				for ($y=0; $y < 3; $y++) { 
					echo $arr[$i][$y];
				}
			}
		}
		else {
			echo "В файле нет ip-адреса";
		}
	?>
</body>
</html>