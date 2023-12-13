<?php

namespace App\Livewire;

use App\Jobs\watermark;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
        'images.*' => 'image|max:5000',
        'temporary_images.*' => 'image|max:5000'
    ];

    protected $messages = [
        //'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'temporary_images.*.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
        'images.*.image' => 'L\'immagine dev\'essere un\'immagine',
        'images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
    ];

    public function cleanForm()
    {
        $this->title = "";
        $this->description = "";
        $this->price = "";
        $this->category = "";
        $this->images = [];
        $this->temporary_images = [];
        //$this->cover = "";
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:5000',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();

        $this->product = Category::find($this->category)->products()->create($this->validate());

        if (count($this->images)) {
            foreach ($this->images as $image) {
                //$this->product->images()->create(['path' => $image->store('images', 'public')]);
                $newFileName = "products/".$this->product->id;
                $newImage = $this->product->images()->create(['path' => $image->store($newFileName, 'public')]);

           /* RemoveFaces::withChain([
                new ResizeImage($newImage->path , 400 , 300),
                new GoogleVisionSafeSearch($newImage->id),
                new GoogleVisionLabelImage($newImage->id),
                new watermark($newImage->id),
            ])->dispatch($newImage->id);
            */

                dispatch ( new ResizeImage($newImage->path , 400 , 300));
                dispatch (new watermark($newImage->id));
            
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('productCreated', 'Annuncio inserito con successo');
            $this->cleanForm();
    }

    public function render()
    {
        return view('livewire.product-create-form');
    }
}
