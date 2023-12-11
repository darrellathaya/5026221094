<?php $__env->startSection('konten'); ?>
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>
        Edit beras
    </h3>

    <a href="/beras" class="btn btn-primary"> Kembali</a>

    <?php $__currentLoopData = $beras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action = "/beras/update" method = "post">
        
        <input type = "hidden" name = "id" value = "<?php echo e($p -> kodeberas); ?>"> <br/>
            


            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kode Beras</label>
                <div class="col-6">
                    <input name="kodeberas" type="number" class="form-control" placeholder="Masukkan kode beras" required="required" value = "<?php echo e($p->kodeberas); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Merk Beras</label>
                <div class="col-6">
                    <input name="merkberas" type="text" class="form-control" placeholder="Masukkan merk beras" required="required" value = "<?php echo e($p->merkberas); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Stok Beras</label>
                <div class="col-6">
                    <input name="stockberas" type="number" class="form-control" placeholder="Masukkan stok beras" required="required" value = "<?php echo e($p->stockberas); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Ketersediaan</label>
                <div class="col-6">
                    <input name="tersedia" type="text" class="form-control" placeholder="Masukkan ketersediaan beras" required="required" value = "<?php echo e($p->tersedia); ?>">
                </div>
            </div>
            <input type="submit" class='btn btn-success' value="Submit">
            </form>
    </form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/edit3.blade.php ENDPATH**/ ?>