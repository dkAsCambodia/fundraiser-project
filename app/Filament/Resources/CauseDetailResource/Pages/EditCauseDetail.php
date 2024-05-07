<?php

namespace App\Filament\Resources\CauseDetailResource\Pages;

use App\Filament\Resources\CauseDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCauseDetail extends EditRecord
{
    protected static string $resource = CauseDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
