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
        $NewBoardGames = new BoardGames();
        $NewBoardGames->name = 'Monopoli';
        $NewBoardGames->description = 'gioco a turni';
        $NewBoardGames->image = 'a';
        $NewBoardGames->price = '26';
    }
}
