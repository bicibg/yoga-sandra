<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Support\Facades\Storage;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationLabel = 'Seiten';

    public static function form(Form $form): Form
    {
        return $form->schema([
            \Filament\Forms\Components\Section::make('Grundlegende Details')
                ->schema([
                    TextInput::make('title')
                        ->label('Seitentitel')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('slug')
                        ->label('Slug')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('sorting')
                        ->label('Seitenreihenfolge')
                        ->disabled(),
                ]),

            \Filament\Forms\Components\Section::make('Inhalt')
                ->schema([
                    TiptapEditor::make('content')
                        ->profile('default')
                        ->tools([
                            'bold',
                            'italic',
                            'strike',
                            'heading',
                            'bullet-list',
                            'ordered-list',
                            'align-left',
                            'align-center',
                            'align-right',
                            'align-justify',
                            'link',
                        ])
//                        ->maxContentWidth('3xl')
                        ->output(\FilamentTiptapEditor\Enums\TiptapOutput::Html)
                        ->required(),
                ]),

            \Filament\Forms\Components\Section::make('Medien')
                ->schema([
                    FileUpload::make('image')
                        ->label('Bild hochladen')
                        ->disk('public')
                        ->directory('pages')
                        ->visibility('public')
                        ->image()
                        ->maxSize(10000)
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')
                ->label('Titel')
                ->sortable(),

            Tables\Columns\TextColumn::make('slug')
                ->label('Slug')
                ->sortable(),

            Tables\Columns\TextColumn::make('sorting')
                ->label('Seitenreihenfolge')
                ->sortable(),

            Tables\Columns\ImageColumn::make('image')
                ->label('Bild')
                ->size(50),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Erstellt am')
                ->date(),
        ])
            ->reorderable('sorting');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/erstellen'),
            'edit' => Pages\EditPage::route('/{record}/bearbeiten'),
        ];
    }
}
