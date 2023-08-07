<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('games')->insert([
            'home_team_id' => '8',
            'away_team_id' => '15',
            'league_id' => '1',
            'date' => '2023-08-6 18:30:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '13',
            'league_id' => '1',
            'date' => '2023-08-6 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '18',
            'away_team_id' => '17',
            'league_id' => '1',
            'date' => '2023-08-6 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '12',
            'away_team_id' => '4',
            'league_id' => '1',
            'date' => '2023-08-6 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '3',
            'away_team_id' => '7',
            'league_id' => '1',
            'date' => '2023-08-6 19:00:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '14',
            'away_team_id' => '5',
            'league_id' => '1',
            'date' => '2023-08-6 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '1',
            'away_team_id' => '18',
            'league_id' => '1',
            'date' => '2023-08-12 14:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '10',
            'away_team_id' => '9',
            'league_id' => '1',
            'date' => '2023-08-12 18:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '17',
            'away_team_id' => '8',
            'league_id' => '1',
            'date' => '2023-08-12 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '15',
            'league_id' => '1',
            'date' => '2023-08-12 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '4',
            'away_team_id' => '14',
            'league_id' => '1',
            'date' => '2023-08-12 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '5',
            'away_team_id' => '12',
            'league_id' => '1',
            'date' => '2023-08-12 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '13',
            'league_id' => '1',
            'date' => '2023-08-12 19:30:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '16',
            'away_team_id' => '2',
            'league_id' => '1',
            'date' => '2023-08-13 18:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '11',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-08-13 18:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '17',
            'away_team_id' => '10',
            'league_id' => '1',
            'date' => '2023-08-18 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '3',
            'away_team_id' => '11',
            'league_id' => '1',
            'date' => '2023-08-18 19:30:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '2',
            'away_team_id' => '18',
            'league_id' => '1',
            'date' => '2023-08-19 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '15',
            'away_team_id' => '4',
            'league_id' => '1',
            'date' => '2023-08-19 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '13',
            'away_team_id' => '9',
            'league_id' => '1',
            'date' => '2023-08-19 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '16',
            'away_team_id' => '6',
            'league_id' => '1',
            'date' => '2023-08-19 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '12',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-08-19 19:00:00'
        ]);

        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '5',
            'league_id' => '1',
            'date' => '2023-08-19 19:30:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '9',
            'away_team_id' => '2',
            'league_id' => '1',
            'date' => '2023-08-25 19:00:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '2',
            'away_team_id' => '10',
            'league_id' => '1',
            'date' => '2023-08-26 18:00:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '8',
            'away_team_id' => '7',
            'league_id' => '1',
            'date' => '2023-08-26 18:30:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '14',
            'away_team_id' => '11',
            'league_id' => '1',
            'date' => '2023-08-26 19:00:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '12',
            'away_team_id' => '17',
            'league_id' => '1',
            'date' => '2023-08-26 19:00:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '4',
            'away_team_id' => '16',
            'league_id' => '1',
            'date' => '2023-08-26 19:00:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '5',
            'away_team_id' => '15',
            'league_id' => '1',
            'date' => '2023-08-26 19:00:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '18',
            'away_team_id' => '13',
            'league_id' => '1',
            'date' => '2023-08-26 19:00:00'
        ]);
                
        DB::table('games')->insert([
            'home_team_id' => '1',
            'away_team_id' => '13',
            'league_id' => '1',
            'date' => '2023-09-02 13:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '11',
            'away_team_id' => '8',
            'league_id' => '1',
            'date' => '2023-09-02 18:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '10',
            'away_team_id' => '2',
            'league_id' => '1',
            'date' => '2023-09-02 18:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '14',
            'away_team_id' => '6',
            'league_id' => '1',
            'date' => '2023-09-02 19:00:00'
        ]);
              
                              
        DB::table('games')->insert([
            'home_team_id' => '4',
            'away_team_id' => '7',
            'league_id' => '1',
            'date' => '2023-09-02 19:00:00'
        ]);
        
        DB::table('games')->insert([
            'home_team_id' => '18',
            'away_team_id' => '16',
            'league_id' => '1',
            'date' => '2023-09-02 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '9',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-09-02 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '5',
            'away_team_id' => '17',
            'league_id' => '1',
            'date' => '2023-09-03 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '15',
            'away_team_id' => '12',
            'league_id' => '1',
            'date' => '2023-09-03 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '6',
            'away_team_id' => '5',
            'league_id' => '1',
            'date' => '2023-09-15 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '8',
            'away_team_id' => '18',
            'league_id' => '1',
            'date' => '2023-09-15 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '3',
            'away_team_id' => '12',
            'league_id' => '1',
            'date' => '2023-09-15 19:30:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '2',
            'away_team_id' => '14',
            'league_id' => '1',
            'date' => '2023-09-16 18:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '1',
            'away_team_id' => '9',
            'league_id' => '1',
            'date' => '2023-09-16 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '16',
            'away_team_id' => '15',
            'league_id' => '1',
            'date' => '2023-09-16 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '17',
            'away_team_id' => '11',
            'league_id' => '1',
            'date' => '2023-09-16 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '8',
            'away_team_id' => '4',
            'league_id' => '1',
            'date' => '2023-09-17 18:30:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '13',
            'away_team_id' => '10',
            'league_id' => '1',
            'date' => '2023-09-23 14:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '5',
            'away_team_id' => '18',
            'league_id' => '1',
            'date' => '2023-09-23 15:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '11',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-09-23 16:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '12',
            'away_team_id' => '16',
            'league_id' => '1',
            'date' => '2023-09-23 19:00:00'
        ]);
                        
        DB::table('games')->insert([
            'home_team_id' => '4',
            'away_team_id' => '17',
            'league_id' => '1',
            'date' => '2023-09-23 19:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '15',
            'away_team_id' => '14',
            'league_id' => '1',
            'date' => '2023-09-23 19:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '2',
            'away_team_id' => '7',
            'league_id' => '1',
            'date' => '2023-09-24 15:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '9',
            'away_team_id' => '6',
            'league_id' => '1',
            'date' => '2023-09-24 16:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '13',
            'away_team_id' => '2',
            'league_id' => '1',
            'date' => '2023-09-23 19:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '15',
            'league_id' => '1',
            'date' => '2023-09-29 19:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '6',
            'away_team_id' => '10',
            'league_id' => '1',
            'date' => '2023-09-29 19:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '3',
            'away_team_id' => '8',
            'league_id' => '1',
            'date' => '2023-09-29 19:30:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '1',
            'away_team_id' => '4',
            'league_id' => '1',
            'date' => '2023-09-30 13:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '17',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-09-30 15:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '14',
            'away_team_id' => '9',
            'league_id' => '1',
            'date' => '2023-09-30 18:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '16',
            'away_team_id' => '11',
            'league_id' => '1',
            'date' => '2023-09-30 19:00:00'
        ]);
                                
        DB::table('games')->insert([
            'home_team_id' => '18',
            'away_team_id' => '12',
            'league_id' => '1',
            'date' => '2023-09-30 19:00:00'
        ]);
                                        
        DB::table('games')->insert([
            'home_team_id' => '5',
            'away_team_id' => '13',
            'league_id' => '1',
            'date' => '2023-10-01 15:00:00'
        ]);
                                                     
        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '18',
            'league_id' => '1',
            'date' => '2023-10-20 19:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-10-20 19:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '3',
            'away_team_id' => '4',
            'league_id' => '1',
            'date' => '2023-10-20 19:30:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '10',
            'away_team_id' => '18',
            'league_id' => '1',
            'date' => '2023-10-21 13:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '8',
            'away_team_id' => '5',
            'league_id' => '1',
            'date' => '2023-10-21 14:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '13',
            'away_team_id' => '11',
            'league_id' => '1',
            'date' => '2023-10-21 14:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '15',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-10-21 14:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '12',
            'away_team_id' => '9',
            'league_id' => '1',
            'date' => '2023-10-21 15:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '16',
            'away_team_id' => '14',
            'league_id' => '1',
            'date' => '2023-10-21 16:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '11',
            'away_team_id' => '18',
            'league_id' => '1',
            'date' => '2023-10-27 19:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '1',
            'away_team_id' => '8',
            'league_id' => '1',
            'date' => '2023-10-28 13:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '14',
            'away_team_id' => '13',
            'league_id' => '1',
            'date' => '2023-10-28 14:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '12',
            'away_team_id' => '10',
            'league_id' => '1',
            'date' => '2023-10-28 14:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '9',
            'away_team_id' => '15',
            'league_id' => '1',
            'date' => '2023-10-28 14:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '17',
            'away_team_id' => '7',
            'league_id' => '1',
            'date' => '2023-10-28 14:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '2',
            'away_team_id' => '3',
            'league_id' => '1',
            'date' => '2023-10-28 14:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '5',
            'away_team_id' => '16',
            'league_id' => '1',
            'date' => '2023-10-28 15:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '4',
            'away_team_id' => '6',
            'league_id' => '1',
            'date' => '2023-10-29 15:00:00'
        ]);
                                                
        DB::table('games')->insert([
            'home_team_id' => '1',
            'away_team_id' => '16',
            'league_id' => '1',
            'date' => '2023-11-11 14:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '9',
            'away_team_id' => '11',
            'league_id' => '1',
            'date' => '2023-11-11 14:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '14',
            'league_id' => '1',
            'date' => '2023-11-11 14:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '10',
            'away_team_id' => '5',
            'league_id' => '1',
            'date' => '2023-11-11 14:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '3',
            'away_team_id' => '15',
            'league_id' => '1',
            'date' => '2023-11-11 14:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '2',
            'away_team_id' => '4',
            'league_id' => '1',
            'date' => '2023-11-11 15:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '13',
            'away_team_id' => '17',
            'league_id' => '1',
            'date' => '2023-11-11 15:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '18',
            'away_team_id' => '8',
            'league_id' => '1',
            'date' => '2023-11-11 15:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '6',
            'away_team_id' => '12',
            'league_id' => '1',
            'date' => '2023-11-11 15:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '7',
            'away_team_id' => '10',
            'league_id' => '1',
            'date' => '2023-11-24 19:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '6',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-11-24 19:00:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '3',
            'away_team_id' => '17',
            'league_id' => '1',
            'date' => '2023-11-24 19:30:00'
        ]);
                                                        
        DB::table('games')->insert([
            'home_team_id' => '8',
            'away_team_id' => '9',
            'league_id' => '1',
            'date' => '2023-11-25 14:00:00'
        ]);
                                                                
        DB::table('games')->insert([
            'home_team_id' => '16',
            'away_team_id' => '13',
            'league_id' => '1',
            'date' => '2023-11-25 14:00:00'
        ]);
                                                                
        DB::table('games')->insert([
            'home_team_id' => '14',
            'away_team_id' => '12',
            'league_id' => '1',
            'date' => '2023-11-25 14:00:00'
        ]);
                                                                
        DB::table('games')->insert([
            'home_team_id' => '15',
            'away_team_id' => '11',
            'league_id' => '1',
            'date' => '2023-11-25 14:00:00'
        ]);
                                                                
        DB::table('games')->insert([
            'home_team_id' => '4',
            'away_team_id' => '18',
            'league_id' => '1',
            'date' => '2023-11-25 14:00:00'
        ]);
                                                                
        DB::table('games')->insert([
            'home_team_id' => '5',
            'away_team_id' => '1',
            'league_id' => '1',
            'date' => '2023-11-25 14:00:00'
        ]);
                                                                
        DB::table('games')->insert([
            'home_team_id' => '1',
            'away_team_id' => '3',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);
                                                                        
        DB::table('games')->insert([
            'home_team_id' => '11',
            'away_team_id' => '4',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);
                                                                        
        DB::table('games')->insert([
            'home_team_id' => '13',
            'away_team_id' => '15',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);
                                                                        
        DB::table('games')->insert([
            'home_team_id' => '2',
            'away_team_id' => '8',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);
                                                                        
        DB::table('games')->insert([
            'home_team_id' => '12',
            'away_team_id' => '7',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);
                                                                        
        DB::table('games')->insert([
            'home_team_id' => '18',
            'away_team_id' => '6',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);                                                                
        DB::table('games')->insert([
            'home_team_id' => '10',
            'away_team_id' => '14',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);
                                                                        
        DB::table('games')->insert([
            'home_team_id' => '17',
            'away_team_id' => '16',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);
                                                                        
        DB::table('games')->insert([
            'home_team_id' => '9',
            'away_team_id' => '5',
            'league_id' => '1',
            'date' => '2023-12-03 14:00:00'
        ]);

    }
}
