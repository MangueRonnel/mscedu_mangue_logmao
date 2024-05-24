<?php $__env->startSection('title', 'Assessment Form Builder'); ?>

<?php $__env->startSection('content'); ?>

<h3 class="text-xl font-bold text-black"><?php echo e($classroom->name); ?></h3>
<p class="text-md font-semibold text-gray-700"><?php echo e($classroom->code); ?></p>

<div class="flex flex-row justify-between items-center">
    <p class="mt-4 text-xl font-bold text-black">Assessment Form Builder</p>
    <button type="button" onclick="previewForm()"
        class="flex flex-row items-center px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-green-600 hover:bg-green-700 active:bg-green-600">
        Preview Form
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="h-6 w-6 ml-2 inline fill-white">
            <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
        </svg>
    </button>
</div>

<input type="text" id="formTitle" placeholder="Enter form title" required
    class="mt-3 w-full px-4 py-3 bg-white border border-gray-300 text-sm outline-[#007bff] rounded md:w-1/2"/>
<input type="text" id="formDescription" placeholder="Enter form description" required
    class="mt-3 w-full px-4 py-3 bg-white border border-gray-300 text-sm outline-[#007bff] rounded md:w-1/2"/>
<hr class="my-4 text-gray-700">

<form id="dynamic-form" class="mt-4">
    <fieldset class="mb-4">
        <legend class="text-lg font-semibold">Add Field</legend>
        <div class="flex items-center space-x-2">
            <label for="field-type" class="text-gray-700">Field Type:</label>
            <select id="field-type" class="p-1 border border-gray-300 rounded">
                <option value="instruction">Instruction</option>
                <option value="shortText">Short Text</option>
                <option value="longText">Long Text</option>
                <option value="radio">Radio Buttons</option>
            </select>
            <button type="button" onclick="addField()" class="px-4 py-1 bg-blue-500 text-white rounded">Add</button>
        </div>
    </fieldset>
    <hr class="my-4 text-gray-700">
</form>

<form action="/classrooms/<?php echo e($classroom->code); ?>/assessments/builder/preview" method="POST" id="previewForm" target="_blank">
    <?php echo csrf_field(); ?>
    <input type="text" id="previewData" class="hidden" name="data">
    <input type="text" id="previewTitle" class="hidden" name="title">
    <input type="text" id="previewDescription" class="hidden" name="description">
</form>

<form action="/classrooms/<?php echo e($classroom->code); ?>/assessments/builder/process" method="POST" id="formData">
    <?php echo csrf_field(); ?>
    <input type="text" id="title" class="hidden" name="title">
    <input type="text" id="description" class="hidden" name="description">
    <input type="text" id="total" class="hidden" name="total">
    <input type="text" id="data" class="hidden" name="data">
</form>

<button id="save" class="px-4 py-1 bg-green-500 text-white rounded">Save</button>

