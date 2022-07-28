@extends('layouts.admin')

@section('title')
    Редактирование предсказания
@endsection

@section('content')
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" name="title" placeholder="Введите заголовое" value="{!! $post['title'] !!}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Текст</label>
                    <textarea class="form-control" name="text" id="text" placeholder="Введите текст">{{ $post['text'] }}</textarea>
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
                  <div class="form-group">
                    <img class="form-control" style="height: 100%;" src="/images/origin/{!! $post['img'] !!}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
