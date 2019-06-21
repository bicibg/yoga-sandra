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
        $pages = ['Home', 'Sandra Kuhlmann', 'Yoga', 'Unterricht', 'Angebot', 'Kontakt'];

        foreach ($pages as $page) {
            \App\Page::create([
                'title' => $page,
                'slug' => \Illuminate\Support\Str::slug($page)
            ]);
        }
    }
}
