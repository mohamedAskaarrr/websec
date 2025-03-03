<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Users List</h1>
        
        <form action="<?php echo e(route('products.index')); ?>" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" 
                       name="search" 
                       class="form-control" 
                       placeholder="Search by ID, name or email..." 
                       value="<?php echo e(request('search')); ?>">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-secondary">Clear</a>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->password); ?></td>
                    <td><?php echo e($user->created_at); ?></td>
                    <td><?php echo e($user->updated_at); ?></td>
                    <td>
                        <form action="<?php echo e(route('products.destroy', $user->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a href="<?php echo e(route('products.edit', $user->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Xampp\htdocs\webtestt\resources\views/products/index.blade.php ENDPATH**/ ?>