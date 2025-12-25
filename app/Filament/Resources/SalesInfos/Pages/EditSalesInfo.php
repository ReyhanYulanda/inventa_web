<?php

namespace App\Filament\Resources\SalesInfos\Pages;

use App\Filament\Resources\SalesInfos\SalesInfoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSalesInfo extends EditRecord
{
    protected static string $resource = SalesInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
