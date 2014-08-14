


@section('content')
 <p class="uk-article-lead">Selamat datang </p>

<p>Hai, {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }}, selamat datang di halaman Karyawan.. </p>
                <hr class="uk-article-divider">

@stop