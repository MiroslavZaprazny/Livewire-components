<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;
    
    public $verified = false;
    public $search;
    public $sortField;
    public $sortAsc = true;
    protected $queryString = ['search','verified'];

    public function sortBy($field)
    {
        if($this->sortField === $field )
        {
            $this->sortAsc = !$this->sortAsc;
        }
        else
        {
            $this->sortAsc = true;
        }

        $this->sortField = $field;    
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.data-table',[
            'users' => User::where('name', 'like', '%'. $this->search . '%')
            ->where('is_verified', $this->verified)
            ->when($this->sortField, function($query){
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc' );
            })->paginate(5)
        ]);
    }
}
