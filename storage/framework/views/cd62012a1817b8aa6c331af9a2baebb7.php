

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Grades</h1>
    <a href="<?php echo e(route('grades.create')); ?>" class="btn btn-primary mb-3">Create New Grade</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term => $termGrades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2>Term: <?php echo e($term); ?></h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Grade</th>
                    <th>Credit Hours</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $termGrades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($grade->course_name); ?></td>
                        <td><?php echo e($grade->grade); ?></td>
                        <td><?php echo e($grade->credit_hours); ?></td>
                        <td>
                            <a href="<?php echo e(route('grades.edit', $grade->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="<?php echo e(route('grades.destroy', $grade->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this grade?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <p><strong>Term GPA:</strong> <?php echo e(number_format($termGPA[$term], 2)); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h3>Cumulative GPA (CGPA): <?php echo e(number_format($cgpa, 2)); ?></h3>
    <h3>Cumulative Credit Hours (CCH): <?php echo e($cch); ?></h3>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Xampp\htdocs\webtestt\resources\views/grades/index.blade.php ENDPATH**/ ?>