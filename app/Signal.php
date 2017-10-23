<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    protected $table = 'bos_signal';

    const CREATED_AT = 'time';

}
