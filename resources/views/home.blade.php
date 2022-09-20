@extends('layout/main')

@section('content-main')
  <div class="container">
    <div class="row">
      @foreach ($trains as $train)  
      <div class="col-4">
        <div class="card m-5" style="width: 22rem">
          <div class="card-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-8">
                  <h5 class="card-title">{{$train['azienda']}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Da: <strong>{{$train['stazione_di_partenza']}}</strong> a: <strong>{{$train['stazione_di_arrivo']}}</strong></h6>
                  <div class="card-text">
                    <span>Cod Treno: {{$train['codice_treno']}}</span><br/>
                    <span> Numero Carrozze: {{$train['numero_carrozze']}}</span>
                  </div>
                </div>
                <div class="col" style="font-size: 12px">
                  <p>
                    <span>partenza:</span><br/>
                    <span>{{$train['orario_di_partenza']}}</span>
                  </p>
                  <span>arrivo:</span><br/>
                  <span>{{$train['orario_di_arrivo']}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
      @endforeach
    </div>
  </div>
@endsection