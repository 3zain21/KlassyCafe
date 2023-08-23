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

    <base href="/public">
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
        <div style="margin: auto; width: 70%">
            <div>
                <form class="form-horizontal" action="<?php echo e(url('/updatefoodchef', $data->id)); ?>"
                    enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="ssn" class="col-sm-3 text-end control-label col-form-label">Chef
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ssn" value="<?php echo e($data->name); ?>"
                                    name="name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-end control-label col-form-label">Speciality</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname"
                                    value="<?php echo e($data->speciality); ?>" name="speciality" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="imageO" class="col-sm-3 text-end control-label col-form-label">Old
                                Image</label>
                            <div class="col-sm-9">
                                <img height="200" width="200" src="/chefimage/<?php echo e($data->image); ?>" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 text-end control-label col-form-label">New
                                Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image" />
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.adminscripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH E:\My_Projects\laravel_youtube\first\resources\views/admin/updatechef.blade.php ENDPATH**/ ?>