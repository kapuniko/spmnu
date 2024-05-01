<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\WorkObject;

use App\MoonShine\Pages\HasAktauTime;
use App\MoonShine\Resources\ContragentResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\LineBreak;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Fields\Date;
use MoonShine\Fields\File;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\Image;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Models\MoonshineUser;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\Resources\MoonShineUserResource;
use Illuminate\Support\Facades\Storage;

class WorkObjectFormPage extends FormPage
{
    use HasAktauTime;


    public function fields(): array
    {

        return [
            Tabs::make([
                Tab::make('object_info',[
                    Grid::make([
                        Column::make([
                            Block::make([
                                Text::make('name')->required()->translatable('moonshine::workObject'),
                                TinyMce::make('description')
                                    ->translatable('moonshine::workObject'),
                            ]),
                        ])->columnSpan(8),
                        Column::make([
                            Block::make([
                                Hidden::make('creator')->fill( auth('moonshine')->id()),
                                Date::make('date_created')->withTime()
                                    ->default($this->AktauTime())->required()
                                    ->translatable('moonshine::workObject'),
                                BelongsTo::make('Performer', 'performer_id', resource: new MoonShineUserResource())
                                    ->withImage('avatar')
                                    ->default(MoonshineUser::find(auth('moonshine')->id()))
                                    ->translatable('moonshine::workObject'),
                                BelongsToMany::make('Members', 'members_id', resource: new MoonShineUserResource())
                                    ->nullable()
                                    ->translatable('moonshine::workObject')
                                    ->selectMode(),
                                BelongsTo::make('contragent', resource: new ContragentResource())
                                    ->nullable()
                                    ->searchable()
                                    ->translatable('moonshine::workObject'),
                                Text::make('address')->translatable('moonshine::workObject')
                            ]),
                            LineBreak::make(),
                            Block::make([
                                Text::make('status')->translatable('moonshine::workObject'),
                                Date::make('deadline')->withTime()
                                    ->format('d M Y — H:i')
                                    ->translatable('moonshine::workObject')
                            ])
                        ])->columnSpan(4)
                    ]),
                ])->translatable('moonshine::workObject')->icon('heroicons.outline.information-circle'),
                Tab::make('object_files',[
                    Block::make([
                        Preview::make('Сохраните Объект', '', fn() => $this->warningFileTab())
                            ->badge('yellow')->hideOnUpdate(),
                        File::make('contract_files')
                            ->dir( $this->filesDirectory() )
                            ->multiple()
                            ->keepOriginalFileName()
                            ->removable()
                            ->disableDeleteFiles()
                            ->translatable('moonshine::workObject')
                            ->hideOnCreate(),
                    ]),
                    LineBreak::make(),
                    Block::make([
                        File::make('project_files')
                            ->dir( $this->filesDirectory() )
                            ->multiple()
                            ->keepOriginalFileName()
                            ->removable()
                            ->disableDeleteFiles()
                            ->translatable('moonshine::workObject')
                            ->hideOnCreate()
                    ]),
                    LineBreak::make(),
                    Block::make([
                        File::make('files')
                            ->dir( $this->cloudDirectory() )
                            ->multiple()
                            ->keepOriginalFileName()
                            ->removable()
                            ->disableDeleteFiles()
                            ->translatable('moonshine::workObject')
                            ->hideOnCreate()
                    ])
                ])->translatable('moonshine::workObject')->icon('heroicons.outline.document-text'),
                Tab::make('object_photo', [
                    Block::make([
                        Preview::make('Сохраните Объект', '', fn() => $this->warningFileTab())
                            ->badge('yellow')->hideOnUpdate(),
                        Image::make('object_photo','photos')
                            ->dir( $this->cloudDirectory() )
                            ->multiple()
                            ->keepOriginalFileName()
                            ->removable()
                            ->disableDeleteFiles()
                            ->translatable('moonshine::workObject')
                            ->hideOnCreate()
                    ])
                ])->translatable('moonshine::workObject')->icon('heroicons.outline.photo')
            ]),
        ];
    }


    public function filesDirectory(): string
    {

        $directory = 'objects/' . $this->getResource()->getItemID();

        // Проверяем существует ли каталог
        if (!Storage::exists($directory)) {
            // Если нет, создаем его
            Storage::makeDirectory($directory);
        }

        return $directory;

    }

    public function cloudDirectory(): string
    {

        $directory = 'objects_cloud/' . $this->getResource()->getItemID();

        // Проверяем существует ли каталог
        if (!Storage::exists($directory)) {
            // Если нет, создаем его
            Storage::makeDirectory($directory);
        }

        return $directory;

    }



    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }


    public function getMoonshineUserInfo($id): array
    {
        // Находим пользователя по переданному ID
        $user = MoonshineUser::find($id);

        return $user->toArray();
    }

    public function warningFileTab(): string
    {
        return 'Загрузка файлов будет доступна после того, как вы сохраните этот объект.';
    }

}
