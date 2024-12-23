@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        Sửa
        <small>{{$slide->name}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Slide</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>
    <br>
    <div class="box-body" style="width: 1500px;">
	    	@if(count($errors)>0)
	    		<div class="alert alert-danger">
	    			@foreach($errors->all() as $err)
	    				{{$err}}<br>
	    			@endforeach
	    		</div>
	    	@endif

	    	@if(session('thongbao'))
	    		<div class="alert alert-success">
	    			{{session('thongbao')}}
	    		</div>
	    	@endif
            <form role="form" action="admin/slide/edit/{{$slide->id}}" method="post">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tên Slide</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" value="{{$slide->name}}">
                </div>
                 <div class="form-group">
                  <label>Link</label>
                  <input type="text" name="link" class="form-control" placeholder="Nhập link" value="{{$slide->link}}">
                </div>
                <div class="form-group">
                  <label>ảnh slide</label>
                  <p><img src="source/image/slide/{{$slide->image}}" width="100px" height="50px"></p>
                  <input type="file" name="img">
                </div>
                <div class="form-group">
                  <label>Mô Tả</label>
                  <textarea id="editor1" class="form-control" name="des" rows="3" placeholder="Mô tả">{{$slide->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
     		</form>
     </div>
@endsection