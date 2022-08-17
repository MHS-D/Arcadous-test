<?php

namespace App\Services;

use App\Jobs\notifyUsers;
use App\Models\User;
use App\Traits\GeneralTrait;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

/**
 * Class AuthService
 * @package App\Services
 */
class ArcadousTestService
{
    use GeneralTrait;
    /**
     * Discription: create a new user
     * @param
     * Name, email, password
     */
    public function notifyUsers($data)
    {
        try{
                $firebase_tokens = User::whereNotNull('device_token')->pluck('device_token')->all();

                notifyUsers::dispatch($firebase_tokens,config('settings.firebase.key'),$data['title'],$data['body']);

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

}
