<?php $__env->startSection('title', "Database Pegawai"); ?>

<?php $__env->startSection('judul_halaman'); ?>
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Data Pegawai
    </h3>

    <a href = "/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br/>
    <br/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
    <p> Cari Data Pegawai: </p>

    <form action = "/beras/cari" method = "GET">
        <div class = "input-group">
            <input class = "form-control" type = "text" name = "cari" placeholder = "Cari beras berdasarkan nama" value = "<?php echo e(old('cari')); ?>">
            <input type = "submit px-1" value = "CARI" class = "btn btn-primary">
        </div>
    </form>
    <br/>

    <table class = "table table-striped table-hover">
        <tr>
            <th> Nama </th>
            <th> Jabatan </th>
            <th> Umur </th>
            <th> Alamat </th>
            <th> Opsi </th>
        </tr>

        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($p -> pegawai_nama); ?> </td>
            <td> <?php echo e($p -> pegawai_jabatan); ?> </td>
            <td> <?php echo e($p -> pegawai_umur); ?> </td>
            <td> <?php echo e($p -> pegawai_alamat); ?> </td>

            <td>
                <a href = "/pegawai/view/<?php echo e($p -> pegawai_id); ?>" class = "btn btn-success"> View </a>
                <a href = "/pegawai/edit/<?php echo e($p -> pegawai_id); ?>" class = "btn btn-warning"> Edit </a>
                <a href = "/pegawai/hapus/<?php echo e($p -> pegawai_id); ?>" class = "btn btn-danger"> Hapus </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo e($pegawai -> links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/index.blade.php ENDPATH**/ ?>