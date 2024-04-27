<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory(10)->has(
            Photo::factory()
                ->count(3)
                ->state(function (array $attributes, User $user) {
                    return ['user_id' => $user->id];
                })
        )->create();
    }
}
