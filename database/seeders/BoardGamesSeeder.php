<?php

namespace Database\Seeders;

use App\Models\BoardGames;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardGamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_board = new BoardGames();
        $new_board->name = 'Forza 4';
        $new_board->description = 'Lorem ipsum';
        $new_board->image = 'Ciao';
        $new_board->price = '30';
    }
}
