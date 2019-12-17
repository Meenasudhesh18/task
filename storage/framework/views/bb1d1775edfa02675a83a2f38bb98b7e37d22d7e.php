<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
              <form action="<?php echo e(route('image')); ?>" method="POST" enctype="multipart/form-data">
              	<?php echo csrf_field(); ?>
              	<label> Image Upload</label>
              	<input type="file" name="images[]" class="btn btn-sm-alert"multiple>
              	<button class="btn btn-sm-success" type="submit">upload</button>
              </form>
          </div>
      </div>
  </div>

</div>

</div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\task\resources\views/image.blade.php ENDPATH**/ ?>