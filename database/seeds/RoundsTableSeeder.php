<?php

use Illuminate\Database\Seeder;

class RoundsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150103,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 89,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150121,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 91,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150202,
        'course_name' => 'Alpine Golf',
        'course_rating' => 69.3,
        'slope_rating' => 116,
        'round_score' => 91,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150213,
        'course_name' => 'Amata Springs',
        'course_rating' => 72,
        'slope_rating' => 119,
        'round_score' => 85,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150221,
        'course_name' => 'Bangkok Golf Club',
        'course_rating' => 69.4,
        'slope_rating' => 127,
        'round_score' => 84,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150328,
        'course_name' => 'Green Valley Country Club',
        'course_rating' => 69.9,
        'slope_rating' => 121,
        'round_score' => 84,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150405,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 88,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150412,
        'course_name' => 'Lam Luk Ka Country Club',
        'course_rating' => 69,
        'slope_rating' => 116,
        'round_score' => 83,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150422,
        'course_name' => 'Muang Kaew Golf Club',
        'course_rating' => 71.5,
        'slope_rating' => 127,
        'round_score' => 84,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150501,
        'course_name' => 'Thai Country Club',
        'course_rating' => 69,
        'slope_rating' => 128,
        'round_score' => 88,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150603,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 89,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150621,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 91,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150702,
        'course_name' => 'Alpine Golf',
        'course_rating' => 69.3,
        'slope_rating' => 116,
        'round_score' => 91,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150713,
        'course_name' => 'Amata Springs',
        'course_rating' => 72,
        'slope_rating' => 119,
        'round_score' => 85,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150821,
        'course_name' => 'Bangkok Golf Club',
        'course_rating' => 69.4,
        'slope_rating' => 127,
        'round_score' => 84,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150828,
        'course_name' => 'Green Valley Country Club',
        'course_rating' => 69.9,
        'slope_rating' => 121,
        'round_score' => 84,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150905,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 88,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150912,
        'course_name' => 'Lam Luk Ka Country Club',
        'course_rating' => 69,
        'slope_rating' => 116,
        'round_score' => 83,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20151022,
        'course_name' => 'Muang Kaew Golf Club',
        'course_rating' => 71.5,
        'slope_rating' => 127,
        'round_score' => 84,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20151101,
        'course_name' => 'Thai Country Club',
        'course_rating' => 69,
        'slope_rating' => 128,
        'round_score' => 88,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20151119,
        'course_name' => 'Siam Country Club',
        'course_rating' => 69,
        'slope_rating' => 128,
        'round_score' => 88,
        'user_id' =>1,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' =>20150301,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 89,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150121,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 91,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150202,
        'course_name' => 'Alpine Golf',
        'course_rating' => 69.3,
        'slope_rating' => 116,
        'round_score' => 91,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150213,
        'course_name' => 'Amata Springs',
        'course_rating' => 72,
        'slope_rating' => 119,
        'round_score' => 85,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150221,
        'course_name' => 'Bangkok Golf Club',
        'course_rating' => 69.4,
        'slope_rating' => 127,
        'round_score' => 84,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150328,
        'course_name' => 'Green Valley Country Club',
        'course_rating' => 69.9,
        'slope_rating' => 121,
        'round_score' => 84,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150405,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 88,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150412,
        'course_name' => 'Lam Luk Ka Country Club',
        'course_rating' => 69,
        'slope_rating' => 116,
        'round_score' => 83,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150422,
        'course_name' => 'Muang Kaew Golf Club',
        'course_rating' => 71.5,
        'slope_rating' => 127,
        'round_score' => 84,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150501,
        'course_name' => 'Thai Country Club',
        'course_rating' => 69,
        'slope_rating' => 128,
        'round_score' => 88,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150603,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 89,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150621,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 91,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150702,
        'course_name' => 'Alpine Golf',
        'course_rating' => 69.3,
        'slope_rating' => 116,
        'round_score' => 91,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150713,
        'course_name' => 'Amata Springs',
        'course_rating' => 72,
        'slope_rating' => 119,
        'round_score' => 85,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150821,
        'course_name' => 'Bangkok Golf Club',
        'course_rating' => 69.4,
        'slope_rating' => 127,
        'round_score' => 84,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150828,
        'course_name' => 'Green Valley Country Club',
        'course_rating' => 69.9,
        'slope_rating' => 121,
        'round_score' => 84,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150905,
        'course_name' => 'Summit Windmill',
        'course_rating' => 70.2,
        'slope_rating' => 146,
        'round_score' => 88,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20150912,
        'course_name' => 'Lam Luk Ka Country Club',
        'course_rating' => 69,
        'slope_rating' => 116,
        'round_score' => 83,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20151022,
        'course_name' => 'Muang Kaew Golf Club',
        'course_rating' => 71.5,
        'slope_rating' => 127,
        'round_score' => 84,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20151101,
        'course_name' => 'Thai Country Club',
        'course_rating' => 69,
        'slope_rating' => 128,
        'round_score' => 88,
        'user_id' =>2,
        ]);

        DB::table('rounds')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'date_played' => 20151101,
        'course_name' => 'Siam Club',
        'course_rating' => 69,
        'slope_rating' => 128,
        'round_score' => 8,
        'user_id' =>2,
        ]);
    }
}
