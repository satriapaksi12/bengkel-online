<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class SearchItem extends Component
{
    public $term = "";

    public function render()
    {

        $item = Item::search($this->term)->paginate(10);
        $data = [
            'item' => $item
        ];
        return view('livewire.search-item',$data);
    }
}
