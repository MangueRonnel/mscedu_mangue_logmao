<?php $__env->startSection('title', 'Classroom'); ?>

<?php $__env->startSection('content'); ?>

<h3 class="text-xl font-bold text-black"><?php echo e($classroom->name); ?></h3>
<p class="text-md font-semibold text-gray-700"><?php echo e($classroom->code); ?></p>


<div class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
    <?php if (isset($component)) { $__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.dashboard','data' => ['iconBackgroundColor' => 'bg-green-500','title' => 'Total Users','value' => ''.e(count($classroom->users)).'','defaultIcon' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['iconBackgroundColor' => 'bg-green-500','title' => 'Total Users','value' => ''.e(count($classroom->users)).'','defaultIcon' => 'false']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="h-12 w-12 fill-white">
            <path d="M680-360q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM480-160v-56q0-24 12.5-44.5T528-290q36-15 74.5-22.5T680-320q39 0 77.5 7.5T832-290q23 9 35.5 29.5T880-216v56H480Zm-80-320q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-160ZM80-160v-112q0-34 17-62.5t47-43.5q60-30 124.5-46T400-440q35 0 70 6t70 14l-34 34-34 34q-18-5-36-6.5t-36-1.5q-58 0-113.5 14T180-306q-10 5-15 14t-5 20v32h240v80H80Zm320-80Zm0-320q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Z"/>
        </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518)): ?>
<?php $attributes = $__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518; ?>
<?php unset($__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518)): ?>
<?php $component = $__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518; ?>
<?php unset($__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.dashboard','data' => ['iconBackgroundColor' => 'bg-red-600','title' => 'Total Assessments','value' => ''.e(count($classroom->assessments)).'','defaultIcon' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['iconBackgroundColor' => 'bg-red-600','title' => 'Total Assessments','value' => ''.e(count($classroom->assessments)).'','defaultIcon' => 'false']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="h-12 w-12 fill-white">
            <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
        </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518)): ?>
<?php $attributes = $__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518; ?>
<?php unset($__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518)): ?>
<?php $component = $__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518; ?>
<?php unset($__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.dashboard','data' => ['iconBackgroundColor' => 'bg-indigo-600','title' => 'Classroom Average','value' => ''.e($classroom->getScoreAverage()).' %','defaultIcon' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['iconBackgroundColor' => 'bg-indigo-600','title' => 'Classroom Average','value' => ''.e($classroom->getScoreAverage()).' %','defaultIcon' => 'false']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="h-12 w-12 fill-white">
            <path d="m260-520 220-360 220 360H260ZM700-80q-75 0-127.5-52.5T520-260q0-75 52.5-127.5T700-440q75 0 127.5 52.5T880-260q0 75-52.5 127.5T700-80Zm-580-20v-320h320v320H120Zm580-60q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-500-20h160v-160H200v160Zm202-420h156l-78-126-78 126Zm78 0ZM360-340Zm340 80Z"/>
        </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518)): ?>
<?php $attributes = $__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518; ?>
<?php unset($__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518)): ?>
<?php $component = $__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518; ?>
<?php unset($__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518); ?>
<?php endif; ?>
</div>

<?php if($is_owner): ?>
<div class="flex justify-end">
    <button type="button" id="createAssessment" onclick="window.location = '/classrooms/<?php echo e($classroom->code); ?>/assessments/builder'"
        class="mt-6 flex flex-row items-center px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-green-600 hover:bg-green-700 active:bg-green-600">
        Create an assessment
        <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 inline stroke-white stroke-1">
            <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z"/>
        </svg>
    </button>
</div>
<?php endif; ?>

<div class="mt-4 grid grid-cols-1 gap-4 lg:grid-cols-5 w-full justify-center items-start">
    
    <div class="grid lg:col-span-3 bg-white shadow-[0_2px_15px_-6px_rgba(0,0,0,0.2)] px-6 py-8 w-full rounded-lg font-[sans-serif] overflow-hidden mt-4">
        <div class="flex items-center">
            <h3 class="text-xl font-bold flex-1 text-black">Assessments</h3>
        </div>
        <div class="min-h-96 mt-8 space-y-4">
            <?php if(count($classroom->assessments) == 0): ?>
                <p class="mt-16 text-3xl font-semibold text-gray-700 text-center">No assessments yet</p>
            <?php endif; ?>
            <?php $__currentLoopData = $classroom->assessments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assessment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <?php if($is_owner): ?>
                    <?php if (isset($component)) { $__componentOriginal43b2c2741d9ab97b70e242092c58996a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43b2c2741d9ab97b70e242092c58996a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.assessment','data' => ['href' => '/classrooms/'.e($classroom->code).'/assessments/view/'.e($assessment->id).'','title' => ''.e($assessment->title).'','date' => ''.e($assessment->created_at->format('F j, Y')).'','total' => ''.e($assessment->total).'','description' => ''.e($assessment->description).'','status' => 'Answered: '.e(count($assessment->answers)).' / '.e(count($classroom->users) - 1).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.assessment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/classrooms/'.e($classroom->code).'/assessments/view/'.e($assessment->id).'','title' => ''.e($assessment->title).'','date' => ''.e($assessment->created_at->format('F j, Y')).'','total' => ''.e($assessment->total).'','description' => ''.e($assessment->description).'','status' => 'Answered: '.e(count($assessment->answers)).' / '.e(count($classroom->users) - 1).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43b2c2741d9ab97b70e242092c58996a)): ?>
