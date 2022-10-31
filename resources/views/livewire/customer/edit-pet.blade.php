@extends('.livewire.customer.layout')
@section('content')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="card">
                        <div class="card-header">แบบฟอร์มแก้ไขข้อมูล</div>
                        <div class="card-body">
                            <form action="{{url('/pet/update/'.$pet->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">ชื่อบริการ</label>
                                    <input type="text" class="form-control" name="name" value="{{$pet->name}}">
                                </div>
                                @error('name')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="pet_type">ประเภทสัตว์เลี้ยง</label>
                                    <input type="text" class="form-control" name="pet_type" value="{{$pet->pet_type}}">
                                </div>
                                @error('pet_type')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="age">อายุ</label>
                                    <input type="text" class="form-control" name="age" value="{{$pet->age}}">
                                </div>
                                @error('age')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="weight">น้ำหนัก</label>
                                    <input type="text" class="form-control" name="weight" value="{{$pet->weight}}">
                                </div>
                                @error('weight')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                
                                <div class="form-group">
                                    <label for="pet_image">ภาพประกอบ</label>
                                    <input type="file" class="form-control" name="pet_image" value="{{$pet->pet_image}}">
                                </div>
                                @error('pet_image')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>
                                <input type="hidden" name="old_image" value="{{$pet->pet_image}}">
                                <div class="form-group">
                                    <img src="{{asset($pet->pet_image)}}" alt="" width="400px" height="400px">
                                </div>

                                <br>
                                <input type="submit" value="อัพเดต" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection