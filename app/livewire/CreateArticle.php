<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    //! data binding
    #[Validate('required|min:3|max:50')]
    public $title;
    #[Validate('required|min:5|max:100')]
    public $subtitle;
    #[Validate('required|min:10|max:1000')]
    public $body;

    /* public function rules(){
        return [
            'title' => 'required|min:3|max:50',
            'subtitle' => 'required|min:5|max:100',
            'body' => 'required|min:10|max:1000'
        ];
    }

    public function messages() 
    {
        return [
            'required' => 'Il campo è richiesto',
            'min' => 'Il campo deve essere di minimo :min caratteri',
            'max' => 'il campo deve essere di massimo :max caratteri'
        ];
    } */

    public function store(){

        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);
        session()->flash('success', 'Articolo inviato con successo');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.create-article');
    }
}