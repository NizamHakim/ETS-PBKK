<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Items List</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="/dashboard" class="btn btn-danger">Back to Dashboard</a>
                <a href="/dashboard/items/create" class="btn btn-primary">Add Item</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo e($item->image); ?>" alt="Card image cap">
                        <div class="card-body">
                            <p><strong>Jenis:</strong> <?php echo e($item->jenis->nama); ?></p>
                            <p><strong>Kondisi:</strong> <?php echo e($item->kondisi->nama); ?></p>
                            <p><strong>Keterangan:</strong> <?php echo e($item->keterangan); ?></p>
                            <p><strong>Kecacatan:</strong> <?php echo e($item->kecacatan); ?></p>
                            <p><strong>Jumlah:</strong> <?php echo e($item->jumlah); ?></p>
                            <a href="/dashboard/items/<?php echo e($item->id); ?>" class="btn btn-primary">Edit</a>
                            <a href="/dashboard/items/<?php echo e($item->id); ?>" class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\laragon\www\ets\resources\views/items/index.blade.php ENDPATH**/ ?>