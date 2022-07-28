@extends('layouts.admin')

@section('title')
    Фон
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
             <form role="form" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="card-body">
                  <div class="form-group">
                      <img class="form-control" style="height: 100%;" src="/images/background/{!! $background !!}">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Изображение</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img" id="img">
                        <label class="custom-file-label" for="img">Выберите файл</label>
                      </div>
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
