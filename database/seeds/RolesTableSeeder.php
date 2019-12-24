<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            'مدیر',
            'مسئول امور مالی',
            'مسئول امور کارگزینی',
            'مسئول واحد ترجمه',
            'مسئول واحد تایپ',
            'مسئول واحد آموزش',
            'مسئول واحد فروش',
            'مترجم',
            'مدرس',
            'تایپیست',
            'مشتری',
        ];
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'RoleName' => $role,
            ]);
        }
    }
}
