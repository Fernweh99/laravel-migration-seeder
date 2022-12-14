<?php

use App\models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    for ($i = 0; $i < 10; $i++) {
      $new_train = new Train();

      $new_train->azienda = $faker->company();
      $new_train->stazione_di_partenza = $faker->city();
      $new_train->stazione_di_arrivo = $faker->city();
      $new_train->orario_di_partenza = $faker->dateTimeThisMonth();
      $new_train->orario_di_arrivo = $faker->dateTimeThisMonth('+2 hours');
      $new_train->codice_treno = $faker->randomNumber(5, true);
      $new_train->numero_carrozze = $faker->randomNumber(2, false);
      $new_train->in_orario = $faker->boolean();
      $new_train->cancellato = $faker->boolean();

      $new_train->save();
    }
  }
}
