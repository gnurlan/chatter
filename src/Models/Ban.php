<?php

namespace DevDojo\Chatter\Models;

use App\Services\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ban extends Model
{
    use SoftDeletes;

    protected $table = 'chatter_ban_user';
    public $timestamps = true;

    /**
     * @param $userId
     * @return bool
     */
    static function setBan($params)
    {
        if( self::where('user_id', $params['id'])->count() === 0)
        {
            $ban = new self();
            $ban->user_id = $params['id'];
            $ban->initiator_id = Auth::user()->id;
            $ban->period = $params['period'];
            $ban->comment = $params['comment'] ?? '';
            $ban->save();
        }

        return true;
    }
}