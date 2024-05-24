<?php $__env->startSection('title', 'Assessment'); ?>

<?php $__env->startSection('content'); ?>

<h3 class="text-xl font-bold text-black"><?php echo e($answer->assessment->classroom->name); ?></h3>
<p class="text-md font-semibold text-gray-700"><?php echo e($answer->assessment->classroom->code); ?></p>

<div class="mt-6 flex flex-col space-y-3">
    <p class="font-sans text-lg font-semibold text-gray-800"><?php echo e($answer->assessment->title); ?></p>
    <p class="font-sams text-md text-gray-700 font-semibold"><?php echo e($answer->assessment->created_at->format('F j, Y')); ?></p>
    <p class="font-sams text-md text-gray-700"><?php echo e($answer->assessment->total); ?> points</p>
    <p class="font-sams text-md text-gray-700"><?php echo e($answer->assessment->description); ?></p>
</div>

<div class="flex flex-col justify-between min-w-96 max-w-screen-md min-h-screen mx-auto mt-6 p-4 border border-gray-400 rounded-md shadow-lg">
    <form id="fields" class="flex flex-col">
        <?php $__currentLoopData = json_decode($answer->data); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($node->type == 'instruction'): ?>
            <fieldset data-type="<?php echo e($node->type); ?>" data-text="<?php echo e($node->text); ?>" data-score="<?php echo e($node->score); ?>" data-options="<?php echo e($node->options); ?>">
                <p class="font-sans text-lg font-semibold">Instruction: <?php echo e($node->text); ?></p>
            </fieldset>
        <?php elseif($node->type == 'shortText'): ?>
            <fieldset data-type="<?php echo e($node->type); ?>" data-text="<?php echo e($node->text); ?>" data-score="<?php echo e($node->score); ?>" data-options="<?php echo e($node->options); ?>">
                <p for="" class="font-sans text-md font-base"><?php echo e($node->text); ?></p>
                <p class="mt-1 text-sm font-sans"><?php echo e($node->score); ?> points</p>
                <input type="text" placeholder="Enter your answer" value="<?php echo e(trim($node->answer)); ?>" readonly
                class="mt-2 px-4 py-1.5 text-sm rounded-md bg-white border border-gray-400 w-full outline-blue-500 md:w-1/2"/>
            </fieldset>
        <?php elseif($node->type == 'longText'): ?>
            <fieldset data-type="<?php echo e($node->type); ?>" data-text="<?php echo e($node->text); ?>" data-score="<?php echo e($node->score); ?>" data-options="<?php echo e($node->options); ?>">
                <p for="" class="font-sans text-md font-base"><?php echo e($node->text); ?></p>
                <p class="mt-1 text-sm font-sans"><?php echo e($node->score); ?> points</p>
                <textarea placeholder="Enter your answer" readonly class="mt-2 px-4 py-1.5 text-sm rounded-md bg-white border border-gray-400 w-full outline-blue-500 md:w-1/2"><?php echo e(trim($node->answer)); ?></textarea>
            </fieldset>
        <?php elseif($node->type == 'radio'): ?>
            <fieldset data-type="<?php echo e($node->type); ?>" data-text="<?php echo e($node->text); ?>" data-score="<?php echo e($node->score); ?>" data-options="<?php echo e($node->options); ?>">
                <p for="" class="font-sans text-md font-base"><?php echo e($node->text); ?></p>
                <p class="mt-1 text-sm font-sans"><?php echo e($node->score); ?> points</p>
                <?php $__currentLoopData = explode(',', $node->options); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mt-2 flex flex-row items-center space-x-3">
                        <input type="radio" name="<?php echo e($node->text); ?>" value="<?php echo e($option); ?>" <?php echo e($node->answer == $option ? "checked" : "disabled"); ?>>
                        <label for="" class="font-sans text-base font-normal text-gray-700"><?php echo e($option); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </fieldset>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\quizwatch\resources\views/assessment_answered.blade.php ENDPATH**/ ?>