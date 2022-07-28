@extends('layouts.admin')

@section('title')
    Предсказания
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
            <div class="card-header">
              <h3 class="card-title">
              	<a href="post-add" class="btn btn-sm btn-success">Добавить</a>
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                <thead>
                  <tr role="row">
		          <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Заголовок</th>
		          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Текст</th>
		          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Изображение</th>
		          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Действия</th>
                  </tr>
                </thead>
                <tbody>
                @if (count($posts) == 0)
		    <tr role="row" class="odd">
		          <td tabindex="0" colspan="4" class="sorting_1">Ппедсказания не найдены</td>
		    </tr>
		@else
		    @foreach ($posts as $post)
			 <tr role="row" class="odd">
			  <td tabindex="0" class="sorting_1">{{ $post->title }}</td>
			  <td>{{ $post->text }}</td>
			  <td>
			      <img src="/images/thumbnail/{{ $post->img }}" />
			  
			  <td>
			    <a href="post-del/{{ $post->id }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
			    <a href="post-edit/{{ $post->id }}" class="btn btn-sm btn-success"><i class="fas fa-pencil"></i></a>
			  </td>
			</tr>   
		    @endforeach
		@endif
                
                </tbody>
              </table></div></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
    </section>
@endsection
