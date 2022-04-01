<?php

namespace App\Http\Livewire\Locale;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Select extends Component
{
    public $locale;

    public function mount(){
        $this->locale = App::currentLocale();
    }
    public function render()
    {
        return view('livewire.locale.select');
    }
}
