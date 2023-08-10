<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Http\Response;
use Calendar;

class FullCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = [];
        $data = Event::all();

        if($data->count()){

           foreach ($data as $key => $value) {
             $events[] = Calendar::event(
                 $value->title,
                 false,
                 new \DateTime($value->s_data),
                 new \DateTime($value->e_data)
             );
           }
        }
       $calendar = Calendar::addEvents($events); 
       
       return view('fullcalendar', compact('calendar','data'));
    }

    public function delete($id)
    {
        Event::findOrFail($id)->delete();
        
        return redirect()->route('booking-calendar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertArr = [ 'title' => $request->title,
        's_date' => $request->s_date,
        'e_date' => $request->e_date
            ];
        $event = Event::insert($insertArr);  

        return  ($event);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