<script>
    function addField() {
        var fieldType = document.getElementById('field-type').value;
        var form = document.getElementById('dynamic-form');
        var fieldTitle = prompt('Enter field title:');
        var score = '';
        var field;

        if (!fieldTitle) {
            return; // If the user cancels, do nothing
        }

        var fieldset = document.createElement('fieldset');
        fieldset.setAttribute('data-field', 'node');
        fieldset.setAttribute('data-type', fieldType);
        fieldset.setAttribute('data-text', fieldTitle);

        if (fieldType === 'instruction') {
            field = document.createElement('div');
            fieldset.setAttribute('data-options', '');
        } else if (fieldType === 'shortText') {
            field = document.createElement('input');
            field.setAttribute('type', 'text');
            field.setAttribute('name', 'text_input[]');
            field.setAttribute('placeholder', 'Enter Text');
            field.className = 'w-full p-1 border border-gray-300 rounded md:w-1/2';
            fieldset.setAttribute('data-options', '');
        } else if (fieldType == 'longText') {
            field = document.createElement('textarea');
            field.setAttribute('name', 'text_input[]');
            field.setAttribute('placeholder', 'Enter Text');
            field.className = 'w-full p-1 border border-gray-300 rounded md:w-1/2';
            fieldset.setAttribute('data-options', '');
        } else if (fieldType === 'radio') {
            var optionValue = prompt('Enter radio button values (comma-separated):');
            if (!optionValue) {
                return;
            }
            var options = optionValue.split(',');
            var cleanedOptions = [];
            field = document.createElement('div');
            field.className = 'flex flex-col space-y-2';
            options.forEach(function(opt) {
                var holder = document.createElement('div');
                holder.className = 'flex flex-row space-x-2'
                var radio = document.createElement('input');
                radio.setAttribute('type', 'radio');
                radio.setAttribute('name', 'radio_button[]');
                radio.setAttribute('value', opt.trim());
                var label = document.createElement('label');
                label.textContent = opt.trim();
                cleanedOptions.push(opt.trim());
                holder.appendChild(radio);
                holder.appendChild(label);
                field.appendChild(holder)
            });
            fieldset.setAttribute('data-options', cleanedOptions.join(','));
        }

        var fieldsetTitle = document.createElement('div');
        fieldsetTitle.className = 'field-title';
        fieldsetTitle.textContent = fieldTitle;
        fieldsetTitle.className = 'my-2';

        if (fieldType === 'instruction') {
            fieldsetTitle.classList.add('instruction');
            fieldset.setAttribute('data-score', '');
        }

        if (fieldType === 'shortText' || fieldType === 'longText' || fieldType === 'radio') {
            do {
                score = prompt('Enter questions point value (numeric only):');
            } while (!/^\d+$/.test(score));
            fieldsetTitle.textContent = fieldsetTitle.textContent + ` (${score} pts)`
            fieldset.setAttribute('data-score', score);
        }

        var deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.type = 'button';
        deleteButton.className = 'px-4 py-1 bg-red-500 text-white rounded';
        deleteButton.onclick = function() {
            form.removeChild(fieldset);
        };

        var editButton = document.createElement('button');
        editButton.textContent = 'Edit';
        editButton.type = 'button';
        editButton.className = 'px-4 py-1 bg-blue-500 text-white rounded';
        editButton.onclick = function() {
            var newTitle = prompt('Enter new title:');
            if (!newTitle) {
                return;
            }
            fieldsetTitle.textContent = newTitle;
            fieldset.setAttribute('data-text', newTitle);

            if (fieldType === 'radio') {
                var newOptions = prompt('Enter new radio button values (comma-separated):');
                if (!newOptions) {
                    return;
                }
                var options = newOptions.split(',');
                var cleanedOptions = [];
                while (field.firstChild) {
                    field.removeChild(field.firstChild);
                }
                options.forEach(function(opt) {
                    var holder = document.createElement('div');
                    holder.className = 'flex flex-row space-x-2'
                    var radio = document.createElement('input');
                    radio.setAttribute('type', 'radio');
                    radio.setAttribute('name', 'radio_button[]');
                    radio.setAttribute('value', opt.trim());
                    var label = document.createElement('label');
                    label.textContent = opt.trim();
                    cleanedOptions.push(opt.trim());
                    holder.appendChild(radio);
                    holder.appendChild(label);
                    field.appendChild(holder);
                });
                fieldset.setAttribute('data-options', cleanedOptions.join(','));
            }

            if (fieldType === 'shortText' || fieldType === 'longText' || fieldType === 'radio') {
                do {
                    score = prompt('Enter questions point value (numeric only):');
                } while (!/^\d+$/.test(score));
                fieldsetTitle.textContent = fieldsetTitle.textContent + ` (${score} pts)`;
                fieldset.setAttribute('data-score', score);
            }
        };

        var legend = document.createElement('legend');
        legend.textContent = fieldType.charAt(0).toUpperCase() + fieldType.slice(1);
        legend.className = 'font-sans font-semibold text-md';
        fieldset.appendChild(legend);
        fieldset.appendChild(fieldsetTitle);
        fieldset.appendChild(field);
        buttonHolder = document.createElement('div')
        buttonHolder.className = 'flex flex-row space-x-4 mt-4';
        buttonHolder.appendChild(deleteButton);
        buttonHolder.appendChild(editButton);
        fieldset.appendChild(buttonHolder);
        form.appendChild(fieldset);
        line = document.createElement('hr');
        line.className = 'my-4 text-gray-700';
        form.appendChild(line);
    }

    function getFormData() {
        var form = document.getElementById('dynamic-form');
        var formData = [];

        for (var i = 0; i < form.elements.length; i++) {
            var element = form.elements[i];
            if (element.tagName !== 'FIELDSET') {
                continue;
            }

            if (element.getAttribute('data-field') != 'node') {
                continue;
            }

            var fieldData = {
                'type': element.getAttribute('data-type'),
                'text': element.getAttribute('data-text'),
                'options': element.getAttribute('data-options'),
                'score': element.getAttribute('data-score'),
            };
            formData.push(fieldData);
        }

        return JSON.stringify(formData);
    }

    function getFormTotalPoints() {
        var jsonData = getFormData();
        var data = JSON.parse(jsonData);
        var total = 0;
        for (var i=0; i < Object.keys(data).length; i++) {
            if (data[i]['score'] == '') {
                continue;
            }
            total += parseInt(data[i]['score']);
        }
        return total;
    }

    function previewForm() {
        var data = getFormData();
        var formTitle = document.getElementById('formTitle').value;
        var formDescription = document.getElementById('formDescription').value;
        const previewForm = document.getElementById('previewForm');
        const previewData = document.getElementById('previewData');
        const previewTitle = document.getElementById('previewTitle');
        const previewDescription = document.getElementById('previewDescription');
        previewData.value = data;
        previewTitle.value = formTitle;
        previewDescription.value = formDescription;
        previewForm.submit();
    }

    function saveFormData() {
        var data = getFormData();
        var formTitle = document.getElementById('formTitle').value;
        var formDescription = document.getElementById('formDescription').value;
        const hiddenForm = document.getElementById('formData');
        const dataInput = document.getElementById('data');
        const title = document.getElementById('title');
        const description = document.getElementById('description');
        const totalScore = document.getElementById('total');
        dataInput.value = data;
        title.value = formTitle;
        description.value = formDescription;
        totalScore.value = `${getFormTotalPoints()}`;
        hiddenForm.submit();
    }
</script>


<?php if (isset($component)) { $__componentOriginal192f6bd8f6b183c2e2017b6bef8ae78d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal192f6bd8f6b183c2e2017b6bef8ae78d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.confirm','data' => ['trigger' => 'save','action' => 'saveFormData()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modals.confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['trigger' => 'save','action' => 'saveFormData()']); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\quizwatch\resources\views/formbuilder.blade.php ENDPATH**/ ?>