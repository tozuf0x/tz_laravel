<!DOCTYPE html>
<html lang="en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Document</title>
    </head>
<body>
	<h1>Сотрудники</h1>
	<button><a href="{{ route('employees.create') }}" type="button">Добавить сотрудника</a></button>
	<hr>
	@if (count($employees) != 0)
		@foreach ($employees as $employee)

			<ul>
				<li>
					<span>ФИО сотрудника: </span>
					<span>{{ $employee->name }}</span>
					<form action="{{ route('employees.show', ['employee' => $employee->id]) }}" method="get">
						<button type="submit">Посмотреть остальные данные</button>
					</form>
					<form action="{{ route('employees.destroy', ['employee' => $employee->id]) }}" method="POST">
						@method("delete")
						<button type="submit">Удалить</button>
					</form>
					
				</li>
			</ul>
		@endforeach
	@endif
</body>