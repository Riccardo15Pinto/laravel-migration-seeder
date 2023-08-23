<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function isInTime()
    {

        $timing = !$this->in_time ? 'In Ritardo' : 'In Orario';

        return $timing;
    }

    public function isDeleted()
    {

        $run = !$this->deleted ? 'Cancellato' : '';

        return $run;
    }
}
