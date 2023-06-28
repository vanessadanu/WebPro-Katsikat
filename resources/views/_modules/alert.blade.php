<div class="row">
    <div col="col-lg-12"></div>
    {{-- <div class="alert border-primary alert-dismissible fade show" role="alert"> --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                There's some error(s):
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            </div>
        @endif

        @if (Session::get('flash_notification.level'))
            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                {!! Session::get('flash_notification.message') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>
