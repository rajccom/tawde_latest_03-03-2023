@extends('frontend.layouts.app')

@section('content')
<div class="inner-header py-8">
 <div class="container">
<div class="col-lg-10 col-xl-8 col-xxl-10 mx-auto text-center">
 <h1>{{ translate('Contact Us') }}</h1>
 <p>When India was ruled by the British. a Maharashtrian in India, a Kshatriya Maratha surnamed Tawde from the Maratha community, received an honor.</p>
 </div></div>
</div>


    <div class="container">
        <div class="contact-us">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="contact-us my-5">
                        <h2 class="text-center mb-4">{{ translate('Can we help you?') }}</h2>
                        <div class="contact-form">
                            <div class="card-body">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="text-danger my-2 font-weight-bold">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form action="{{ route('contact-us.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label"> {{ translate('Name') }} <span
                                                class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ translate('Enter your full name') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"> {{ translate('Email') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="{{ translate('Enter Your E-mail') }}" required>
                                        <div class="form-text text-danger err-text">
                                            {{ translate('Please, enter the email address where you wish to receive our
                                                                                                                                    answer.') }}
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"> {{ translate('Subject') }} <span
                                                class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="{{ translate('Write the subject here') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"> {{ translate('Description') }} <span
                                                class="text-danger">*</span> </label>
                                        <textarea class="form-control" rows="8" placeholder=" {{ translate('Write your description here') }}"
                                            name="description" required style="resize: none;"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-block btn-primary">{{ translate('Send') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
 <div class="all-address py-8">	
 <div class="row gutters-10">
<div class="col-xl col-md-6">
<div class="mb-3">
<h4><b>Head Office</b></h4>
<p>1, Florence tower, 1st floor, </br>N.M. Joshi Marg, Lower Parel (E),</br>Currey Road (W) Mumbai-13.</p>
<div class="phone"><a href="tel:8454032187">8454032187</a> / <a href="tel:8454060264">8454060264</a></div>
</div>
</div>

<div class="col-xl col-md-6"><div class="mb-3">
<h4><b>Branch office</b> Borivali </h4>
<p>108, Ajantha square Mall, 1st floor, opp. </br>Ramleela Maidan, Near Khatav Hospital, </br>Court Galli, Borivali (w).</p>
<div class="phone"><a href="tel:8591877299 ">8591877299</a> / <a href="tel:9869365458">9869365458</a></div>
</div></div>
<div class="col-xl col-md-6"><div class="mb-3">
<h4><b>Branch office</b> Thane </h4>
<p>508, Paradise Tower, 5th floor, opp. </br>Alok hotel, Near McDonald, </br>Gokhale Road, Thane (w).</p>
<div class="phone"><a href="tel:9619930687">9619930687</a> / <a href="tel:02241006090">02241006090</a></div>
</div></div>
</div>

    <div class="col-lg-10 col-xl-8 col-xxl-10 mx-auto text-center">
<div class="email-addrees">Email : tawdevivah@gmail.com</div>
<div class="time-address">Timing : Monday to Saturday 04.00 pm to 08.00 pm  And on Sunday 10.00 am to 01.00 pm</div>
 </div>


</div>

 <div class="address-map py-8 pt-0">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.5515089310543!2d72.82944891437548!3d18.995404459438323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cef3974ed08b%3A0xd6ee67682610bd85!2sTawdeVivah!5e0!3m2!1sen!2sin!4v1672814038142!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>
		
    </div>
@endsection
