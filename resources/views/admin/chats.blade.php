@extends('layouts.admin.main')
@section('content')

<style>
    .clearbtn{
    height:40px;!important
    color:white;!important
    background-color:#6c757d;!important
    padding:4px 8px;
    border-radius:5px;
    width:120px;
}

 .clearbtn a{
    text-decoration: none;
    color:white;
}
</style>

<div class="spacer">
</div>
<section class="card">
         <div class="card-header">
    SEARCH
  </div>
  
 <div class="card-body">
    <form action="">
        <div class="row">
            <!-- Empty Column for Spacing -->
            <div class="col-lg-1 col-md-1 col-12 mb-2">
                &nbsp;
            </div>
            <?php $keyword=isset($_GET['keyword'])?$_GET['keyword']:"";?>
            <!-- Search Keyword Input -->
            <div class="col-lg-5 col-md-5 col-12 mb-2">
                <label for="keyword">Search Keyword</label>
                <input type="text" id="keyword" name="keyword" class="form-control mt-2" required value="<?=$keyword?>">
           
            </div>
            
            <!-- Empty Column for Spacing -->
            <div class="col-lg-1 col-md-1 col-12 mb-2">
                &nbsp;
            </div>

            <!-- Buttons -->
            <div class="col-lg-2 col-md-2 col-6 mb-2 d-flex align-items-end">
                <button type="submit" class="search-btn btn btn-secondary btn-sm w-100">Search</button>
            </div> </form>
            <div class="col-lg-2 col-md-2 col-6 mb-2 d-flex align-items-end">
               <!--<a href="{{url('admin/property_enquiries')}}?a=51&&b=26"><button type="button" class="clear-btn btn btn-secondary btn-sm w-100" onclick="document.querySelector('form').reset();">Clear</button></a>-->
                <button type="button" style=" background-color:#6c757d;color:white;" class="clearbtn" onclick="document.querySelector('form').reset();"> <a href="{{url('admin/chats')}}"> Clear </a></button>
            </div>
        </div>
   
</div>

  
</section><br><br>
  <div class="row">
      <div class="col-md-12">
          <div class="main-card mb-3 card">
              <div class="card-header">Chats
                  <div class="btn-actions-pane-right">
                      <div role="group" class="btn-group-sm btn-group">
                          
                      </div>
                  </div>
              </div>
              <div class="table-responsive">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                      <tr>
                          <th class="text-center" width="10%">SL. No.</th>
                          <th class="text-center" width="10%">Sender</th>
                          <th class="text-center" width="60%">Message</th>
                          <th class="text-center" width="10%">Actions</th>
                            
                      </tr>
                      </thead>
                      <tbody>

                      @foreach($chats as $chat)
                      <tr class="datas">
                          
                          <td class="text-center text-muted">{{ $chats->firstItem() + $loop->index }}</td>
                          <td> {{$chat->Sender->name}} </td>
                          <td class="text-center">{{$chat->message}}</td>
                          <td class="text-center">
                            <a href="{{url('admin/messages/'.$chat->user_id)}}">
                                <button type="button" value="{{$chat->user_id}}" 
                                 id="PopoverCustomT-1" class="btn btn-primary btn-sm edits">
                                  View
                                </button>
                            </a>
                          </td>                                                     
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>
              <div class="d-flex justify-content-end text-right card-footer">
                  {{ $chats->links() }}
                
              </div>
          </div>
      </div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    
</script>
<script type="text/javascript">
      $(document).on('click','.edits',function(){
        
         var ad_page=$(this).closest('.findads').find('.findpage').val();
         var ad_section=$(this).closest('.findads').find('.findsection').val();
         var ad_url=$(this).closest('.findads').find('.findurl').val();
         var ad_id=$(this).closest('.findads').find('.findid').val();
         $('#appendpage').val(ad_page);
         $('#appendsection').val(ad_section);
         $('#appendurl').val(ad_url);
         $('#appendtheid').val(ad_id);

    });
 </script>

@endsection