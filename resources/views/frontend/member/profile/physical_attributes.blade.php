-<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Physical Attributes')}}</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('physical-attribute.update', $member->id) }}" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          @csrf
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="height">{{translate('Height')}} ({{ translate('In Feet') }})</label>
                  <span class="text-danger">*</span>
                  <!--<input type="number" name="height" value="{{ !empty($member->physical_attributes->height) ? $member->physical_attributes->height : "" }}" step="any" class="form-control" placeholder="{{translate('Height')}}" required>-->
                  @php $member_height = !empty($member->physical_attributes->height) ? $member->physical_attributes->height : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="height" step="any" class="form-control" placeholder="{{translate('Height')}}" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="Below 4ft" @if($member_height ==  'Below 4ft') selected @endif >{{translate('Below 4ft')}}</option>
                        <option value="4ft 5in - 134cm" @if($member_height ==  '4ft 5in - 134cm') selected @endif >{{translate('4ft 5in - 134cm')}}</option>
                        <option value="4ft 6in - 137cm" @if($member_height ==  '4ft 6in - 137cm') selected @endif >{{translate('4ft 6in - 137cm')}}</option>
                        <option value="4ft 7in - 139cm" @if($member_height ==  '4ft 7in - 139cm') selected @endif >{{translate('4ft 7in - 139cm')}}</option>
                        <option value="4ft 8in - 142cm" @if($member_height ==  '4ft 8in - 142cm') selected @endif >{{translate('4ft 8in - 142cm')}}</option>
                        <option value="4ft 9in - 144cm" @if($member_height ==  '4ft 9in - 144cm') selected @endif >{{translate('4ft 9in - 144cm')}}</option>
                        <option value="4ft 10in - 147cm" @if($member_height ==  '4ft 10in - 147cm') selected @endif >{{translate('4ft 10in - 147cm')}}</option>
                        <option value="4ft 11in - 149cm" @if($member_height ==  '4ft 11in - 149cm') selected @endif >{{translate('4ft 11in - 149cm')}}</option>
                        <option value="5ft - 152cm" @if($member_height ==  '5ft - 152cm') selected @endif >{{translate('5ft - 152cm')}}</option>
                        <option value="5ft 1in - 154cm" @if($member_height ==  '5ft 1in - 154cm') selected @endif >{{translate('5ft 1in - 154cm')}}</option>
                        <option value="5ft 2in - 157cm" @if($member_height ==  '5ft 2in - 157cm') selected @endif >{{translate('5ft 2in - 157cm')}}</option>
                        <option value="5ft 3in - 160cm" @if($member_height ==  '5ft 3in - 160cm') selected @endif >{{translate('5ft 3in - 160cm')}}</option>
                        <option value="5ft 4in - 162cm" @if($member_height ==  '5ft 4in - 162cm') selected @endif >{{translate('5ft 4in - 162cm')}}</option>
                        <option value="5ft 5in - 165cm" @if($member_height ==  '5ft 5in - 165cm') selected @endif >{{translate('5ft 5in - 165cm')}}</option>
                        <option value="5ft 6in - 167cm" @if($member_height ==  '5ft 6in - 167cm') selected @endif >{{translate('5ft 6in - 167cm')}}</option>
                        <option value="5ft 7in - 170cm" @if($member_height ==  '5ft 7in - 170cm') selected @endif >{{translate('5ft 7in - 170cm')}}</option>
                        <option value="5ft 8in - 172cm" @if($member_height ==  '5ft 8in - 172cm') selected @endif >{{translate('5ft 8in - 172cm')}}</option>
                        <option value="5ft 9in - 175cm" @if($member_height ==  '5ft 9in - 175cm') selected @endif >{{translate('5ft 9in - 175cm')}}</option>
                        <option value="5ft 10in - 177cm" @if($member_height ==  '5ft 10in - 177cm') selected @endif >{{translate('5ft 10in - 177cm')}}</option>
                        <option value="5ft 11in - 180cm" @if($member_height ==  '5ft 11in - 180cm') selected @endif >{{translate('5ft 11in - 180cm')}}</option>
                        <option value="6ft - 182cm" @if($member_height ==  '6ft - 182cm') selected @endif >{{translate('6ft - 182cm')}}</option>
                        <option value="6ft 1in - 185cm" @if($member_height ==  '6ft 1in - 185cm') selected @endif >{{translate('6ft 1in - 185cm')}}</option>
                        <option value="6ft 2in - 187cm" @if($member_height ==  '6ft 2in - 187cm') selected @endif >{{translate('6ft 2in - 187cm')}}</option>
                        <option value="6ft 3in - 190cm" @if($member_height ==  '6ft 3in - 190cm') selected @endif >{{translate('6ft 3in - 190cm')}}</option>
                        <option value="6ft 4in - 193cm" @if($member_height ==  '6ft 4in - 193cm') selected @endif >{{translate('6ft 4in - 193cm')}}</option>
                        <option value="6ft 5in - 195cm" @if($member_height ==  '6ft 5in - 195cm') selected @endif >{{translate('6ft 5in - 195cm')}}</option>
                        <option value="6ft 6in - 198cm" @if($member_height ==  '6ft 6in - 198cm') selected @endif >{{translate('6ft 6in - 198cm')}}</option>
                        <option value="6ft 7in - 200cm" @if($member_height ==  '6ft 7in - 200cm') selected @endif >{{translate('6ft 7in - 200cm')}}</option>
                        <option value="6ft 8in - 203cm" @if($member_height ==  '6ft 8in - 203cm') selected @endif >{{translate('6ft 8in - 203cm')}}</option>
                        <option value="6ft 9in - 205cm" @if($member_height ==  '6ft 9in - 205cm') selected @endif >{{translate('6ft 9in - 205cm')}}</option>
                        <option value="6ft 10in - 208cm" @if($member_height ==  '6ft 10in - 208cm') selected @endif >{{translate('6ft 10in - 208cm')}}</option>
                        <option value="6ft 11in - 210cm" @if($member_height ==  '6ft 11in - 210cm') selected @endif >{{translate('6ft 11in - 210cm')}}</option>
                        <option value="7ft - 213cm" @if($member_height ==  '7ft - 213cm') selected @endif >{{translate('7ft - 213cm')}}</option>
                        </select>
                  @error('height')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <div class="col-md-6">
                  <label for="weight">{{translate('Weight')}} ({{ translate('In Kg')}})</label>
                  <span class="text-danger">*</span>
                 <input type="number" name="weight" value="{{ !empty($member->physical_attributes->weight) ? $member->physical_attributes->weight : "" }}" step="any" placeholder="{{ translate('Weight') }}" class="form-control" required>
                  <!--@php $member_weight = !empty($member->physical_attributes->weight) ? $member->physical_attributes->weight : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="weight" step="any" class="form-control" placeholder="{{translate('Weight')}}" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="below 1 Lakh" @if($member_weight ==  'below 1 Lakh') selected @endif >{{translate('Below 1 Lakh')}}</option>
                        <option value="1 Lakh" @if($member_weight ==  '1 Lakh') selected @endif >{{translate('1 Lakh')}}</option>
                        <option value="Lakh 1-3" @if($member_weight ==  'Lakh 1-3') selected @endif >{{translate('Lakh 1-3')}}</option>
                        <option value="Lakh 4-6" @if($member_weight ==  'Lakh 4-6') selected @endif >{{translate('Lakh 4-6')}}</option>
                        <option value="Lakh 7-10" @if($member_weight ==  'Lakh 7-10') selected @endif >{{translate('Lakh 7-10')}}</option>
                        <option value="Lakh 10 and above" @if($member_weight ==  'Lakh 10 and above') selected @endif >{{translate('Lakh 10 and Above')}}</option>
                        <option value="No Income" @if($member_weight ==  'No Income') selected @endif >{{translate('No Income')}}</option>
                        </select>-->
                  @error('weight')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>

          <!--<div class="form-group row">
              <div class="col-md-6">
                  <label for="eye_color">{{translate('Eye color')}}</label>
                  <input type="text" name="eye_color" value="{{ !empty($member->physical_attributes->eye_color) ? $member->physical_attributes->eye_color : "" }}" class="form-control" placeholder="{{translate('Eye Color')}}" required>
                  @error('eye_color')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <div class="col-md-6">
                  <label for="hair_color">{{translate('Hair Color')}}</label>
                  <input type="text" name="hair_color" value="{{ !empty($member->physical_attributes->hair_color) ? $member->physical_attributes->hair_color : "" }}" placeholder="{{ translate('Hair Color') }}" class="form-control" required>
                  @error('hair_color')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>-->

          <div class="form-group row">
             <!-- <div class="col-md-6">
                  <label for="complexion">{{translate('Complexion')}}</label>
                  <input type="text" name="complexion" value="{{ !empty($member->physical_attributes->complexion) ? $member->physical_attributes->complexion : "" }}" class="form-control" placeholder="{{translate('Complexion')}}" required>
                  @php $member_complexion = !empty($member->physical_attributes->complexion) ? $member->physical_attributes->complexion : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="complexion" step="any" class="form-control" placeholder="{{translate('Complexion')}}" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="Very Fair" @if($member_complexion ==  'Very Fair') selected @endif >{{translate('Very Fair')}}</option>
                        <option value="Fair" @if($member_complexion ==  'Fair') selected @endif >{{translate('Fair')}}</option>
                        <option value="Wheatish" @if($member_complexion ==  'Wheatish ') selected @endif >{{translate('Wheatish')}}</option>
                        <option value="Wheatish Medium" @if($member_complexion ==  'Wheatish Medium') selected @endif >{{translate('Wheatish Medium')}}</option>
                        <option value="Wheatish Brown" @if($member_complexion ==  'Wheatish Brown') selected @endif >{{translate('Wheatish Brown')}}</option>
                        <option value="Dark" @if($member_complexion ==  'Dark') selected @endif >{{translate('Dark')}}</option>
                        </select>
                  @error('complexion')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>-->
              <div class="col-md-6">
                  <label for="blood_group">{{translate('Blood Group')}}</label>
                  <span class="text-danger">*</span>
                 <!-- <input type="text" name="blood_group" value="{{ !empty($member->physical_attributes->blood_group) ? $member->physical_attributes->blood_group : "" }}" placeholder="{{ translate('Blood Group') }}" class="form-control" required>-->
                   @php $member_blood_group = !empty($member->physical_attributes->blood_group) ? $member->physical_attributes->blood_group : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="blood_group" step="any" class="form-control" placeholder="{{translate('Blood Group')}}" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="A+" @if($member_blood_group ==  'A+') selected @endif >{{translate('A +')}}</option>
                        <option value="A-" @if($member_blood_group ==  'A-') selected @endif >{{translate('A - ')}}</option>
                        <option value="A1+" @if($member_blood_group ==  'A1+') selected @endif >{{translate('A1 +')}}</option>
                        <option value="A1-" @if($member_blood_group ==  'A1-') selected @endif >{{translate('A1 - ')}}</option>
                        <option value="A1B+" @if($member_blood_group ==  'A1B+') selected @endif >{{translate('A1B +')}}</option>
                        <option value="A1B-" @if($member_blood_group ==  'A1B-') selected @endif >{{translate('A1B - ')}}</option>
                        <option value="A2+" @if($member_blood_group ==  'A2+') selected @endif >{{translate('A2 +')}}</option>
                        <option value="A2-" @if($member_blood_group ==  'A2-') selected @endif >{{translate('A2 - ')}}</option>
                        <option value="A2B+" @if($member_blood_group ==  'A2B+') selected @endif >{{translate('A2B +')}}</option>
                        <option value="A2B-" @if($member_blood_group ==  'A2B-') selected @endif >{{translate('A2B - ')}}</option>
                        <option value="AB+" @if($member_blood_group ==  'AB+') selected @endif >{{translate('AB +')}}</option>
                        <option value="AB-" @if($member_blood_group ==  'AB-') selected @endif >{{translate('AB - ')}}</option>
                        <option value="B+" @if($member_blood_group ==  'B+') selected @endif >{{translate('B +')}}</option>
                        <option value="B-" @if($member_blood_group ==  'B-') selected @endif >{{translate('B - ')}}</option>
                        <option value="O+" @if($member_blood_group ==  'O+') selected @endif >{{translate('O+')}}</option>
                        <option value="O-" @if($member_blood_group ==  'O-') selected @endif >{{translate('O - ')}}</option>
                        <option value="Dont Know" @if($member_blood_group ==  'Dont Know') selected @endif >{{translate('Dont Know')}}</option>
                        </select>
                  @error('blood_group')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>

         <!-- <div class="form-group row">
              <div class="col-md-6">
                  <label for="body_type">{{translate('Body Type')}}</label>
                  <!--<input type="text" name="body_type" value="{{ !empty($member->physical_attributes->body_type) ? $member->physical_attributes->body_type : "" }}" class="form-control" placeholder="{{translate('Body Type')}}" required>
                  @php $member_body_type = !empty($member->physical_attributes->body_type) ? $member->physical_attributes->body_type : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="body_type" step="any" class="form-control" placeholder="{{translate('Body Type')}}" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="Slim" @if($member_body_type ==  'Slim') selected @endif >{{translate('Slim')}}</option>
                        <option value="Athletic" @if($member_body_type ==  'Athletic') selected @endif >{{translate('Athletic')}}</option>
                        <option value="Average" @if($member_body_type ==  'Average') selected @endif >{{translate('Average')}}</option>
                        <option value="Heavy" @if($member_body_type ==  'Heavy') selected @endif >{{translate('Heavy')}}</option>
                        </select>
                  @error('body_type')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <!--<div class="col-md-6">
                  <label for="body_art">{{translate('Body Art')}}</label>
                  <input type="text" name="body_art" value="{{ !empty($member->physical_attributes->body_art) ? $member->physical_attributes->body_art : "" }}" placeholder="{{ translate('Body Art') }}" class="form-control" required>
                  @error('body_art')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>-->
          <!--<div class="form-group row">
              <div class="col-md-6">
                  <label for="disability">{{translate('Disability')}}</label>
                  <input type="text" name="disability" value="{{ !empty($member->physical_attributes->disability) ? $member->physical_attributes->disability : "" }}" class="form-control" placeholder="{{translate('Disability')}}">
                  @error('disability')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>-->

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
          </div>
      </form>
    </div>
</div>
