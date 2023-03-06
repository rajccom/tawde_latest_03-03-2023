<form action="{{ route('career.update', $career->id) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">{{translate('Edit Career Info')}}</h5>
        <button type="button" class="close" data-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Company Name')}}</label>
            <div class="col-md-9">
                <input type="text" name="company" value="{{$career->company}}"  placeholder="{{ translate('Company') }}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Designation ')}}</label>
            <div class="col-md-9">
                <input type="text" name="designation" value="{{$career->designation}}" class="form-control" placeholder="{{translate('Designation')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Joining Date')}}</label>
            <div class="col-md-9">
                <input type="date" name="career_start" value="{{$career->start}}" class="form-control" placeholder="{{translate('Start')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Employed In')}}</label>
            <div class="col-md-9">
                 @php $career_emp = !empty($career->emp) ? $career->emp : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="emp" value="{{$career->emp}}"required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="business" @if($career_emp ==  'business') selected @endif >{{translate('Business')}}</option>
                        <option value="defence" @if($career_emp ==  'defence') selected @endif >{{translate('Defence')}}</option>
                        <option value="government" @if($career_emp ==  'government') selected @endif >{{translate('Government')}}</option>
                        <option value="Not Employed In" @if($career_emp ==  'Not Employed In') selected @endif >{{translate('Not Employed In')}}</option>
                        <option value="Private" @if($career_emp ==  'Private') selected @endif >{{translate('Private')}}</option>
                        <option value="MNC Company" @if($career_emp ==  'MNC Company') selected @endif >{{translate('MNC Company')}}</option>
                        <option value="Others" @if($career_emp ==  'Others') selected @endif >{{translate('Others')}}</option>
                        </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Annual Income')}}</label>
            <div class="col-md-9">
                 @php $career_income = !empty($career->income) ? $career->income : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="income" value="{{$career->income}}"required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="below 1 Lakh" @if($career_income ==  'below 1 Lakh') selected @endif >{{translate('Below 1 Lakh')}}</option>
                        <option value="1 Lakh" @if($career_income ==  '1 Lakh') selected @endif >{{translate('1 Lakh')}}</option>
                        <option value="Lakh 1-3" @if($career_income ==  'Lakh 1-4') selected @endif >{{translate('Lakh 1-3')}}</option>
                        <option value="Lakh 4-6" @if($career_income ==  'Lakh 4-7') selected @endif >{{translate('Lakh 4-6')}}</option>
                        <option value="Lakh 7-10" @if($career_income ==  'Lakh 7-10') selected @endif >{{translate('Lakh 7-10')}}</option>
                        <option value="Lakh 10 and above" @if($career_income ==  'Lakh 10 and above') selected @endif >{{translate('Lakh 10 and Above')}}</option>
                        <option value="No Income" @if($career_income ==  'No Income') selected @endif >{{translate('No Income')}}</option>
                        </select>
            </div>
        </div>
        
        <!--<div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('End')}}</label>
            <div class="col-md-9">
                <input type="number" name="career_end" value="{{$career->end}}"  placeholder="{{ translate('End') }}" class="form-control">
            </div>
        </div>-->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Close')}}</button>
        <button type="submit" class="btn btn-primary">{{translate('Update Career Info')}}</button>
    </div>
</form>
