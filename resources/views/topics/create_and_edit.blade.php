@extends('layouts.app')
@section('title','发布新帖')
@section('content')
  @include('layouts._lg_other_header')
  @include('layouts._xs_header')
  <div class="xs-hindd-block d-sm-none"><br><br><br></div>
  <div class="header-color mx-auto mb-0 d-none d-sm-block" style="height: 80px;width: 81.2%;"></div>
  <div class="header-color mx-auto mb-0 xs-hindd-block d-sm-none" style="height: 70px;width: 93%;"></div>
    <div class="topic-create">
      <div class="col-md-10 offset-md-1">
        <div class="card" style="background:  #E5A55D;">
         @include('shared._messages')

            <h2 class="card-header">
              <img src="/images/icon/pen.png" alt="">

              编辑帖子

              发布新帖

            </h2>
          <div class="card-body">
            <form action="" method="" accept-charset="UTF-8">


{{--                              <form action="" method="" accept-charset="UTF-8">--}}
              @include('shared._error')
              <div class="form-group">
                <input class="form-control" type="text" name="title" value="" placeholder="请填写标题" required/>
              </div>
              <div class="form-group">
                <select class="form-control" name="category_id" required>
                  <option value="">请选择分类</option>
                  <option value="" hidden disabled>请选择分类</option>
                </select>
              </div>
              <div class="form-group">
                <textarea name="body" class="form-control" id="editor" rows="6" placeholder="请填入至少三个字符的内容。" required></textarea>
              </div>

              <div class="well well-sm">
                <button type="submit" class="btn btn-dark pr-4 "><i class="far fa-save mr-2" aria-hidden="true"></i> 保存</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <br><br>
    </div>
@endsection
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@endsection
@section('script')
  <script src="{{ asset('js/module.js') }}"></script>
  <script src="{{ asset('js/uploader.js') }}"></script>
  <script src="{{ asset('js/hotkeys.js') }}"></script>
  <script src="{{ asset('js/simditor.js') }}"></script>
  <script>
    $(document).ready(function() {
      var editor = new Simditor({
        textarea: $('#editor'),
        toolbar: [ 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code','|','hr','table','|', 'link', 'image', '|', 'indent', 'outdent', 'alignment'],
        upload: {
          url: '{{ route('topics.upload_image') }}',
          params: {
            _token: '{{ csrf_token() }}'
          },
          fileKey: 'upload_file',
          connectionCount: 3,
          leaveConfirm: '文件上传中，关闭此页面将取消上传。'
        },
        pasteImage: true,
      });
    });
  </script>
@endsection
