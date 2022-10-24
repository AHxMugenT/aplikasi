<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Faruq Azhar",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, autem minus illo, doloribus voluptatem quidem fugit
            deserunt voluptas quas quam soluta. Nemo illo, voluptatibus ipsum error velit excepturi aliquam, mollitia autem id quo
            blanditiis dolor, suscipit aspernatur. Sapiente cum ullam, laboriosam commodi minus quo, non ab corporis fugit similique
            ipsa provident sequi praesentium sint, facere aliquid eveniet doloribus! Explicabo laborum sint similique aperiam
            repudiandae eaque ducimus earum aut ullam facere ipsa delectus necessitatibus illo distinctio ipsam vitae maxime iste
            incidunt unde odit debitis numquam, in perspiciatis! Minima delectus ex dolor totam consequatur, velit eos dolorum sed,
            dolore eius repellat odio vitae suscipit voluptatum explicabo sint inventore? Natus, nam! Corporis sunt alias distinctio
            cum officiis a amet odio temporibus architecto velit labore praesentium itaque optio ea doloremque error, quos aliquam
            tempore ratione. Id earum nostrum quaerat impedit ducimus inventore commodi corrupti ab error cupiditate incidunt nulla
            sed a quia quasi ea, nobis repudiandae vero delectus consequuntur! Necessitatibus ullam consequuntur ducimus molestiae
            eaque ratione iusto assumenda nobis quo nesciunt rerum animi blanditiis maiores nihil nisi perferendis exercitationem
            voluptates officiis, cum earum. Expedita, perferendis et soluta, fugiat impedit ab, omnis ut iure repellendus a quod.
            Excepturi eos fugit magni molestiae, doloremque quo eius totam odit omnis possimus nobis reiciendis ullam corrupti sit
            voluptatem similique quisquam tempora mollitia voluptates, pariatur officiis officia quae. Delectus, culpa? Officia
            obcaecati voluptas aspernatur perferendis distinctio quis dignissimos totam minus velit porro corrupti iusto
            necessitatibus voluptates accusantium culpa, nihil soluta, numquam iste non amet quia? Totam et architecto maxime?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Delvina Haura",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, autem minus illo, doloribus voluptatem quidem fugit
            deserunt voluptas quas quam soluta. Nemo illo, voluptatibus ipsum error velit excepturi aliquam, mollitia autem id quo
            blanditiis dolor, suscipit aspernatur. Sapiente cum ullam, laboriosam commodi minus quo, non ab corporis fugit similique
            ipsa provident sequi praesentium sint, facere aliquid eveniet doloribus! Explicabo laborum sint similique aperiam
            repudiandae eaque ducimus earum aut ullam facere ipsa delectus necessitatibus illo distinctio ipsam vitae maxime iste
            incidunt unde odit debitis numquam, in perspiciatis! Minima delectus ex dolor totam consequatur, velit eos dolorum sed,
            dolore eius repellat odio vitae suscipit voluptatum explicabo sint inventore? Natus, nam! Corporis sunt alias distinctio
            cum officiis a amet odio temporibus architecto velit labore praesentium itaque optio ea doloremque error, quos aliquam
            tempore ratione. Id earum nostrum quaerat impedit ducimus inventore commodi corrupti ab error cupiditate incidunt nulla
            sed a quia quasi ea, nobis repudiandae vero delectus consequuntur! Necessitatibus ullam consequuntur ducimus molestiae
            eaque ratione iusto assumenda nobis quo nesciunt rerum animi blanditiis maiores nihil nisi perferendis exercitationem
            voluptates officiis, cum earum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
