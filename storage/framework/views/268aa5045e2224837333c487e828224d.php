<?php $__env->startSection('title', 'Assessment Form Preview'); ?>

<?php $__env->startSection('content'); ?>
<p class="font-sans text-lg font-semibold"><?php echo e($title); ?></p>
<p class="font-sans text-md text-gray-600"><?php echo e($description); ?></p>

<form action="" class="mt-5 flex flex-col space-y-3">
    <?php $__currentLoopData = json_decode($data); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($node->type == 'instruction'): ?>
            <fieldset>
                <p class="font-sans text-lg font-semibold">Instruction: <?php echo e($node->text); ?></p>
            </fieldset>
        <?php elseif($node->type == 'shortText'): ?>
            <fieldset>
                <p for="" class="font-sans text-md font-base"><?php echo e($node->text); ?></p>
                <p class="mt-1 text-sm font-sans"><?php echo e($node->score); ?> points</p>
                <input type="text" placeholder="Enter your answer"
                class="mt-2 px-4 py-1.5 text-sm rounded-md bg-white border border-gray-400 w-full outline-blue-500 md:w-1/2"/>
            </fieldset>
        <?php elseif($node->type == 'longText'): ?>
            <fieldset>
                <p for="" class="font-sans text-md font-base"><?php echo e($node->text); ?></p>
                <p class="mt-1 text-sm font-sans"><?php echo e($node->score); ?> points</p>
                <textarea placeholder="Enter your answer" class="mt-2 px-4 py-1.5 text-sm rounded-md bg-white border border-gray-400 w-full outline-blue-500 md:w-1/2">
                </textarea>
            </fieldset>
        <?php elseif($node->type == 'radio'): ?>
            <fieldset>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\quizwatch\resources\views/formpreview.blade.php ENDPATH**/ ?>