<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodUsers = [
            [
                'name' => 'Bugra Ergin',
                'email' => 'bugraergin@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('bugrayep1'),
                'is_admin' =>true
            ],
            [
                'name' => 'Sandra Kuhlmann',
                'email' => 'info@sothegra.ch',
                'password' => '',
                'is_admin' =>true
            ],
            [
                'name' => 'Frédéric Imber',
                'email' => 'webmaster@root-login.ch',
                'password' => '',
                'is_admin' =>true
            ],
        ];

        foreach ($prodUsers as $userData) {
            $user = User::where('email', $userData['email'])->first();
            if (!$user) {
                User::create($userData);
            }
        }
    }
}
