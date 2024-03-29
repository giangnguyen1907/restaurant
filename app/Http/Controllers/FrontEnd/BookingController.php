<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Booking;
use App\Models\Contact;
use Carbon\Carbon;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'seats' => 'required',
                'booking_date' => 'required'
            ]);
            $params = $request->all();
            $time_string = $request->get('booking_time');
            // Chuyển đổi thành thời gian Unix
            $timestamp = strtotime($time_string);
            // Định dạng lại theo định dạng của MySQL
            $mysql_time = date("H:i:s", $timestamp);
            $params['booking_time'] = $mysql_time;
          // Chuyển đổi định dạng ngày
            $mysql_date = date("d-m-Y", strtotime($request->get('booking_date')));
            $date = DateTime::createFromFormat('d/m/Y', $request->get('booking_date'));
             $params['booking_date']= $date->format('Y-m-d');

            $params['is_type'] = "booking";

            $booking = Contact::create($params);

            // if (isset($this->web_information->information->email)) {
            //     $email = $this->web_information->information->email;
            //     Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($email) {
            //         $message->to($email);
            //         $message->subject(__('You received a new appointment from the system'));
            //     });
            // }

            $messageResult = '';
            $messageResult = $this->web_information->information->notice_advise ?? __('Booking successfull!');
            echo "<script>window.location.href = '/';alert('Booking successfull!');</script>";
            // return $this->sendResponse($booking, $messageResult);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
