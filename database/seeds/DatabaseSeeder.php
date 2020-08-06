<?php

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
        $this->call(UsersTableSeeder::class);//Usuarios
        $this->call(CategoriesTableSeeder::class);//Categorias
        $this->call(TagsTableSeeder::class);//Etiquetas
        $this->call(PostsTableSeeder::class);//Posts

    }
}
