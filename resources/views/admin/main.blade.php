@extends('layouts.admin')

@section('title')
    Панель управления
@endsection

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{!! $count !!}</h3>

                <p>Всего предсказаний</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
      </div>
    </section>
@endsection
