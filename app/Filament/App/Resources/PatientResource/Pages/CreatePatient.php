<?php

namespace App\Filament\App\Resources\PatientResource\Pages;

use App\Filament\App\Resources\PatientResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePatient extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PatientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