<?php $attributes = $__attributesOriginal43b2c2741d9ab97b70e242092c58996a; ?>
<?php unset($__attributesOriginal43b2c2741d9ab97b70e242092c58996a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43b2c2741d9ab97b70e242092c58996a)): ?>
<?php $component = $__componentOriginal43b2c2741d9ab97b70e242092c58996a; ?>
<?php unset($__componentOriginal43b2c2741d9ab97b70e242092c58996a); ?>
<?php endif; ?>
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal43b2c2741d9ab97b70e242092c58996a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43b2c2741d9ab97b70e242092c58996a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.assessment','data' => ['href' => '/classrooms/'.e($classroom->code).'/assessments/view/'.e($assessment->id).'','title' => ''.e($assessment->title).'','date' => ''.e($assessment->created_at->format('F j, Y')).'','total' => ''.e($assessment->total).'','description' => ''.e($assessment->description).'','status' => ''.e($assessment->getStatusByUser(auth()->user()->id)).'','score' => 'Score: '.e($assessment->getScoreByUser(auth()->user()->id) != null ? $assessment->getScoreByUser(auth()->user()->id) : 'No grade').' / '.e($assessment->total).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.assessment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/classrooms/'.e($classroom->code).'/assessments/view/'.e($assessment->id).'','title' => ''.e($assessment->title).'','date' => ''.e($assessment->created_at->format('F j, Y')).'','total' => ''.e($assessment->total).'','description' => ''.e($assessment->description).'','status' => ''.e($assessment->getStatusByUser(auth()->user()->id)).'','score' => 'Score: '.e($assessment->getScoreByUser(auth()->user()->id) != null ? $assessment->getScoreByUser(auth()->user()->id) : 'No grade').' / '.e($assessment->total).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43b2c2741d9ab97b70e242092c58996a)): ?>
<?php $attributes = $__attributesOriginal43b2c2741d9ab97b70e242092c58996a; ?>
<?php unset($__attributesOriginal43b2c2741d9ab97b70e242092c58996a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43b2c2741d9ab97b70e242092c58996a)): ?>
<?php $component = $__componentOriginal43b2c2741d9ab97b70e242092c58996a; ?>
<?php unset($__componentOriginal43b2c2741d9ab97b70e242092c58996a); ?>
<?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    
    
    <div class="grid lg:col-span-2 bg-white shadow-[0_2px_15px_-6px_rgba(0,0,0,0.2)] px-6 py-8 w-full lg:max-w-sm rounded-lg font-[sans-serif] overflow-y-scroll mt-4">
        <h3 class="text-xl font-bold text-black">Users</h3>
        <div class="flex flex-col mt-8 space-y-4 h-96">
            <?php $__currentLoopData = $classroom->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal58c6b21e812b304b196846afb4b16166 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58c6b21e812b304b196846afb4b16166 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.user','data' => ['profile' => ''.e($user->profile).'','name' => ''.e($user->name).'','email' => ''.e($user->email).'','value' => ''.e($user->section != null ? $user->section->name : '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['profile' => ''.e($user->profile).'','name' => ''.e($user->name).'','email' => ''.e($user->email).'','value' => ''.e($user->section != null ? $user->section->name : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal58c6b21e812b304b196846afb4b16166)): ?>
<?php $attributes = $__attributesOriginal58c6b21e812b304b196846afb4b16166; ?>
<?php unset($__attributesOriginal58c6b21e812b304b196846afb4b16166); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58c6b21e812b304b196846afb4b16166)): ?>
<?php $component = $__componentOriginal58c6b21e812b304b196846afb4b16166; ?>
<?php unset($__componentOriginal58c6b21e812b304b196846afb4b16166); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\quizwatch\resources\views/classroom.blade.php ENDPATH**/ ?>