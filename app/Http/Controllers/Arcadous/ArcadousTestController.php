<?php

namespace App\Http\Controllers\Arcadous;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\ArcadousTestService;
use App\Traits\GeneralTrait;
use Clockwork\Request\Request;
use Exception;
use Illuminate\Validation\ValidationException;
use JavaScript;


class ArcadousTestController extends Controller
{
    use GeneralTrait;

    public function __construct(ArcadousTestService $arcadousTestService)
    {
        $this->arcadousTestService = $arcadousTestService;
    }

    public function saveCurrentUserToken(Request $request)
    {
        auth()->user()->update(['device_token'=>$request->token]);
        return response()->json(['token saved successfully.']);
    }

    public function notifyAllUsers($title = 'Welcome', $body = 'Welcome to the system.')
    {
        try{

            $data = [
                'title' => $title,
                'body' => $body,
            ];

            $this->arcadousTestService->notifyUsers($data);

            return json_encode([
                'success' =>'Notifying Users 😁.',
            ]);

        }catch(Exception $e){
            throw  ValidationException::withMessages([$e->getMessage()]);
        }
    }

}
