<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Home', 'Sandra Kuhlmann', 'Yoga', 'Unterricht', 'Angebot'];
        $templated = [
            [
                'page' => 'Kontakt',
                'template' => 'contact'
            ]
        ];
        foreach ($pages as $page) {
            \App\Page::create([
                'title' => $page,
                'slug' => \Illuminate\Support\Str::slug($page)
            ]);
        }
        foreach ($templated as $page) {
            \App\Page::create([
                'title' => $page['page'],
                'slug' => \Illuminate\Support\Str::slug($page['page']),
                'template' => $page['template']
            ]);
        }
    }
}
