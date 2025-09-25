<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'name' => 'expertise_title',
                'value' => 'OUR EXPERTISE',
                'module' => 'content',
                'icon' => 'bi bi-type-h1',
                'title' => 'Заголовок секции Expertise',
                'subtext' => 'Маленький заголовок над основным',
                'permission_level' => 'admin'
            ],
            [
                'name' => 'expertise_main_title', 
                'value' => 'Effortless House Cleaning at Your Doorstep',
                'module' => 'content',
                'icon' => 'bi bi-type-h1',
                'title' => 'Основной заголовок Expertise',
                'subtext' => 'Большой главный заголовок',
                'permission_level' => 'admin'
            ],
            [
                'name' => 'expertise_description',
                'value' => 'We offer professional and customized cleaning solutions to keep your home spotless. Our team ensures every corner sparkles!',
                'module' => 'content',
                'icon' => 'bi bi-card-text',
                'title' => 'Описание секции Expertise',
                'subtext' => 'Текст под основным заголовком',
                'permission_level' => 'admin'
            ],
            
            [
                'name' => 'expertise_card1_title',
                'value' => 'Deep Cleaning',
                'module' => 'content',
                'icon' => 'bi bi-card-heading',
                'title' => 'Заголовок карточки 1',
                'subtext' => 'Заголовок для первой карточки',
                'permission_level' => 'admin'
            ],
            [
                'name' => 'expertise_card1_text',
                'value' => 'Thorough cleaning for all rooms, carpets, windows, and upholstery to make your home shine inside and out.',
                'module' => 'content',
                'icon' => 'bi bi-card-text',
                'title' => 'Текст карточки 1',
                'subtext' => 'Описание для первой карточки',
                'permission_level' => 'admin'
            ],
            
            [
                'name' => 'expertise_card2_title',
                'value' => 'Quick Clean-Ups',
                'module' => 'content',
                'icon' => 'bi bi-card-heading',
                'title' => 'Заголовок карточки 2',
                'subtext' => 'Заголовок для второй карточки',
                'permission_level' => 'admin'
            ],
            [
                'name' => 'expertise_card2_text',
                'value' => 'Perfect for daily maintenance with a focus on high-traffic areas, keeping everything fresh and organized.',
                'module' => 'content',
                'icon' => 'bi bi-card-text',
                'title' => 'Текст карточки 2',
                'subtext' => 'Описание для второй карточки',
                'permission_level' => 'admin'
            ],
            
            [
                'name' => 'expertise_card3_title',
                'value' => 'Eco-Friendly Cleaning',
                'module' => 'content',
                'icon' => 'bi bi-card-heading',
                'title' => 'Заголовок карточки 3',
                'subtext' => 'Заголовок для третьей карточки',
                'permission_level' => 'admin'
            ],
            [
                'name' => 'expertise_card3_text',
                'value' => 'We use environmentally safe products to ensure a cleaner home and a safer planet.',
                'module' => 'content',
                'icon' => 'bi bi-card-text',
                'title' => 'Текст карточки 3',
                'subtext' => 'Описание для третьей карточки',
                'permission_level' => 'admin'
            ],
            
            [
                'name' => 'expertise_card4_title',
                'value' => 'Move-In & Out Cleaning',
                'module' => 'content',
                'icon' => 'bi bi-card-heading',
                'title' => 'Заголовок карточки 4',
                'subtext' => 'Заголовок для четвертой карточки',
                'permission_level' => 'admin'
            ],
            [
                'name' => 'expertise_card4_text',
                'value' => 'Preparing your home for its next chapter or tidying up after a move, we handle it all with care.',
                'module' => 'content',
                'icon' => 'bi bi-card-text',
                'title' => 'Текст карточки 4',
                'subtext' => 'Описание для четвертой карточки',
                'permission_level' => 'admin'
            ]
        ];

        Setting::insert($settings);
    }
}