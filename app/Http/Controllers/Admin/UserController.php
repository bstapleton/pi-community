<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Group;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index()
    {
        $users = array();

        foreach (User::with('group')->get() as $user) {
            array_push($users, $user);
        }

        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $groups = Group::all(['id', 'name']);
        $groupList = array();

        foreach ($groups as $group) {
            $groupList[$group->id] = $group->name;
        }

        return view('admin.users.edit', compact('user'))->with('groupList', $groupList);
    }

    public function update($id)
    {
        $userUpdate = Request::all();
        $user = User::find($id);
        $user->update($userUpdate);

        return redirect()->back();
    }

    public function store()
    {

    }

    public function create()
    {

    }

    public function show()
    {

    }

    public function destroy()
    {

    }
}
