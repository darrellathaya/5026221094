<?php $__env->startSection('konten'); ?>
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Kategori</h3>
    <a href="/combo" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>
    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container card p-4">
        <h3>Anda telah memilih Kategori <?php echo e($k -> Nama); ?> dengan Kode: <?php echo e($k -> ID); ?></h3>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/view4.blade.php ENDPATH**/ ?>