<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('teams')->insert([
            'name' => '北海道コンサドーレ札幌'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '鹿島アントラーズ'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '浦和レッズ'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '柏レイソル'    
        ]);
        
        DB::table('teams')->insert([
            'name' => 'FC東京'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '川崎フロンターレ'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '横浜F・マリノス'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '横浜FC'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '湘南ベルマーレ'    
        ]);
        
        DB::table('teams')->insert([
            'name' => 'アルビレックス新潟'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '名古屋グランパス'    
        ]);
        
        DB::table('teams')->insert([
            'name' => '京都サンガF.C.'    
        ]);
        
        DB::table('teams')->insert([
            'name' => 'ガンバ大阪'    
        ]);
        
        DB::table('teams')->insert([
            'name' => 'セレッソ大阪'    
        ]);
        
        DB::table('teams')->insert([
            'name' => 'ヴィッセル神戸'    
        ]);
        
        DB::table('teams')->insert([
            'name' => 'サンフレッチェ広島'    
        ]);
        
        DB::table('teams')->insert([
            'name' => 'アビスパ福岡'    
        ]);
        
        DB::table('teams')->insert([
            'name' => 'サガン鳥栖'    
        ]);
        
    }
}
