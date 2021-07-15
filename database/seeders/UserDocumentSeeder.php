<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Database\Seeder;

class UserDocumentSeeder extends Seeder
{
    public function run(): void
    {
        User::all()->each(static function (User $user) {
            $user->documents()->saveMany(UserDocument::factory(12)->make());
        });
    }
}
