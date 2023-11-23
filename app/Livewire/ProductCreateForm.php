<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductCreateForm extends Component
{

    public $title;
    public $description;
    public $cover;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:3|max:30',
        'description' => 'required|min:3',
        'price' => 'required|numeric|min:1|max:10000',
        'category' => 'required',
    ];

    public function cleanForm(){
        $this->title = "";
        $this->description = "";
        $this->price = "";
        $this->category = "";
        //$this->cover = "";
    }

    public function store(){
        $this->validate();

        $category = Category::find($this->category);

        if (!$category) {
            // Gestisci l'errore, ad esempio mostrando un messaggio all'utente
            session()->flash('error', 'Categoria non trovata.');
            return;
        }

        $product = $category->products()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            //'cover' => $this->cover->default('./default/product-auto-img.png'),
        ]);
        Auth::user()->products()->save($product);

        session()->flash('productCreated', 'Annuncio inserito con successo');
        $this->cleanForm();
    }

    public function render()
    {
        return view('livewire.product-create-form');
    }
}
