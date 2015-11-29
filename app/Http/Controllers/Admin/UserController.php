<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Group;
use App\Country;
use App\Helpers;
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
     * @param $name Node 'name' label to match when editing a user
     * @return $this
     */
    public function edit($name)
    {
        $user = User::whereName($name)->first();

        $groups = Group::all(['id', 'name']);
        $groupList = array();

        foreach ($groups as $group) {
            $groupList[$group->id] = $group->name;
        }

        $countries = Country::all(['id', 'name']);
        $countryList = array();

        foreach ($countries as $country) {
            $countryList[$country->id] = $country->name;
        }

        return view('admin.users.edit', compact('user'))
            ->with('groupList', $groupList)
            ->with('countryList', $countryList);
    }

    /**
     * Updates the specified User node in the graph
     *
     * @param $name Node 'name' label to match when saving a User
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($name)
    {
        // Get the request params
        $userUpdate = Request::all();

        // Find the matching User node
        $user = User::whereName($name)->first();

        // Find the matching Group with which this User is associated
        $newGroup = Group::find($userUpdate['group']);

        // If we've changed the user group, then detach the existing group
        // relation and create a new relation in its place.
        if ($newGroup['id'] != $user->group->id) {
            $user->group()->detach();
            $user->group()->save($newGroup);
        }

        // Find the matching Country with which this User is associated
        $newCountry = Country::find($userUpdate['country']);

        // Detach the previous nationality relation, and save the new one
        // TODO: don't detach and save unless it's changed!
        $user->country()->detach();
        $user->country()->save($newCountry);

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
     *
     * @param $name Node 'name' label to match when showing a User
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($name)
    {
        $user = User::whereName($name)->first();

        // TODO: This returns a relationship, which is handy, but I cannot fetch the name, only the ID - attempts to modify this behaviour have been unsuccessful thus far.
        $country = $user->country();

        return view('admin.users.show', compact('user'))->with('country', $country);
    }

    /**
     * Destroys the user node. -probably- not relevant for the user model
     */
    public function destroy()
    {

    }
}
