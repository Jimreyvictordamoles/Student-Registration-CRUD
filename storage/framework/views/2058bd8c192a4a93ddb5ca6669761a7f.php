<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="pull-left py-3">
            <h1>
                Student's Registration
            </h1>

            <a href="<?php echo e(url('/index/create')); ?>" class="btn btn-success my-3" title="Add new parts">Add new</a>
        </div>
    </div>

    <div class="row">

        <table class="table table-bordered table-light">

            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Section</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Student Number</th>
                    <th>Lrn Number</th>
                    <th>Home Address</th>
                    <th>Email Address</th>
                    <th>Mobile</th>
                    <th>Grade Level</th>
                    <th>Strand</th>
                    <th>Actions</th>
                </tr>
            </thead>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>


            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->firstname); ?></td>
                        <td><?php echo e($item->lastname); ?></td>
                        <td><?php echo e($item->middlename); ?></td>
                        <td><?php echo e($item->section); ?></td>
                        <td><?php echo e($item->gender); ?></td>
                        <td><?php echo e($item->dob); ?></td>
                        <td><?php echo e($item->studentnum); ?></td>
                        <td><?php echo e($item->lrnno); ?></td>
                        <td><?php echo e($item->homeaddress); ?></td>
                        <td><?php echo e($item->emailaddress); ?></td>
                        <td><?php echo e($item->mobile); ?></td>
                        <td><?php echo e($item->gradelvl); ?></td>
                        <td><?php echo e($item->strand); ?></td>
            
                        <td>
                            <a href="<?php echo e(route('students\show', $item->id)); ?>" class="btn btn-info btn-sm">View</a>
                            <a href="<?php echo e(route('students\edit', $item->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <form action="<?php echo e(route('students\destroy', $item->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>


    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\school-projects\batch-2023-2024\Student-Registration-CRUD\resources\views/students\index.blade.php ENDPATH**/ ?>