@extends('layouts.admin.main') @section('content')
<main>
  <!--==================SECTION PROPERTIES STARTS=============== -->
  <section class="card" style="padding: 20px">
    <h3 style="color: red; padding: 20px"><b>PROPERTIES</b></h3>
    <div class="row">
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content bg-info">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Properties</div>
              <div class="widget-subheading"></div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white">
                <span>{{$prop['propertycount_all']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content bg-midnight-bloom">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Featured Properties</div>
              <div class="widget-subheading"></div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white">
                <span>{{$prop['property_featured_count']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content bg-arielle-smile">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Standard Properties</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white">
                <span>{{$prop['property_standard_count']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content bg-grow-early">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Agent Properties</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white">
                <span>{{$prop['property_agent_count']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---------------ROW2---------------->
    <div class="row">
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">
                  <span><i class="fa fa-envelope" aria-hidden="true"></i></span
                  >&nbsp; Property Enquiries
                  <!-- <span style="color:green !important">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="fa fa-circle text-success" aria-hidden="true"></i></span> -->
                </div>
                <div class="widget-subheading"></div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">
                  &nbsp;&nbsp;&nbsp;<i
                    class="fa fa-envelope-o"
                    aria-hidden="true"
                  ></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Expired property</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">
                  {{$prop['property_expired_count']}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Total Agents</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">
                  {{$prop['agent_count']}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Total Users</div>
                <div class="widget-subheading"></div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">
                  {{$prop['user_count']}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br /><br />
  <!--==================SECTION PROPERTIES STARTS=============== -->
  <!--==================SECTION AUTOMOBILES STARTS=============== -->
  <section class="card" style="padding: 20px">
    <h3 style="color: red; padding: 20px"><b>AUTOMOBILES</b></h3>
    <div class="row">
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content bg-info">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Automobiles</div>
              <div class="widget-subheading"></div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white">
                <span>{{$prop['propertycount_all']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content bg-midnight-bloom">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Featured Automobiles</div>
              <div class="widget-subheading"></div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white">
                <span>{{$prop['property_featured_count']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content bg-arielle-smile">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Standard Automobiles</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white">
                <span>{{$prop['property_standard_count']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content bg-grow-early">
          <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Total Agent Automobiles</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-white">
                <span>{{$prop['property_agent_count']}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---------------ROW2---------------->
    <div class="row">
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">
                  <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                  Automobile Enquiries
                  <!-- <span style="color:green !important">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <i class="fa fa-circle text-success" aria-hidden="true"></i></span> -->
                </div>
                <div class="widget-subheading"></div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">
                  &nbsp;&nbsp;&nbsp;<i
                    class="fa fa-envelope-o"
                    aria-hidden="true"
                  ></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Expired Automobiles</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">
                  {{$prop['property_expired_count']}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Total Agents</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">
                  {{$prop['agent_count']}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xl-3">
        <div class="card mb-3 widget-content">
          <div class="widget-content-outer">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">Total Users</div>
                <div class="widget-subheading"></div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-success">
                  {{$prop['user_count']}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br /><br />
  <!--==================SECTION AUTOMOBILES ENDS=============== -->
</main>
@endsection
