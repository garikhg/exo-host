@extends('layouts.app')

@section('content')
    {{--start of herro-banner--}}
    <div class="herro-banner">

    </div>
    {{--end of herro-banner--}}

    {{--start of domain-checker--}}
    <div class="domain-checker bg-haunted-meadow text-white">
        <div class="container py-4">
            <div class="row">
                <div class="col-7">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="domain" placeholder="Type the domain you want" aria-label="Type the domain you want" aria-describedby="domain-checker">
                        <button class="btn" type="button" id="domain-checker">Search</button>
                    </div>
                </div>
                <div class="col-3">Domains</div>
            </div>
        </div>
    </div>
    {{--end of domain-checker--}}

    <div class="container">
        Front Page
    </div>
@endsection