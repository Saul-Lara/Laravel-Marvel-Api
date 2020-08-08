<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class CharactersViewModel extends ViewModel
{
    public $characters;

    public function __construct($characters)
    {
        $this->characters = $characters;
    }

    public function characters()
    {
        return collect($this->characters)->map(function($character){
            return collect($character)->merge([
                'thumbnail' => $character['thumbnail']['path'].'/portrait_uncanny.'.$character['thumbnail']['extension'],
                'comics' => collect($character['comics']['items'])->pluck('name')->implode(', '),
            ])->only([
                'id', 'name', 'thumbnail', 'comics',
            ]);
        })->dump();
    }
}
