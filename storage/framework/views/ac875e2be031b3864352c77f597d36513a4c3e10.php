

<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>
        Input Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="<?php echo e((isset($mobil))?route('rental.update',$mobil->id_mobil):route('rental.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($mobil)): ?>?<?php echo method_field('PUT'); ?><?php endif; ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Merk Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="<?php echo e((isset($mobil))?$mobil->merk_mobil:old('merk_mobil')); ?>" name="merk_mobil" class="form-control">
                    <?php $__errorArgs = ['merk_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:red"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <label class="control-label col-lg-2">Plat Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="<?php echo e((isset($mobil))?$mobil->plat_mobil:old('plat_mobil')); ?>" name="plat_mobil" class="form-control">
                    <?php $__errorArgs = ['plat_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:red"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <label class="control-label col-lg-2">Warna Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="<?php echo e((isset($mobil))?$mobil->warna_mobil:old('warna_mobil')); ?>" name="warna_mobil" class="form-control">
                    <?php $__errorArgs = ['warna_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:red"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <label class="control-label col-lg-2">Tahun Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="<?php echo e((isset($mobil))?$mobil->tahun_mobil:old('tahun_mobil')); ?>" name="tahun_mobil" class="form-control">
                    <?php $__errorArgs = ['tahun_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:red"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            
            
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </div>

    </form>    
    </div>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rental_Mobil\resources\views/admin/inputmobil.blade.php ENDPATH**/ ?>