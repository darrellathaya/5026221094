<!-- Menghubungkan dengan view template master -->


<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('judul_halaman', 'Halaman Kontak'); ?>


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>

	<p>Ini Adalah Halaman Kontak</p>

	<table class = "table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>Darrell Athaya Refaldi</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>ytta</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>malasngoding@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0896-0676-7404</td>
		</tr>

        <?php for($i=1; $i<5; $i++): ?>
        <tr>
            <td>No</td>
            <td>:</td>
            <td><?php echo e($i); ?></td>
        </tr>
        <?php endfor; ?>

	</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/kontak.blade.php ENDPATH**/ ?>