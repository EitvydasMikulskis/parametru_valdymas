<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Testavimas');

        $this->migrator->add('general.timezone', 'Europe/Vilnius');

        $this->migrator->add('general.maintenance_mode', false);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->migrator->delete('general.site_name');

        $this->migrator->delete('general.timezone');

        $this->migrator->delete('general.maintenance_mode');
    }
};