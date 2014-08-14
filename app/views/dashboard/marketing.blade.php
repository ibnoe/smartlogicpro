


@section('content')
 <p class="uk-article-lead">Selamat datang </p>

<p>Hai, {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }}, selamat datang di halaman Marketing. Disini anda dapat mengatur Waiting List Client, Expired Client, menjawab ticket yang ada dari Client dan anda juga dapat membuat agenda untuk anda sendiri. </p>
                <hr class="uk-article-divider">
<!--<div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-medium-1-2">
                        <div class="uk-panel">
                            <h2 class="uk-panel-title">Waiting List Account</h2>
                             
                            <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td width="75%">Name</td>
                                        <td width="25%">Action</td>
                                    </tr>
                                    
                                    <tr>
                                        <td></td>
                                        <center><td>Act</td></center>
                                    </tr>

                                </tbody>
                                
                            </table>
                                                  
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="uk-panel">
                            <h2 class="uk-panel-title">Expired Client</h2>
                            <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td width="75%">List</td>
                                        <td width="25%">Action</td>
                                    </tr>
                                    <tr>
                                        <td>Small</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                    <tr>
                                        <td>Medium</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                    <tr>
                                        <td>Large</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                    <tr>
                                        <td>Xlarge</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <hr class="uk-article-divider">
                <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-medium-1-2">
                        <div class="uk-panel">
                            <h2 class="uk-panel-title">Ticket List</h2>
                            <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th width="75%">List</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                           
                                <tbody>
                                    <tr>
                                        <td width="75%">List</td>
                                        <td width="25%">Action</td>
                                    </tr>
                                    <tr>
                                        <td>Small</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                    <tr>
                                        <td>Medium</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                    <tr>
                                        <td>Large</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                    <tr>
                                        <td>Xlarge</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="uk-panel">
                            <h2 class="uk-panel-title">Agenda List</h2>

                            <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th width="75%">List</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach($data as $value)
                                    <tr>
                                        <td>{{{ $value->nama_agenda }}}</td>
                                        <center><td>Act</td></center>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div> -->
@stop