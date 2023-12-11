<?php $__env->startSection('konten'); ?>
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Beras</h3>

	<br/>
	<br/>
    <div class="container card p-4">
        <div class="row">
            <div class="col-sm-6">
            <div class="card" style="height: 7cm;">
                <div class="card-body">
                </div>
            </div>
            </div>

            <?php $__currentLoopData = $beras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6">
                <table class = "table table-borderless table-hover">
                    <tr>
                        <th> Kode Beras
                            <td> <?php echo e($p -> kodeberas); ?> </td>
                        </th>
                    </tr><tr>
                        <th> Merk Beras
                            <td> <?php echo e($p -> merkberas); ?> </td>
                        </th>
                    </tr><tr>
                        <th> Stock Beras
                            <td> <?php echo e($p -> stockberas); ?> </td>
                        </th>
                    </tr><tr>
                        <th> Ketersediaan
                            <td> <?php echo e($p -> tersedia); ?> </td>
                        </th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <div class="text-center">
                    <a href="/beras" class = "btn btn-success w-25 p-2"> OK</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/view3.blade.php ENDPATH**/ ?>