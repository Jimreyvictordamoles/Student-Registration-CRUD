<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="pull-left py-3">
            <h3>
                STUDENT'S PAGE
            </h3>
            
            <a href="<?php echo e(route('students\index')); ?>" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

<?php if($errors->any()): ?>
    <div style="color: red;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="<?php echo e(route('students\store')); ?>">
        <?php echo csrf_field(); ?>

        <div class="row">

            <div class="mb-3">
              <label>First Name</label></br>
              <input type="text" name="firstname" id="firstname" class="form-control"></br>
            </div>

            <div class="mb-3">
              <label>Last Name</label></br>
              <input type="text" name="lastname" id="lastname" class="form-control"></br>
            </div>

            <div class="mb-3">
              <label>Middle Name</label></br>
              <input type="text" name="middlename" id="middlename" class="form-control"></br>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="section" name="section">
                    <option selected disabled>Section</option>
                    <option value="Helium" <?php echo e(old('section') == 'Helium' ? 'selected' : ''); ?>>Helium</option>
                    <option value="Hydrogen" <?php echo e(old('section') == 'Hydrogen' ? 'selected' : ''); ?>>Hydrogen</option>
                    <option value="Ruby" <?php echo e(old('section') == 'Ruby' ? 'selected' : ''); ?>>Ruby</option>
                    <option value="Emerald" <?php echo e(old('section') == 'Emerald' ? 'selected' : ''); ?>>Emerald</option>
                    <option value="Amethyst" <?php echo e(old('section') == 'Amethyst' ? 'selected' : ''); ?>>Amethyst</option>
                    <option value="Pearl" <?php echo e(old('section') == 'Pearl' ? 'selected' : ''); ?>>Pearl</option>
                    <option value="Carbon" <?php echo e(old('section') == 'Carbon' ? 'selected' : ''); ?>>Carbon</option>
                    <option value="Gold" <?php echo e(old('section') == 'Gold' ? 'selected' : ''); ?>>Gold</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="gender" name="gender">
                    <option selected disabled>Gender</option>
                    <option value="Male" <?php echo e(old('gender') == 'Male' ? 'selected' : ''); ?>>Male</option>
                    <option value="Female" <?php echo e(old('gender') == 'Female' ? 'selected' : ''); ?>>Female</option>
                    <option value="Others" <?php echo e(old('gender') == 'Others' ? 'selected' : ''); ?>>Others</option>
                </select>
            </div>

            <div class="mb-3">
              <label>Date of Birth</label></br>
              <input type="date" name="dob" id="dob" class="form-control"></br>
            </div>

            <div class="mb-3">
              <label>Student Number</label></br>
              <input type="number" class="form-control border border-secondary border-1" name="studentnum" id="studentnum" class="form-control"></br>
            </div>
            
            <div class="mb-3">
              <label>Lrn Number</label></br>
              <input type="number" class="form-control border border-secondary border-1" name="lrnno" id="lrnno" class="form-control"></br>
            </div>

            <div class="mb-3">
              <label>Home Address</label></br>
              <input type="text" name="homeaddress" id="homeaddress" class="form-control"></br>
            </div>

            <div class="mb-3">
              <label>Email Address</label></br>
              <input type="text" name="emailaddress" id="emailaddress" class="form-control"></br>
            </div>

            <div class="mb-3">
              <label>Mobile</label></br>
              <input type="number" class="form-control border border-secondary border-1" name="mobile" id="mobile" class="form-control"></br>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="gradelvl" name="gradelvl">
                    <option selected disabled>Grade Level</option>
                    <option value="11" <?php echo e(old('gradelvl') == '11' ? 'selected' : ''); ?>>11</option>
                    <option value="12" <?php echo e(old('gradelvl') == '12' ? 'selected' : ''); ?>>12</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="strand" name="strand">
                    <option selected disabled>Strand</option>  
                    <option value="TVL" <?php echo e(old('strand') == 'TVL' ? 'selected' : ''); ?>>TVL</option>
                    <option value="ABM" <?php echo e(old('strand') == 'ABM' ? 'selected' : ''); ?>>ABM</option>
                    <option value="HUMMS" <?php echo e(old('strand') == 'HUMMS' ? 'selected' : ''); ?>>HUMMS</option>
                    <option value="STEM" <?php echo e(old('strand') == 'STEM' ? 'selected' : ''); ?>>STEM</option>
                    <option value="GAS" <?php echo e(old('strand') == 'GAS' ? 'selected' : ''); ?>>GAS</option>
                </select>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </div>

    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\school-projects\batch-2023-2024\Student-Registration-CRUD\resources\views/students\create.blade.php ENDPATH**/ ?>