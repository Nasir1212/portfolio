<div class="mb-3">
    <div class="btn-toolbar mb-2 bg-light border rounded px-2 py-1 toolbar" role="toolbar">
        <div class="btn-group me-2" role="group">
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleCmd(this, 'bold')"><b>B</b></button>
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleCmd(this, 'italic')"><i>I</i></button>
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleCmd(this, 'underline')"><u>U</u></button>
        </div>
        <div class="btn-group me-2" role="group">
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleCmd(this, 'insertUnorderedList')">• List</button>
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleCmd(this, 'insertOrderedList')">1. List</button>
        </div>
       
    </div>

    <div id="{{ $idName }}" contenteditable="true" class="form-control editor" style="min-height: 120px;"> {!!$value!!} </div>
    <input type="hidden" name="{{ $name }}" id="hidden-{{ $idName }}" value="{!! $value !!}" >
</div>

@push('scripts')
<script>
    function toggleCmd(button, command) {
        if (command === 'createLink') {
            const url = prompt('Enter the link URL:');
            if (url) {
                document.execCommand(command, false, url);
            }
        } else {
            document.execCommand(command, false, null);
        }

        button.classList.toggle('active');
    }

    document.querySelectorAll('#{{ $idName }}').forEach(editor => {
    editor.addEventListener('input', function () {
        const hiddenInput = document.getElementById('hidden-' + editor.id);
        if (hiddenInput) {
            hiddenInput.value = editor.innerHTML;
        }
    });

    // Optional: also update on blur (loss of focus)
    editor.addEventListener('blur', function () {
        const hiddenInput = document.getElementById('hidden-' + editor.id);
        if (hiddenInput) {
            hiddenInput.value = editor.innerHTML;
        }
    });
});
</script>
@endpush
