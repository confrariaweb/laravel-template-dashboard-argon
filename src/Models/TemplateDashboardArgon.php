<?php

namespace ConfrariaWeb\TemplateDashboardArgon\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateDashboardArgon extends Model
{
    public function template()
    {
        return $this->morphOne('ConfrariaWeb\Template\Models\Template', 'templateable');
    }
}
