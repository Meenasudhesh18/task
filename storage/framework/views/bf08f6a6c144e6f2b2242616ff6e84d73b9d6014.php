<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="">User List</a></div>

                <div class="card-body">
                	<table class="table table-striped">
        <thead>
        <tr>
            <th>S.no</th>
            <th>User name</th>
            <th>mail</th>
            
        </tr>
        </thead>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>             
           

        <tr >
            <td><?php echo e($datas->id); ?></td>
            <td><?php echo e($datas->name); ?></td>
            <td><?php echo e($datas->email); ?></td>
        </tr>

        </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
                
                </div>
                </div>
            </div>
        </div>
    </div>
</div><br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="">Book List</a></div>

                <div class="card-body">
               <table class="table table-striped">
        <thead>
        <tr>
            <th>s.no</th>
            <th>Book name</th>         
            <th>subscription</th>

        </tr>
        </thead>
        <tbody>
        <tr >
            <td><?php echo e($datas->id); ?></td>
            <td><?php echo e($datas->upload); ?></td>
        </tr>
        </tbody>
    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\task\resources\views/userDisplay.blade.php ENDPATH**/ ?>