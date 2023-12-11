<?php $__env->startSection('title', "Kategori"); ?>

<?php $__env->startSection('judul_halaman'); ?>
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Kategori
    </h3>

    <a href = "/combo/tambah"> + Tambah Kategori Baru</a>

    <br/>
    <br/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>

    <p> Cari Kategori: </p>

    <table class = "table table-striped table-hover">
        <tr>
            <th> ID </th>
            <th> Nama </th>
            <th> Lihat Kategori </th>
        </tr>

        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($k -> ID); ?> </td>
            <td> <?php echo e($k -> Nama); ?> </td>

            <td>
                <a href = "/combo/view/<?php echo e($k -> ID); ?>" class = "btn btn-success"> View </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo e($kategori -> links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/index4.blade.php ENDPATH**/ ?>