<div>
    <form id="localeForm" action="{{ route('locale') }}">
    <div class="flex justify-center">
        <label class="visually-hidden p-4" for="locale">
            <x-carbon-language class="w-6 h-6"/>
        </label>
        <select name="locale" wire:model="locale" class="my-3 pr-6 py-1 rounded" id="locale" onchange="document.getElementById('localeForm').submit()">
        <option value="en">English</option>
        <option value="hi">हिंदी</option>
        </select>
    </div>
    </form> 
</div>
