@extends ('layout')

@section('content')
    

    {{-- FONT FAMILY --}}
    <section class="section-font-family">
        <div class="section-title">
            Font Type
        </div>
        <div class="section-options">
            @foreach($fonts as $font)
                <span class="option pointer" data-font="{{$font}}">
                    SMH
                </span>
            @endforeach
        </div>
    </section>


    <div class="row">
        <div class="col-sm-4">
            {{-- FONT WEIGHT --}}
            <section class="section-font-weight">
                <div class="section-title">
                    Font Thickness
                </div>
                <div class="section-options">
                    @foreach($weights as $weight)
                        <span class="option pointer font-weight" data-weight="{{$weight}}">
                            {{$weight}}
                        </span>
                    @endforeach
                </div>
            </section>
        </div>
        <div class="col-sm-4">
            {{-- SELECT COLOR --}}
            <section class="section-text-color">
                <div class="section-title">
                    Font Color
                </div>
                <div class="section-options">
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp; <input id='colorpicker' />
                </div>
            </section>
        </div>
        <div class="col-sm-4">
                {{-- FONT SIZE --}}
                <section class="section-font-size">
                    <div class="section-title">
                        Font Size
                    </div>
                    <div class="section-options">
                        <span class="btn btn-default btn-plus">plus</span>
                        <span class="value">36</span>
                        <span class="btn btn-default btn-minus">minus</span>
                    </div>
                </section>
            </div>
    </div>

    {{-- FONT WEIGHT --}}
    {{-- <section class="section-font-weight">
        <div class="section-title">
            Select Font Thickness
        </div>
        <div class="section-options">
            @foreach($weights as $weight)
                <span class="option pointer font-weight" data-weight="{{$weight}}">
                    {{$weight}}
                </span>
            @endforeach
        </div>
    </section> --}}

    {{-- SELECT COLOR --}}
    {{-- <section class="section-text-color">
        <div class="section-title">
            Select Text Color
        </div>
        <div class="section-options">
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp; <input id='colorpicker' />
        </div>
    </section> --}}
    

    {{-- LOGOS --}}
    <section class="section-logos">
            <div class="section-options">
                @foreach($icons as $icon)
                <div class="logo-box {{ $icon['name'] }}">
                    <div class="logo-icon">
                        <img src="{{ $icon['path'] }}" alt="$icon['name']">
                    </div>
                    <div class="logo-text">
                        <span>SMH</span>
                    </div>
                </div>
                
                @endforeach
            </div>
    </section>


@endsection