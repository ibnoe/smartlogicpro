


@section('content')
 <p class="uk-article-lead">Selamat datang </p>

<p>Hai, {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }}, selamat datang di halaman Administrator. Disini anda dapat mengatur semua data master, data marketing, data administrator dan owner. </p>
                <hr class="uk-article-divider">

@stop