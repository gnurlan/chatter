<?php

namespace DevDojo\Chatter\Models;

use App\Services\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

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
        $ban = new self();
        $ban->user_id = $params['id'];
        $ban->initiator_id = Auth::user()->id;
        $ban->period = $params['period'];
        $ban->comment = $params['comment'] ?? '';
        $ban->save();

        return true;
    }

    static function checkBaned($user_id)
    {
        $active_bans = collect();
        $bans = self::where('user_id','=',  $user_id)->get();
        if (!empty($bans)){

            foreach ($bans as $ban){
                if ($ban->created_at->addHours($ban->period) > Carbon::now()){
                    $active_bans->push($ban);
                }
            }
        }
        return $active_bans->count() ? $active_bans: false;
    }
}