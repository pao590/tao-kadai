<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Channel;

class ChannelsTableSeeder extends Seeder
{
    public function run()
    {
        $channels = [
            '自社サイト',
            '検索エンジン',
            'SNS',
            'テレビ・新聞',
            '友人・知人',
        ];

        foreach ($channels as $name){
            Channel::create(['name' =>$name]);
        }
    }
}
