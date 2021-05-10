<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lista extends Component
{
    public $item;
    public $key;
    public $action = 'C';
    public $lista = [];
    
    public function render()
    {
        return view('livewire.lista');
    }

    public function add (){
        array_unshift($this->lista,$this->item);
        $this->item = '';
    }

    public function resetList (){
        unset($this->lista);
        $this->lista = [];
    }

    public function remove(int $key){
        unset($this->lista[$key]);
    }

    public function edit(int $key){
        $this->key = $key;
        $this->action = 'U';
        $this->item = $this->lista[$key];
    }

    public function update(){
        $this->lista = array_replace($this->lista,[$this->key => $this->item]);
        $this->item = '';
        $this->action = 'C';
    }
}
