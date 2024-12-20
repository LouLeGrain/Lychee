<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class() extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		DB::table('configs')->where('value', '=', 'Lychee v5')->update(['value' => 'Lychee v6']);
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		DB::table('configs')->where('value', '=', 'Lychee v6')->update(['value' => 'Lychee v5']);
	}
};
