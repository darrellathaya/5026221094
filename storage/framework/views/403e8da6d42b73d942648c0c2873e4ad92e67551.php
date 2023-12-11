<?php $__env->startSection('title', "Data Beras"); ?>

<?php $__env->startSection('judul_halaman'); ?>
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Data Beras
    </h3>

    <a href = "/beras/tambah"> + Tambah Data Beras Baru</a>

    <br/>
    <br/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>

    <p> Cari Data Beras: </p>

    <form action = "/beras/cari" method = "GET">
        <div class = "input-group">
            <input class = "form-control" type = "text" name = "cari" placeholder = "Cari beras berdasarkan nama" value = "<?php echo e(old('cari')); ?>">
            <input type = "submit px-1" value = "CARI" class = "btn btn-primary">
        </div>
    </form>
    <br/>

    <table class = "table table-striped table-hover">
        <tr>
            <th> Kode Beras </th>
            <th> Merk Beras </th>
            <th> Stock Beras </th>
            <th> Tersedia </th>
            <th> Opsi </th>
        </tr>

        <?php $__currentLoopData = $beras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($p -> kodeberas); ?> </td>
            <td> <?php echo e($p -> merkberas); ?> </td>
            <td> <?php echo e($p -> stockberas); ?> </td>
            <td> <?php echo e($p -> tersedia); ?> </td>

            <td>
                <a href = "/beras/view/<?php echo e($p -> kodeberas); ?>" class = "btn btn-success"> View </a>
                <a href = "/beras/edit/<?php echo e($p -> kodeberas); ?>" class = "btn btn-warning"> Edit </a>
                <a href = "/beras/hapus/<?php echo e($p -> kodeberas); ?>" class = "btn btn-danger"> Hapus </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo e($beras -> links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/index3.blade.php ENDPATH**/ ?>