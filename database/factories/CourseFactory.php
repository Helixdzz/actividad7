<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\RoboticsKit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_key' => 'Rob' . $this->faker->unique()->numberBetween(100, 999),
            'course_name' => $this->faker->sentence(3),
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id,
            'cover_image' => $this->faker->imageUrl(640, 480, 'technics'),
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}