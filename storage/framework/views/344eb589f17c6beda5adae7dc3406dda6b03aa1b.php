<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $__env->make('admin.admincss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        input {
            color: white !important;
            font-weight: bold !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div style="display: flex; flex-direction: column; margin: auto; width: 70%">
            <div>
                <form class="form-horizontal" action="<?php echo e(url('/uploadfood')); ?>" enctype="multipart/form-data"
                    method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="ssn" class="col-sm-3 text-end control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ssn"
                                    placeholder="Write a title here" name="title" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Price here"
                                    name="price" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 text-end control-label col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" placeholder="Image here"
                                    name="image" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                class="col-sm-3 text-end control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email"
                                    placeholder="write a description here" name="description" />
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="background-color: white">
                                <td><?php echo e($data->title); ?></td>
                                <td><?php echo e($data->price); ?></td>
                                <td><?php echo e($data->description); ?></td>
                                <td><img src="/foodimage/<?php echo e($data->image); ?>" alt=""
                                        style="width: 150px; height: 150px;"></td>
                                <td><a href="<?php echo e(url('deletemenu', $data->id)); ?>" class="btn btn-danger">Delete</a>
                                    <a href="<?php echo e(url('updateview', $data->id)); ?>" class="btn btn-success">Update</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.adminscripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH E:\My_Projects\laravel_youtube\first\resources\views/admin/foodmenu.blade.php ENDPATH**/ ?>