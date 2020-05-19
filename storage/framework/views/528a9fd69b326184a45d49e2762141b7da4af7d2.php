

<?php $__env->startSection('content'); ?>
			<h1>Edit Data Admin</h1>
			<?php if(session('sukses')): ?>
				<div class="alert alert-success" role="alert">
				  <?php echo e(session('sukses')); ?>

				</div>
			<?php endif; ?>
			<div class="row">
				<div class="btn btn-primary col-lg-12 ">
					<form action="/admin/<?php echo e($admin->id); ?>/update" method="POST">
						<?php echo e(csrf_field()); ?>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Admin</label>
					    <input name="nama_admin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Admin" value="<?php echo e($admin->nama_admin); ?>">
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="Laki-Laki" <?php if($admin->jenis_kelamin == 'Laki-Laki'): ?> selected <?php endif; ?>>Laki-Laki</option>
					      <option value="Perempuan" <?php if($admin->jenis_kelamin == 'Perempuan'): ?> selected <?php endif; ?>>Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Agama</label>
					    <select name="agama_admin" class="form-control" id="exampleFormControlSelect1">
					      <option value="Hindu" <?php if($admin->agama_admin == 'Hindu'): ?> selected <?php endif; ?>>Hindu</option>
					      <option value="Budha" <?php if($admin->agama_admin == 'Budha'): ?> selected <?php endif; ?>>Budha</option>
					      <option value="Islam" <?php if($admin->agama_admin == 'Islam'): ?> selected <?php endif; ?>>Islam</option>
					      <option value="Kristen" <?php if($admin->agama_admin == 'Kristen'): ?> selected <?php endif; ?>>Kristen</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat Admin</label>
					    <textarea name="alamat_admin" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e($admin->alamat_admin); ?></textarea>
					  </div>
					  <button type="submit" class="btn btn-warning">Update</button>
					</form>
					</div>
			</div>
		</div>
		<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rental_Mobil\Rental_Mobil\resources\views/admin/edit.blade.php ENDPATH**/ ?>