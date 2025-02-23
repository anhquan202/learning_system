<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Students::class;

    public function definition(): array
    {
        $availablePersonIds = Person::where('roles', 'student')
            ->whereNotIn('person_id', Students::pluck('person_id'))
            ->pluck('person_id')
            ->toArray();

        if (!empty($availablePersonIds)) {
            $personId = $this->faker->randomElement($availablePersonIds);
        }
        return [
            'person_id' => $personId,
            'student_status' => $this->faker->randomElement(['active'])
        ];
    }
}
