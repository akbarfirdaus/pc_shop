<?php

namespace Database\Factories;

use App\Models\LogPengunjung;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LogPengunjung>
 */
class LogPengunjungFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */

    protected $model = LogPengunjung::class;

    public function definition(): array
    {
        $createdAt = Carbon::now()->subDays(rand(0, 9))->subHours(rand(0, 23))->subMinutes(rand(0, 59));
        $updatedAt = (clone $createdAt)->addMinutes(rand(1, 1440)); // Updated at minimal 1 menit setelah created_at

        return [
            'visitor_session' => '123123',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ];
    }
}
