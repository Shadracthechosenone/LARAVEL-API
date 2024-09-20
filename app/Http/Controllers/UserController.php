<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Retourner la liste des utilisateurs.
     *
    //  * @return JsonResponse
     */
    public function getUsers(): JsonResponse
    {
        $users = DB::select('select * from utilisateur where id >= ?', [1]);
    
    
        return response()->json( $users, 200,);
    }
    
}
