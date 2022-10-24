<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'M Faruq Azhar',
            'email' => 'faruqazhar5@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta quisquam magnam, pariatur odio sequi odit qui nemo ullam deleniti voluptas ducimus',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta quisquam magnam, pariatur odio sequi odit qui nemo ullam deleniti voluptas ducimus, veniam nulla voluptate quae ab sit inventore et reprehenderit necessitatibus autem molestiae. Aliquid nemo consectetur, provident est tempore quasi impedit iste saepe voluptatibus suscipit veniam possimus quia obcaecati voluptate ut vel autem vero, velit illum eaque earum repellat eligendi? Quasi enim veniam facere dolor laborum, expedita eos asperiores doloribus, exercitationem reiciendis perferendis dolores natus quaerat suscipit totam odit inventore doloremque ratione impedit? Consectetur, quaerat? Quidem ad qui deserunt non aperiam facilis perspiciatis repellat, rerum illo accusantium optio voluptatem minima nam explicabo voluptatibus maxime hic ratione exercitationem nostrum magnam, quod fuga? Cum corrupti fugiat veritatis. Iste cupiditate velit voluptates corporis harum esse possimus, repellat delectus provident eaque aliquam asperiores tempore sed voluptatum reprehenderit! Voluptas atque necessitatibus dignissimos dolorum nam neque cumque ratione aliquam explicabo soluta vitae voluptate recusandae, nisi molestias quis, sit ullam minima officia adipisci! Voluptates est illum vero maxime inventore omnis magni earum iusto numquam id assumenda saepe ipsam atque accusantium temporibus, ut culpa rerum dolorum beatae quaerat! Enim unde animi repellendus sapiente, architecto sunt dolore repudiandae reprehenderit facilis, sed rerum quasi quod perspiciatis cupiditate, in inventore laudantium!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta quisquam magnam, pariatur odio sequi odit qui nemo ullam deleniti voluptas ducimus',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta quisquam magnam, pariatur odio sequi odit qui nemo ullam deleniti voluptas ducimus, veniam nulla voluptate quae ab sit inventore et reprehenderit necessitatibus autem molestiae. Aliquid nemo consectetur, provident est tempore quasi impedit iste saepe voluptatibus suscipit veniam possimus quia obcaecati voluptate ut vel autem vero, velit illum eaque earum repellat eligendi? Quasi enim veniam facere dolor laborum, expedita eos asperiores doloribus, exercitationem reiciendis perferendis dolores natus quaerat suscipit totam odit inventore doloremque ratione impedit? Consectetur, quaerat? Quidem ad qui deserunt non aperiam facilis perspiciatis repellat, rerum illo accusantium optio voluptatem minima nam explicabo voluptatibus maxime hic ratione exercitationem nostrum magnam, quod fuga? Cum corrupti fugiat veritatis. Iste cupiditate velit voluptates corporis harum esse possimus, repellat delectus provident eaque aliquam asperiores tempore sed voluptatum reprehenderit! Voluptas atque necessitatibus dignissimos dolorum nam neque cumque ratione aliquam explicabo soluta vitae voluptate recusandae, nisi molestias quis, sit ullam minima officia adipisci! Voluptates est illum vero maxime inventore omnis magni earum iusto numquam id assumenda saepe ipsam atque accusantium temporibus, ut culpa rerum dolorum beatae quaerat! Enim unde animi repellendus sapiente, architecto sunt dolore repudiandae reprehenderit facilis, sed rerum quasi quod perspiciatis cupiditate, in inventore laudantium!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta quisquam magnam, pariatur odio sequi odit qui nemo ullam deleniti voluptas ducimus',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta quisquam magnam, pariatur odio sequi odit qui nemo ullam deleniti voluptas ducimus, veniam nulla voluptate quae ab sit inventore et reprehenderit necessitatibus autem molestiae. Aliquid nemo consectetur, provident est tempore quasi impedit iste saepe voluptatibus suscipit veniam possimus quia obcaecati voluptate ut vel autem vero, velit illum eaque earum repellat eligendi? Quasi enim veniam facere dolor laborum, expedita eos asperiores doloribus, exercitationem reiciendis perferendis dolores natus quaerat suscipit totam odit inventore doloremque ratione impedit? Consectetur, quaerat? Quidem ad qui deserunt non aperiam facilis perspiciatis repellat, rerum illo accusantium optio voluptatem minima nam explicabo voluptatibus maxime hic ratione exercitationem nostrum magnam, quod fuga? Cum corrupti fugiat veritatis. Iste cupiditate velit voluptates corporis harum esse possimus, repellat delectus provident eaque aliquam asperiores tempore sed voluptatum reprehenderit! Voluptas atque necessitatibus dignissimos dolorum nam neque cumque ratione aliquam explicabo soluta vitae voluptate recusandae, nisi molestias quis, sit ullam minima officia adipisci! Voluptates est illum vero maxime inventore omnis magni earum iusto numquam id assumenda saepe ipsam atque accusantium temporibus, ut culpa rerum dolorum beatae quaerat! Enim unde animi repellendus sapiente, architecto sunt dolore repudiandae reprehenderit facilis, sed rerum quasi quod perspiciatis cupiditate, in inventore laudantium!',
            'category_id' => 3,
            'user_id' => 3
        ]);
    }
}
