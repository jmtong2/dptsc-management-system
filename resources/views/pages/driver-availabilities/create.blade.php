<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Driver Availabilities</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('driver-availabilities.store')}}" data-toggle="validator" method="post">
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
                                        <label for="availability_week_start_date">Availability Week Start Date *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d" class="form-control" value="{{old('availability_week_start_date')}}" id="availability_week_start_date" name="availability_week_start_date" />
                                    </div>
                                    @if($errors->has('availability_week_start_date'))
                                        <span class="text-red">{{ $errors->first('availability_week_start_date') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="availability_week_end_date">Availability Week End Date *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d" class="form-control" value="{{old('availability_week_end_date')}}" id="availability_week_end_date" name="availability_week_end_date" />
                                    </div>
                                    @if($errors->has('availability_week_end_date'))
                                        <span class="text-red">{{ $errors->first('availability_week_end_date') }}</span>
                                    @endif
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Driver Availability</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
