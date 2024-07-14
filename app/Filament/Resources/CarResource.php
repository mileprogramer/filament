<?php

namespace App\Filament\Resources;

use App\Enums\AirConditionerType;
use App\Enums\TransmissionType;
use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('license')
                    ->required(),
                Forms\Components\TextInput::make('brand')
                    ->required(),
                Forms\Components\TextInput::make('model')
                    ->required(),
                Forms\Components\TextInput::make('year')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\TextInput::make('price_per_day')
                    ->required(),
                Forms\Components\TextInput::make('number_of_doors')
                    ->required(),
                Forms\Components\TextInput::make('person_fit_in')
                    ->required(),
                Forms\Components\TextInput::make('car_consumption')
                    ->required(),
                Forms\Components\Select::make('transmission_type')
                    ->options(TransmissionType::allValues())
                    ->required(),
                Forms\Components\Select::make('air_conditioning_type')
                    ->enum(AirConditionerType::class)
                    ->options(AirConditionerType::class)
                    ->default(AirConditionerType::automatic)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("license"),
                Tables\Columns\TextColumn::make("brand"),
                Tables\Columns\TextColumn::make("model"),
                Tables\Columns\TextColumn::make("year"),
                Tables\Columns\TextColumn::make("transmission_type"),
                Tables\Columns\TextColumn::make("status"),
                Tables\Columns\TextColumn::make("price_per_day"),
                Tables\Columns\TextColumn::make("person_fit_in"),
                Tables\Columns\TextColumn::make("number_of_doors"),
                Tables\Columns\TextColumn::make("car_consumption"),
                Tables\Columns\SelectColumn::make("air_conditioning_type"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
