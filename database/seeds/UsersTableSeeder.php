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
