@extends('livewire.customer.layout')
@section('content')
<x-guest-layout>
<div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @if(session("success"))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">ตารางข้อมูลห้อง</div>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อสัตว์เลี้ยง</th>
                            <th scope="col">ประเภทสัตว์เลี้ยง</th>
                            <th scope="col">อายุ</th>
                            <th scope="col">น้ำหนัก</th>
                            <th scope="col">ภาพประกอบ</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($pets as $row)
                            <tr>
                                <th>{{$pets->firstItem()+$loop->index}}</th>
                                <td>{{$row->name}}</td>
                                <td>{{$row->pet_type}}</td>
                                <td>{{$row->age}}</td>
                                <td>{{$row->weight}}</td>
                    
                                <td>
                                <img src="{{ asset('uploads/pets/'.$row->pet_image) }}" width="100px" height="100px" alt="">
                                </td>
                                <td>
                                    <a href="{{url('/pet/edit/'.$row->id)}}" class="btn btn-primary">แก้ไข</a>
                                </td>
                                <td>
                                    <a href="{{url('/pet/softdelete/'.$row->id)}}" class="btn btn-warning" 
                                    onclick="return confirm('Are you sure you want to Delete Pet?');">ลบข้อมูล</a>
                                </td>
                        
                            </tr>
                            @endforeach
                        
                        </tbody>
                        </table>
                        
                    </div>
                
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">แบบฟอร์ม</div>
                        <div class="card-body">
                            <form action="{{route('addPet')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">ชื่อสัตว์เลี้ยง</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="pet_type">ประเภทสัตว์เลี้ยง</label>
                                    <input type="text" class="form-control" name="pet_type">
                                </div>
                                <div class="form-group">
                                    <label for="age">อายุ</label>
                                    <input type="number" class="form-control" name="age">
                                </div>
                                <div class="form-group">
                                    <label for="weight">weight</label>
                                    <input type="text" class="form-control" name="weight">
                                </div>
                                <div class="form-group">
                                    <label for="pet_image">ภาพประกอบ</label>
                                    <input type="file" class="form-control" name="pet_image">
                                </div>
                                @error('name')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>
                                <input type="submit" value="บันทึก" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
@endsection