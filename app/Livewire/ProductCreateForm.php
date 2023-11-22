<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreateForm extends Component
{

    public $title;
    public $description;
    public $cover;
    public $price;

    protected $rules = [
        'title' => 'required|min:3|max:30',
        'description' => 'required|min:3',
        'price' => 'required|numeric|min:1|max:10000',
    ];

    public function cleanForm(){
        $this->title = "";
        $this->description = "";
        $this->price = "";
        //$this->cover = "";
    }

    public function store(){
        $this->validate();
        
        Product::create([
            'title' => $this->title,
            'description' => $this->description,
            //'cover' => $this->cover->default('./default/product-auto-img.png'),
            'price' => $this->price,
        ]);

        session()->flash('productCreated', 'Annuncio inserito con successo');
        $this->cleanForm();
    }

    public function render()
    {
        return view('livewire.product-create-form');
    }
}
