<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function callbackForm(Request $request){
        $this->validate($request, [
            'name'  => 'required',
            'phone' => 'required|regex:/^[0-9\s\-()+\.]+$/'
        ]);

        Mail::send(
            'emails.default', 
            [
                'page'      => $request->input('page'), 
                'action'    => $request->input('action'), 
                'name'      => $request->input('name'), 
                'phone'     => $request->input('phone')
            ], 
            function($message){
                $message
                    ->subject('Заявка с сайта')
                    ->to(array(env('MAIL_TO_ADDRESS'),env('MAIL_TO_ADDRESS2')))
                    ->bcc(env('MAIL_TO_BCC_ADDRESS'));
            }
        );

        return ['status' => 'ok'];
    }
}