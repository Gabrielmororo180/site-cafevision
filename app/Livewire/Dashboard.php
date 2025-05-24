<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AnalasyHistory;

class Dashboard extends Component
{

    public $analyses;
    public readonly string $status_text;
    public readonly string $status_color;

    public  function mount(){
        $this->analyses=AnalasyHistory::all();
    }


    public function render()
    {
        return view('livewire.dashboard');
    }
}
