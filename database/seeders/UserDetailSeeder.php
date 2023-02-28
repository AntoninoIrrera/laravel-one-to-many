<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach ($users as $user) {

            $newUserDetail = new UserDetail();

            $newUserDetail->user_id = $user->id;
            $newUserDetail->stato = $faker->sentence(1,false);
            $newUserDetail->bio = $faker->realTextBetween(400,600);
            $newUserDetail->image = $faker->imageUrl();
            $newUserDetail->save();


        }
    }
}
