@extends('layouts.app')
@section('content')
    @include('users.entrust.partials.nav')
    <div id="content">
        @if (count($errors) > 0)
            <div class="rmarchivtbl errorbox">
                <h2>{{trans('app.add_permissions')}}</h2>
                <div class="content">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><strong>{{ $error }}</strong></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        @if($perms->count() <> 0)
            <h2>benutzerrollen</h2>
            <table id='pouetbox_prodlist' class='boxtable pagedtable'>
                <thead>
                <tr class='sortable'>
                    <th>name</th>
                    <th>anzeigename</th>
                    <th>beschreibung</th>
                </tr>
                </thead>
                @foreach($perms as $r)
                    <tr>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->display_name }}</td>
                        <td>{{ $r->description }}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <h2>keine berechtigungen vorhanden bisher.</h2>
        @endif

        {!! Form::open(['route' => 'user.perm.perm.store']) !!}
        <div class="rmarchivtbl" id="rmarchivbox_submitprod">
            <h2>Rolle hinzufügen</h2>

            <div class="content">
                <div class="formifier">
                    <div class="row" id="row_name">
                        <label for="name">name:</label>
                        <input name="name" id="name" value="" placeholder="create-news"/>
                        <span> [<span class="req">req</span>]</span>
                    </div>
                    <div class="row" id="row_dname">
                        <label for="dname">angezeigter name:</label>
                        <input name="dname" id="dname" value="" placeholder="news erstellen"/>
                        <span> [<span class="req">req</span>]</span>
                    </div>
                    <div class="row" id="row_desc">
                        <label for="desc">beschreibung:</label>
                        <input name="desc" id="desc" value="" placeholder="mit dieser berechtigung darf man news erstellen"/>
                        <span> [<span class="req">req</span>]</span>
                    </div>
                </div>

            </div>

            <div class="foot">
                <input type="submit" value="senden">
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection