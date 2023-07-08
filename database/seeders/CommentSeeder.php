<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'user_id' => 5,
            'Post_id' => 1,
            'content' => 'Admin Usedsfsdfdsfsdfdzsfsdfsdfsdfsdfsddsfdsfdsgdsfr',

        ]);
    }
}
