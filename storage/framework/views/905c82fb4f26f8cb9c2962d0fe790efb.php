<?php $__env->startSection('title', 'Classrooms'); ?>

<?php $__env->startSection('content'); ?>

<div class="flex flex-row justify-between md:justify-end md:space-x-6 lg:space-x-12">
    <button type="button" id="joinClass"
        class="flex flex-row items-center px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
        Join a class
        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 inline stroke-white stroke-1">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.36364 13.5C6.36364 13.7761 6.58749 14 6.86364 14H13.5C14.3284 14 15 13.3284 15 12.5V2.5C15 1.67157 14.3284 1 13.5 1H3.5C2.67157 1 2 1.67157 2 2.5V9.13636C2 9.41251 2.22386 9.63636 2.5 9.63636C2.77614 9.63636 3 9.41251 3 9.13636V2.5C3 2.22386 3.22386 2 3.5 2H13.5C13.7761 2 14 2.22386 14 2.5V12.5C14 12.7761 13.7761 13 13.5 13H6.86364C6.58749 13 6.36364 13.2239 6.36364 13.5Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 5.5C11 5.22386 10.7761 5 10.5 5H5.5C5.22386 5 5 5.22386 5 5.5C5 5.77614 5.22386 6 5.5 6H9.29289L1.14645 14.1464C0.951184 14.3417 0.951184 14.6583 1.14645 14.8536C1.34171 15.0488 1.65829 15.0488 1.85355 14.8536L10 6.70711V10.5C10 10.7761 10.2239 11 10.5 11C10.7761 11 11 10.7761 11 10.5V5.5Z"/>
        </svg>            
    </button>
    <button type="button" id="createClass"
        class="flex flex-row items-center px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-green-600 hover:bg-green-700 active:bg-green-600">
        Create a class
        <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 inline stroke-white stroke-1">
            <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z"/>
        </svg>
    </button>
</div>


<p class="mt-6 font-sans text-lg font-semibold md:text-xl lg:text-2xl">Created Classrooms</p>
<div class="grid grid-cols-1 md:grid-cols-2 md:gap-4 lg:grid-cols-3">
    <?php if(count($owned_classrooms) == 0): ?>
        <p class="mt-8 mb-16 font-sans text-xl font-semibold text-gray-700 text-center md:col-span-2 md:text-2xl lg:col-span-3 lg:text-4xl">
            You haven't created any class yet
        </p>
    <?php endif; ?>
    <?php $__currentLoopData = $owned_classrooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classroom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalda47dae7d57a7e56ca2e4cd01668d4a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda47dae7d57a7e56ca2e4cd01668d4a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.classroom','data' => ['backgroundColor' => ''.e($classroom->color).'','name' => ''.e($classroom->name).'','code' => ''.e($classroom->code).'','users' => ''.e(count($classroom->users)).'','description' => ''.e($classroom->description).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.classroom'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['backgroundColor' => ''.e($classroom->color).'','name' => ''.e($classroom->name).'','code' => ''.e($classroom->code).'','users' => ''.e(count($classroom->users)).'','description' => ''.e($classroom->description).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda47dae7d57a7e56ca2e4cd01668d4a0)): ?>
<?php $attributes = $__attributesOriginalda47dae7d57a7e56ca2e4cd01668d4a0; ?>
<?php unset($__attributesOriginalda47dae7d57a7e56ca2e4cd01668d4a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda47dae7d57a7e56ca2e4cd01668d4a0)): ?>
<?php $component = $__componentOriginalda47dae7d57a7e56ca2e4cd01668d4a0; ?>
<?php unset($__componentOriginalda47dae7d57a7e56ca2e4cd01668d4a0); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<p class="mt-6 font-sans text-lg font-semibold md:text-xl lg:text-2xl">Joined Classrooms</p>
<div class="grid grid-cols-1 md:grid-cols-2 md:gap-4 lg:grid-cols-3 items-center justify-center">
    <?php if(count($joined_classrooms) == 0): ?>
        <p class="mt-8 font-sans text-xl font-semibold text-gray-700 text-center md:col-span-2 md:text-2xl lg:col-span-3 lg:text-4xl">
            You haven't joined any class yet
        </p>
    <?php endif; ?>
    <?php $__currentLoopData = $joined_classrooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classroom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalda47dae7d57a7e56ca2e4cd01668d4a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda47dae7d57a7e56ca2e4cd01668d4a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.classroom','data' => ['backgroundColor' => ''.e($classroom->color).'','name' => ''.e($classroom->name).'','code' => ''.e($classroom->code).'','users' => ''.e(count($classroom->users)).'','section' => ''.e($classroom->section->name).'','description' => ''.e($classroom->description).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.classroom'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['backgroundColor' => ''.e($classroom->color).'','name' => ''.e($classroom->name).'','code' => ''.e($classroom->code).'','users' => ''.e(count($classroom->users)).'','section' => ''.e($classroom->section->name).'','description' => ''.e($classroom->description).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda47dae7d57a7e56ca2e4cd01668d4a0)): ?>
<?php $attributes = $__attributesOriginalda47dae7d57a7e56ca2e4cd01668d4a0; ?>
<?php unset($__attributesOriginalda47dae7d57a7e56ca2e4cd01668d4a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda47dae7d57a7e56ca2e4cd01668d4a0)): ?>
<?php $component = $__componentOriginalda47dae7d57a7e56ca2e4cd01668d4a0; ?>
<?php unset($__componentOriginalda47dae7d57a7e56ca2e4cd01668d4a0); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php if (isset($component)) { $__componentOriginal9aa0a62b2c9635f50e0671c125ae3972 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9aa0a62b2c9635f50e0671c125ae3972 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.createclass','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modals.createclass'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9aa0a62b2c9635f50e0671c125ae3972)): ?>
<?php $attributes = $__attributesOriginal9aa0a62b2c9635f50e0671c125ae3972; ?>
<?php unset($__attributesOriginal9aa0a62b2c9635f50e0671c125ae3972); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9aa0a62b2c9635f50e0671c125ae3972)): ?>
<?php $component = $__componentOriginal9aa0a62b2c9635f50e0671c125ae3972; ?>
<?php unset($__componentOriginal9aa0a62b2c9635f50e0671c125ae3972); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginala5e4eeb702743b3a6342821caba98f01 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5e4eeb702743b3a6342821caba98f01 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.joinclass','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modals.joinclass'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5e4eeb702743b3a6342821caba98f01)): ?>
<?php $attributes = $__attributesOriginala5e4eeb702743b3a6342821caba98f01; ?>
<?php unset($__attributesOriginala5e4eeb702743b3a6342821caba98f01); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5e4eeb702743b3a6342821caba98f01)): ?>
<?php $component = $__componentOriginala5e4eeb702743b3a6342821caba98f01; ?>
<?php unset($__componentOriginala5e4eeb702743b3a6342821caba98f01); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\quizwatch\resources\views/classrooms.blade.php ENDPATH**/ ?>