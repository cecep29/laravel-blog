<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
        		'title' => 'post kedua',
        		'subject' => 'ini post kedua'
        	]);
    }
}
