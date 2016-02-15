<?php namespace Ardani\Stikes\Models;

use Model;

/**
 * setting Model
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'stikes_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public $attachMany = [
        'images' => ['System\Models\File', 'order' => 'sort_order'],
    ];
}