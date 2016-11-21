@extends('layouts.app')
@section('content')
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
<style type="text/css">
    #messages{
        border: 1px solid black;
        height: 500px;
        margin-bottom: 8px;
        overflow: scroll;
        padding: 5px;
    }
</style>

            <div class="panel panel-default">
                <div class="panel-heading">Device Connect Test</div>
                    <div class="panel-body">
 
                        <div class="row">
                            <div class="col-lg-10" >
                                <div id="messages" ></div>
                            </div>
                        </div>
                    </div>
            </div>
 

@endsection
@section('scripts')
<script src="/js/app.js"></script>
@endsection