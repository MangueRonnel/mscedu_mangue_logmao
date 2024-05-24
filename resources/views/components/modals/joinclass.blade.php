@props([
    'trigger' => 'joinClass'
])

<div id="joinClassModal" class="hidden fixed inset-0 p-4 flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
    <form action="/classroom/join" method="POST" class="w-full max-w-lg bg-white shadow-lg rounded-md p-6 relative">
        @csrf
        <svg xmlns="http://www.w3.org/2000/svg" id="closeJoinClassModal"
            class="w-3.5 cursor-pointer shrink-0 fill-[#333] hover:fill-red-500 float-right" viewBox="0 0 320.591 320.591">
            <path
            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
            data-original="#000000"></path>
            <path
            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
            data-original="#000000"></path>
        </svg>
        <div class="my-8 text-center">
            <h4 class="text-2xl text-[#333] font-semibold">Join a Classroom</h4>
            <p class="text-sm text-gray-500 mt-4">Join a classroom and access / answer customized assessments</p>
            <input type="text" id="code" name="code" placeholder="Enter class code" class="mt-6 px-4 py-3 bg-white text-[#333] w-full text-sm border-2 outline-[#007bff] rounded-lg" required/>
            <select id="section" name="section" class="mt-6 px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="null" selected>Select a section</option>
            </select>
        </div>
        <button type="submit" class="px-6 py-2.5 min-w-[150px] w-full rounded text-white text-sm font-semibold border-none outline-none bg-blue-600 hover:bg-[#222]">
            Submit
        </button>
    </form>
</div>

<script>
    const openJoinClassButton = document.getElementById('{{ $trigger }}');
    const closeJoinClassButton = document.getElementById('closeJoinClassModal');
    const joinClassModal = document.getElementById('joinClassModal');

    function openJoinClassModal(){
        joinClassModal.classList.remove('hidden');
        joinClassModal.classList.add('flex');
    }

    function closeJoinClassModal(){
        joinClassModal.classList.remove('flex');
        joinClassModal.classList.add('hidden');
    }

    openJoinClassButton.addEventListener('click', openJoinClassModal);
    closeJoinClassButton.addEventListener('click', closeJoinClassModal);
    window.addEventListener('keydown', function(event){
        if(event.key == 'Escape'){
            closeJoinClassModal();
        }
    });
</script>

<script>
    codeInput = document.getElementById('code');
    sectionMenu = document.getElementById('section');

    async function updateSections(code) {
        try {
            response = await fetch(`/api/classrooms/${code}/sections`);
            data = await response.json();

            sectionMenu.innerHTML = '';
            var defaultOption = document.createElement('option');
            defaultOption.value = 'null';
            defaultOption.text = 'Select a section';
            defaultOption.selected = true; 
            sectionMenu.appendChild(defaultOption);

            data['sections'].forEach(element => {
                option = document.createElement('option');
                option.value = element['id'];
                option.text = element['name'];
                sectionMenu.appendChild(option);
            });
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }

    codeInput.addEventListener('change', function(){
        updateSections(codeInput.value);
    });
</script>