<?php

namespace App\Filament\Resources\SalesInfos\Pages;

use App\Filament\Resources\SalesInfos\SalesInfoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSalesInfos extends ListRecords
{
    protected static string $resource = SalesInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Informasi Sales'),
        ];
    }
}
