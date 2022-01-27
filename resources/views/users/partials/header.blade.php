<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
    style="background-image: url('{{ asset('telkomsel') }}/img/banner-bg.jpg'); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-white opacity-8"></span>

    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-md-12 {{ $class ?? '' }}">
                <h1 class="display-2 font-weight-bold text-black">{{ $title }}</h1>
                @if (isset($description) && $description)
                    <p class="text-black font-weight-bold mt-0 mb-5">{{ $description }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
