@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Air
          <a class="btn btn-success float-xs-right" href="{{ route('airs.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($airs->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Co2</th> <th>Voc</th> <th>Tem</th> <th>Hum</th> <th>Pm25</th> <th>Ch2o</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($airs as $air)
              <tr>
                <td class="text-xs-center"><strong>{{$air->id}}</strong></td>

                <td>{{$air->co2}}</td> <td>{{$air->voc}}</td> <td>{{$air->tem}}</td> <td>{{$air->hum}}</td> <td>{{$air->pm25}}</td> <td>{{$air->ch2o}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('airs.show', $air->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('airs.edit', $air->id) }}">
                    E
                  </a>

                  <form action="{{ route('airs.destroy', $air->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $airs->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
