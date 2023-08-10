<!doctype html>
<html lang="en">
<head>

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


    <style>
        /* ... */
    </style>
</head>
<body>

<div class="container mt-3">
  <div class="row">

  
  <div class="col-sm-4">
  
  @include('add_event')
  </div>
  <div class="col-sm-8">
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
  </div>
  </div>
      
  </div>




<script>
$('#calendar').fullCalendar({
  
  eventRender: function(event, element) {
        element.qtip({
            content: event.title
        });
    }

});
</script>
    
</body>
</html>