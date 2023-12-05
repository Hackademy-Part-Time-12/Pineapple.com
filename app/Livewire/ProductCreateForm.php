<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProductCreateForm extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $cover;
    public $price;
    public $category;
    public $images = [];
    public $temporary_images;

    protected $rules = [
        'title' => 'required|min:3|max:30',
        'description' => 'required|min:3',
        'price' => 'required|numeric|min:1|max:10000',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024'
    ];

    public function messages(){
        return [
            'required'=>'Il campo :attribute è richiesto',
            'min'=>'Il campo :attribute è troppo corto',
            'temporary_images.required' => 'L\'immagine è richiesta',
            'temporary_images.*.image' => 'I file devono essere immagini ',
            'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di imb',
            'images.image' => 'L\'immagine dev\'essere un\'immagine ',
            'images.max' => 'L\'immagine dev\'essere massimo di 1mb',
        ]
    };

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
