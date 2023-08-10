<div class="card">

<form action="{{route('booking-calendar.store')}}" method="post">
    @csrf

    <div class="card-body">
        <div class="row">

            <div class="col-sm-12">
                <label class="text-uppercase">Event Name:</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Event Name" name="title">
                </div>
            </div>
            <div class="col-sm-12">
                <label class="text-uppercase">Start Data:</label>
                <div class="form-group">
                    <input type="datetime-local" class="form-control" name="s_date">
                </div>
            </div>
            <div class="col-sm-12">
                <label class="text-uppercase">End Date:</label>
                <div class="form-group">
                    <input type="datetime-local" class="form-control" name="e_date">
                </div>
            </div>


        </div>



    </div>

    <div class="mt-2 card-footer">

        <button type="submit" id="booking_btn" class="btn btn-secondary ml-1">Submit</button>
    </div>

    </form>
</div>

<div class="mb-3"></div>


<div class="card">
    <div class="card-body">

        <h5 class="card-title">{{__('Event List')}} </h5>
          
        <div class="table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                
                    <tr>
                        <th>{{__('#SL')}}</th>
                        <th>{{__('Event Title')}}</th>
                        <th>{{__('Start Date')}}</th>
                        <th>{{__('End Date')}}</th>
                        <th>{{__('Action')}}</th>
                
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $sl=1;
                    ?>

                    @foreach($data as $event)
                    <tr>
                        <td>{{$sl++}}</td>
                        <td>{{$event->title}}</td>
                        <td>{{$event->s_date}}</td>
                        <td>{{$event->e_date}}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{route('event-delete', $event->id)}}">{{__('Delete')}}</a>
                        </td>
                
                    </tr>
                    @endforeach
        
                </tbody>
            </table>

        </div>
    </div>
</div>