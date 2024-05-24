@props([
    'trigger' => 'createClass'
])

<div id="createClassModal" class="hidden fixed inset-0 p-4 flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
    <form action="/classroom/create" method="POST" class="w-full max-w-lg bg-white shadow-lg rounded-md p-6 relative">
        @csrf
        <svg xmlns="http://www.w3.org/2000/svg" id="closeCreateClassModal"
            class="w-3.5 cursor-pointer shrink-0 fill-[#333] hover:fill-red-500 float-right" viewBox="0 0 320.591 320.591">
            <path
            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
            data-original="#000000"></path>
            <path
            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
            data-original="#000000"></path>
        </svg>
        <div class="my-8 text-center">
            <h4 class="text-2xl text-[#333] font-semibold">Create a Classroom</h4>
            <p class="text-sm text-gray-500 mt-4">Create a new classroom and let others answer your customized assessments</p>
            <input type="name" name="name" placeholder="Enter class name" class="mt-6 px-4 py-3 bg-white text-[#333] w-full text-sm border-2 outline-[#007bff] rounded-lg" required/>
            <input type="sections" name="sections" placeholder="Enter comma seperated sections (e.g. I-A, I-B, ...)" 
                class="mt-6 px-4 py-3 bg-white text-[#333] w-full text-sm border-2 outline-[#007bff] rounded-lg" required/>
            <textarea placeholder='Enter short class description' name="description"
                class="mt-6 p-4 bg-white max-w-md mx-auto w-full block text-sm border border-gray-300 outline-[#007bff] rounded" rows="4" required></textarea>
        </div>
        <button type="submit" class="px-6 py-2.5 min-w-[150px] w-full rounded text-white text-sm font-semibold border-none outline-none bg-blue-600 hover:bg-[#222]">
            Submit
        </button>
    </form>
</div>

<script>
    const openCreateClassButton = document.getElementById('{{ $trigger }}');
    const closeCreateClassButton = document.getElementById('closeCreateClassModal');
    const createClassModal = document.getElementById('createClassModal');

    function openCreateClassModal(){
        createClassModal.classList.remove('hidden');
        createClassModal.classList.add('flex');
    }

    function closeCreateClassModal(){
        createClassModal.classList.remove('flex');
        createClassModal.classList.add('hidden');
    }

    openCreateClassButton.addEventListener('click', openCreateClassModal);
    closeCreateClassButton.addEventListener('click', closeCreateClassModal);
    window.addEventListener('keydown', function(event){
        if(event.key == 'Escape'){
            closeCreateClassModal();
        }
    });
</script>