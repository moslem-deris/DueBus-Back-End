<?php namespace Denora\Duebusprofile\Models;

use Model;

/**
 * Model
 */
class Investor extends Model {

    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'denora_duebus_investors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'sectors' => ['Denora\Duebus\Models\Sector', 'table' => 'denora_duebus_investor_sector']
    ];

    public $belongsTo = [
        'user' => 'Rainlab\User\Models\User'
    ];
}
