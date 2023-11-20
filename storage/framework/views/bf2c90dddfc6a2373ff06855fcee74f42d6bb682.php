<!-- Menghubungkan dengan view template master -->


<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('judul_halaman', 'Halaman Kontak'); ?>


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>

	<p>Ini Adalah Halaman Kontak</p>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br/>
	<br/>

	<table class = "table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>Darrell Athaya Refaldi</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111</td>
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

        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->pegawai_nama); ?></td>
			<td><?php echo e($p->pegawai_jabatan); ?></td>
			<td><?php echo e($p->pegawai_umur); ?></td>
			<td><?php echo e($p->pegawai_alamat); ?></td>
			<td>
				<a href="/pegawai/edit/<?php echo e($p->pegawai_id); ?>">Edit</a>
				|
				<a href="/pegawai/hapus/<?php echo e($p->pegawai_id); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/kontak.blade.php ENDPATH**/ ?>