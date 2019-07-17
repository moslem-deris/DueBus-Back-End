<?php namespace Denora\Duebus;

use RainLab\User\Models\User as UserModel;
use System\Classes\PluginBase;

class Plugin extends PluginBase {

    public $require = ['RainLab.User'];

    public function registerComponents() {
        return [
            'Denora\Duebus\Components\EntrepreneurProfile' => 'entrepreneurProfile',
            'Denora\Duebus\Components\InvestorProfile' => 'investorProfile',
        ];

    }

    public function registerSettings() {
    }

    public function boot() {
        parent::boot();

        //  Relate user to [Investor, Entrepreneur, Representative] objects
        UserModel::extend(function ($model){
            $model->hasOne['investor'] = ['Denora\Duebus\Models\Investor'];
            $model->hasOne['entrepreneur'] = ['Denora\Duebus\Models\Entrepreneur'];
            $model->hasOne['representative'] = ['Denora\Duebus\Models\Representative'];
        });
    }

}