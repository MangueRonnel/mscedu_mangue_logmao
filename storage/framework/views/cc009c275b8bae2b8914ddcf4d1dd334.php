<?php $__env->startSection('title', 'Assessment'); ?>

<?php $__env->startSection('content'); ?>

<h3 class="text-xl font-bold text-black"><?php echo e($assessment->classroom->name); ?></h3>
<p class="text-md font-semibold text-gray-700"><?php echo e($assessment->classroom->code); ?></p>

<div class="mt-6 flex flex-col space-y-3">
    <p class="font-sans text-lg font-semibold text-gray-800"><?php echo e($assessment->title); ?></p>
    <p class="font-sams text-md text-gray-700 font-semibold"><?php echo e($assessment->created_at->format('F j, Y')); ?></p>
    <p class="font-sams text-md text-gray-700"><?php echo e($assessment->total); ?> points</p>
    <p class="font-sams text-md text-gray-700"><?php echo e($assessment->description); ?></p>
</div>

<div class="flex flex-col justify-between min-w-96 max-w-screen-md min-h-screen mx-auto mt-6 p-4 border border-gray-400 rounded-md shadow-lg">
    <form id="fields" class="flex flex-col">
        <?php $__currentLoopData = json_decode($assessment->data); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($node->type == 'instruction'): ?>
            <fieldset data-type="<?php echo e($node->type); ?>" data-text="<?php echo e($node->text); ?>" data-score="<?php echo e($node->score); ?>" data-options="<?php echo e($node->options); ?>">
                <p class="font-sans text-lg font-semibold">Instruction: <?php echo e($node->text); ?></p>
            </fieldset>
        <?php elseif($node->type == 'shortText'): ?>
            <fieldset data-type="<?php echo e($node->type); ?>" data-text="<?php echo e($node->text); ?>" data-score="<?php echo e($node->score); ?>" data-options="<?php echo e($node->options); ?>">
                <p for="" class="font-sans text-md font-base"><?php echo e($node->text); ?></p>
                <p class="mt-1 text-sm font-sans"><?php echo e($node->score); ?> points</p>
                <input type="text" placeholder="Enter your answer"
                class="mt-2 px-4 py-1.5 text-sm rounded-md bg-white border border-gray-400 w-full outline-blue-500 md:w-1/2"/>
            </fieldset>
        <?php elseif($node->type == 'longText'): ?>
            <fieldset data-type="<?php echo e($node->type); ?>" data-text="<?php echo e($node->text); ?>" data-score="<?php echo e($node->score); ?>" data-options="<?php echo e($node->options); ?>">
                <p for="" class="font-sans text-md font-base"><?php echo e($node->text); ?></p>
                <p class="mt-1 text-sm font-sans"><?php echo e($node->score); ?> points</p>
                <textarea placeholder="Enter your answer" class="mt-2 px-4 py-1.5 text-sm rounded-md bg-white border border-gray-400 w-full outline-blue-500 md:w-1/2">
                </textarea>
            </fieldset>
        <?php elseif($node->type == 'radio'): ?>
            <fieldset data-type="<?php echo e($node->type); ?>" data-text="<?php echo e($node->text); ?>" data-score="<?php echo e($node->score); ?>" data-options="<?php echo e($node->options); ?>">
                <p for="" class="font-sans text-md font-base"><?php echo e($node->text); ?></p>
                <p class="mt-1 text-sm font-sans"><?php echo e($node->score); ?> points</p>
                <?php $__currentLoopData = explode(',', $node->options); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mt-2 flex flex-row items-center space-x-3">
                        <input type="radio" name="<?php echo e($node->text); ?>" value="<?php echo e($option); ?>">
                        <label for="" class="font-sans text-base font-normal text-gray-700"><?php echo e($option); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </fieldset>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>

    <div class="flex items-center justify-center">
        <button type="button" id="submitAnswer"
            class="flex flex-row items-center px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-green-700 hover:bg-green-800 active:bg-green-700">
            Submit Answer
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="h-6 w-6 ml-2 inline fill-white">
                <path d="m120-200 180-280-180-280h480q20 0 37.5 9t28.5 25l174 246-174 246q-11 16-28.5 25t-37.5 9H120Zm146-80h334l142-200-142-200H266l130 200-130 200Zm130-200L266-680l130 200-130 200 130-200Z"/>
            </svg>
        </button>
    </div>
</div>

<form action="/answer/create" method="POST" id="answerForm" class="hidden">
    <?php echo csrf_field(); ?>
    <input type="text" name="user_id" value="<?php echo e(auth()->user()->id); ?>" class="hidden">
    <input type="text" name="assessment_id" value="<?php echo e($assessment->id); ?>" class="hidden">
    <input type="text" id="answerData" name="data" class="hidden">
</form>


<?php if (isset($component)) { $__componentOriginal192f6bd8f6b183c2e2017b6bef8ae78d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal192f6bd8f6b183c2e2017b6bef8ae78d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.confirm','data' => ['trigger' => 'submitAnswer','title' => 'Confirm Submit','content' => 'Submitting your answer won\'t let you modify your answer later. Continue?','confirmColor' => 'bg-green-500','action' => 'saveFormData()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modals.confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['trigger' => 'submitAnswer','title' => 'Confirm Submit','content' => 'Submitting your answer won\'t let you modify your answer later. Continue?','confirmColor' => 'bg-green-500','action' => 'saveFormData()']); ?>
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

<script>
    function saveFormData(){
        var form = document.getElementById('fields');
        var fieldsets = document.querySelectorAll('fieldset', form);
        var formData = [];
        
        fieldsets.forEach(function(element) {
            var type = element.getAttribute('data-type');
            var answer = '';
            if (type === 'shortText') {
                answer = document.querySelector('input', element).value;
            } else if (type === 'longText') {
                answer = document.querySelector('textarea', element).value;
            } else if (type === 'radio') {
                var options = document.querySelectorAll('input[type="radio"]', element);
                for (let option of options) {
                    if (option.checked) {
                        answer = option.value;
                        break;
                    }
                }
            }
            var fieldData = {
                'type': type,
                'text': element.getAttribute('data-text'),
                'options': element.getAttribute('data-options'),
                'score': element.getAttribute('data-score'),
                'answer': answer.trim()
            };
            formData.push(fieldData);
        });

        const answerForm = document.getElementById('answerForm');
        const answerData = document.getElementById('answerData');
        answerData.value = JSON.stringify(formData);
        answerForm.submit();
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\quizwatch\resources\views/assessment_unanswered.blade.php ENDPATH**/ ?>