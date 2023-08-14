<?php

namespace App\Http\Controllers;

use App\Models\Subcounty;
use App\Models\User;
use Illuminate\Http\Request;

class SubcountyController extends Controller
{

    public  function getUsers() {
        return User::rightjoin('subcounties', 'users.sub_county_id', 'subcounties.id')
            ->select('users.*', 'subcounties.name as Subcounty_name')
            ->get();
    }

    public function getUser(Request $request)
    {

        $id = $request->input('id');
        $name = $request->input('name');


        return User::join('subcounties', 'users.sub_county_id', 'subcounties.id')
            ->select('users.*')
            ->where('subcounties.id', $id)
            ->get();
    }

    public function getSubCountyName(Request $request) {
        $id = $request->input('id');
        return User::find($id)->sub_county;
        return Subcounty::find($id)->users;

    }

    public function getUserSubCounty(Request $request) {
        $user_id = $request->input('user_id');

        return User::find($user_id)->town->sub_county->name;
    }

}
