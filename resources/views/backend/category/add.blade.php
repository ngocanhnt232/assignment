@extends('backend.template.layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
      <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
          <li class="breadcrumb-item">
            <a href="#">
              <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
            </a>
          </li>
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
        </ol>
      </nav>
      <h2 class="h4">{{$title}}</h2>
    </div>
  </div>
  <div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
      <div class="col col-md-6 col-lg-3 col-xl-4">
        <form class="input-group me-2 me-lg-3 fmxw-400">
          <span class="input-group-text">
            <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
            </svg>
          </span>
          <input type="text" class="form-control" placeholder="Search category">
        </form>
      </div>
      <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
        <div class="dropdown">
          <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
            <span class="small ps-3 fw-bold text-dark">Show</span>
            <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg class="icon icon-xxs ms-auto"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg></a>
            <a class="dropdown-item fw-bold" href="#">20</a>
            <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="card card-body border-0 shadow mb-4">
      @if ($errors->any())
      @foreach ($errors->all() as $error)
          <p>{{$error}}</p>
      @endforeach
      @endif
        <form action="{{route('add_category')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div>
                        <label for="first_name">Name</label>
                        <input class="form-control" id="first_name" type="text" placeholder="Nhập tên" name="name" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div>
                        <label for="first_name">Description</label>
                        <input class="form-control" id="first_name" type="text" placeholder="Nhập mô tả" name="description" >
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3">
                  <div>
                      <label for="first_name">Image</label>
                      <input type="file" placeholder="" name="image" accept="hinh/*" class="form-control @error('image') is-invalid @enderror" id="image">
                      <img src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="" id="image_preview" width="100">
                  </div>
              </div>
          </div>
            {{-- <div class="row align-items-center">
                <div class="col-md-6 mb-3">
                    <label for="birthday">Birthday</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </span>
                        <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                     </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                        <option selected>Gender</option>
                        <option value="1">Female</option>
                        <option value="2">Male</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required>
                    </div>
                </div>
            </div>
            <h2 class="h5 my-4">Location</h2>
            <div class="row">
                <div class="col-sm-9 mb-3">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" id="address" type="text" placeholder="Enter your home address" required>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input class="form-control" id="number" type="number" placeholder="No." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input class="form-control" id="city" type="text" placeholder="City" required>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <label for="state">State</label>
                    <select class="form-select w-100 mb-0" id="state" name="state" aria-label="State select example">
                        <option selected>State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="zip">ZIP</label>
                        <input class="form-control" id="zip" type="tel" placeholder="ZIP" required>
                    </div>
                </div>
            </div> --}}
            <div class="mt-3">
                <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button>
            </div>
        </form>
    </div>
</div>
@endsection