<div class="sidebar bg-danger" data-color="yellow"  >
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.pecece.com" class="simple-text logo-mini">
      
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal font-weight-bold">
    {{ __('Pecec') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('author') }}">
          <i class="text-danger now-ui-icons tech_tv"></i>
          <p>{{ __('Home') }}</p>
        </a>
      </li>
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <i class="text-danger now-ui-icons design_bullet-list-67"></i>
          <p>
            {{ __("Post") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'all_post') active @endif">
              <a href="">
                <i class="text-danger now-ui-icons files_single-copy-04"></i>
                <p> {{ __("All Post") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'create_post') active @endif">
              <a href="{{ route('author.create_post')}}">
                <i class="text-danger now-ui-icons files_paper"></i>
                <p> {{ __("Create New") }} </p>
              </a>
            </li>
          </ul>
        </div>
     
      
      <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="">
          <i class=" text-danger now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'profile') active @endif">
        <a href="{{ route('author.profile')}}">
          <i class="text-danger now-ui-icons users_single-02"></i>
          <p>{{ __('My Profile') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="">
          <i class="text-danger now-ui-icons loader_gear"></i>
          <p>{{ __('Settings') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>