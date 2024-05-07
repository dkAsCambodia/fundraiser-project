<?php

namespace App\Common;

use Filament\Forms;
use Filament\Forms\Form;

class CommonForm
{
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(50),
            ])
            ->columns(null);
    }
}
