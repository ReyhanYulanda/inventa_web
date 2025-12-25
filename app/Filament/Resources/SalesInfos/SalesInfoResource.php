<?php

namespace App\Filament\Resources\SalesInfos;

use App\Filament\Resources\SalesInfos\Pages\CreateSalesInfo;
use App\Filament\Resources\SalesInfos\Pages\EditSalesInfo;
use App\Filament\Resources\SalesInfos\Pages\ListSalesInfos;
use App\Filament\Resources\SalesInfos\Schemas\SalesInfoForm;
use App\Filament\Resources\SalesInfos\Tables\SalesInfosTable;
use App\Models\SalesInfo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SalesInfoResource extends Resource
{
    protected static ?string $model = SalesInfo::class;

    protected static ?string $navigationLabel = 'Informasi Sales';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCreditCard;

    protected static ?string $modelLabel = 'Informasi Sales';
    protected static ?string $pluralModelLabel = 'Informasi Sales';

    protected static ?string $recordTitleAttribute = 'nama_sales';

    public static function form(Schema $schema): Schema
    {
        return SalesInfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SalesInfosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSalesInfos::route('/'),
            'create' => CreateSalesInfo::route('/create'),
            'edit' => EditSalesInfo::route('/{record}/edit'),
        ];
    }
}
