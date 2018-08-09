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

                    <table border="1">
                    <tr>
                        <th>Date</th>
                        <th>Time IN</th>
                        <th>Time OUT</th>
                    </tr>
                  </tr>
      @for($i = 0; $i < count($timeLogs); $i++)
          <tr>
              <td>{{ $timeLogs[$i]->date }}</td>
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
