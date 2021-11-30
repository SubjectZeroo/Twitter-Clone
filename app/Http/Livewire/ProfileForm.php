<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileForm extends Component
{
    public $userId;
    public $username;
    public $name;
    public $email;
    public $banner;
    public $avatar;
    public $description;


    protected $rules = [
        'username' => 'required',
        'name' => 'required',
        'avatar' => 'nullable',
        'banner' => 'nullable',
        'email' => 'required|email',
        'description' => 'nullable|max:255'
    ];

    public function mount()
    {
        $this->userId = Auth()->user()->id;
        $user = User::findOrFail($this->userId);
        $this->username =  $user->username;
        $this->name =  $user->name;
        // $this->avatar =  $user->avatar;
        // $this->banner =  $user->banner;
        $this->email =  $user->email;
        $this->description =  $user->description;
    }

    public function save()
    {

        $user = $this->validate();

        $user['username'] = $this->username;
        $user['name'] = $this->name;
        $user['avatar'] = $this->avatar;
        $user['banner'] = $this->banner;
        $user['email'] = $this->email;
        $user['description'] = $this->description;

        sleep(1);

        User::find($this->userId)->update([
            'username' =>  $user['username'],
            'name' => $user['name'],
            'avatar' => $user['avatar'],
            'banner' => $user['banner'],
            'email' => $user['email'],
            'description' => $user['description']

        ]);
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.profile-form');
    }
}
