<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AnalasyHistory;
use App\Models\AnalasyHistoryItem;

class ViewAnalasy extends Component
{
    public $analysis,$items;

   
    public function mount($id)
    {
        $this->analysis = AnalasyHistory::with(['items' => function ($query) {
            $query->take(3);
        }])->findOrFail($id);

       
        $this->items = $this->analysis->items;
    }

    public function render()
    {
        return view('livewire.view-analasy');
    }
}
