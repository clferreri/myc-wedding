<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-9">
                    <div class="numbers">
                        <p class="mb-0 text-uppercase font-weight-bold">{{ $title }}</p>
                        <br/>
                        <h4 class="font-weight-bolder">
                            {{ $value }}
                        </h4>
                        <p class="mb-0">
                            {!! $footer ?? '' !!}
                        </p>
                    </div>
                </div>
                <div class="col-3 text-end" style="margin:auto">
                    <div class="icon bg-gradient-danger shadow-danger text-center rounded-circle" style="width: 70px; height:70px; margin:auto; display:flex; justify-content:center; align-items:center;">
                        {!! $icon !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>