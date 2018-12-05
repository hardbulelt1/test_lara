@extends('admin.layout')

@section('content')

    <section class="content-header">
        <a href="/admin/news/create" class="btn btn-success">{{ __('messages.add') }}</a>
    </section>


    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ __('messages.news') }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed table-bordered table-hover">
                            <tbody>
                            <tr>
                                <th>{{ __('messages.title') }}</th>
                                <th>{{ __('messages.text') }}</th>
                                <th>{{ __('messages.remove') }}</th>
                            </tr>
                            @if(!empty($data))
                                @foreach($data as $news)

                                        <tr class="warning">
                                            <td>
                                                <a href="/admin/news/{{ $news->id  }}/edit">
                                                 {{ $news->title ?? ''}}
                                                </a>
                                            </td>
                                            <td><?=substr($news->body,0,200) . '...' ?? '' ?></td>
                                        </tr>

                                @endforeach
                                {{ $data->links() }}
                            @endif

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="myModalBox" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Удалить</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    Вы действительно хотите удалить ?
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">

                    <form action="/admin/drivers/delete" method="post">
                        <input type="hidden" name="id" value="">
                        {{ csrf_field() }}
                        <button type="button" class="btn btn-primary" onclick="this.form.submit()">Да</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
