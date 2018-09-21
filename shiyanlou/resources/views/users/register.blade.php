@extends('layouts.main')
@section('content')
   {{-- <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">欢迎注册</h3>
                </div>
                <div class="panel-body">
                    <form method="post"  accept-charset="utf-8">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li><br>
                            @endforeach
                        </ul>
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="用户名">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="邮箱">
                            </div>
                            <div class="form-group">
                                <input  type="password" name="password" class="form-control" placeholder="密码">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="确认密码">
                            </div>
                            <button class="btn btn-large btn-success btn-block" type="button" name="register">现在注册</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript" src="{{asset('jq/jquery3.3.1.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.btn').click(function () {
                    /*var er=$('form').serialize();
                    console.log(er);*/
                    $.ajax({
                        url:"{{url('admin/Users')}}",
                        type:"post",
                        data:$('form').serialize(),
                        dataType:"json",
                        success:function (data) {
                            if (data.code==1){

                                location.href=data.url;
                            } else{
                                alert(data.msg)
                            }
                        }
                    })
                })
            })
        </script>
@endsection

