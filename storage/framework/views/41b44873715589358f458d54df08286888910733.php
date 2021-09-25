
<?php $__env->startSection('title','New user'); ?>
<?php $__env->startSection('header','New user'); ?>
<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('user.save')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($list[1]->id); ?>" required>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="<?php echo e(@old('name') ? @old('name') : $list[1]->name); ?>">
            </div>
        </div>
		<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger">
                <?php echo e($message); ?>

            </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <div class="row mb-3">
            <label for="cost" class="col-sm-2 col-form-label">Mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="<?php echo e(@old('email') ? @old('email') : $list[1]->email); ?>">
            </div>
        </div>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger">
                <?php echo e($message); ?>

            </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <div class="row mb-3">
            <label for="cost" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" value="<?php echo e(@old('password') ? @old('password') : $list[1]->password); ?>">
            </div>
        </div>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger">
                <?php echo e($message); ?>

            </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <div class="row mb-3">
            <label for="price" class="col-sm-2 col-form-label">Area</label>
            <div class="col-sm-10">
                <select class="form-control" name="area" id="area">
                    <?php if($list[1]->id == 0): ?>
                            <option value="" selected>Seleccione...</option>
                    <?php else: ?>
                            <option value="">Seleccione...</option>
                    <?php endif; ?>
                    <?php $__currentLoopData = $list[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>       
                        <?php if($area->id == $list[1]->area_id): ?>
                            <option value="<?php echo e($area->id); ?>" selected><?php echo e($area->name); ?></option>                            
                        <?php elseif($area->id != $list[1]->area_id): ?>
                            <option value="<?php echo e($area->id); ?>"><?php echo e($area->name); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <?php $__errorArgs = ['area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger">
                <?php echo e($message); ?>

            </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <div class="row mb-3 justify-content-end">
            <a href="/users" class="btn btn-secondary col-1 m-1">Cancelar</a>
            <button type="submit" class="btn btn-success col-1 m-1">Guardar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VI Trimestre - ADSI\users-app\resources\views/user/form.blade.php ENDPATH**/ ?>