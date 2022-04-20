@extends('layouts.backend')


@section('content')
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <h3 class="content-title mb-2">Welcome back {{ auth()->user()->name }}</h3>
                <div class="d-flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style2">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>

                    {{-- <p class="text-primary mb-0 hover-cursor">Crypto</p> --}}
                </div>
            </div>
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">

                <button class="btn btn-primary mt-2 mt-xl-0">Current Rank<br>
                    <span class="badge badge-light">Silver Rank</span>
                    {{-- <span class="badge badge-light">{{ auth()->user()->rank }}</span> --}}
                </button>
            </div>
        </div>
        <!-- /breadcrumb -->


        <!-- row -->
        <div class="row ">
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-primary mb-3">
                            <i class="fas fa-user-tie fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Referal</h5>
                        <h2 class="counter">$100</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-warning mb-3">
                            <i class="fas fa-comments-dollar  fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Binary Bonus</h5>
                        <h2 class="counter"> $500</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Purchase Bonus</h5>
                        <h2 class="counter">$600</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Withdrawable Bonus</h5>
                        <h2 class="counter">$1000</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
        <!-- row -->
        <div class="row ">
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-primary mb-3">
                            <i class="fas fa-user-tie fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Referal Bonus</h5>
                        <h2 class="counter">1,000,000SHIB</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-warning mb-3">
                            <i class="fas fa-comments-dollar  fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Binary Bonus</h5>
                        <h2 class="counter">5,000,000SHIB</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Air Drop</h5>
                        <h2 class="counter">6,000,000SHIB</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Withdrawable Tokens</h5>
                        <h2 class="counter">8,000,000SHIB</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
        <!-- row -->
        <div class="row ">
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-primary mb-3">
                            <i class="fas fa-comments-dollar fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Earings</h5>
                        <h2 class="counter">$1,200</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-warning mb-3">
                            <i class="fas fa-comments-dollar  fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Earnings</h5>
                        <h2 class="counter">8,000,000SHIB</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total $ Left</h5>
                        <h2 class="counter">20000</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total $ Right</h5>
                        <h2 class="counter">40000</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
        <!-- row -->
        <div class="row justify-content-end">
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total SHIB Left</h5>
                        <h2 class="counter">20000</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total SHIB Right</h5>
                        <h2 class="counter">40000</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
        <!-- row -->
        <div class="row justify-content-end">
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Team Left</h5>
                        <h2 class="counter">10</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 features">
                <div class="card feature">
                    <div class="card-body text-center">
                        <div class="fa-stack fa-lg fa-1x border bg-success mb-3">
                            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                        </div>
                        <h5>Total Team Right</h5>
                        <h2 class="counter">20</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->


    </div>
@endsection

@push('js')
    <!-- index js -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
