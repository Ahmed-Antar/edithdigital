@extends('app')

@section('body')
<div class="container">
    <div class="page-header">
        <input type="hidden" id="user_name" value="{{ auth()->user()->name }}">
        <input type="hidden" id="email_user" value="{{ auth()->user()->email }}">
        <button class="linkModel btn btn-default" value="model1">Model 1</button>
        <button class="linkModel btn btn-default" value="model2">Model 2</button>
    </div>
    <div class="col-lg-3 wrapper" style="background-color: #fff; ">
        <form method="post" action="{{ url('/saveCover') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Adress:</label>
                <input class="form-control" name="adress" id="_adress">
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <input class="form-control" name="num_tel" id="_tel">
            </div>
            <div class="form-group">
                <label>Company name:</label>
                <input class="form-control" name="company_name" id="_companie">
            </div>
            <div class="form-group">
                <label>Receiver:</label>
                <input class="form-control" name="receiver" id="_dear">
            </div>
            <div class="form-group">
                <label>Position:</label>
                <input class="form-control" name="post" id="_post">
            </div>
            <div>
                <input type="hidden" name="model" id="model" value="model_1">
                <button class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
    <div class="col-lg-9" id="modelBody" style="padding: 0px; padding-left: 20px;">
        @include('models.model2')
    </div>
</div>
@endsection

@section('script')

    <script>
    $('.linkModel').click(function () {
        var user_name = $('#user_name').val();
        var user_email = $('#email_user').val();
        //alert($(this).val());
        $('#modelBody').html('');
        $('#model').val($(this).val());
        $('#modelBody').load('../resources/views/models/'+$(this).val()+'.blade.php', function(){
            $('.user_name').html(user_name);
            $('#user_email').html(user_email);
            $('#adress').html($('#_adress').val());
            $('#companie_name').html($('#_companie').val());
            $('#dear').html($('#_dear').val());
            $('#tel').html($('#_tel').val());
            $('#post').html($('#_post').val());
        });

    });
    </script>

@endsection
