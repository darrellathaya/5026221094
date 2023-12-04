<?php $__env->startSection('title', "Nilai Kuliah"); ?>

<?php $__env->startSection('judul_halaman'); ?>
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Nilai Kuliah
    </h3>

    <a href = "/nilaikuliah/tambah"> + Nilai Kuliah Baru</a>

    <br/>
    <br/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
    <?php
        function angkaToHuruf($nilai){
            if ($nilai >= 81 && $nilai <= 100) {
                return 'A';
            } elseif ($nilai >= 61 && $nilai <= 80) {
                return 'B';
            } elseif ($nilai >= 41 && $nilai <= 60) {
                return 'C';
            } elseif ($nilai >= 0 && $nilai <= 40) {
                return 'D';
            } else {
                return 'Nilai tidak valid';
            }
        }
    ?>

    <table class = "table table-striped table-hover">
        <tr>
            <th> ID </th>
            <th> NRP </th>
            <th> Nilai Angka </th>
            <th> SKS </th>
            <th> Nilai Huruf </th>
            <th> Bobot </th>
        </tr>

        <?php
        $title = "How to Write PHP Code in Laravel Blade? - ItSolutionStuff.com";
        $myArray = ['id'=>1,'name'=>'Hardik'];
        ?>

        <?php $__currentLoopData = $nilaikuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($p -> ID); ?> </td>
            <td> <?php echo e($p -> NRP); ?> </td>
            <td> <?php echo e($p -> NilaiAngka); ?> </td>
            <td> <?php echo e($p -> SKS); ?> </td>
            <td><?php echo e(angkaToHuruf($p->NilaiAngka)); ?></td>
            <td><?php echo e($p->NilaiAngka * $p->SKS); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/index2.blade.php ENDPATH**/ ?>