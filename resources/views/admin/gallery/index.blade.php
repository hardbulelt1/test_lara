@extends('admin.layout')

@section('content')
    <section class="content-header">
        <form enctype="multipart/form-data" method="post" action="/admin/gallery">
            @csrf
            <p><input type="file" name="file">
                <input type="submit" value="Добавить"></p>
        </form>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ __('messages.gallery') }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        @if (!empty($data))
                            @foreach($data as $item)
                               <div class="row col-md-3">
                                   <img width="300" src="/images/{{ $item->path }}">
                                   <form  action="/admin/gallery/{{ $item->id  }}" method="POST">
                                       {{ csrf_field() }}
                                       @method('DELETE')
                                       <i class="fa fa-trash-o"></i>
                                   </form>

                               </div>
                            @endforeach
                                {{ $data->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
