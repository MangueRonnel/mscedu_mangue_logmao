<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => '',
    'trigger' => 'confirmButton',
    'title' => 'Confirm',
    'content' => 'Are you sure you want to continue?',
    'cancel' => 'No',
    'confirm' => 'Confirm',
    'confirmColor' => 'bg-green-500',
    'action' => '',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id' => '',
    'trigger' => 'confirmButton',
    'title' => 'Confirm',
    'content' => 'Are you sure you want to continue?',
    'cancel' => 'No',
    'confirm' => 'Confirm',
    'confirmColor' => 'bg-green-500',
    'action' => '',
]); ?>
<?php foreach (array_filter(([
    'id' => '',
    'trigger' => 'confirmButton',
    'title' => 'Confirm',
    'content' => 'Are you sure you want to continue?',
    'cancel' => 'No',
    'confirm' => 'Confirm',
    'confirmColor' => 'bg-green-500',
    'action' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(empty($id)): ?>
    <?php $id = Str::random(4); ?>
<?php endif; ?>

<div id="confirmModal-<?php echo e($id); ?>" class="hidden fixed inset-0 p-4 flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-md p-6 relative">
        <svg xmlns="http://www.w3.org/2000/svg" id="confirmModal-<?php echo e($id); ?>-x"
            class="w-3.5 cursor-pointer shrink-0 fill-[#333] hover:fill-red-500 float-right" viewBox="0 0 320.591 320.591">
            <path d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z" data-original="#000000"></path>
            <path d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z" data-original="#000000"></path>
        </svg>
        <div class="my-8">
            <h4 class="text-lg text-[#333] font-semibold"><?php echo e($title); ?></h4>
            <p class="text-sm text-gray-500 mt-4"><?php echo e($content); ?></p>
        </div>
        <div class="flex justify-end gap-4 max-sm:flex-col">
            <button type="button" id="confirmModal-<?php echo e($id); ?>-cancel"
                class="px-6 py-2.5 min-w-[150px] rounded text-[#333] text-sm font-semibold border-none outline-none bg-gray-200 hover:bg-gray-300 active:bg-gray-200">
                <?php echo e($cancel); ?>

            </button>
            <button type="button" id="confirmModal-<?php echo e($id); ?>-confirm"
                class="px-6 py-2.5 min-w-[150px] rounded text-white text-sm font-semibold border-none outline-none <?php echo e($confirmColor); ?> hover:bg-[#222]">
                <?php echo e($confirm); ?>

            </button>
        </div>
    </div>
</div>

<script>
    var triggerButton<?php echo e($id); ?> = document.getElementById('<?php echo e($trigger); ?>');
    var confirmModal<?php echo e($id); ?> = document.getElementById('confirmModal-<?php echo e($id); ?>');
    var xButton<?php echo e($id); ?> = document.getElementById('confirmModal-<?php echo e($id); ?>-x');
    var cancelButton<?php echo e($id); ?> = document.getElementById('confirmModal-<?php echo e($id); ?>-cancel');
    var confirmButton<?php echo e($id); ?> = document.getElementById('confirmModal-<?php echo e($id); ?>-confirm');

    function openConfirmModal<?php echo e($id); ?>(){
        confirmModal<?php echo e($id); ?>.classList.remove('hidden');
        confirmModal<?php echo e($id); ?>.classList.add('flex');
    }

    function closeConfirmModal<?php echo e($id); ?>(){
        confirmModal<?php echo e($id); ?>.classList.remove('flex');
        confirmModal<?php echo e($id); ?>.classList.add('hidden');
    }

    triggerButton<?php echo e($id); ?>.addEventListener('click', openConfirmModal<?php echo e($id); ?>);
    xButton<?php echo e($id); ?>.addEventListener('click', closeConfirmModal<?php echo e($id); ?>);
    cancelButton<?php echo e($id); ?>.addEventListener('click', closeConfirmModal<?php echo e($id); ?>);
    window.addEventListener('keydown', function(event){
        if(event.key == 'Escape'){
            closeConfirmModal<?php echo e($id); ?>();
        }
    });
    
    <?php if($action): ?>
    confirmButton<?php echo e($id); ?>.addEventListener('click', function(){
        <?php echo e($action); ?>;
        closeConfirmModal<?php echo e($id); ?>();
    });
    <?php endif; ?>

</script><?php /**PATH C:\laragon\www\quizwatch\resources\views/components/modals/confirm.blade.php ENDPATH**/ ?>