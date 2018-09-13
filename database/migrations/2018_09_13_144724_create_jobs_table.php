<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); // 顧客ID
            $table->integer('category_id'); // 職種ID
            $table->integer('contract_id'); // 雇用形態ID
            $table->text('title'); // 件名
            $table->text('worktime_description'); // 勤務時間詳細
            $table->text('workarea_description'); // 勤務場所詳細
            $table->text('workdaytime_description'); // 勤務曜日詳細
            $table->text('salary_description'); // 給与詳細
            $table->text('feature_description'); // 職場特徴詳細
            $table->text('skill_description'); // 資格詳細
            $table->text('holiday_description'); // 休日休暇詳細
            $table->text('treatment_description'); // 待遇詳細
            $table->text('company_description'); // 職場情報詳細
            $table->text('subscription_description'); // 応募情報詳細
            $table->text('inquiry_description'); // 問合せ情報詳細
            $table->text('comment'); // その他コメント
            $table->text('search_index'); //全文検索用キーワード
            $table->timestamps();
            $table->softDeletes();
            $table->index('user_id');
            $table->index('category_id');
            $table->index('contract_id');
            $table->index(['id','search_index'], 'pgroogna_search_home_index', 'pgroonga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
