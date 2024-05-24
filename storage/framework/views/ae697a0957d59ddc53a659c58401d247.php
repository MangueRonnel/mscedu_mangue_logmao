<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'trigger' => 'gradeAssessment',
    'id' => ''
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'trigger' => 'gradeAssessment',
    'id' => ''
]); ?>
<?php foreach (array_filter(([
    'trigger' => 'gradeAssessment',
    'id' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div id="gradeAssessmentModal" class="hidden fixed inset-0 p-4 flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
    <form action="/answer/grade" method="POST" class="w-full max-w-lg bg-white shadow-lg rounded-md p-6 relative">
        <?php echo csrf_field(); ?>
        <svg xmlns="http://www.w3.org/2000/svg" id="closeGradeAssessmentModal"
            class="w-3.5 cursor-pointer shrink-0 fill-[#333] hover:fill-red-500 float-right" viewBox="0 0 320.591 320.591">
            <path
            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
            data-original="#000000"></path>
            <path
            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
            data-original="#000000"></path>
        </svg>
        <div class="my-8 text-center">
            <h4 class="text-2xl text-[#333] font-semibold">Grade Assessment</h4>
            <p class="text-sm text-gray-500 mt-4">Grade this particular assessment</p>
            <input type="text" class="hidden" name="id" value="<?php echo e($id); ?>">
            <input type="text" id="score" name="score" placeholder="Enter assessment score" class="mt-6 px-4 py-3 bg-white text-[#333] w-full text-sm border-2 outline-[#007bff] rounded-lg" required/>
        </div>
        <button type="submit" class="px-6 py-2.5 min-w-[150px] w-full rounded text-white text-sm font-semibold border-none outline-none bg-blue-600 hover:bg-[#222]">
            Submit
        </button>
    </form>
</div>

<script>
    const openGradeAssessmentButton = document.getElementById('<?php echo e($trigger); ?>');
    const closeGradeAssessmentButton = document.getElementById('closeGradeAssessmentModal');
    const gradeAssessmentModal = document.getElementById('gradeAssessmentModal');

    function openGradeAssessmentModal(){
        gradeAssessmentModal.classList.remove('hidden');
        gradeAssessmentModal.classList.add('flex');
    }

    function closeGradeAssessmentModal(){
        gradeAssessmentModal.classList.remove('flex');
        gradeAssessmentModal.classList.add('hidden');
    }

    openGradeAssessmentButton.addEventListener('click', openGradeAssessmentModal);
    closeGradeAssessmentButton.addEventListener('click', closeGradeAssessmentModal);
    window.addEventListener('keydown', function(event){
        if(event.key == 'Escape'){
            closeGradeAssessmentModal();
        }
    });
</script>
<?php /**PATH C:\laragon\www\quizwatch\resources\views/components/modals/gradeassessment.blade.php ENDPATH**/ ?>