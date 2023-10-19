<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Card;
use App\Models\Desk;
use App\Models\DeskList;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Desk::factory(200)->create();
        DeskList::factory(150)->create();
        Card::factory(100)->create();
        Task::factory(80)->create();
    }
}
