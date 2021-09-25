
<?php $__env->startSection('title','Users list'); ?>
<?php $__env->startSection('header','Users list'); ?>
<?php $__env->startSection('header-botton'); ?>
  <div class="d-inline">
    <a href="<?php echo e(route('user.form', ['id'=>0])); ?>" class="btn btn-primary">Nuevo usuario</a>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Area</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listUsers[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <?php $__currentLoopData = $listUsers[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($user->area_id == $area->id): ?>
                    <td><?php echo e($area->name); ?></td>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td>
                    <a href="<?php echo e(route('user.form',['id'=>$user->id])); ?>" class="btn btn-primary">Editar</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VI Trimestre - ADSI\users-app\resources\views/user/list.blade.php ENDPATH**/ ?>