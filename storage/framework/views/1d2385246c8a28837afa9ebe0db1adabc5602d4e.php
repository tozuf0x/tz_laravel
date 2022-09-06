<!DOCTYPE html>
<html lang="en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Document</title>
    </head>
<body>
	<h1>Сотрудники</h1>
	<button><a href="<?php echo e(route('employees.create')); ?>" type="button">Добавить сотрудника</a></button>
	<hr>
	<?php if(count($employees) != 0): ?>
		<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			<ul>
				<li>
					<span>ФИО сотрудника: </span>
					<span><?php echo e($employee->name); ?></span>
					<form action="<?php echo e(route('employees.show', ['employee' => $employee->id])); ?>" method="get">
						<button type="submit">Посмотреть остальные данные</button>
					</form>
					<form action="<?php echo e(route('employees.destroy', ['employee' => $employee->id])); ?>" method="POST">
						<?php echo method_field("delete"); ?>
						<button type="submit">Удалить</button>
					</form>
					
				</li>
			</ul>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
</body><?php /**PATH E:\OpenServer\OpenServer\domains\test\resources\views/employees/index.blade.php ENDPATH**/ ?>