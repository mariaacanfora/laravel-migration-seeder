<?php
use App\Travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <= 200; $i++) { 
            $travel = new Travel();
            $travel->type = $faker->word();
            $travel->destination = $faker->state();
            $travel->duration  = $faker->randomDigitNotNull();
            $travel->price = $faker->randomFloat(NULL, $min = 0, 3000);
            $travel->description = $faker->text(500);
            $travel->imgPath = $faker->imageUrl();
            $travel->save();
        }
    }
}
