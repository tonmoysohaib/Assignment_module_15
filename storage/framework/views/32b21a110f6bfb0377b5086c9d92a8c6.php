<?php $__env->startSection('content'); ?>
<section class="py-5">
    <div class="container px-5">

        
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        
        <?php if(Cookie::get('file_uploaded')): ?>
            <div class="alert alert-info">Your file was uploaded successfully.</div>
        <?php endif; ?>

        <h2 class="fw-bold mb-4">Submitted Data</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> <?php echo e($data['name']); ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?php echo e($data['email']); ?></li>
            <li class="list-group-item"><strong>Phone:</strong> <?php echo e($data['phone']); ?></li>
            <li class="list-group-item"><strong>Message:</strong> <?php echo e($data['message']); ?></li>
            <?php if(!empty($data['attachment'])): ?>
                <li class="list-group-item">
                    <strong>Attachment:</strong>
                    <a href="<?php echo e(asset('storage/' . $data['attachment'])); ?>" target="_blank">View File</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\projectModule_15\resources\views/contact-confirmation.blade.php ENDPATH**/ ?>