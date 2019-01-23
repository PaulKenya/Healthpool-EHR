<?php

use Faker\Generator as Faker;

$factory->define(App\Institution::class, function (Faker $faker) {
    return [
    'name'=>$faker->company,
    'email'=>$faker->unique()->safeEmail,
    'registration_number'=>$faker->unique()->numberBetween($min = 1, $max = 6000),
    'cover'=>'default.jpg',
    'telephone'=>$faker->phoneNumber,
    'type'=>$faker->word,
    'keph_level'=>$faker->numberBetween($min = 1, $max = 6),
    'facility_type'=>$faker->text($maxNbChars = 20, $indexSize = 2),
    'owner'=>$faker->name,
    'regulatory_body'=>$faker->company,
    'bed_capacity'=>$faker->numberBetween($min = 1, $max = 6000),
    'branches'=>$faker->randomDigit,
    'working_days'=>implode(',',$faker->randomElements($array = array ('monday','tuesday','wednesday','thursday','friday','saturday','sunday'), $count = 1)),
    'brief_description_of_services'=>$faker->text ,//realText($maxNbChars = 20, $indexSize = 2),
    'insurance'=>$faker->company,
    'company_name'=>$faker->company,
    'legal_name'=>$faker->company,
    'cots'=>$faker->numberBetween($min = 1, $max = 6000),
    'tax_id'=>$faker->company,
    'street_address'=>$faker->streetAddress,
    'city'=>$faker->city,
    'county'=>$faker->country,
    'address'=>$faker->address,
    'sub_county'=>$faker->city,
    'ward'=>$faker->city,
    ];
});
