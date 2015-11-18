<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Group;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class UserController
 * @package App\Http\Controllers\Admin
 */
class UserController extends Controller
{
    /**
     * Default view when managing users through the admin interface
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = array();

        foreach (User::with('group')->get() as $user) {
            array_push($users, $user);
        }

        return view('admin.users.index', compact('users'));
    }

    /**
     * Returns a view for editing various details about a specific user
     *
     * @param $id Node ID to match when editing a user
     * @return $this
     */
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

    /**
     * Updates the specified User node in the graph
     *
     * @param $id Node ID to match when saving a User
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        // Get the request params
        $userUpdate = Request::all();

        // Find the matching User node
        $user = User::find($id);

        // Find the matching Group with which this User is associated
        $newGroup = Group::find($userUpdate['group']);

        // If we've changed the user group, then detach the existing group
        // relation and create a new relation in its place.
        if ($newGroup['id'] != $user->group->id) {
            $user->group()->detach();
            $user->group()->save($newGroup);
        }

        // Update the User details
        $user->update($userUpdate);

        return redirect()
            ->action('Admin\UserController@index')
            ->with('status', 'User has been updated.');
    }

    /**
     * Does the action of storing the new user node
     */
    public function store()
    {

    }

    /**
     * Returns a view for creating a user node
     */
    public function create()
    {

    }

    /**
     * Returns a view with all of the user's details
     */
    public function show($id)
    {
        $user = User::find($id);


        return view('admin.users.show', compact('user'));
    }

    /**
     * Destroys the user node. -probably- not relevant for this model
     */
    public function destroy()
    {

    }
}
