<?php $__env->startSection('title', 'Assessment'); ?>

<?php $__env->startSection('header'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/section_average_chart.js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h3 class="text-xl font-bold text-black"><?php echo e($assessment->classroom->name); ?></h3>
<p class="text-md font-semibold text-gray-700"><?php echo e($assessment->classroom->code); ?></p>


<div class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
    <?php if (isset($component)) { $__componentOriginal48427adc95e78cdfcd2a07ebbfb0b518 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48427adc95e78cdfcd2a07ebbfb0b518 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.dashboard','data' => ['iconBackgroundColor' => 'bg-blue-700','title' => 'Total Responses','value' => ''.e(count($assessment->answers)).'','defaultIcon' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['iconBackgroundColor' => 'bg-blue-700','title' => 'Total Responses','value' => ''.e(count($assessment->answers)).'','defaultIcon' => 'false']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="h-12 w-12 fill-white">
            <path d="M320-280q17 0 28.5-11.5T360-320q0-17-11.5-28.5T320-360q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280Zm0-160q17 0 28.5-11.5T360-480q0-17-11.5-28.5T320-520q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160q17 0 28.5-11.5T360-640q0-17-11.5-28.5T320-680q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Zm120 320h240v-80H440v80Zm0-160h240v-80H440v80Zm0-160h240v-80H440v80ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.dashboard','data' => ['iconBackgroundColor' => 'bg-green-600','title' => 'Highest Score','value' => ''.e(count($assessment->answers) >= 1 ? $assessment->answers[0]->score.' / '.$assessment->total : 'None').'','defaultIcon' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['iconBackgroundColor' => 'bg-green-600','title' => 'Highest Score','value' => ''.e(count($assessment->answers) >= 1 ? $assessment->answers[0]->score.' / '.$assessment->total : 'None').'','defaultIcon' => 'false']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="h-12 w-12 fill-white">
            <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.dashboard','data' => ['iconBackgroundColor' => 'bg-orange-600','title' => 'Assessment Average','value' => ''.e(($assessment->answers->avg('score') / $assessment->total) * 100).' %','defaultIcon' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['iconBackgroundColor' => 'bg-orange-600','title' => 'Assessment Average','value' => ''.e(($assessment->answers->avg('score') / $assessment->total) * 100).' %','defaultIcon' => 'false']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="h-12 w-12 fill-white">
            <path d="M240-160v-80l260-240-260-240v-80h480v120H431l215 200-215 200h289v120H240Z"/>
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

<div class="mt-6 flex flex-col space-y-3">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <p class="font-sans text-xl font-semibold text-gray-800"><?php echo e($assessment->title); ?></p>
        <div class="flex flex-row space-x-4 mt-2 md:mt-0">
            <button type="button" id="viewAssessment" onclick="previewForm()"
                class="flex flex-row items-center px-2.5 lg:px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
                View assessment
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="h-6 w-6 ml-2 inline fill-white">
                    <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
                </svg>
            </button>
            <button type="button" id="deleteAssessment"
                class="flex flex-row items-center px-2.5 lg:px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-red-600 hover:bg-red-700 active:bg-red-600">
                Delete assessment
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="h-6 w-6 ml-2 inline fill-white">
                    <path d="M600-240v-80h160v80H600Zm0-320v-80h280v80H600Zm0 160v-80h240v80H600ZM120-640H80v-80h160v-60h160v60h160v80h-40v360q0 33-23.5 56.5T440-200H200q-33 0-56.5-23.5T120-280v-360Zm80 0v360h240v-360H200Zm0 0v360-360Z"/>
                </svg>
            </button>
        </div>
    </div>
    <p class="font-sams text-lg text-gray-700 font-semibold"><?php echo e($assessment->created_at->format('F j, Y')); ?></p>
    <p class="font-sams text-md text-gray-700"><?php echo e($assessment->description); ?></p>
</div>

<form action="/classrooms/<?php echo e($assessment->classroom->code); ?>/assessments/builder/preview" method="POST" id="previewForm" target="_blank">
    <?php echo csrf_field(); ?>
    <input type="text" id="previewData" class="hidden" name="data" value="<?php echo e($assessment->data); ?>">
    <input type="text" id="previewTitle" class="hidden" name="title" value="<?php echo e($assessment->title); ?>">
    <input type="text" id="previewDescription" class="hidden" name="description" value="<?php echo e($assessment->description); ?>">
</form>

<form action="/assessment/delete" method="POST" id="deleteForm">
    <?php echo csrf_field(); ?>
    <input type="text" id="id" name="id" class="hidden" value="<?php echo e($assessment->id); ?>">
</form>

<div class="mt-4 grid grid-cols-1 gap-4 lg:grid-cols-5 w-full justify-center items-start">
    
    <div class="grid lg:col-span-3 bg-white shadow-[0_2px_15px_-6px_rgba(0,0,0,0.2)] px-6 py-8 w-full min-h-96 rounded-lg font-[sans-serif] overflow-hidden mt-4">
        <input type="text" class="hidden" id="sectionAverage" value="<?php echo e(json_encode($assessment->getSectionAverage())); ?>">
        <canvas id="sectionAverageChart"></canvas>
    </div>

    
    <div class="grid lg:col-span-2 bg-white shadow-[0_2px_15px_-6px_rgba(0,0,0,0.2)] px-6 py-8 w-full lg:max-w-sm rounded-lg font-[sans-serif] overflow-y-scroll mt-4">
        <div class="flex items-center">
            <h3 class="text-xl font-bold flex-1 text-black">User Score</h3>
        </div>
        <div class="flex flex-col space-y-2 mt-4 min-h-96">
            <?php $__currentLoopData = $assessment->classroom->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($user->pivot->owner == 0): ?>
                <?php if (isset($component)) { $__componentOriginal26c8e3107b11a322a94bfb09868146d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26c8e3107b11a322a94bfb09868146d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.userscore','data' => ['profile' => ''.e($user->profile).'','name' => ''.e($user->name).'','section' => ''.e($user->section->name).'','status' => ''.e($assessment->getStatusByUser($user->id) == 'Marked' ? $assessment->getScoreByUser($user->id).' / '.$assessment->total: $assessment->getStatusByUser($user->id)).'','href' => ''.e('/classrooms/'.$assessment->classroom->code.'/assessments/grade/'.$assessment->id.'/user/'.$user->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.userscore'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['profile' => ''.e($user->profile).'','name' => ''.e($user->name).'','section' => ''.e($user->section->name).'','status' => ''.e($assessment->getStatusByUser($user->id) == 'Marked' ? $assessment->getScoreByUser($user->id).' / '.$assessment->total: $assessment->getStatusByUser($user->id)).'','href' => ''.e('/classrooms/'.$assessment->classroom->code.'/assessments/grade/'.$assessment->id.'/user/'.$user->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26c8e3107b11a322a94bfb09868146d7)): ?>
<?php $attributes = $__attributesOriginal26c8e3107b11a322a94bfb09868146d7; ?>
<?php unset($__attributesOriginal26c8e3107b11a322a94bfb09868146d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26c8e3107b11a322a94bfb09868146d7)): ?>
<?php $component = $__componentOriginal26c8e3107b11a322a94bfb09868146d7; ?>
<?php unset($__componentOriginal26c8e3107b11a322a94bfb09868146d7); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>

<script>
    function previewForm(){
        document.getElementById('previewForm').submit();
    }
    function deleteAssessment(){
        document.getElementById('deleteForm').submit();
    }
</script>



<?php if (isset($component)) { $__componentOriginal192f6bd8f6b183c2e2017b6bef8ae78d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal192f6bd8f6b183c2e2017b6bef8ae78d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.confirm','data' => ['trigger' => 'deleteAssessment','title' => 'Confirm Delete','content' => 'Deleting this will delete the assessment forever. Continue?','confirmColor' => 'bg-red-500','action' => 'deleteAssessment()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modals.confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['trigger' => 'deleteAssessment','title' => 'Confirm Delete','content' => 'Deleting this will delete the assessment forever. Continue?','confirmColor' => 'bg-red-500','action' => 'deleteAssessment()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal192f6bd8f6b183c2e2017b6bef8ae78d)): ?>
<?php $attributes = $__attributesOriginal192f6bd8f6b183c2e2017b6bef8ae78d; ?>
<?php unset($__attributesOriginal192f6bd8f6b183c2e2017b6bef8ae78d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal192f6bd8f6b183c2e2017b6bef8ae78d)): ?>
<?php $component = $__componentOriginal192f6bd8f6b183c2e2017b6bef8ae78d; ?>
<?php unset($__componentOriginal192f6bd8f6b183c2e2017b6bef8ae78d); ?>
<?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\quizwatch\resources\views/assessment_owned.blade.php ENDPATH**/ ?>