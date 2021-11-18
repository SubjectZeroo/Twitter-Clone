<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ProfileForm extends Component
{

    public $username;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $banner;
    public $avatar;
    public $description;

    public function render()
    {
        return view('livewire.profile-form');
    }

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function edit($id)
    {
        $user = User::findOrFail($id);
        // $this->user_id = $user->id;
        $this->name = $user->username;
        $this->username = $user->name;
        $this->email = $user->email;
        $this->name = $user->description;

        // $this->view = 'edit';
    }
}
