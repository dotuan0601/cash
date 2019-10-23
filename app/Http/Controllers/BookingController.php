<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests;
use App\Report;
use App\Salon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->get();
        return view('booking.index', ['bookings' => $bookings]);
    }

    function changeStatus($id = null)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 1 - $booking->status;
        $booking->save();
        return $booking;
    }

    function store(Request $request)
    {

        $reports = Report::where('salon_id', $request->salon_id)->where('scheduled_at', Carbon::createFromFormat('d/m/Y H:i', $request->scheduled_at))->get();
        if (count($reports) > 0) {
            /*
             * TODO: Update report  count, status
             */
            $report = $reports->get(0);
            $report->count = $report->count + 1;
            $salon = Salon::findOrFail($request->salon_id);
            if ($salon->max_slot < $report->count) {
                $report->status = 0;
            }
            $report->save();

            if ($report->status == 1) {
                $booking = new Booking();
                $booking->name = $request->name;
                $booking->scheduled_at = Carbon::createFromFormat('d/m/Y H:i', $request->scheduled_at);
                $booking->phone = $request->phone;
                $booking->coupon = $request->coupon;
                $booking->price = $request->price;
                $booking->salon_id = $request->salon_id;
                $booking->service_id = $request->service_id;
                $booking->service_name = $request->service_name;
                $booking->salon_name = $request->salon_name;
                $booking->save();
                return response()->json([
                    'message' => 'Hẹn gặp bạn tại '.$salon->name .' vào :'.$request->scheduled_at,
                    'code' => 'success'
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Khung giờ này đã hết chỗ. Vui Lòng chọn lại',
                    'code' => 'fail'
                ], 200);
            }

        } else {
            /*
             * new
             */
            $booking = new Booking();
            $booking->name = $request->name;
            $booking->scheduled_at = Carbon::createFromFormat('d/m/Y H:i', $request->scheduled_at);
            $booking->phone = $request->phone;
            $booking->coupon = $request->coupon;
            $booking->price = $request->price;
            $booking->salon_id = $request->salon_id;
            $booking->service_id = $request->service_id;
            $booking->service_name = $request->service_name;
            $booking->salon_name = $request->salon_name;
            $booking->save();

            $report = new Report();
            $report->salon_id = $booking->salon_id;
            $report->scheduled_at = $booking->scheduled_at;
            $report->status = 1;
            $report->count = 1;
            $salon = Salon::findOrFail($booking->salon_id);
            if ($salon->max_slot <= $report->count) {
                $report->status = 0;
            }
            $report->save();
            return response()->json([
                'message' => 'Hẹn gặp bạn tại '.$salon->name .' vào :'.$request->scheduled_at,
                'code' => 'success'
            ], 200);
        }

    }
}
