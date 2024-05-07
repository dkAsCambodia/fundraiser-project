<?php

namespace App\Filament\Resources\CauseDetailResource\Pages;

use App\Filament\Resources\CauseDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCauseDetails extends ListRecords
{
    protected static string $resource = CauseDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
