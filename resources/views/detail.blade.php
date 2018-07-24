@extends('layouts.app')

@section('goBack')
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="{{ url('/') }}"><i class="material-icons">arrow_back</i></a></li>
    </ul>
@endsection

@section('edit')
    @auth
        @if ($user->name === 'Admin')
            <li><a onclick="return confirm('Ben je zeker dat je dit item wil verwijderen?')" class="tooltipped" data-position="bottom" data-tooltip="Plant verwijderen" href="{{ url('/Delete') }}/{{ $plant->id }}"><i class="material-icons">delete</i></a></li>
            <li><a class="tooltipped" data-position="bottom" data-tooltip="Plant bewerken" href="{{ url('/Edit') }}/{{ $plant->id }}"><i class="material-icons">edit</i></a></li>
        @endif
    @endauth
@endsection

@section('sidebar')
    @auth
        @if ($user->name === 'Admin')
            <li><a href="{{ url('/Edit') }}/{{ $plant->id }}">Edit</a></li>
            <li><a href="{{ url('/Delete') }}/{{ $plant->id }}">Delete</a></li>
        @endif
    @endauth
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 l5">
                <img class="materialboxed col s12 m12 l12"src="{{ $plant->picture }}">
            </div>
            <div class="col s12 m6 l7">
                <h5>{{ $plant->name }} ({{ $plant->latinName }})</h5>
                <p>{{ $plant->type }} | {{ $plant->moisture }} | {{ $plant->light }} | {{ $plant->height }}m</p>
                <p>{{ $plant->description }}</p>

            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
               <h5>Extra info</h5>
               <p>Grond type: {{ $plant->groundType }}
               <br>Winterhard: {{ $plant->winterHard }}°C
               <br>eetbaar: {{ $plant->edible }}
               <br>Verkoper: {{ $plant->dealer }}
               <br>Datum aankoop: {{ $plant->datePurchase }}
               <br><a target="_blank" href="{{ $plant->link }}">Extra info</a></p>
            </div>
            <div class="col s12 m6 l6">
               <h5>Bloemen</h5>
               <p>{{ $plant->flowers }}</p>
            </div>
        </div>
    </div>
@endsection
