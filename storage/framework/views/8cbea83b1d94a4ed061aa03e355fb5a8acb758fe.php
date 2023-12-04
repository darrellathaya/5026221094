<?php $__env->startSection('konten'); ?>
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

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

            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6">
                <table class = "table table-borderless table-hover">
                    <tr>
                        <th> Nama
                            <td> <?php echo e($p -> pegawai_nama); ?> </td>
                        </th>
                    </tr><tr>
                        <th> Jabatan
                            <td> <?php echo e($p -> pegawai_jabatan); ?> </td>
                        </th>
                    </tr><tr>
                        <th> Umur
                            <td> <?php echo e($p -> pegawai_umur); ?> </td>
                        </th>
                    </tr><tr>
                        <th> Alamat
                            <td> <?php echo e($p -> pegawai_alamat); ?> </td>
                        </th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <div class="text-center">
                    <a href="/pegawai" class = "btn btn-success w-25 p-2"> OK</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5026221094\resources\views/view.blade.php ENDPATH**/ ?>