<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Trips</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('trips.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
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
                                        <label for="vehicle_id">Vehicle</label>
                                        <select id="vehicle_id" name="vehicle_id" class="selectpicker form-control" data-style="py-0">
                                            <option value="{{null}}">Select Vehicle</option>
                                            @foreach($vehicles as $vehicle)
                                                <option @if($vehicle->id == old('vehicle_id')) selected @endif value="{{$vehicle->id}}">{{$vehicle->registration_number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('vehicle_id'))
                                        <span class="text-red">{{ $errors->first('vehicle_id') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="expected_arrival_time">Expected Arrival Time *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d H:i:s" class="form-control" value="{{old('expected_arrival_time')}}" id="expected_arrival_time" name="expected_arrival_time" />
                                    </div>
                                    @if($errors->has('expected_arrival_time'))
                                        <span class="text-red">{{ $errors->first('expected_arrival_time') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="expected_departure_time">Expected Departure Time *</label>
                                        <input type="datetime-local" class="form-control" id="expected_departure_time" value="{{old('expected_departure_time')}}" name="expected_departure_time" />
                                    </div>
                                    @if($errors->has('expected_departure_time'))
                                        <span class="text-red">{{ $errors->first('expected_departure_time') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="seats_available">Seats Available *</label>
                                        <input type="number" class="form-control" id="seats_available" value="{{old('seats_available')}}" name="seats_available" placeholder="Seats Available" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    @if($errors->has('seats_available'))
                                        <span class="text-red">{{ $errors->first('seats_available') }}</span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Purchase</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
