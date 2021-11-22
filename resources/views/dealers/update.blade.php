@extends('master')
@section('content')

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
        <div class="card mt-2">
            <h5 class="card-header">Cập nhật thông tin</h5>
            <div class="card-body">
                <form method="post" action="{{route('edit.dealer', $dealer->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Tên đại lí</label>
                        <input type="text" name="dealer_name" value="{{$dealer->name}}" class="form-control  @error('name') is-invalid @enderror" required>
                      
                    </div>
                    <div class="form-group">
                        <label for="">Điện thoại</label>
                        <input type="text" name="phone" value="{{$dealer->phone}}" class="form-control" required>
                        @error('phone')
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{$dealer->email}}" class="form-control" required>
                       
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="address" value="{{$dealer->address}}" class="form-control" required>
                        @error('address')
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">	Tên người quản lí</label>
                        <input type="text" name="manager" value="{{$dealer->manager}}" class="form-control" required>
                        @error('manager')
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Trạng thái</label>
                        <select class="form-control" id="Trạng thái" name="status" required>{{$dealer->status}}
                            <option>Hoạt động</option>
                            <option>Ngừng hoạt động</option>
                          </select>
                      </div> 
                    </div>      
                    <button type="submit" onclick="alert('Cập nhật thành công')"class="btn btn-info">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

