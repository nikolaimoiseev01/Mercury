<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationLabel = 'Проекты';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')->tabs([
                    Tabs\Tab::make('Общее')->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Название')
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->label('URL')
                            ->readOnly()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('type')
                            ->label('Тип')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('place')
                            ->label('Местоположение')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('works')
                            ->label('Работы')
                            ->required(),
                        Forms\Components\Textarea::make('style')
                            ->label('Стиль')
                            ->required(),
                        Forms\Components\Textarea::make('unique')
                            ->label('Уникальность')
                            ->required(),
                        Forms\Components\Textarea::make('area')
                            ->label('Площадь')
                            ->required(),
                        Forms\Components\Textarea::make('subtitle')
                            ->label('Подзаголовок')
                            ->required(),
                        Forms\Components\Textarea::make('desc')
                            ->label('Описание')
                            ->columnSpanFull()
                            ->rows(10)
                            ->required(),
                    ]),
                    Tabs\Tab::make('Медиа')->schema([
                        SpatieMediaLibraryFileUpload::make('cover')
                            ->label('Обложка')
                            ->collection('cover'),
                        SpatieMediaLibraryFileUpload::make('img_1')
                            ->label('Изображение 1')
                            ->collection('img_1'),
                        SpatieMediaLibraryFileUpload::make('img_2')
                            ->label('Изображение 2')
                            ->collection('img_2'),
                        SpatieMediaLibraryFileUpload::make('img_3')
                            ->label('Изображение 3')
                            ->collection('img_3'),
                        SpatieMediaLibraryFileUpload::make('gallery')
                            ->label('Галерея')
                            ->multiple()
                            ->columnSpanFull()
                            ->panelLayout('grid')
                            ->collection('gallery')
                    ])->columns(2)
                ])->columnSpanFull()->columns(2)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->label('Тип')
                    ->searchable(),
                Tables\Columns\TextColumn::make('place')
                    ->label('Местоположение')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Создан')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Изменен')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
