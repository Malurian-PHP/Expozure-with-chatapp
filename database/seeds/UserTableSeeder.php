<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gerard Nesi',
            'email' => 'gerard@mail.com',
            'password' => Hash::make('secret'),
            'avatar' => '9.jpg',
            'primary_category' => 'Accounting',
            'secondary_category' => 'Agriculture',
            'tertiary_category' => 'Advertising',
            'zip' => '11111',
            'current_company' => 'Nasa',
            'position_company' => 'Lead JavaScript Developer',
            'education' => 'Yale',
            'industry' => 'Mechanical Engineering',
            'website' => 'https://nasa.org',
            'country' => 'Germany',
            'state' => 'Brussels',
            'about' => 'Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industrys
            standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of
            Lorem Ipsum.',
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@mail.com',
            'password' => Hash::make('secret'),
            'avatar' => '1.jpg',
            'is_featured' => '1',
            'primary_category' => 'Accounting',
            'secondary_category' => 'Agriculture',
            'tertiary_category' => 'Advertising',
            'zip' => '11111',
            'current_company' => 'Nasa',
            'position_company' => 'Lead JavaScript Developer',
            'education' => 'Yale',
            'industry' => 'Mechanical Engineering',
            'website' => 'https://nasa.org',
            'country' => 'Germany',
            'state' => 'Brussels',
            'about' => 'Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industrys
            standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of
            Lorem Ipsum.',
        ]);

        DB::table('users')->insert([
            'name' => 'test1',
            'email' => 'test1@mail.com',
            'password' => Hash::make('secret'),
            'avatar' => '2.jpg',
            'is_featured' => '1',
            'primary_category' => 'Accounting',
            'secondary_category' => 'Agriculture',
            'tertiary_category' => 'Advertising',
            'zip' => '11111',
            'current_company' => 'Nasa',
            'position_company' => 'Lead JavaScript Developer',
            'education' => 'Yale',
            'industry' => 'Mechanical Engineering',
            'website' => 'https://nasa.org',
            'country' => 'Germany',
            'state' => 'Brussels',
            'about' => 'Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industrys
            standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of
            Lorem Ipsum.',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('secret'),
            'avatar' => '8.jpg',
            'is_featured' => '1',
            'primary_category' => 'Accounting',
            'secondary_category' => 'Agriculture',
            'tertiary_category' => 'Advertising',
            'zip' => '11111',
            'current_company' => 'Nasa',
            'position_company' => 'Lead JavaScript Developer',
            'education' => 'Yale',
            'industry' => 'Mechanical Engineering',
            'website' => 'https://nasa.org',
            'country' => 'Germany',
            'state' => 'Brussels',
            'about' => 'Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industrys
            standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of
            Lorem Ipsum.',
        ]);

        DB::table('users')->insert([
            'name' => 'game',
            'email' => 'game@mail.com',
            'password' => Hash::make('secret'),
            'avatar' => '3.jpg',
            'is_featured' => '1',
            'primary_category' => 'Accounting',
            'secondary_category' => 'Agriculture',
            'tertiary_category' => 'Advertising',
            'zip' => '11111',
            'current_company' => 'Nasa',
            'position_company' => 'Lead JavaScript Developer',
            'education' => 'Yale',
            'industry' => 'Mechanical Engineering',
            'website' => 'https://nasa.org',
            'country' => 'Germany',
            'state' => 'Brussels',
            'about' => 'Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industrys
            standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of
            Lorem Ipsum.',
        ]);
    }
}
