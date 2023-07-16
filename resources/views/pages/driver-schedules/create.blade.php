<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Driver Schedules</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('driver-schedules.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                @foreach($errors->all() as $error)
                                    <span class="text-red">{{$error}}</span><br>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_time">Availability Week Start Date *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d" class="form-control" value="{{old('start_time')}}" id="start_time" name="start_time" />
                                    </div>
                                    @if($errors->has('start_time'))
                                        <span class="text-red">{{ $errors->first('start_time') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end_time">End Time *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d" class="form-control" value="{{old('end_time')}}" id="end_time" name="end_time" />
                                    </div>
                                    @if($errors->has('end_time'))
                                        <span class="text-red">{{ $errors->first('end_time') }}</span>
                                    @endif
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Driver Schedule</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
