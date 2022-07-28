@extends('layouts.admin')

@section('title')
    Кнопка
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
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                       <label for="buttonColor">Цвет кнопки</label>
                       <input type="color" value="{!! $buttonColor !!}" class="form-control" name="buttonColor">
                  </div>
                  
                  <div class="form-group">
                       <label for="buttonTextColor">Цвет текста кнопки</label>
                       <input type="color" value="{!! $buttonTextColor !!}" class="form-control" name="buttonTextColor">
                  </div>
                  
                  <div class="form-group">
                       <label for="buttonText">Текст кнопки</label>
                       <input type="text" value="{!! $buttonText !!}" class="form-control" name="buttonText">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                       <label for="buttonWidth">Ширина</label>
                       <div class="input-group mb-3">
                         <input type="text" value="{!! $buttonWidth !!}" class="form-control" name="buttonWidth">
                         <div class="input-group-append">
                           <span class="input-group-text">px</span>
                         </div>
                       </div>
                  </div>
                  
                  <div class="form-group">
                       <label for="buttonHeight">Высота</label>
                       <div class="input-group mb-3">
                         <input type="text" value="{!! $buttonHeight !!}" class="form-control" name="buttonHeight">
                         <div class="input-group-append">
                           <span class="input-group-text">px</span>
                         </div>
                       </div>
                  </div>
                  
                  <div class="form-group">
                       <label for="buttonRadius">Радиус</label>
                       <input type="range" id="slider" min="0" max="100" value="{!! $buttonRadius !!}" step="1" class="custom-range" name="buttonRadius">
                       <span id="range">{!! $buttonRadius !!}</span> px
                  </div>
                  
                  <div class="form-group">
                       <label for="fontWidth">Толщина шрифта</label>
                       <input type="range" id="slider2" min="100" step="100" max="1000" value="{!! $fontWidth !!}" step="1" class="custom-range" name="fontWidth">
                       <span id="range2">{!! $fontWidth !!}</span>
                  </div>
                  
                  <div class="form-group">
                       <label for="fontSize">Размер шрифта</label>
                       <div class="input-group mb-3">
                         <input type="text" value="{!! $fontSize !!}" class="form-control" name="fontSize">
                         <div class="input-group-append">
                           <span class="input-group-text">px</span>
                         </div>
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
