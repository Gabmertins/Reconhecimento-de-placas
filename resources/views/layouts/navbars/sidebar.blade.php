<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}" class="simple-text    ">{{ _('CAPTURE') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-bank"></i>
                    <p>{{ _('Home') }}</p>
                </a>
            </li>
            <li>
                

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav ">
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('Gerenciamento de usuários') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
                 </ul>
    </div>
</div>
