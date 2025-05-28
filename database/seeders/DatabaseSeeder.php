<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Content;
use App\Models\AuthorContent;
use App\Models\ContentGenres;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        User::factory()->create([
            'name'     => 'Madiyor',
            'email'    => 'admin@example.com',
            'password' => bcrypt('Mini1212'),
        ]); 

        $this->call([ 
            AuthorSeeder  ::class, 
            CategorySeeder::class, 
            GenreSeeder   ::class 
        ]);

        Content::create([
            'title'       => 'Enjoykin - Стартуем',
            'description' => 'Легендарная музыкаа Enjoykin ))',
            'url'         => 'https://www.youtube.com/embed/9u9cJnq4cNk?si=9UfUknUmLlTDUaVU',
            'category_id' => 1
        ]);

        for($i = 1; $i <= 4; $i++){
            ContentGenres::query()->create([
                'content_id' => 1,
                'genre_id'   => $i,
            ]);
        }

        AuthorContent::query()->create([
            'author_id'  => 2,
            'content_id' => 1,
        ]);

        Role::create(['name' => 'super-admin']); 
        Role::create(['name' => 'admin']); 
        Role::create(['name' => 'moderator']);
        Role::create(['name' => 'user']); 

        $routes = app('router')->getRoutes(); 

        foreach ($routes as $route) { 

            $key = $route->getName(); 

            if ($key && !str_starts_with($key, 'telescope') && $key !== 'storage.local') { 
                $name = ucfirst(str_replace('.', '-', $key)); 
                Permission::create(['name' => $name, 'guard_name' => 'web']); 
            }
        }

        $user = User::query()->first(); 

        $user->assignRole('super-admin'); 
        $user->givePermissionTo(Permission::all()); 

    }
}
