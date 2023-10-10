<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $imageUrls = [
            "posts/thumbnails/cDJg8gyr3QiQMAWG9GUA33qMSx7sBB-metaYXhpb3MtcmVhY3QuanBn-.jpg",
            "posts/thumbnails/Oio3MfuuErOk84o0mXyNbEiGuztU2v-metaZWRpdC5wbmc=-.webp",
            "posts/thumbnails/PGLZBDuatSNndkkmwYu9K4lkb31B5G-metaRkJfSU1HXzE2NjE4MTEwNjA1MzYuanBn-.jpg",
            "posts/thumbnails/1pUmUUsFxWy8h5gRHzeN6oXEUwC6TU-metaU2NyZWVuc2hvdCAyMDIzLTA4LTAxIDIyMTgxMi5wbmc=-.png",
        ];

        return [
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->randomElement($imageUrls),
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}