<?php

namespace App\Filament\Resources\CauseCategoryResource\Pages;

use App\Filament\Resources\CauseCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCauseCategories extends ManageRecords
{
    protected static string $resource = CauseCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
