<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class TweetForm extends Component
{
    public $body;
    public $successMessage;

    protected $rules = [
        'body' => 'required|max:255'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {

        $tweet = $this->validate();

        $tweet['user_id'] = auth()->id();
        $tweet['body'] = $this->body;

        sleep(1);

        Tweet::create([
            'user_id' => $tweet['user_id'],
            'body' => $tweet['body']
        ]);

        // $this->successMessage = 'Tweet Published';
        $this->resetForm();
        return redirect()->route('home');
    }

    private function resetForm()
    {
        $this->body = '';
    }

    public function render()
    {
        return view('livewire.tweet-form');
    }
}
