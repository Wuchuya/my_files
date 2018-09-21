@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">登入</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="post" accept-charset="utf-8">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li><br>
                            @endforeach
                        </ul>
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <fieldset>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="邮箱">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password"  class="form-control" placeholder="密码">
                            </div>
                            <button type="submit" class="btn btn-large btn-success btn-block">登入</button>
                        </fieldset>
                    </form>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('jq/jquery3.3.1.min.js')}}"></script>
    <script type="text/javascript">
        $(document).redy(function () {
            $('.btn').click(function () {
                $.ajax({
                    url:"",
                    type:"post",
                    data:"",
                    dataType:"json",
                    success:function (data) {

                    }
                })
            })
        });
    </script>
@endsection