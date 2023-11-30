<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="pull-left py-3">
            <h1>Student's Page</h1>
            <a href="<?php echo e(route('students\index')); ?>" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <dl class="row">
                <dt class="col-sm-3">First Name: </dt>
                <dd class="col-sm-9"><?php echo e($students->firstname); ?></dd>

                <dt class="col-sm-3">Last Name: </dt>
                <dd class="col-sm-9"><?php echo e($students->lastname); ?></dd>

                <dt class="col-sm-3">Middle Name: </dt>
                <dd class="col-sm-9"><?php echo e($students->middlename); ?></dd>

                <dt class="col-sm-3">Section: </dt>
                <dd class="col-sm-9"><?php echo e($students->section); ?></dd>

                <dt class="col-sm-3">Gender: </dt>
                <dd class="col-sm-9"><?php echo e($students->gender); ?></dd>
                
                <dt class="col-sm-3">Date of Birth: </dt>
                <dd class="col-sm-9"><?php echo e($students->dob); ?></dd>

                <dt class="col-sm-3">Lrn Number: </dt>
                <dd class="col-sm-9"><?php echo e($students->lrnno); ?></dd>

                <dt class="col-sm-3">Home Address: </dt>
                <dd class="col-sm-9"><?php echo e($students->homeaddress); ?></dd>

                <dt class="col-sm-3">Email Address: </dt>
                <dd class="col-sm-9"><?php echo e($students->emailaddress); ?></dd>

                <dt class="col-sm-3">Mobile: </dt>
                <dd class="col-sm-9"><?php echo e($students->mobile); ?></dd>

                <dt class="col-sm-3">Grade: </dt>
                <dd class="col-sm-9"><?php echo e($students->gradelvl); ?></dd>

                <dt class="col-sm-3">Strand: </dt>
                <dd class="col-sm-9"><?php echo e($students->strand); ?></dd>
            </dl>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\school-projects\batch-2023-2024\Student-Registration-CRUD\resources\views/students\show.blade.php ENDPATH**/ ?>