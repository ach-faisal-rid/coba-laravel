<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'faisal ridhani',
            'email' => 'thinkbear@gmail.com',
            'password' => bcrypt('password')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'category_id' => 2,
            'excerpt' => "igma reqwas",
            'body'=> "<p>enim at in obcaecati tempora beatae laudantium voluptate aperiam
                    excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi,
                    quod voluptate. Omnis, dolor eveniet nemo aliquam amet iusto.</p>
                    <p>enim at in obcaecati tempora beatae laudantium voluptate aperiam
                    excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi,
                    quod voluptate. Omnis, dolor eveniet nemo aliquam amet iusto.</p>",
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-ke-dua',
            'category_id' => 1,
            'excerpt' => "igma reqwas",
            'body'=> "<p>enim at in obcaecati tempora beatae laudantium voluptate aperiam
                    excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi,
                    quod voluptate. Omnis, dolor eveniet nemo aliquam amet iusto.</p>
                    <p>enim at in obcaecati tempora beatae laudantium voluptate aperiam
                    excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi,
                    quod voluptate. Omnis, dolor eveniet nemo aliquam amet iusto.</p>",
            'user_id' => 1
        ]);
    }
}
