<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FaqTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(TranslationfieldsTableSeeder::class);
        $this->call(TermsOfServiceTableseeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserStatusesTableSeeder::class);
        $this->call(UserModesTableSeeder::class);
//        $this->call(UserMainMenuTableSeeder::class);
//        $this->call(UserSubMenuTableSeeder::class);

        $this->call(AdminMainMenuTableSeeder::class);
        $this->call(AdminSubMenuTableSeeSeeder::class);
        $this->call(TranslatorMainMenuTableSeeder::class);
        $this->call(TranslatorSubMenuTableSeeder::class);
        $this->call(CustomerMainMenuTableSeeder::class);
        $this->call(CustomerSubMenuTableSeeder::class);
        $this->call(QuizzesTableSeeder::class);
        $this->call(QuizAnswersTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
        $this->call(OrderTimingPriceTableSeeder::class);

    }
}
