   @php
   use App\Models\User;
   @endphp
   @foreach($specchats as $chat)
     @if($chat->user_id == $user_id)
    <div class="msg right-msg">
     <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">Me</div>
          <div class="msg-info-time">12:46</div>
        </div>

        <div class="msg-text">
          {{$chat->message}}
        </div>
      </div>
    </div>
    @else
    <div class="msg left-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)">         
       </div>

      <div class="msg-bubble">
        <div class="msg-info">
          @php
           $username = User::where('id',$chat->user_id)->first();
            if(isset($username))
            {
              $fetchname=$username->name;
            }
            else
            {
              $fetchname='';
            }
          @endphp
          <div class="msg-info-name">{{$fetchname}}</div>
          <div class="msg-info-time">12:45</div>
        </div>

        <div class="msg-text">
         {{$chat->message}}
        </div>
      </div>
    </div>
    @endif
    @endforeach