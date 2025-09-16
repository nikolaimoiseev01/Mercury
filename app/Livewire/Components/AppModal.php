<?php

namespace App\Livewire\Components;

use App\Models\Contact;
use App\Notifications\TelegramNotification;
use Livewire\Component;
use NotificationChannels\Telegram\TelegramMessage;

class AppModal extends Component
{
    public $object_type;
    public $area;
    public $description;
    public $fio;
    public $telephone;
    public $email;
    public $contact_type;
    public $sent = false;

    public function render()
    {
        return view('livewire.components.app-modal');
    }

    public function save()
    {
        Contact::create([
            'object_type' => $this->object_type,
            'area' => $this->area,
            'description' => $this->description,
            'fio' => $this->fio,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'contact_type' => $this->contact_type,
        ]);
        \Illuminate\Support\Facades\Notification::route('telegram', '-4810647595')
            ->notify(new TelegramNotification());
        $this->sent = true;
    }
}
