<?php $__env->startSection('isiHalaman'); ?>
    <form action="formulir/proses" method = "post">
        <input type = "hidden" name = "_token" value="<?php echo csrf_token() ?>">

        Nama    :
        <input type = "text" name = "nama"> <br/>
        Alamat  :
        <input type = "text" name = "alamat"> <br/>
        <input class = "btn btn-success" type = "submit" value = "Simpan"> <br/>
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/formulir.blade.php ENDPATH**/ ?>