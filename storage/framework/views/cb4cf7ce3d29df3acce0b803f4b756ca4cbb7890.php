<?php $__env->startSection('konten'); ?>
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>
        Edit Pegawai
    </h3>

    <a href="/pegawai" class="btn btn-primary"> Kembali</a>

    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action = "/pegawai/update" method = "post">
        
        <input type = "hidden" name = "id" value = "<?php echo e($p -> pegawai_id); ?>"> <br/>
            


            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-6">
                    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" required="required" value = "<?php echo e($p->pegawai_nama); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jabatan</label>
                <div class="col-6">
                    <input name="jabatan" type="text" class="form-control" placeholder="Masukkan Jabatan" required="required" value = "<?php echo e($p->pegawai_jabatan); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Umur</label>
                <div class="col-6">
                    <input name="umur" type="number" class="form-control" placeholder="Masukkan Umur" required="required" value = "<?php echo e($p->pegawai_umur); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-6">
                    <input name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat" required="required" value = "<?php echo e($p->pegawai_alamat); ?>">
                </div>
            </div>
            <input type="submit" class='btn btn-success' value="Submit">
            </form>
    </form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/edit.blade.php ENDPATH**/ ?>