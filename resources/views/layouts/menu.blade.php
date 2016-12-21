

<li class="{{ Request::is('participants*') ? 'active' : '' }}">
    <a href="{!! route('participants.index') !!}"><i class="fa fa-edit"></i><span>Participants</span></a>
</li>

<li class="{{ Request::is('serviceProviders*') ? 'active' : '' }}">
    <a href="{!! route('serviceProviders.index') !!}"><i class="fa fa-edit"></i><span>ServiceProviders</span></a>
</li>

<li class="{{ Request::is('sms*') ? 'active' : '' }}">
    <a href="{!! route('sms.index') !!}"><i class="fa fa-edit"></i><span>Sms</span></a>
</li>

