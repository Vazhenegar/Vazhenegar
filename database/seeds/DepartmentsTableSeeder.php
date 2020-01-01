<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments=[
            'مدیریت',
            'مالی',
            'کارگزینی',
            'ترجمه',
            'تایپ',
            'آموزش',
            'فروش',
            'مشتریان',
        ];
        foreach ($departments as $department) {
            DB::table('departments')->insert([
                'DepartmentName' => $department,
            ]);
        }
    }
}
