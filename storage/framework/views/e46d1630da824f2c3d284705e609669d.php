<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'trigger' => 'resetPassword'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'trigger' => 'resetPassword'
]); ?>
<?php foreach (array_filter(([
    'trigger' => 'resetPassword'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div id="resetPasswordModal" class="hidden fixed inset-0 p-4 flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
    <form action="/account/password/reset" method="POST" class="w-full max-w-lg bg-white shadow-lg rounded-md p-6 relative">
        <?php echo csrf_field(); ?>
        <svg xmlns="http://www.w3.org/2000/svg" id="closeResetPasswordModal"
            class="w-3.5 cursor-pointer shrink-0 fill-[#333] hover:fill-red-500 float-right" viewBox="0 0 320.591 320.591">
            <path
            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
            data-original="#000000"></path>
            <path
            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
            data-original="#000000"></path>
        </svg>
        <div class="my-8 text-center space-y-4">
            <h4>Reset Password</h4>
            <p class="text-sm text-gray-500 mt-4">Reset your saved password</p>
            <div class="relative flex items-center">
                <input type="password" placeholder="Enter Current Password" name="current_password" required
                class="px-4 py-3 bg-white text-[#333] w-full text-sm border-2 outline-[#007bff] rounded-lg" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                <path
                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                    data-original="#000000">
                </path>
                </svg>
            </div>
            <div class="relative flex items-center">
                <input type="password" placeholder="Enter Password" name="password" required
                class="px-4 py-3 bg-white text-[#333] w-full text-sm border-2 outline-[#007bff] rounded-lg" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                <path
                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                    data-original="#000000">
                </path>
                </svg>
            </div>
            <div class="relative flex items-center">
                <input type="password" placeholder="Confirm Password" name="password_confirmation" required
                class="px-4 py-3 bg-white text-[#333] w-full text-sm border-2 outline-[#007bff] rounded-lg" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                <path
                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                    data-original="#000000"></path>
                </svg>
            </div>
        </div>
        <button type="submit" class="px-6 py-2.5 min-w-[150px] w-full rounded text-white text-sm font-semibold border-none outline-none bg-blue-600 hover:bg-[#222]">
            Submit
        </button>
    </form>
</div>

<script>
    const openResetPasswordButton = document.getElementById('<?php echo e($trigger); ?>');
    const closeResetPasswordButton = document.getElementById('closeResetPasswordModal');
    const resetPasswordModal = document.getElementById('resetPasswordModal');

    function openResetPasswordModal(){
        resetPasswordModal.classList.remove('hidden');
        resetPasswordModal.classList.add('flex');
    }

    function closeResetPasswordModal(){
        resetPasswordModal.classList.remove('flex');
        resetPasswordModal.classList.add('hidden');
    }

    openResetPasswordButton.addEventListener('click', openResetPasswordModal);
    closeResetPasswordButton.addEventListener('click', closeResetPasswordModal);
    window.addEventListener('keydown', function(event){
        if(event.key == 'Escape'){
            closeResetPasswordModal();
        }
    });
</script><?php /**PATH C:\laragon\www\quizwatch\resources\views/components/modals/resetpassword.blade.php ENDPATH**/ ?>