@extends('master')
@section('content')

<div>
 <div class="card mt-2">
   
   
    <h5 class="card-header">Danh sách đại lí</h5>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline" method="get" action="{{ route('show.dealer')}}">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
 <div class="col-12 mt-2">
     <div class="col-md-6">
        <a class="btn btn-success" href="{{route('create.dealer')}}">Thêm mới đại lí</a>
     </div>
 </div>
    <div class="card-body">
        <table class="table table-hover"> 
            <tr>
                <th>Mã số đại lí</th>
                <th>Tên đại lí</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Tên người quản lí</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
              
            </tr>
            					
            @forelse($dealers as $key => $dealer)
            <tr id="dealer-item-{{$dealer->id}}">
                <td>{{ $key + 1001 }}</td>
                <td>{{ $dealer->dealer_name}}</td>
                <td>{{ $dealer->phone}}</td>
                <td>{{ $dealer->email}} </td>
                <td>{{ $dealer->address}}</td>
                <td>{{ $dealer->manager}}</td>
                <td>{{ $dealer->status}}</td>
              
                <td><a href="{{route('update.dealer', $dealer->id)}}" class="btn btn-primary">Sửa</a>
                    <a onclick="alert('Xóa thành công')" href="{{route('delete.dealer', $dealer->id)}}" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8 ">No data</td>
            </tr>
            @endforelse
        </table>
 </div>
</div>
@endsection
