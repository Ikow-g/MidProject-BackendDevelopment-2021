<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course
{
    static $courses = 
    [
        [
            "title" => "course 1",
            "slug" => "slug-judul-1",
            "author" => "author 1",
            "detail" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cumque neque ratione saepe! Assumenda architecto blanditiis nesciunt officia vero libero dolorum. Quidem eius quod, saepe rerum, at officiis doloribus facere dolores exercitationem neque commodi modi a unde illo harum. Repudiandae saepe blanditiis incidunt consectetur veniam quidem quo beatae, exercitationem eaque repellat est rerum iusto. Ipsum soluta nam consequatur veritatis a atque delectus expedita temporibus praesentium. Aliquam placeat, architecto minima consequuntur corporis quibusdam officiis obcaecati, rem nostrum, provident eius voluptas nemo sunt porro magnam quidem? Ex, nesciunt porro quisquam in molestias sunt eius consequuntur repellendus voluptatum ullam quia sint impedit at?"
        ],
        [
            "title" => "course 2",
            "slug" => "slug-judul-2",
            "author" => "author 2",
            "detail" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cumque neque ratione saepe! Assumenda architecto blanditiis nesciunt officia vero libero dolorum. Quidem eius quod, saepe rerum, at officiis doloribus facere dolores exercitationem neque commodi modi a unde illo harum. Repudiandae saepe blanditiis incidunt consectetur veniam quidem quo beatae, exercitationem eaque repellat est rerum iusto. Ipsum soluta nam consequatur veritatis a atque delectus expedita temporibus praesentium. Aliquam placeat, architecto minima consequuntur corporis quibusdam officiis obcaecati, rem nostrum, provident eius voluptas nemo sunt porro magnam quidem? Ex, nesciunt porro quisquam in molestias sunt eius consequuntur repellendus voluptatum ullam quia sint impedit at?"
        ]
    ];

    public static function all()
    {
        return collect(self::$courses);
    }

    public static function find($slug)
    {
        $courses = static::all();
        return $courses->firstWhere('slug', $slug);
    }
}
