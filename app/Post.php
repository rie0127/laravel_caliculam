<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
    public function getPaginateByLimit(int $limit_count = 5)
    {
     return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
=======
    //
>>>>>>> master
}
