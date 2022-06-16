<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $searchInput;
    public $searchResults = [];

    public function updatedSearchInput($newValue)
    {
        $response = 
            Http::get('https://itunes.apple.com/search/?term='. $this->searchInput .'&limit=10');

            $this->searchResults = $response->json()['results'];
    }

    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
