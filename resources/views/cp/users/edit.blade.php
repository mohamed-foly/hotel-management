@extends('cp.layouts.app')

@section('content')
<div class="content">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('libs/theme/plugins/select2/css/select2.min.css') }}">
    <script src="{{ asset('libs/theme/plugins/select2/js/select2.full.min.js') }}"></script>
    @include('common.errors')
    @include('flash::message')
    <div class="card card-primary">
        <div class="card-header">
            <ul class="nav nav-tabs" id="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tabs-user" data-toggle="pill" href="#user-tab" role="tab" aria-controls="user-tab" aria-selected="true">@lang('models/users.singular')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tabs-permissions" data-toggle="pill" href="#permissions-tab" role="tab" aria-controls="permissions-tab" aria-selected="false">@lang('models/users.permissions')</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="tabsContent">
                <div class="tab-pane fade show active" id="user-tab" role="tabpanel" aria-labelledby="tabs-user">
                    <div class="row" style="padding-left: 20px">
                        {!! Form::model($user, ['route' => ['cp.users.update', $user->id], 'method' => 'patch']) !!}
                        <div class="row">
                            @include('cp.users.fields')
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="tab-pane fade" id="permissions-tab" role="tabpanel" aria-labelledby="tabs-permissions">
                    <p style="color: red;">
                        * لم يتم الانتهاء من الاعمال فى الجزئية الحالية وهي للعرض فقط
                    </p>
                    {!! Form::model($user, ['route' => ['cp.users.update', $user->id], 'method' => 'patch']) !!}
                    <div class="form-group">
                        <label>Role</label>
                        <select name="permission_role[]" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                          <option>مستخدم</option>
                          <option>محاسب</option>
                          <option>مدير مباشر</option>
                          <option>مدير عام</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Permission</label>
                        <select name="permissions[]" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                          <option>اضافة</option>
                          <option>عرض</option>
                          <option>تعديل</option>
                          <option>حذف</option>
                        </select>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
        <script>
            $(window).on('load',function () {
                $('.select2').select2()
            });
        </script>
    </div>
</div>
@endsection