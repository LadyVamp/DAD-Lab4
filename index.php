<meta charset="utf-8">
<?php
function clearData($data, $type='i') {
	switch ($type) {
		case 'i':
			return $data*1;
			break;
		case 's':
			return trim(strip_tags($data));
			break;
	}
}
$output = "";
if ($_SERVER ['REQUEST_METHOD'] == "POST"){
	$number_book = clearData ($_POST['number_book']);
	switch ($number_book) {
		case '1':
			$output = "инфа по книге 1"; break;
		case '2':
			$output = "инфа по книге 2"; break;
			case '3':
			$output = "инфа по книге 3"; break;
			case '4':
			$output = "инфа по книге 4"; break;
			case '5':
			$output = "инфа по книге 5"; break;
		
		default:
			$output = "Номера '$number_book' нет в списке!";
			break;
	}

}
?>

<table border="1" width="20%" cellpadding="5">
   <tr>
    <th>Номер книги </th>
    <th>Название книги</th>
   </tr>
   <tr>
	  <td>1</td>
	  <td>Книга 1</td>
	</tr>  
	<tr>
	  <td>2</td>
	  <td>Книга 2</td>
	</tr> 
	<tr>
	  <td>3</td>
	  <td>Книга 3</td>
	</tr>
	<tr>
	  <td>4</td>
	  <td>Книга 4</td>
	</tr>
	<tr>
	  <td>5</td>
	  <td>Книга 5</td>
	</tr>  
 </table>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post"><br />
Введите номер книги: <br />
<input type="text" name="number_book"><br /><br />
<input type="submit" value="Отправить">
</form>

<?php
if ($output) {
	echo $output;
}

?>

