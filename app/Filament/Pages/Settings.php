<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Forms;
use App\Models\Setting;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components;
use Filament\Notifications\Notification;


class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';
    public ?array $settings_data;

    public ?string $content = null;


    public function mount()
    {
        $data = Setting::find(1);
        if ($data) {
            $this->form->fill($data->attributesToArray());
        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('theme_id')
                    ->required()
                    ->options([
                        1 => 'theme 1',
                        2 => 'theme 2',
                        3 => 'theme 3',
                        4 => 'theme 4',
                        5 => 'theme 5',
                        6 => 'theme 6',
                        7 => 'theme 7',
                        8 => 'theme 8',
                    ]),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Components\RichEditor::make('about')->columnSpanFull(),




            ])->columns(2)
            ->statePath('settings_data');
    }


    public function save()
    {
        $data = $this->form->getState();
        // dd($this->form->getState());

        $setting = Setting::find(1);
        if ($setting) {
            $setting->update($data);
        } else {
            Setting::create($data);
        }

        Notification::make()
            ->title('Blog Settings Saved')
            ->success()
            ->send();
    }



}