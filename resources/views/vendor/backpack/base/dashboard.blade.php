@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
            </div>
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Thông báo</div>
                </div>

                <div class="box-body">
                @if($expire_date_count>0)
                        <div class="alert alert-danger">
                            Có {{$expire_date_count}} chi tiết mượn sách bị quá hạn.
                            <a href="{{url(config('backpack.base.route_prefix'))}}/borrow_detail">Go to Chi Tiết Sách Mượn</a>

                        </div>
                @endif
                @if($unreturn_date_count>0)
                        <div class="alert alert-danger">
                            Có {{$unreturn_date_count}} chi tiết mượn sách không trả sách đúng hạn.
                            <a href="{{url(config('backpack.base.route_prefix'))}}/borrow_detail">Go to Chi Tiết Sách Mượn</a>
                        </div>
                @endif
                @if($expire_date_count==0&&$unreturn_date_count==0)
                        Không có thông báo nào
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection
