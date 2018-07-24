@extends('layouts.app')

@section('goBack')
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="{{ url()->previous() }}"><i class="material-icons">arrow_back</i></a></li>
    </ul>
@endsection

@section('content')
<div class="container row">
    <div class="col  s3 m2 l3"></div>
    <div class="col s12 m8 l6 center">
        <div class="card">
            <div class="card-image">
                <img src="{{ $plant->picture }}" height="300" alt="">
            </div>
            <div class="card-content">
                {!! Form::model($plant, ['url' => ['/Update', $plant->id], 'files' => true]) !!}
                <div class="row input-field">
                    <div class="col s6">
                        @if ($errors->has('name'))
                            {!! Form::label('name', 'Geef een naam voor de plant'); !!}
                        @endif
                        {!! Form::text('name'); !!}
                    </div>
                    <div class="col s6">
                        @if ($errors->has('latinName'))
                            {!! Form::label('latinName', 'Geef een latijnse naam voor de plant'); !!}
                        @endif
                        {!! Form::text('latinName'); !!}
                    </div>
                </div>
                <div class="row file-field input-field">
                    {!! Form::file('picture') !!}
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload een foto">
                      </div>
                </div>
                <div class="row input-field">
                    <div class="col s6">
                        @if ($errors->has('type'))
                            {!! Form::label('type', 'Kies een type'); !!}
                        @endif
                        {!! Form::select('type', ['Bloem' => 'Bloem', 'Plant of struik' => 'Plant of struik', 'Boom' => 'Boom', 'Paddenstoel' => 'Paddenstoel', 'Zwam' => 'Zwam', 'NVT' => 'NVT']) !!}
                    </div>
                    <div class="col s6">
                        @if ($errors->has('moisture'))
                            {!! Form::label('moisture', 'Hoeveel water heeft de plant nodig'); !!}
                        @endif
                        {!! Form::select('moisture', ['Weinig' => 'Weinig', 'Matig' => 'Matig', 'Veel' => 'Veel', 'NVT' => 'NVT']) !!}
                    </div>
                    <div class="col s12">
                        @if ($errors->has('light'))
                            {!! Form::label('light', 'Hoeveel licht heeft de plant nodig'); !!}
                        @endif
                        {!! Form::select('light', ['Schaduw' => 'Schaduw', 'Half schaduw' => 'Half schaduw', 'Zon' => 'Zon', 'Zon of half schaduw' => 'Zon of half schaduw', 'Half schaduw of schaduw' => 'Half schaduw of schaduw', 'Zon halfschaduw of schaduw' => 'Zon halfschaduw of schaduw']) !!}
                    </div>
                </div>
                <div class="row input-field">
                    <div class="col s6">
                        @if ($errors->has('winterHard'))
                            {!! Form::label('winterHard', 'Hoe goed kan de plant tegen de kou'); !!}
                        @endif
                        {!! Form::selectRange('winterHard', 0, -10); !!}
                    </div>
                    <div class="col s6">
                        @if ($errors->has('height'))
                            {!! Form::label('height', 'Hoe groot is de plant'); !!}
                        @endif
                        {!! Form::selectRange('height', 0, 5); !!}
                    </div>
                </div>
                <div class="row input-field">
                    <div class="col s12">
                        @if ($errors->has('flowers'))
                            {!! Form::label('flowers', 'Zeg iets over de bloemen'); !!}
                        @endif
                        {!! Form::textarea('flowers', null, ['class' => 'materialize-textarea']) !!}
                    </div>
                </div>
                <div class="row input-field">
                    <div class="col s12">
                        @if ($errors->has('description'))
                            {!! Form::label('description', 'Beschrijving over de plant'); !!}
                        @endif
                        {!! Form::textarea('description', null, ['placeholder' => 'Beschrijving', 'class' => 'materialize-textarea']) !!}
                    </div>
                </div>
                <div class="row input-field">
                   <div class="col s6">
                      @if ($errors->has('groundType'))
                        {!! Form::label('groundType', 'Zeg iets over het grond type'); !!}
                     @endif
                     {!! Form::textarea('groundType', null, ['placeholder' => 'grond type', 'class' => 'materialize-textarea']) !!}
                  </div>
                  <div class="col s6">
                     @if ($errors->has('edible'))
                       {!! Form::label('edible', 'Is de plant eetbaar?'); !!}
                    @endif
                    {!! Form::select('edible', ['Ja' => 'Ja', 'Nee' => 'Nee'], null, ['placeholder' => 'eetbaar']); !!}
                 </div>
              </div>
              <div class="row input-field">
                 <div class="col s6">
                    @if ($errors->has('dealer'))
                      {!! Form::label('dealer', 'Waar is de plant aangekocht geweest?'); !!}
                   @endif
                   {!! Form::textarea('dealer', null, ['placeholder' => 'Verkoper', 'class' => 'materialize-textarea']) !!}
                </div>
                <div class="col s6">
                   @if ($errors->has('datePurchase'))
                     {!! Form::label('datePurchase', 'Zeg iets over de vruchten'); !!}
                  @endif
                  {!! Form::date('datePurchase', \Carbon\Carbon::now()) !!}
               </div>
            </div>
            <div class="row input-field">
               <div class="col s12">
                  @if ($errors->has('link'))
                    {!! Form::label('link', 'Geef een link naar de site'); !!}
                 @endif
                 {!! Form::text('link', null, ['placeholder' => 'Link naar website', 'class' => 'materialize-textarea']) !!}
              </div>
           </div>
            </div>
            <div class="card-action">
                <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Update
                    <i class="material-icons right">send</i>
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
