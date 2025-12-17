public function up()
{
    Schema::table('shops', function (Blueprint $table) {
        $table->string('pincode', 20)->nullable()->after('state');
    });
}

public function down()
{
    Schema::table('shops', function (Blueprint $table) {
        $table->dropColumn('pincode');
    });
}
