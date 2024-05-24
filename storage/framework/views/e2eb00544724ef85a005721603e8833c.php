<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title' => 'Assessment Title',
    'date' => 'January 01, 2000',
    'total' => '0',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt',
    'href' => '#',
    'status' => 'Unanswered',
    'score' => null
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title' => 'Assessment Title',
    'date' => 'January 01, 2000',
    'total' => '0',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt',
    'href' => '#',
    'status' => 'Unanswered',
    'score' => null
]); ?>
<?php foreach (array_filter(([
    'title' => 'Assessment Title',
    'date' => 'January 01, 2000',
    'total' => '0',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt',
    'href' => '#',
    'status' => 'Unanswered',
    'score' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div onclick="window.location.href = '<?php echo e($href); ?>'"
    class="flex flex-wrap items-center cursor-pointer shadow-[0_0px_8px_-3px_rgba(6,81,237,0.3)] rounded-lg w-full px-4 py-4 hover:bg-gray-200">
    <div class="ml-4 flex-1">
        <div class="flex flex-col md:flex-row md:justify-between md:items-start">
            <p class="text-lg text-black font-semibold"><?php echo e($title); ?></p>
            <p class="text-sm text-gray-700 font-semibold"><?php echo e($date); ?></p>
        </div>
        <p class="text-xs text-gray-500 mt-0.5"><?php echo e($total); ?> points</p>
        <div class="flex flex-col md:flex-row md:justify-between md:items-start">
            <p class="mt-4 text-gray-800 text-sm"><?php echo e($status); ?></p>
            <?php if($score != null): ?>
            <p class="mt-4 text-gray-800 text-sm font-semibold"><?php echo e($score); ?></p>
            <?php endif; ?>
        </div>
        <p class="mt-4 text-md text-gray-500"><?php echo e($description); ?></p>
    </div>
</div><?php /**PATH C:\laragon\www\quizwatch\resources\views/components/cards/assessment.blade.php ENDPATH**/ ?>