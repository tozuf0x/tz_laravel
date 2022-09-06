<div class="">
	<ul>
		<li>
			<span>ФИО сотрудника: </span>
			<span>{{ $employee_1->name }}</span>
			<hr>
		</li>
	</ul>	
	<ul>
		<li>
			<span>Почта: </span>
			<span>{{ $employee_1->email }}</span>
			<hr>
		</li>
	</ul>	
	<ul>
		<li>
			<span>Полных лет: </span>
			<span>{{ $employee_1->age }}</span>
			<hr>
		</li>
	</ul>	
	<ul>
		<li>
			<span>Средняя зарплата: </span>
			<span>{{ $employee_1->avg_salary }}</span>
			<hr>
		</li>
	</ul>	
	<ul>
		<li>
			<span>Стаж работы: </span>
			<span>{{ $employee_1->experience }}</span>
			<hr>
		</li>
	</ul>	
	<ul>
		<li>
			<img src="{{  asset('storage/' . $employee_1->photo) }}" alt="" height="50">
		</li>
	</ul>	

	<h1>Сотрудники</h1>
	<button><a href="{{ route('employees.index') }}" type="button">Все сотрудники</a></button>
</div>