<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online DTR</title>
    </head>
    <body>
      <h1>Timesheet</h1>
      <table border="1">
      <tr>
          <th>Name</th>
          <th>Date</th>
          <th>Time IN</th>
          <th>Capture Image IN</th>
          <th>Time OUT</th>
          <th>Capture Image OUT</th>
      </tr>
      @for($i = 0; $i < count($timesheet1); $i++)
          <tr>
              <td>{{ $timesheet1[$i]->first_name }}</td>
              <td>{{ $timesheet1[$i]->date }}</td>
              <td>{{ $timesheet1[$i]->time_in }}</td>
              <td>{{ $timesheet1[$i]->capture_img_in }}</td>
              <td>{{ $timesheet1[$i]->time_out }}</td>
              <td>{{ $timesheet1[$i]->capture_img_out }}</td>
          </tr>
      @endfor
  </table>
    </body>



</html>
