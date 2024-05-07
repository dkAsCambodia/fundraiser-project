<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CauseDetailResource\Pages;
use App\Filament\Resources\CauseDetailResource\RelationManagers;
use App\Models\Account;
use App\Models\CauseCategory;
use App\Models\CauseDetail;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CauseDetailResource extends Resource
{
    protected static ?string $model = CauseDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Campaign';
    protected static ?string $navigationGroup = 'Campaign Management';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('General')
                    ->description("Improve your campaign's visual appeal and performance by tailoring its name, format, URL and end date to suit the cause. Learn more")
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->maxLength(255)->columnSpan(1),
                        Select::make('cause_category_id')
                            ->label(__('Account'))
                            ->searchable()
                            ->options(Account::where('status', 1)->pluck('account_name', 'id'))
                            ->preload()->columnSpan(1),
                    ])
                    ->collapsed()->columns(2),

                Section::make('P2P')
                    ->description("Manage the options that should be configured at the campaign level to engage donors with P2P fundraising. Learn more ")
                    ->schema([
                        Forms\Components\TextInput::make('goal')
                            ->numeric()->columnSpan(1),
                    ])
                    ->collapsed()->columns(2),

                    Section::make('Other')
                        // ->description("Manage the options that should be configured at the campaign level to engage donors with P2P fundraising. Learn more ")
                        ->schema([
                                        
                            FileUpload::make('photo')
                            ->label(__('Cover Photo'))
                            ->required()
                            ->image()->columnSpan(1),
                        Forms\Components\Textarea::make('short_details')
                            ->maxLength(255)->rows(8)
                            ->required()->columnSpan(1),
                        RichEditor::make('page_content')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ]),
                        ])
                        ->collapsed()->columns(2),
                    
                Section::make('ACTIONS')
                ->description("Disable campaign
                Disabling this campaign will disable its checkout on your website. The campaign will still appear on the Campaigns page. You can re-enable a disabled campaign at any time.")
                ->schema([
                    Forms\Components\Toggle::make('status')
                    ->required(),
                ])
                ->collapsed()->columns(2),
            ])->columns(4);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('causeCate.title')
                    ->label('Cause Category Title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                ImageColumn::make('photo')->label('Cover Photo'),
                Tables\Columns\TextColumn::make('goal')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListCauseDetails::route('/'),
            'create' => Pages\CreateCauseDetail::route('/create'),
            'edit' => Pages\EditCauseDetail::route('/{record}/edit'),
        ];
    }
}
