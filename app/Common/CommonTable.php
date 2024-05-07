<?php

namespace App\Common;

use Filament\Tables;
use Filament\Tables\Table;

class CommonTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->modalWidth('md'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->defaultSort('created_at', 'DESC');
    }
}
