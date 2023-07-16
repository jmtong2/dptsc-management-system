<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Vehicle Availability</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('vehicle-availabilities.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="vehicle_id">Vehicle *</label>
                                        <select id="vehicle_id" name="vehicle_id" class="selectpicker form-control" data-style="py-0">
                                            <option value="{{null}}">Select Vehicle</option>
                                            @foreach($vehicles as $vehicle)
                                                <option @if($vehicle->id == old('vehicle_id')) selected @endif value="{{$vehicle->id}}">{{$vehicle->registration_number}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('vehicle_id'))
                                            <div class="red-text">{{ $errors->first('vehicle_id') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="availability_week_start_date">Start Date *</label>
                                        <input type="date" class="form-control" id="availability_week_start_date"
                                               name="availability_week_start_date"
                                               value="{{old('availability_week_start_date')}}" />
                                    </div>
                                    @if($errors->has('availability_week_start_date'))
                                        <div class="red-text">{{ $errors->first('availability_week_start_date') }}</div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="availability_week_end_date">End Date *</label>
                                        <input type="date" class="form-control" id="availability_week_end_date"
                                               name="availability_week_end_date"
                                               value="{{old('availability_week_end_date')}}"/>
                                    </div>
                                    @if($errors->has('availability_week_end_date'))
                                        <div class="red-text">{{ $errors->first('availability_week_end_date') }}</div>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Vehicle Availability</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
