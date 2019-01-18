<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lists;
class subuser extends Model
{
    //
    protected $fillable = ['user_id', 'name', 'avatar'];

        public function lists()
            {
                return $this->hasMany(Lists::class);
            }
}
