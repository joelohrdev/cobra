<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use App\Models\Team;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListTeams extends ListRecords
{
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'null' => Tab::make('All'),
            'active' => Tab::make()->query(fn ($query) => $query->where('active', true)),
            'inactive' => Tab::make()->query(fn ($query) => $query->where('active', false)),
        ];
    }
}
