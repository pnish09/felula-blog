<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => 'Admin',
            'email' => 'nish09.lingam@gmail.com',
            'comment' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'post_id' => 1
        ], [
            'name' => 'Nish',
            'email' => 'nish@gmail.com',
            'comment' => 'Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'post_id' => 1
        ], [
            'name' => 'Nish',
            'email' => 'nish@gmail.com',
            'comment' => 'Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'post_id' => 3
        ],  [
            'name' => 'Jack',
            'email' => 'jack@gmail.com',
            'comment' => 'Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'post_id' => 1
        ], [
            'name' => 'Lingam',
            'email' => 'Lingam@gmail.com',
            'comment' => 'Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'post_id' => 4
        ],];
        Comment::insert($data);
    }
}
