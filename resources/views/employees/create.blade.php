<!DOCTYPE html>
<html lang="en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Document</title>
    </head>
<body>
	<form action="{{ route('employees.index') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }} 
		<div class='form-group'>
			<label for="name">ФИО</label>
			<input type="text" class="form-control" name="name" id = 'name'>
		</div>
		<br>
		<div class='form-group'>
			<label for="name">email</label>
			<input type="email" class="form-control" name="email" id = 'email'>
		</div>
		<br>
		<div class='form-group'>
			<label for="name">Полных лет</label>
			<input type="number" class="form-control" name="age" id = 'age'>
		</div>
		<br>
		<div class='form-group'>
			<label for="name">Средняя зарплата</label>
			<input type="number" class="form-control" name="avg_salary" id = 'avg_salary'>
		</div>
		<br>
		<div class='form-group'>
			<label for="name">Опыт работы</label>
			<input type="number" class="form-control" name="experience" id = 'experience'>
		</div>
		<br>
		<div class='form-group'>
			<label for="name">Фото</label>
			<input type="file" class="form-control-file" name="photo" id='photo'>
		</div>
		<hr>
		<button type="submit ">Добавить</button>
		<button><a href="{{ route('employees.index') }}" type="button">Все сотрудники</a></button>
	</form>
</body>
</html>