<?php
declare(strict_types=1);

use Illuminate\Database\Seeder;
use Faker\Factory;
use Faker\Generator;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Factory::create();
        \App\User::query()->insert($this->gen($faker));
    }

    private function gen(Generator $faker): array
    {
        return [
            'name'           => $faker->name,
            'email'          => $faker->unique()->safeEmail,
            'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ];
    }
}
