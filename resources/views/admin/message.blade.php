@extends('layouts.admin.main')
@section('content')
<style>
.main {
	height: 50vh;
	padding: 10px;
}

.chat-log {
	padding: 10px 0 114px;
	height: auto;
	overflow: auto;
}
.chat-log__item {
	background: #fafafa;
	padding: 10px;
	margin: 0 auto 20px;
	max-width: 80%;
	float: left;
	box-shadow: 0 1px 2px rgba(0,0,0,.1);
	clear: both;

}

.chat-log__item.chat-log__item--receiver {
	float: right;
	background: #DCF8C6;
	text-align: right;
	border-radius: 15px 15px 0px 15;
}

.chat-log__item.chat-log__item--sender {
	border-radius: 15px 15px 15px 0;
}

.chat-form {
	bottom: 0;
	width: 100%;
}

.chat-log__author {
	margin: 0 auto .5em;
	font-size: 14px;
	font-weight: bold;
}
@media(max-width:768px){
    .sendButton{
        margin-top:5px;!important
    }
}
</style>
@php
$message_array = array();
@endphp
@foreach($messages as $message)
    @php
    $date = date('d-m-Y', strtotime($message->created_at));
    $message_array[$date][] = $message;
    @endphp
@endforeach
<div class="spacer">
</div>
  <div class="row">
      <div class="col-md-12">
          <div class="main-card mb-3 card">
              <div class="card-header">Chats
                  <div class="btn-actions-pane-right">
                      <div role="group" class="btn-group-sm btn-group">
                          
                      </div>
                  </div>
              </div>
             	<div>
             	<div class="main"  style="overflow: auto;" >
				  <div class="container">
				    <div class="chat-log">
				    
				    @foreach($message_array as $date=> $message)
				      	<div class="text-center">
				    			<div class="d-inline-block text-center bg-success rounded-pill p-1 text-light" style="width:70px;font-size:11px">
				    				{{$date}}
				    			</div>
				    		</div>

				    	@foreach($message as $msg)
					    	@if($msg->flag == 2)
					    	<div class="chat-log__item chat-log__item--receiver">
									<h3 class="chat-log__author">{{$msg->message}}</h3>
									<div class="chat-log__message">{{$receiver->name}} <small>{{date('h:i a', strtotime($msg->created_at))}}</small></div>
								</div>
					      	@else
								<div class="chat-log__item chat-log__item--sender">
						    	<h3 class="chat-log__author">{{$msg->message}}</h3>
						        <div class="chat-log__message">{{$msg->sender->name}} <small>{{date('h:i a', strtotime($msg->created_at))}}</small></div>
						    </div>
					      	@endif
					      	
				    	@endforeach
				    	<div class="clearfix"></div>
				    @endforeach

				    </div>
				  </div>
              </div>
              <div class="d-flex justify-content-end text-right card-footer">
                <div class="chat-form">
				    <div class="container">
				        <div class="row">
				          <div class="col-sm-10 col-xs-8">
				          	<input type="hidden" id="auther" value="{{$receiver->name}}">
				          	<input type="hidden" name="user_id" id="text_to_user_id" value="{{$sender_id}}">
				            <input type="text" class="form-control msger-input" id="" placeholder="Message" />
				          </div>
				          <div class="col-sm-2 col-xs-4 sendButton">
				            <button type="button" class="msger-send-btn btn btn-success btn-block form-control">Send</button>
				          </div>
				        </div>
				    </div>
				  </div>
				</div> 
                
              </div>
          </div>
      </div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.msger-send-btn').click(function(){
		  var dt = new Date();
		  var time = dt.getHours() + ":" + dt.getMinutes();  
		  var textmsg=$('.msger-input').val();
		  var text_to_user_id = $('#text_to_user_id').val();
		  var auther = $('#auther').val();

		   $('.chat-log').append('<div class="chat-log__item chat-log__item--receiver"><h3 class="chat-log__author">'+textmsg+'</h3><div class="chat-log__message">'+auther+' <small>'+time+'</small></div></div>');

		    $.ajax({
		      url:"{{ url('addchat') }}",
		      data:{user_id : text_to_user_id,message:textmsg,flag:2},
		      success:function(data){
		       	$('.msger-input').val('');
		      }
		    });
		}); 
	}); 
</script>

@endsection





