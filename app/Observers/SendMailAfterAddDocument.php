<?php

namespace App\Observers;

use App\Models\DocumentUser;
use Illuminate\Support\Facades\Mail;

class SendMailAfterAddDocument
{
    /**
     * @param DocumentUser $documentUser
     * @return void
     */
    public function created(DocumentUser $documentUser)
    {
        Mail::raw('WOOOOW! Document is created', function ($message) use ($documentUser) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->to($documentUser->users->email);
            $message->subject('From friend');
        });
    }

    /**
     * Handle the DocumentUser "updated" event.
     *
     * @param  \App\Models\DocumentUser  $documentUser
     * @return void
     */
    public function updated(DocumentUser $documentUser)
    {
        //
    }

    /**
     * Handle the DocumentUser "deleted" event.
     *
     * @param  \App\Models\DocumentUser  $documentUser
     * @return void
     */
    public function deleted(DocumentUser $documentUser)
    {
        //
    }

    /**
     * Handle the DocumentUser "restored" event.
     *
     * @param  \App\Models\DocumentUser  $documentUser
     * @return void
     */
    public function restored(DocumentUser $documentUser)
    {
        //
    }

    /**
     * Handle the DocumentUser "force deleted" event.
     *
     * @param  \App\Models\DocumentUser  $documentUser
     * @return void
     */
    public function forceDeleted(DocumentUser $documentUser)
    {
        //
    }
}
