@extends('layouts.main')
@include('bar1')
@section('ourcode')
<title>Broadcast</title>

<div class="container">
<div class = "col-12" style="margin-bottom: 20px; margin-left: 160px; margin-top: 20px; margin-right: 0px; width: 1000px;"> 
<div class="card-12">
    <h3 style="color: #6c6b70; font-family:courier;">Broadcast</h3>
</div>
<div class="row">
    <div class="col-12 mx-auto">
    <div class="card">
    <div class="container">
    <div class="row">
        <div class="col-9 text-center">
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id = "sgAns" name="serviceGroup">
                    <option selected>Select Service broadcast</option>
                    <option value="1">Shared - FAQ</option>
                    <option value="2">Dedicated - FAQ</option>
                    <option value="2">Dedicated - Transactional</option>
                    <option value="3">OnPrem - FAQ</option>
                    <option value="2">OnPrem - Transactional</option>
                </select>
            </div>
        </div>
        </div>
        <div class="col-3 text-center">
        <div class="card-body">
        <button type="button" class="btn btn-outline-secondary"></span> New Broadcast </button></i>
        </div>
        </div>
    </div>
    </div>
    </div>
        @foreach($broadcast as $b)
        <div class="card-group">
        <div class="card">
        <div class="card-body">
        <h3 class="card-title">{{ $b->title }}</h3>
            <footer class="blockquote-footer">{{ $b->ttdTtl }}</cite></footer>
        </div>
        </div>
        </div>
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Analytic</h5>
                <div class="card-group">
                    <div class="card-body">
                    <h5 class="card-title">200</h5>
                    <p class="card-text"><small class="text-muted">Open</small></p>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">25</h5>
                    <p class="card-text"><small class="text-muted">Click</small></p>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">500 <i style='font-size:10px' class='far'>&#xf06e;</i></h5>
                    <p class="card-text"><small class="text-muted">Recipients</small></p>
                    </div>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Reactions</h5>
                <div class="card-group">
                    <div class="card-body">
                    <h5 class="card-title">
                    <i style='font-size:24px' class='far'>&#128077</i>
                    </h5>
                    <p class="card-text"><small class="text-muted">12</small></p>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">
                    <i style='font-size:24px' class='far'>&#128078</i>
                    </h5>
                    <p class="card-text"><small class="text-muted">3</small></p>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">
                    <i style='font-size:24px' class='far'>&#128064</i>
                    </h5>
                    <p class="card-text"><small class="text-muted">8</small></p>
                    </div>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Seen by VIP's</h5>
                <p class="card-text">
                    <div class = "row">
                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="sunil" style="width: 40px; height: 40px; border-radius: 100%;">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="sunil" style="width: 40px; height: 40px; border-radius: 100%;">
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="sunil" style="width: 40px; height: 40px; border-radius: 100%;"></div>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="card">
        <div class="card-body">
        <h5 class="card-title">Message</h5>
        <span class="card-text">{{ $b->massegeDetail }}</span>
        <footer class="blockquote-footer">{{ $b->ttdTtl }}</cite></footer>
        </div>
        </div>
        @endforeach
