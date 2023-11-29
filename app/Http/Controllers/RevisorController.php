<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index ()
    {
        $product_to_check = Product::where('is_accepted', null)->first();
        return view('revisor.index', compact('product_to_check'));
    }

    public function acceptProduct(Product $product)
    {
        $product->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectProduct(Product $product)
    {
        $product->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
    }

    public function becomeRevisor() 
    {
        Mail::to('admin@pineapple.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore correttamente');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('pineapple:make-user-revisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti l\'utente è diventato revisore');
    }

    public function formRevisor() 
    {
        return view('revisor.formRevisor');
    }
}
