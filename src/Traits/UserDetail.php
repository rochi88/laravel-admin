<?php
namespace Rochi88\Admin\Traits;

use Rochi88\Admin\Models\UserDetail as ModelsUserDetail;

trait UserDetail{
    public function user_detail(){
        return $this->hasOne(ModelsUserDetail::class);
    }
}
