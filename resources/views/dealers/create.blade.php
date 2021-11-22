@extends('master')
@section('content')

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">

   <section class="get-in-touch">
   <h1 class="title">Thêm mới đại lí </h1>
   <form method="post" action="{{route('store.dealer')}}"  enctype="multipart/form-data">
    @csrf
      <div class="form-field col-lg-6">
        <label for="">Tên đại lí</label>
        <input class="form-control" type="text" name="dealer_name"required>
     </div> 
     <div class="form-field col-lg-12">
        <label for="">Điện thoại </label>
        <input class="form-control" id="phone" name="phone" required>
      </div>
      <div class="form-group col-lg-6">
        <label for="exampleFormControlInput1">Email </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
      </div>
      <div class="form-field col-lg-12">
        <label for="exampleFormControlInput1">	Địa chỉ </label>
        <input class="form-control" type="text" placeholder="Địa chỉ" name="address">
      </div>
      <div class="form-group col-lg-6">
        <label for="formGroupExampleInput2">Tên người quản lí</label>
        <input type="text" class="form-control" name="manager" id="formGroupExampleInput2" placeholder="Tên người quản lí" required>
      </div>
      <div class="form-field col-lg-12">
        <label for="">Trạng thái </label>
        <select class="form-control" id="Trạng thái" name="status" required>
            <option>Hoạt động</option>
            <option>Ngừng hoạt động</option>
          </select>
      </div> 
      <div class="form-field col-lg-12">
        <button onclick="alert('Thêm mới thành công')" type="submit" class="btn btn-primary">Submit</button>
      </div>
   </form>
   </section>

    </div>
</div>



@endsection