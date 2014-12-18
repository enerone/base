<?php

class TinchoTableSeeder extends Seeder{
    public function run(){
        DB::table('comments')->delete();

        Comment::create(array(
            'nombre' => 'tincho'
        ));

        Comment::create(array(
            'nombre' => 'pepe'
        ));

        Comment::create(array(
            'nombre' => 'tucho'
        ));
    }
}