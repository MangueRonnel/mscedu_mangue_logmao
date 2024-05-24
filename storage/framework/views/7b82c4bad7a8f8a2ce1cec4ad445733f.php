<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'iconBackgroundColor' => 'bg-blue-400',
    'title' => 'Default Title',
    'value' => '0',
    'defaultIcon' => 'true',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'iconBackgroundColor' => 'bg-blue-400',
    'title' => 'Default Title',
    'value' => '0',
    'defaultIcon' => 'true',
]); ?>
<?php foreach (array_filter(([
    'iconBackgroundColor' => 'bg-blue-400',
    'title' => 'Default Title',
    'value' => '0',
    'defaultIcon' => 'true',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
    <div class="<?php echo e($iconBackgroundColor); ?> p-4">
        <?php if($defaultIcon == 'true'): ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 fill-white" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                </path>
            </svg>
        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?>

    </div>
    <div class="px-4 text-gray-700">
        <h3 class="text-sm tracking-wider"><?php echo e($title); ?></h3>
        <p class="text-3xl"><?php echo e($value); ?></p>
    </div>
</div><?php /**PATH C:\laragon\www\quizwatch\resources\views/components/cards/dashboard.blade.php ENDPATH**/ ?>