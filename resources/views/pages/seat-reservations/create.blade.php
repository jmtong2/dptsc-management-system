<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Seat Reservation</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('seat-reservations.store')}}" method="post" data-toggle="validator">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach($errors->all() as $error)
                                        <span class="text-red">{{$error}}</span><br>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter Name"
                                               value="{{old('name')}}"
                                               id="name" name="name"
                                               data-errors="Please Enter Name" required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('name'))
                                            <div class="text-red">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_number">Contact No. *</label>
                                        <input type="text" class="form-control"
                                               value="{{old('contact_number')}}"
                                               placeholder="Enter Contact Number" id="contact_number"
                                               name="contact_number"
                                               data-errors="Please Enter Contact Number" required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('contact_number'))
                                            <div class="text-red">{{ $errors->first('contact_number') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_type_id">ID Type *</label>
                                        <select id="id_type_id" name="id_type_id" class="selectpicker form-control"
                                                data-style="py-0">
                                            <option value="{{null}}">Select ID Type</option>
                                            @foreach($idTypes as $trip)
                                                <option @if($trip->id == old('id_type_id')) selected
                                                        @endif value="{{$trip->id}}">{{$trip->type}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('id_type_id'))
                                            <div class="text-red">{{ $errors->first('id_type_id') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_number">ID No. *</label>
                                        <input type="text" class="form-control"
                                               value="{{old('id_number')}}"
                                               placeholder="Enter ID Number" id="id_number"
                                               name="id_number"
                                               data-errors="Please Enter ID Number" required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('id_number'))
                                            <div class="text-red">{{ $errors->first('id_number') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="number_of_seats">Number of Seats. *</label>
                                        <input type="number" min="1" class="form-control"
                                               value="{{old('number_of_seats')}}"
                                               placeholder="Enter Number of Seats" id="number_of_seats"
                                               name="number_of_seats"
                                               data-errors="Please Enter Number of Seats" required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('number_of_seats'))
                                            <div class="text-red">{{ $errors->first('number_of_seats') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trip_id">Trip *</label>
                                        <select id="trip_id" name="trip_id"
                                                class="selectpicker form-control" data-style="py-0">
                                            <option value="{{null}}">Select Trip</option>
                                            @foreach($trips as $trip)
                                                <option @if($trip->id == old('trip_id')) selected
                                                        @endif value="{{$trip->id}}">{{$trip->expected_departure_time}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('trip_id'))
                                            <div class="text-red">{{ $errors->first('trip_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Vehicle Type</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
