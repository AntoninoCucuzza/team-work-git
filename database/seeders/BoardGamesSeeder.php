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

        $newGame = new BoardGames();
        $newGame->title = 'risiko';
        $newGame->description = 'risichio';
        $newGame->image = 'rischioso';
        $newGame->price = '$420';
        $newGame->save();
    }
}
