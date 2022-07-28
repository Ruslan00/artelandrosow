@extends('layouts.admin')

@section('title')
    Приветствие
@endsection

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-12">
          @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            
            <i class="icon fas fa-check"></i> Данные успешно сохранены
          </div>
          @endif
          <div class="card">
             <form role="form" method="post">
                {!! csrf_field() !!}
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-check">
                      @if ($greetingCheck == 1)
                      <input type="checkbox" checked class="form-check-input" id="greetingCheck" name="greetingCheck">
                      <label class="form-check-label" for="exampleCheck1">Показывать приветствие</label>
                      @else
                      <input type="checkbox"  class="form-check-input" name="greetingCheck" id="greetingCheck">
                      <label class="form-check-label" for="exampleCheck1">Показывать приветствие</label>
                      @endif
                   </div>
                   </div>
                      <div class="form-group">
                        <label for="greetingTitle">Заголовок</label>
                        <input type="text" class="form-control" name="greetingTitle" placeholder="Введите заголовое" value="{!! $greetingTitle !!}">
                      </div>
                      
                      <div class="form-group">
                        <label for="greetingText">Текст</label>
                        <textarea class="form-control" name="greetingText" id="greetingText" placeholder="Введите текст">{{ $greetingText }}</textarea>
                      </div>
                  </div>
                </div>
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
             </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
       </div>
          
    </section>
@endsection
