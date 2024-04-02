<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = 'admin';
        $name = 'Jerry Parrocha';
        $job = 'Future Web Developer';
        $email = 'j.parrocha@gmail.com';
        $birthday = 'November 23, 2002';
        $age = '21';
        $gender = 'Male';
        $phone = '639638753244';
        $address = 'Western Poblacion, Hilongos, Leyte';
        $religion = 'Roman Catholic';
        $status = 'Single';
        $description = 'Hello, my name is Jerry Parrocha, a student who want to become a web developer. I also love to make Designs and Photographs. Here is a little about who i am:';
        $fb_link = 'https://www.facebook.com/jerryparrocha1234/';
        $instagram_link = 'https://www.instagram.com/__jewy/';
        $linkedin_link = 'https://ph.linkedin.com/in/jerry-parrocha-57461a261';
        $github_link = 'https://github.com/Jparrocha2002';

        DB::table('users')->insert ([
            [
                'role' => $role,
                'name' => $name,
                'job' => $job,
                'email' => $email,
                'birthday' => $birthday,
                'age' => $age,
                'gender' => $gender,
                'phone' => $phone,
                'address' => $address,
                'religion' => $religion,
                'status' => $status,
                'description' => $description,
                'fb_link' => $fb_link,
                'instagram_link' => $instagram_link,
                'linkedin_link' => $linkedin_link,
                'github_link' => $github_link,
                'password' => Hash::make('12345678'),
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
