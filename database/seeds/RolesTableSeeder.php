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
        $Roles=[
            1=>['مدیر',],
            2=>['مسئول امور مالی',],
            3=>['مسئول امور کارگزینی',],
            4=>['مسئول واحد ترجمه','مترجم',],
            5=>['مسئول واحد تایپ','تایپیست',],
            6=>['مسئول واحد آموزش','مدرس',],
            7=>['مسئول واحد فروش',],
            8=>['مشتری',],
        ];

        foreach ($Roles as $dep_id=>$roles) {
            foreach ($roles as $role){
                DB::table('roles')->insert([
                    'DepartmentId'=>$dep_id,
                    'RoleName' => $role,
                ]);
            }
        }
    }
}
