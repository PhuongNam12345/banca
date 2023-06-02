@extends('welcome')
@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
      {{-- <div class="row">
        <div class="col">
          {{-- <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav> --}}
        {{-- </div>
      </div> --}}
      <form action="{{ URL::to('sua-canhan') }}" method="post">
        @csrf
      @foreach($lietke as $key => $item)   
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
       
            <div class="card-body text-center">
                <img src="{{ asset("public/frontend/img/canhan.jpg") }}"  height="100" width="100">
  

              <h5 class="my-3">{{  $item->Ten_kh }}</h5>
                
         
            </div>
          </div>
         
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tên</p>
                </div>
                <div class="col-sm-9">
                  <input class="text-muted mb-0" name="tenkh" value="{{  $item->Ten_kh }}">
                  
                </div>
          
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Giới tính</p>
                </div>
                <div class="col-sm-9">	
                  <div class="gioitinh" style="color: rgb(111 104 104);" >
                    Nam <input type="radio"  name="gioitinh" value="1"  {{ ( $item->Gioitinh== 1) ? 'checked' : '' }}> &emsp;	
                    Nữ <input type="radio" name="gioitinh" value="2" {{ ( $item->Gioitinh == 2) ? 'checked' : '' }}>
                    </div> 
                </div>
                {{-- <div class="form-group col-md-6">
                  <label>Giới tính</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gioitinh" id="gender_male" value="1" {{ ( $item->Gioitinh== 1) ? 'checked' : '' }}>
                    <label class="form-check-label" for="gender_male">
                      Nam
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gioitinh" id="gender_female" value="0" {{ ( $item->Gioitinh == 2) ? 'checked' : '' }}>
                    <label class="form-check-label" for="gender_female">
                      Nữ
                    </label>
                  </div>
                </div> --}}
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-8">
                    <input class="text-muted mb-0" name="email" value="{{  $item->Email_kh }}">
                </div>
                
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">SDT</p>
                </div>
                <div class="col-sm-9">
                    <input class="text-muted mb-0" name="sdt" value="{{  $item->Sdt }}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Địa chỉ</p>
                </div>
                <div class="col-sm-9">
                    <input class="text-muted mb-0" name="diachi" value="{{  $item->Diachi }}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tài khoản</p>
                </div>
                <div class="col-sm-9">
                    <input class="text-muted mb-0" name="tentk" value="{{  $item->Tentaikhoan }}" disabled>
                </div>
              </div>
              <hr>
              <button type="submit" class="btn btn-info">Xác nhận</button>
               
              </div>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    @endforeach
  </form>
  </section>
  @endsection