@extends('admin.layout')

@section('content')
    <script type="text/javascript" src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
    <section class="content">
        @if (!empty(session('error')))

            <div class="alert alert-danger">
                <ul>
                    <li>{{session('error') }}</li>
                </ul>
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $data->title ?? 'Новая новость'  }}</h3>
                    </div>
                    <form enctype="multipart/form-data" method="POST" action="{{ $action }}">
                        {{ csrf_field() }}
                        @method($method)
                        <div class="box-body">
                            <div class="form-group">
                                <label>Заголовок:</label>
                                <input required="required"  class="form-control phone"  placeholder="Новая новость" type="text" name="title" value="{{ $data->title ?? ''  }}">
                            </div>
                            <div class="form-group">
                                <textarea id="block_text" class="form-control" name="body" rows="5"
                                          placeholder="Содержимое">{{ $data->body ?? ''  }}</textarea>

                                <script type="text/javascript">
                                    var ck = CKEDITOR.replace('body');

                                    ck.on('instanceReady', function (e) {
                                        var editor = e.editor;
                                        editor.setReadOnly(false);
                                    });
                                </script>
                            </div>

                        </div>


                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
