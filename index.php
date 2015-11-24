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
			$output = "ISBN: 978-5-389-04695-5 </br>
			Издательство: КоЛибри </br>
			Год издания: 2014 </br>
			Число экземпляров книги в библиотеке: 5"; break;
		case '2':
			$output = "ISBN: 978-5-17-077871-3 </br>
			Издательство: АСТ </br>
			Год издания: 2015 </br>
			Число экземпляров книги в библиотеке: 6"; break;
		case '3':
			$output = "ISBN: 978-5-9614-0709-9, 1-57675-422-1 </br>
			Издательство: Альпина Бизнес Букс </br>
			Год издания: 2008 </br>
			Число экземпляров книги в библиотеке: 7"; break;
		case '4':
			$output = "ISBN: 978-5-17-088062-1 </br>
			Издательство: АСТ </br>
			Год издания: 2014 </br>
			Число экземпляров книги в библиотеке: 8"; break;
		case '5':
			$output = "ISBN: 978-5-906756-05-3 </br>
			Издательство: Концептуал </br>
			Год издания: 2014 </br>
			Число экземпляров книги в библиотеке: 9"; break;
		
		default:
			$output = "Номера '$number_book' нет в списке!";
			break;
	}

}
?>

<h1>Библиотека</h1>
<table border="1" width="40%" cellpadding="5">
   <tr>
    <th>Номер книги </th>
    <th>Автор</th>
    <th>Название</th>
   </tr>
   <tr>
	  <td>1</td>
	  <td>Конникова Мария</td>
	  <td>Выдающийся ум: мыслить как Шерлок Холмс</td>
	</tr>  
	<tr>
	  <td>2</td>
	  <td>Уолтер Айзексон</td>
	  <td>Стив Джобс</td>
	</tr> 
	<tr>
	  <td>3</td>
	  <td>Брайан Трейси</td>
	  <td>Съешьте лягушку! 21 способ научиться успевать</td>
	</tr>
	<tr>
	  <td>4</td>
	  <td>Робин Шарма</td>
	  <td>Монах, который продал свой феррари</td>
	</tr>
	<tr>
	  <td>5</td>
	  <td>Арнольд Эрет</td>
	  <td>Целебная система бесслизистой диеты</td>
	</tr>  
 </table>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post"><br />
Введите номер книги: <br />
<input type="text" name="number_book"><br /><br />
<input type="submit" value="Отправить">
</form>

<?php
if ($output) {
	echo "Вы ввели номер ";
	echo $number_book;
	echo "<br />";
	echo $output;
}
?>

