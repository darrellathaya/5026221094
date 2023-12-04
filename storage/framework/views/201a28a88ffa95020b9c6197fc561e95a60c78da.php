<?php $__env->startSection('konten'); ?>
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Nilai Kuliah</h3>

	<a href="/nilaikuliah" class='btn btn-primary'> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		<?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label class="col-sm-2 control-label">NRP</label>
            <div class="col-6">
                <input name="NRP" type="number" class="form-control" placeholder="Masukkan NRP" required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="NilaiAngka" class="col-sm-2 control-label">Nilai Angka</label>
            <div class="col-6">
                <input name="NilaiAngka" type="number" class="form-control" id="NilaiAngka" placeholder="Masukkan Nilai Angka" required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="SKS" class="col-sm-2 control-label">SKS</label>
            <div class="col-6">
                <input name="SKS" type="number" class="form-control" id="SKS" placeholder="Masukkan SKS" required="required">
            </div>
        </div>
		<input type="submit" class='btn btn-success' value="Tambah Data">
	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/tambah2.blade.php ENDPATH**/ ?>