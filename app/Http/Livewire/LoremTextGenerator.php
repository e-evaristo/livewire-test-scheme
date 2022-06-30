<?php

namespace App\Http\Livewire;

use App\Http\Services\LoremTextGeneratorService;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LoremTextGenerator extends Component
{
    public $message = '';
    public $count = 0;
    
    public function generate() 
    {
        $this->count ++;
        app(LoremTextGeneratorService::class)->increment($this->count);
        
        if ($this->count > 10) {
            $this->message = 'Limit of 10 consecutive messages reached';
            return;
        }

        $res = Http::get('https://baconipsum.com/api/?type=meat-and-filler');
        $this->message = $res[0];
    }

    public function render()
    {
        return view('livewire.lorem-text-generator');
    }
}
