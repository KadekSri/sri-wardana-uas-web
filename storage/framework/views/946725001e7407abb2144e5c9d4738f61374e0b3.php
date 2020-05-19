

<?php $__env->startSection('content'); ?>
			<?php if(session('sukses')): ?>
				<div class="alert alert-success" role="alert">
				  <?php echo e(session('sukses')); ?>

				</div>
			<?php endif; ?>

			<div class="row">
				<div class="col-5">
					<h2>DATA ADMIN RENTAL MOBIL</h2>
				</div>
				<div class="col-5">
					<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
					  Tambah Data Admin
					</button>
				</div>
				
				<table class="table table-hover">
					<tr class="bg-primary">
						<th>NAMA ADMIN</th>
						<th>JENIS KELAMIN</th>
						<th>AGAMA ADMIN</th>
						<th>ALAMAT ADMIN</th>
						<th>AKSI</th>
					</tr>
					<?php $__currentLoopData = $data_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr class="table-primary">
						<td><?php echo e($admin->nama_admin); ?></td>
						<td><?php echo e($admin->jenis_kelamin); ?></td>
						<td><?php echo e($admin->agama_admin); ?></td>
						<td><?php echo e($admin->alamat_admin); ?></td>
						<td>
							<a href="/admin/<?php echo e($admin->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/admin/<?php echo e($admin->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus  ???')">Delete</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>	
			</div>
		</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="/admin/create" method="POST">
				<?php echo e(csrf_field()); ?>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Admin</label>
			    <input name="nama_admin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Admin">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
			    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			      <option value="Laki-Laki">Laki-Laki</option>
			      <option value="Perempuan">Perempuan</option>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="exampleFormControlSelect1">Pilih Agama</label>
			    <select name="agama_admin" class="form-control" id="exampleFormControlSelect1">
			      <option value="Hindu">Hindu</option>
			      <option value="Budha">Budha</option>
			      <option value="Islam">Islam</option>
			      <option value="Kristen">Kristen</option>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Alamat Admin</label>
			    <textarea name="alamat_admin" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>

			</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


		





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Rental_Mobil\resources\views/admin/index.blade.php ENDPATH**/ ?>