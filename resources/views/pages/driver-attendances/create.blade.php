<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Driver Attendance</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('driver-attendances.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                @foreach($errors->all() as $error)
                                    <span class="text-red">{{$error}}</span><br>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="driver_id">Driver</label>
                                        <select id="driver_id" name="driver_id" class="selectpicker form-control" data-style="py-0">
                                            <option value="{{null}}">Select Driver</option>
                                            @foreach($drivers as $driver)
                                                <option @if($driver->id == old('driver_id')) selected @endif value="{{$driver->id}}">{{$driver->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('driver_id'))
                                        <span class="text-red">{{ $errors->first('driver_id') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="attendance_time">Attendance Time In*</label>
                                        <input type="datetime-local" data-date-format="Y-m-d H:i:s" class="form-control" value="{{old('attendance_time')}}" id="attendance_time" name="attendance_time" />
                                    </div>
                                    @if($errors->has('attendance_time'))
                                        <span class="text-red">{{ $errors->first('attendance_time') }}</span>
                                    @endif
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Driver Attendance</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
