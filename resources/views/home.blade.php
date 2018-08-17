@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Timesheet</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <table class="table">
                  <thead>
                    <tr>
                        <!--<th scope="col">Day</th>-->
                        <th scope="col">Date</th>
                        <th scope="col">Time IN</th>
                        <th scope="col">Time OUT</th>
                    </tr>
                  </thead>
      @for($i = 0; $i < count($timeLogs); $i++)
          <tr>
              <!--<td>{{ Carbon\Carbon::parse($timeLogs[$i]->date)->format('l') }}</td>-->
              <td>{{ Carbon\Carbon::parse($timeLogs[$i]->date)->format('d-m-Y') }}</td>
              <td>{{ $timeLogs[$i]->time_in }}</td>
              <td>{{ $timeLogs[$i]->time_out }}</td>
          </tr>
      @endfor
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
