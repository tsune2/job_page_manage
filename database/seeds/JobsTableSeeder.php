<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        for ($i=0; $i < 39; $i++) {
            DB::table('jobs')->insert([
                'user_id' => $faker->numberBetween(1, 40), // 顧客ID
                'category_id' => $faker->randomDigitNotNull(), // 職種ID
                'contract_id' => $faker->randomDigitNotNull(), // 雇用形態ID
                'title' => $faker->paragraph(1, true), // 件名
                'worktime_description' => $faker->paragraph(2, true), // 勤務時間詳細
                'workarea_description' => $faker->paragraph(2, true), // 勤務場所詳細
                'workdaytime_description' => $faker->paragraph(2, true), // 勤務曜日詳細
                'salary_description' => $faker->paragraph(2, true), // 給与詳細
                'feature_description' => $faker->paragraph(2, true), // 職場特徴詳細
                'skill_description' => $faker->paragraph(2, true), // 資格詳細
                'holiday_description' => $faker->paragraph(2, true), // 休日休暇詳細
                'treatment_description' => $faker->paragraph(2, true), // 待遇詳細
                'company_description' => $faker->paragraph(2, true), // 職場情報詳細
                'subscription_description' => $faker->paragraph(2, true), // 応募情報詳細
                'inquiry_description' => $faker->paragraph(2, true), // 問合せ情報詳細
                'comment' => $faker->paragraph(3, true), // その他コメント
                'search_index' => $faker->paragraph(3, true), //全文検索用キーワード
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
