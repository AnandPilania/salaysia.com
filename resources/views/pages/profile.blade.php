@extends("app")

@section('head_title', 'Profile | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")


 <section class="body-start">
	<div class="container">
	<p class="heading-fulpage">Edit Profile</p>
	</div>	
</section>

<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Edit Profile</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      
      @include("_particles.user_sidebar")
      
      <div class="col-md-9 col-sm-9 content-right bg-gry">
        <div class="row">
            <div class="bg-whit clearfix">
          <div class="col-md-12" id="aboutus">
            <h1>Edit Profile</h1>
            <div class="message">
                        
                        @if (count($errors) > 0)
                          <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                              <ul style="list-style: none;">
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                        @endif
                                    
                  </div>
                  @if(Session::has('flash_message'))
                      <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>             
                          {{ Session::get('flash_message') }}
                      </div>
                  @endif
            <div class="well-box">
              <h3 class="page-title">Account Information</h3>


              {!! Form::open(array('url' => 'profile','class'=>'','id'=>'myProfile','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                <div class="form-group col-md-6">
                  <label for="first_name" class="control-label">First Name <span class="required">*</span></label>
                  <input type="text" required class="form-control input-md" placeholder="First Name" name="first_name" id="first_name" value="{{$user->first_name}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="last_name" class="control-label">Last Name <span class="required">*</span></label>
                  <input type="text" required class="form-control input-md" placeholder="last_name" name="last_name" id="last_name" value="{{$user->last_name}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="email" class="control-label">Email <span class="required">*</span></label>
                  <input type="text" class="form-control input-md" placeholder="Email" name="email" id="email" value="{{$user->email}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="mobile" class="control-label">Phone </label>
                  <input type="text" class="form-control input-md" placeholder="+01 123 456 78" name="mobile" id="mobile" value="{{$user->mobile}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="contact_email" class="control-label">Contact Email</label>
                  <input type="text" class="form-control input-md" placeholder="info@example.com" name="contact_email" id="contact_email" value="{{$user->contact_email}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="website" class="control-label">Website</label>
                  <input type="text" class="form-control input-md" placeholder="http://example.com" name="website" id="website" value="{{$user->website}}">
                </div>
<div class="form-group col-sm-12">
  <label class="control-label" for="email">D.o.b:</label>
  <input type="text" class="form-control input-md" placeholder="format like 19-oct-2016" name="dob" value="{{$user->dob}}">
 </div>
                <div class="form-group col-sm-12">
                  <label for="email" class="control-label">Address :-</label>
                  <textarea rows="7" class="form-control" name="address">{{$user->address}}</textarea>
                  <div class="textarea-resize"></div>
                </div>
  <div class="form-group col-sm-12">
<label for="email" class="control-label">Country :-</label>
<select name="country" class="form-control">
<option value="">Country...</option>
<option  <?php if(isset($user)){ if($user->country=='Afganistan'){ echo 'selected'; } } ?>  value="Afganistan">Afghanistan</option>
<option  <?php if(isset($user)){ if($user->country=='Albania'){ echo 'selected'; } } ?>  value="Albania">Albania</option>
<option  <?php if(isset($user)){ if($user->country=='Algeria'){ echo 'selected'; } } ?>  value="Algeria">Algeria</option>
<option  <?php if(isset($user)){ if($user->country=='American Samoa'){ echo 'selected'; } } ?>  value="American Samoa">American Samoa</option>
<option  <?php if(isset($user)){ if($user->country=='Andorra'){ echo 'selected'; } } ?>  value="Andorra">Andorra</option>
<option  <?php if(isset($user)){ if($user->country=='Angola'){ echo 'selected'; } } ?>  value="Angola">Angola</option>
<option  <?php if(isset($user)){ if($user->country=='Anguilla'){ echo 'selected'; } } ?>  value="Anguilla">Anguilla</option>
<option  <?php if(isset($user)){ if($user->country=='Antigua & Barbuda'){ echo 'selected'; } } ?>  value="Antigua & Barbuda">Antigua &amp; Barbuda</option>
<option  <?php if(isset($user)){ if($user->country=='Argentina'){ echo 'selected'; } } ?>  value="Argentina">Argentina</option>
<option  <?php if(isset($user)){ if($user->country=='Armenia'){ echo 'selected'; } } ?>  value="Armenia">Armenia</option>
<option  <?php if(isset($user)){ if($user->country=='Aruba'){ echo 'selected'; } } ?>  value="Aruba">Aruba</option>
<option  <?php if(isset($user)){ if($user->country=='Australia'){ echo 'selected'; } } ?>  value="Australia">Australia</option>
<option  <?php if(isset($user)){ if($user->country=='Austria'){ echo 'selected'; } } ?>  value="Austria">Austria</option>
<option  <?php if(isset($user)){ if($user->country=='Azerbaijan'){ echo 'selected'; } } ?>  value="Azerbaijan">Azerbaijan</option>
<option  <?php if(isset($user)){ if($user->country=='Bahamas'){ echo 'selected'; } } ?>  value="Bahamas">Bahamas</option>
<option  <?php if(isset($user)){ if($user->country=='Bahrain'){ echo 'selected'; } } ?>  value="Bahrain">Bahrain</option>
<option  <?php if(isset($user)){ if($user->country=='Bangladesh'){ echo 'selected'; } } ?>  value="Bangladesh">Bangladesh</option>
<option  <?php if(isset($user)){ if($user->country=='Barbados'){ echo 'selected'; } } ?>  value="Barbados">Barbados</option>
<option  <?php if(isset($user)){ if($user->country=='Belarus'){ echo 'selected'; } } ?>  value="Belarus">Belarus</option>
<option  <?php if(isset($user)){ if($user->country=='Belgium'){ echo 'selected'; } } ?>  value="Belgium">Belgium</option>
<option  <?php if(isset($user)){ if($user->country=='Belize'){ echo 'selected'; } } ?>  value="Belize">Belize</option>
<option  <?php if(isset($user)){ if($user->country=='Benin'){ echo 'selected'; } } ?>  value="Benin">Benin</option>
<option  <?php if(isset($user)){ if($user->country=='Bermuda'){ echo 'selected'; } } ?>  value="Bermuda">Bermuda</option>
<option  <?php if(isset($user)){ if($user->country=='Bhutan'){ echo 'selected'; } } ?>  value="Bhutan">Bhutan</option>
<option  <?php if(isset($user)){ if($user->country=='Bolivia'){ echo 'selected'; } } ?>  value="Bolivia">Bolivia</option>
<option  <?php if(isset($user)){ if($user->country=='Bonaire'){ echo 'selected'; } } ?>  value="Bonaire">Bonaire</option>
<option  <?php if(isset($user)){ if($user->country=='Bosnia & Herzegovina'){ echo 'selected'; } } ?>  value="Bosnia & Herzegovina">Bosnia &amp; Herzegovina</option>
<option  <?php if(isset($user)){ if($user->country=='Botswana'){ echo 'selected'; } } ?>  value="Botswana">Botswana</option>
<option  <?php if(isset($user)){ if($user->country=='Brazil'){ echo 'selected'; } } ?>  value="Brazil">Brazil</option>
<option  <?php if(isset($user)){ if($user->country=='British Indian Ocean Ter'){ echo 'selected'; } } ?>  value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option  <?php if(isset($user)){ if($user->country=='Brunei'){ echo 'selected'; } } ?>  value="Brunei">Brunei</option>
<option  <?php if(isset($user)){ if($user->country=='Bulgaria'){ echo 'selected'; } } ?>  value="Bulgaria">Bulgaria</option>
<option  <?php if(isset($user)){ if($user->country=='Burkina Faso'){ echo 'selected'; } } ?>  value="Burkina Faso">Burkina Faso</option>
<option  <?php if(isset($user)){ if($user->country=='Burundi'){ echo 'selected'; } } ?>  value="Burundi">Burundi</option>
<option  <?php if(isset($user)){ if($user->country=='Cambodia'){ echo 'selected'; } } ?>  value="Cambodia">Cambodia</option>
<option  <?php if(isset($user)){ if($user->country=='Cameroon'){ echo 'selected'; } } ?>  value="Cameroon">Cameroon</option>
<option  <?php if(isset($user)){ if($user->country=='Canada'){ echo 'selected'; } } ?>  value="Canada">Canada</option>
<option  <?php if(isset($user)){ if($user->country=='Canary Islands'){ echo 'selected'; } } ?>  value="Canary Islands">Canary Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Cape Verde'){ echo 'selected'; } } ?>  value="Cape Verde">Cape Verde</option>
<option  <?php if(isset($user)){ if($user->country=='Cayman Islands'){ echo 'selected'; } } ?>  value="Cayman Islands">Cayman Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Central African Republic'){ echo 'selected'; } } ?>  value="Central African Republic">Central African Republic</option>
<option  <?php if(isset($user)){ if($user->country=='Chad'){ echo 'selected'; } } ?>  value="Chad">Chad</option>
<option  <?php if(isset($user)){ if($user->country=='Channel Islands'){ echo 'selected'; } } ?>  value="Channel Islands">Channel Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Chile'){ echo 'selected'; } } ?>  value="Chile">Chile</option>
<option  <?php if(isset($user)){ if($user->country=='China'){ echo 'selected'; } } ?>  value="China">China</option>
<option  <?php if(isset($user)){ if($user->country=='Christmas Island'){ echo 'selected'; } } ?>  value="Christmas Island">Christmas Island</option>
<option  <?php if(isset($user)){ if($user->country=='Cocos Island'){ echo 'selected'; } } ?>  value="Cocos Island">Cocos Island</option>
<option  <?php if(isset($user)){ if($user->country=='Colombia'){ echo 'selected'; } } ?>  value="Colombia">Colombia</option>
<option  <?php if(isset($user)){ if($user->country=='Comoros'){ echo 'selected'; } } ?>  value="Comoros">Comoros</option>
<option  <?php if(isset($user)){ if($user->country=='Congo'){ echo 'selected'; } } ?>  value="Congo">Congo</option>
<option  <?php if(isset($user)){ if($user->country=='Cook Islands'){ echo 'selected'; } } ?>  value="Cook Islands">Cook Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Costa Rica'){ echo 'selected'; } } ?>  value="Costa Rica">Costa Rica</option>
<option  <?php if(isset($user)){ if($user->country=='Cote DIvoire'){ echo 'selected'; } } ?>  value="Cote DIvoire">Cote D'Ivoire</option>
<option  <?php if(isset($user)){ if($user->country=='Croatia'){ echo 'selected'; } } ?>  value="Croatia">Croatia</option>
<option  <?php if(isset($user)){ if($user->country=='Cuba'){ echo 'selected'; } } ?>  value="Cuba">Cuba</option>
<option  <?php if(isset($user)){ if($user->country=='Curaco'){ echo 'selected'; } } ?>  value="Curaco">Curacao</option>
<option  <?php if(isset($user)){ if($user->country=='Cyprus'){ echo 'selected'; } } ?>  value="Cyprus">Cyprus</option>
<option  <?php if(isset($user)){ if($user->country=='Czech Republic'){ echo 'selected'; } } ?>  value="Czech Republic">Czech Republic</option>
<option  <?php if(isset($user)){ if($user->country=='Denmark'){ echo 'selected'; } } ?>  value="Denmark">Denmark</option>
<option  <?php if(isset($user)){ if($user->country=='Djibouti'){ echo 'selected'; } } ?>  value="Djibouti">Djibouti</option>
<option  <?php if(isset($user)){ if($user->country=='Dominica'){ echo 'selected'; } } ?>  value="Dominica">Dominica</option>
<option  <?php if(isset($user)){ if($user->country=='Dominican Republic'){ echo 'selected'; } } ?>  value="Dominican Republic">Dominican Republic</option>
<option  <?php if(isset($user)){ if($user->country=='East Timor'){ echo 'selected'; } } ?>  value="East Timor">East Timor</option>
<option  <?php if(isset($user)){ if($user->country=='Ecuador'){ echo 'selected'; } } ?>  value="Ecuador">Ecuador</option>
<option  <?php if(isset($user)){ if($user->country=='Egypt'){ echo 'selected'; } } ?>  value="Egypt">Egypt</option>
<option  <?php if(isset($user)){ if($user->country=='El Salvador'){ echo 'selected'; } } ?>  value="El Salvador">El Salvador</option>
<option  <?php if(isset($user)){ if($user->country=='Equatorial Guinea'){ echo 'selected'; } } ?>  value="Equatorial Guinea">Equatorial Guinea</option>
<option  <?php if(isset($user)){ if($user->country=='Eritrea'){ echo 'selected'; } } ?>  value="Eritrea">Eritrea</option>
<option  <?php if(isset($user)){ if($user->country=='Estonia'){ echo 'selected'; } } ?>  value="Estonia">Estonia</option>
<option  <?php if(isset($user)){ if($user->country=='Ethiopia'){ echo 'selected'; } } ?>  value="Ethiopia">Ethiopia</option>
<option  <?php if(isset($user)){ if($user->country=='Falkland Islands'){ echo 'selected'; } } ?>  value="Falkland Islands">Falkland Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Faroe Islands'){ echo 'selected'; } } ?>  value="Faroe Islands">Faroe Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Fiji'){ echo 'selected'; } } ?>  value="Fiji">Fiji</option>
<option  <?php if(isset($user)){ if($user->country=='Finland'){ echo 'selected'; } } ?>  value="Finland">Finland</option>
<option  <?php if(isset($user)){ if($user->country=='France'){ echo 'selected'; } } ?>  value="France">France</option>
<option  <?php if(isset($user)){ if($user->country=='French Guiana'){ echo 'selected'; } } ?>  value="French Guiana">French Guiana</option>
<option  <?php if(isset($user)){ if($user->country=='French Polynesia'){ echo 'selected'; } } ?>  value="French Polynesia">French Polynesia</option>
<option  <?php if(isset($user)){ if($user->country=='French Southern Ter'){ echo 'selected'; } } ?>  value="French Southern Ter">French Southern Ter</option>
<option  <?php if(isset($user)){ if($user->country=='Gabon'){ echo 'selected'; } } ?>  value="Gabon">Gabon</option>
<option  <?php if(isset($user)){ if($user->country=='Gambia'){ echo 'selected'; } } ?>  value="Gambia">Gambia</option>
<option  <?php if(isset($user)){ if($user->country=='Georgia'){ echo 'selected'; } } ?>  value="Georgia">Georgia</option>
<option  <?php if(isset($user)){ if($user->country=='Germany'){ echo 'selected'; } } ?>  value="Germany">Germany</option>
<option  <?php if(isset($user)){ if($user->country=='Ghana'){ echo 'selected'; } } ?>  value="Ghana">Ghana</option>
<option  <?php if(isset($user)){ if($user->country=='Gibraltar'){ echo 'selected'; } } ?>  value="Gibraltar">Gibraltar</option>
<option  <?php if(isset($user)){ if($user->country=='Great Britain'){ echo 'selected'; } } ?>  value="Great Britain">Great Britain</option>
<option  <?php if(isset($user)){ if($user->country=='Greece'){ echo 'selected'; } } ?>  value="Greece">Greece</option>
<option  <?php if(isset($user)){ if($user->country=='Greenland'){ echo 'selected'; } } ?>  value="Greenland">Greenland</option>
<option  <?php if(isset($user)){ if($user->country=='Grenada'){ echo 'selected'; } } ?>  value="Grenada">Grenada</option>
<option  <?php if(isset($user)){ if($user->country=='Guadeloupe'){ echo 'selected'; } } ?>  value="Guadeloupe">Guadeloupe</option>
<option  <?php if(isset($user)){ if($user->country=='Guam'){ echo 'selected'; } } ?>  value="Guam">Guam</option>
<option  <?php if(isset($user)){ if($user->country=='Guatemala'){ echo 'selected'; } } ?>  value="Guatemala">Guatemala</option>
<option  <?php if(isset($user)){ if($user->country=='Guinea'){ echo 'selected'; } } ?>  value="Guinea">Guinea</option>
<option  <?php if(isset($user)){ if($user->country=='Guyana'){ echo 'selected'; } } ?>  value="Guyana">Guyana</option>
<option  <?php if(isset($user)){ if($user->country=='Haiti'){ echo 'selected'; } } ?>  value="Haiti">Haiti</option>
<option  <?php if(isset($user)){ if($user->country=='Hawaii'){ echo 'selected'; } } ?>  value="Hawaii">Hawaii</option>
<option  <?php if(isset($user)){ if($user->country=='Honduras'){ echo 'selected'; } } ?>  value="Honduras">Honduras</option>
<option  <?php if(isset($user)){ if($user->country=='Hong Kong'){ echo 'selected'; } } ?>  value="Hong Kong">Hong Kong</option>
<option  <?php if(isset($user)){ if($user->country=='Hungary'){ echo 'selected'; } } ?>  value="Hungary">Hungary</option>
<option  <?php if(isset($user)){ if($user->country=='Iceland'){ echo 'selected'; } } ?>  value="Iceland">Iceland</option>
<option  <?php if(isset($user)){ if($user->country=='India'){ echo 'selected'; } } ?>  value="India">India</option>
<option  <?php if(isset($user)){ if($user->country=='Indonesia'){ echo 'selected'; } } ?>  value="Indonesia">Indonesia</option>
<option  <?php if(isset($user)){ if($user->country=='Iran'){ echo 'selected'; } } ?>  value="Iran">Iran</option>
<option  <?php if(isset($user)){ if($user->country=='Iraq'){ echo 'selected'; } } ?>  value="Iraq">Iraq</option>
<option  <?php if(isset($user)){ if($user->country=='Ireland'){ echo 'selected'; } } ?>  value="Ireland">Ireland</option>
<option  <?php if(isset($user)){ if($user->country=='Isle of Man'){ echo 'selected'; } } ?>  value="Isle of Man">Isle of Man</option>
<option  <?php if(isset($user)){ if($user->country=='Israel'){ echo 'selected'; } } ?>  value="Israel">Israel</option>
<option  <?php if(isset($user)){ if($user->country=='Italy'){ echo 'selected'; } } ?>  value="Italy">Italy</option>
<option  <?php if(isset($user)){ if($user->country=='Jamaica'){ echo 'selected'; } } ?>  value="Jamaica">Jamaica</option>
<option  <?php if(isset($user)){ if($user->country=='Japan'){ echo 'selected'; } } ?>  value="Japan">Japan</option>
<option  <?php if(isset($user)){ if($user->country=='Jordan'){ echo 'selected'; } } ?>  value="Jordan">Jordan</option>
<option  <?php if(isset($user)){ if($user->country=='Kazakhstan'){ echo 'selected'; } } ?>  value="Kazakhstan">Kazakhstan</option>
<option  <?php if(isset($user)){ if($user->country=='Kenya'){ echo 'selected'; } } ?>  value="Kenya">Kenya</option>
<option  <?php if(isset($user)){ if($user->country=='Kiribati'){ echo 'selected'; } } ?>  value="Kiribati">Kiribati</option>
<option  <?php if(isset($user)){ if($user->country=='Korea North'){ echo 'selected'; } } ?>  value="Korea North">Korea North</option>
<option  <?php if(isset($user)){ if($user->country=='Korea Sout'){ echo 'selected'; } } ?>  value="Korea Sout">Korea South</option>
<option  <?php if(isset($user)){ if($user->country=='Kuwait'){ echo 'selected'; } } ?>  value="Kuwait">Kuwait</option>
<option  <?php if(isset($user)){ if($user->country=='Kyrgyzstan'){ echo 'selected'; } } ?>  value="Kyrgyzstan">Kyrgyzstan</option>
<option  <?php if(isset($user)){ if($user->country=='Laos'){ echo 'selected'; } } ?>  value="Laos">Laos</option>
<option  <?php if(isset($user)){ if($user->country=='Latvia'){ echo 'selected'; } } ?>  value="Latvia">Latvia</option>
<option  <?php if(isset($user)){ if($user->country=='Lebanon'){ echo 'selected'; } } ?>  value="Lebanon">Lebanon</option>
<option  <?php if(isset($user)){ if($user->country=='Lesotho'){ echo 'selected'; } } ?>  value="Lesotho">Lesotho</option>
<option  <?php if(isset($user)){ if($user->country=='Liberia'){ echo 'selected'; } } ?>  value="Liberia">Liberia</option>
<option  <?php if(isset($user)){ if($user->country=='Libya'){ echo 'selected'; } } ?>  value="Libya">Libya</option>
<option  <?php if(isset($user)){ if($user->country=='Liechtenstein'){ echo 'selected'; } } ?>  value="Liechtenstein">Liechtenstein</option>
<option  <?php if(isset($user)){ if($user->country=='Lithuania'){ echo 'selected'; } } ?>  value="Lithuania">Lithuania</option>
<option  <?php if(isset($user)){ if($user->country=='Luxembourg'){ echo 'selected'; } } ?>  value="Luxembourg">Luxembourg</option>
<option  <?php if(isset($user)){ if($user->country=='Macau'){ echo 'selected'; } } ?>  value="Macau">Macau</option>
<option  <?php if(isset($user)){ if($user->country=='Macedonia'){ echo 'selected'; } } ?>  value="Macedonia">Macedonia</option>
<option  <?php if(isset($user)){ if($user->country=='Madagascar'){ echo 'selected'; } } ?>  value="Madagascar">Madagascar</option>
<option  <?php if(isset($user)){ if($user->country=='Malaysia'){ echo 'selected'; } } ?>  value="Malaysia">Malaysia</option>
<option  <?php if(isset($user)){ if($user->country=='Malawi'){ echo 'selected'; } } ?>  value="Malawi">Malawi</option>
<option  <?php if(isset($user)){ if($user->country=='Maldives'){ echo 'selected'; } } ?>  value="Maldives">Maldives</option>
<option  <?php if(isset($user)){ if($user->country=='Mali'){ echo 'selected'; } } ?>  value="Mali">Mali</option>
<option  <?php if(isset($user)){ if($user->country=='Malta'){ echo 'selected'; } } ?>  value="Malta">Malta</option>
<option  <?php if(isset($user)){ if($user->country=='Marshall Islands'){ echo 'selected'; } } ?>  value="Marshall Islands">Marshall Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Martinique'){ echo 'selected'; } } ?>  value="Martinique">Martinique</option>
<option  <?php if(isset($user)){ if($user->country=='Mauritania'){ echo 'selected'; } } ?>  value="Mauritania">Mauritania</option>
<option  <?php if(isset($user)){ if($user->country=='Mauritius'){ echo 'selected'; } } ?>  value="Mauritius">Mauritius</option>
<option  <?php if(isset($user)){ if($user->country=='Mayotte'){ echo 'selected'; } } ?>  value="Mayotte">Mayotte</option>
<option  <?php if(isset($user)){ if($user->country=='Mexico'){ echo 'selected'; } } ?>  value="Mexico">Mexico</option>
<option  <?php if(isset($user)){ if($user->country=='Midway Islands'){ echo 'selected'; } } ?>  value="Midway Islands">Midway Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Moldova'){ echo 'selected'; } } ?>  value="Moldova">Moldova</option>
<option  <?php if(isset($user)){ if($user->country=='Monaco'){ echo 'selected'; } } ?>  value="Monaco">Monaco</option>
<option  <?php if(isset($user)){ if($user->country=='Mongolia'){ echo 'selected'; } } ?>  value="Mongolia">Mongolia</option>
<option  <?php if(isset($user)){ if($user->country=='Montserrat'){ echo 'selected'; } } ?>  value="Montserrat">Montserrat</option>
<option  <?php if(isset($user)){ if($user->country=='Morocco'){ echo 'selected'; } } ?>  value="Morocco">Morocco</option>
<option  <?php if(isset($user)){ if($user->country=='Mozambique'){ echo 'selected'; } } ?>  value="Mozambique">Mozambique</option>
<option  <?php if(isset($user)){ if($user->country=='Myanmar'){ echo 'selected'; } } ?>  value="Myanmar">Myanmar</option>
<option  <?php if(isset($user)){ if($user->country=='Nambia'){ echo 'selected'; } } ?>  value="Nambia">Nambia</option>
<option  <?php if(isset($user)){ if($user->country=='Nauru'){ echo 'selected'; } } ?>  value="Nauru">Nauru</option>
<option  <?php if(isset($user)){ if($user->country=='Nepal'){ echo 'selected'; } } ?>  value="Nepal">Nepal</option>
<option  <?php if(isset($user)){ if($user->country=='Netherland Antilles'){ echo 'selected'; } } ?>  value="Netherland Antilles">Netherland Antilles</option>
<option  <?php if(isset($user)){ if($user->country=='Netherlands'){ echo 'selected'; } } ?>  value="Netherlands">Netherlands (Holland, Europe)</option>
<option  <?php if(isset($user)){ if($user->country=='Nevis'){ echo 'selected'; } } ?>  value="Nevis">Nevis</option>
<option  <?php if(isset($user)){ if($user->country=='New Caledonia'){ echo 'selected'; } } ?>  value="New Caledonia">New Caledonia</option>
<option  <?php if(isset($user)){ if($user->country=='New Zealand'){ echo 'selected'; } } ?>  value="New Zealand">New Zealand</option>
<option  <?php if(isset($user)){ if($user->country=='Nicaragua'){ echo 'selected'; } } ?>  value="Nicaragua">Nicaragua</option>
<option  <?php if(isset($user)){ if($user->country=='Niger'){ echo 'selected'; } } ?>  value="Niger">Niger</option>
<option  <?php if(isset($user)){ if($user->country=='Nigeria'){ echo 'selected'; } } ?>  value="Nigeria">Nigeria</option>
<option  <?php if(isset($user)){ if($user->country=='Niue'){ echo 'selected'; } } ?>  value="Niue">Niue</option>
<option  <?php if(isset($user)){ if($user->country=='Norfolk Island'){ echo 'selected'; } } ?>  value="Norfolk Island">Norfolk Island</option>
<option  <?php if(isset($user)){ if($user->country=='Norway'){ echo 'selected'; } } ?>  value="Norway">Norway</option>
<option  <?php if(isset($user)){ if($user->country=='Oman'){ echo 'selected'; } } ?>  value="Oman">Oman</option>
<option  <?php if(isset($user)){ if($user->country=='Pakistan'){ echo 'selected'; } } ?>  value="Pakistan">Pakistan</option>
<option  <?php if(isset($user)){ if($user->country=='Palau Island'){ echo 'selected'; } } ?>  value="Palau Island">Palau Island</option>
<option  <?php if(isset($user)){ if($user->country=='Palestine'){ echo 'selected'; } } ?>  value="Palestine">Palestine</option>
<option  <?php if(isset($user)){ if($user->country=='Panama'){ echo 'selected'; } } ?>  value="Panama">Panama</option>
<option  <?php if(isset($user)){ if($user->country=='Papua New Guinea'){ echo 'selected'; } } ?>  value="Papua New Guinea">Papua New Guinea</option>
<option  <?php if(isset($user)){ if($user->country=='Paraguay'){ echo 'selected'; } } ?>  value="Paraguay">Paraguay</option>
<option  <?php if(isset($user)){ if($user->country=='Peru'){ echo 'selected'; } } ?>  value="Peru">Peru</option>
<option  <?php if(isset($user)){ if($user->country=='Phillipines'){ echo 'selected'; } } ?>  value="Phillipines">Philippines</option>
<option  <?php if(isset($user)){ if($user->country=='Pitcairn Island'){ echo 'selected'; } } ?>  value="Pitcairn Island">Pitcairn Island</option>
<option  <?php if(isset($user)){ if($user->country=='Poland'){ echo 'selected'; } } ?>  value="Poland">Poland</option>
<option  <?php if(isset($user)){ if($user->country=='Portugal'){ echo 'selected'; } } ?>  value="Portugal">Portugal</option>
<option  <?php if(isset($user)){ if($user->country=='Puerto Rico'){ echo 'selected'; } } ?>  value="Puerto Rico">Puerto Rico</option>
<option  <?php if(isset($user)){ if($user->country=='Qatar'){ echo 'selected'; } } ?>  value="Qatar">Qatar</option>
<option  <?php if(isset($user)){ if($user->country=='Republic of Montenegro'){ echo 'selected'; } } ?>  value="Republic of Montenegro">Republic of Montenegro</option>
<option  <?php if(isset($user)){ if($user->country=='Republic of Serbia'){ echo 'selected'; } } ?>  value="Republic of Serbia">Republic of Serbia</option>
<option  <?php if(isset($user)){ if($user->country=='Reunion'){ echo 'selected'; } } ?>  value="Reunion">Reunion</option>
<option  <?php if(isset($user)){ if($user->country=='Romania'){ echo 'selected'; } } ?>  value="Romania">Romania</option>
<option  <?php if(isset($user)){ if($user->country=='Russia'){ echo 'selected'; } } ?>  value="Russia">Russia</option>
<option  <?php if(isset($user)){ if($user->country=='Rwanda'){ echo 'selected'; } } ?>  value="Rwanda">Rwanda</option>
<option  <?php if(isset($user)){ if($user->country=='St Barthelemy'){ echo 'selected'; } } ?>  value="St Barthelemy">St Barthelemy</option>
<option  <?php if(isset($user)){ if($user->country=='St Eustatius'){ echo 'selected'; } } ?>  value="St Eustatius">St Eustatius</option>
<option  <?php if(isset($user)){ if($user->country=='St Helena'){ echo 'selected'; } } ?>  value="St Helena">St Helena</option>
<option  <?php if(isset($user)){ if($user->country=='St Kitts-Nevis'){ echo 'selected'; } } ?>  value="St Kitts-Nevis">St Kitts-Nevis</option>
<option  <?php if(isset($user)){ if($user->country=='St Lucia'){ echo 'selected'; } } ?>  value="St Lucia">St Lucia</option>
<option  <?php if(isset($user)){ if($user->country=='St Maarten'){ echo 'selected'; } } ?>  value="St Maarten">St Maarten</option>
<option  <?php if(isset($user)){ if($user->country=='St Pierre & Miquelon'){ echo 'selected'; } } ?>  value="St Pierre & Miquelon">St Pierre &amp; Miquelon</option>
<option  <?php if(isset($user)){ if($user->country=='St Vincent & Grenadines'){ echo 'selected'; } } ?>  value="St Vincent & Grenadines">St Vincent &amp; Grenadines</option>
<option  <?php if(isset($user)){ if($user->country=='Saipan'){ echo 'selected'; } } ?>  value="Saipan">Saipan</option>
<option  <?php if(isset($user)){ if($user->country=='Samoa'){ echo 'selected'; } } ?>  value="Samoa">Samoa</option>
<option  <?php if(isset($user)){ if($user->country=='Samoa American'){ echo 'selected'; } } ?>  value="Samoa American">Samoa American</option>
<option  <?php if(isset($user)){ if($user->country=='San Marino'){ echo 'selected'; } } ?>  value="San Marino">San Marino</option>
<option  <?php if(isset($user)){ if($user->country=='Sao Tome & Principe'){ echo 'selected'; } } ?>  value="Sao Tome & Principe">Sao Tome &amp; Principe</option>
<option  <?php if(isset($user)){ if($user->country=='Saudi Arabia'){ echo 'selected'; } } ?>  value="Saudi Arabia">Saudi Arabia</option>
<option  <?php if(isset($user)){ if($user->country=='Senegal'){ echo 'selected'; } } ?>  value="Senegal">Senegal</option>
<option  <?php if(isset($user)){ if($user->country=='Serbia'){ echo 'selected'; } } ?>  value="Serbia">Serbia</option>
<option  <?php if(isset($user)){ if($user->country=='Seychelles'){ echo 'selected'; } } ?>  value="Seychelles">Seychelles</option>
<option  <?php if(isset($user)){ if($user->country=='Sierra Leone'){ echo 'selected'; } } ?>  value="Sierra Leone">Sierra Leone</option>
<option  <?php if(isset($user)){ if($user->country=='Singapore'){ echo 'selected'; } } ?>  value="Singapore">Singapore</option>
<option  <?php if(isset($user)){ if($user->country=='Slovakia'){ echo 'selected'; } } ?>  value="Slovakia">Slovakia</option>
<option  <?php if(isset($user)){ if($user->country=='Slovenia'){ echo 'selected'; } } ?>  value="Slovenia">Slovenia</option>
<option  <?php if(isset($user)){ if($user->country=='Solomon'){ echo 'selected'; } } ?>  value="Solomon Islands">Solomon Islands</option>
<option  <?php if(isset($user)){ if($user->country=='Somalia'){ echo 'selected'; } } ?>  value="Somalia">Somalia</option>
<option  <?php if(isset($user)){ if($user->country=='South Africa'){ echo 'selected'; } } ?>  value="South Africa">South Africa</option>
<option  <?php if(isset($user)){ if($user->country=='Spain'){ echo 'selected'; } } ?>  value="Spain">Spain</option>
<option  <?php if(isset($user)){ if($user->country=='Sri Lanka'){ echo 'selected'; } } ?>  value="Sri Lanka">Sri Lanka</option>
<option  <?php if(isset($user)){ if($user->country=='Sudan'){ echo 'selected'; } } ?>  value="Sudan">Sudan</option>
<option  <?php if(isset($user)){ if($user->country=='Suriname'){ echo 'selected'; } } ?>  value="Suriname">Suriname</option>
<option  <?php if(isset($user)){ if($user->country=='Swaziland'){ echo 'selected'; } } ?>  value="Swaziland">Swaziland</option>
<option  <?php if(isset($user)){ if($user->country=='Sweden'){ echo 'selected'; } } ?>  value="Sweden">Sweden</option>
<option  <?php if(isset($user)){ if($user->country=='Switzerland'){ echo 'selected'; } } ?>  value="Switzerland">Switzerland</option>
<option  <?php if(isset($user)){ if($user->country=='Syria'){ echo 'selected'; } } ?>  value="Syria">Syria</option>
<option  <?php if(isset($user)){ if($user->country=='Tahiti'){ echo 'selected'; } } ?>  value="Tahiti">Tahiti</option>
<option  <?php if(isset($user)){ if($user->country=='Taiwan'){ echo 'selected'; } } ?>  value="Taiwan">Taiwan</option>
<option  <?php if(isset($user)){ if($user->country=='Tajikistan'){ echo 'selected'; } } ?>  value="Tajikistan">Tajikistan</option>
<option  <?php if(isset($user)){ if($user->country=='Tanzania'){ echo 'selected'; } } ?>  value="Tanzania">Tanzania</option>
<option  <?php if(isset($user)){ if($user->country=='Thailand'){ echo 'selected'; } } ?>  value="Thailand">Thailand</option>
<option  <?php if(isset($user)){ if($user->country=='Togo'){ echo 'selected'; } } ?>  value="Togo">Togo</option>
<option  <?php if(isset($user)){ if($user->country=='Tokelau'){ echo 'selected'; } } ?>  value="Tokelau">Tokelau</option>
<option  <?php if(isset($user)){ if($user->country=='Tonga'){ echo 'selected'; } } ?>  value="Tonga">Tonga</option>
<option  <?php if(isset($user)){ if($user->country=='Trinidad & Tobago'){ echo 'selected'; } } ?>  value="Trinidad & Tobago">Trinidad &amp; Tobago</option>
<option  <?php if(isset($user)){ if($user->country=='Tunisia'){ echo 'selected'; } } ?>  value="Tunisia">Tunisia</option>
<option  <?php if(isset($user)){ if($user->country=='Turkey'){ echo 'selected'; } } ?>  value="Turkey">Turkey</option>
<option  <?php if(isset($user)){ if($user->country=='Turkmenistan'){ echo 'selected'; } } ?>  value="Turkmenistan">Turkmenistan</option>
<option  <?php if(isset($user)){ if($user->country=='Turks &amp; Caicos Is'){ echo 'selected'; } } ?>  value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option  <?php if(isset($user)){ if($user->country=='Tuvalu'){ echo 'selected'; } } ?>  value="Tuvalu">Tuvalu</option>
<option  <?php if(isset($user)){ if($user->country=='Uganda'){ echo 'selected'; } } ?>  value="Uganda">Uganda</option>
<option  <?php if(isset($user)){ if($user->country=='Ukraine'){ echo 'selected'; } } ?>  value="Ukraine">Ukraine</option>
<option  <?php if(isset($user)){ if($user->country=='United Arab Erimates'){ echo 'selected'; } } ?>  value="United Arab Erimates">United Arab Emirates</option>
<option  <?php if(isset($user)){ if($user->country=='United Kingdom'){ echo 'selected'; } } ?>  value="United Kingdom">United Kingdom</option>
<option  <?php if(isset($user)){ if($user->country=='United States of America'){ echo 'selected'; } } ?>  value="United States of America">United States of America</option>
<option  <?php if(isset($user)){ if($user->country=='Uraguay'){ echo 'selected'; } } ?>  value="Uraguay">Uruguay</option>
<option  <?php if(isset($user)){ if($user->country=='Uzbekistan'){ echo 'selected'; } } ?>  value="Uzbekistan">Uzbekistan</option>
<option  <?php if(isset($user)){ if($user->country=='Vanuatu'){ echo 'selected'; } } ?>  value="Vanuatu">Vanuatu</option>
<option  <?php if(isset($user)){ if($user->country=='Vatican City State'){ echo 'selected'; } } ?>  value="Vatican City State">Vatican City State</option>
<option  <?php if(isset($user)){ if($user->country=='Venezuela'){ echo 'selected'; } } ?>  value="Venezuela">Venezuela</option>
<option  <?php if(isset($user)){ if($user->country=='Vietnam'){ echo 'selected'; } } ?>  value="Vietnam">Vietnam</option>
<option  <?php if(isset($user)){ if($user->country=='Virgin Islands (Brit)'){ echo 'selected'; } } ?>  value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option  <?php if(isset($user)){ if($user->country=='Virgin Islands (USA)'){ echo 'selected'; } } ?>  value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option  <?php if(isset($user)){ if($user->country=='Wake Island'){ echo 'selected'; } } ?>  value="Wake Island">Wake Island</option>
<option  <?php if(isset($user)){ if($user->country=='Wallis & Futana Is'){ echo 'selected'; } } ?>  value="Wallis & Futana Is">Wallis &amp; Futana Is</option>
<option  <?php if(isset($user)){ if($user->country=='Yemen'){ echo 'selected'; } } ?>  value="Yemen">Yemen</option>
<option  <?php if(isset($user)){ if($user->country=='Zaire'){ echo 'selected'; } } ?>  value="Zaire">Zaire</option>
<option  <?php if(isset($user)){ if($user->country=='Zambia'){ echo 'selected'; } } ?>  value="Zambia">Zambia</option>
<option  <?php if(isset($user)){ if($user->country=='Zimbabwe'){ echo 'selected'; } } ?>  value="Zimbabwe">Zimbabwe</option>
</select>
  </div>
                <div class="clearfix"></div>
               
            </div>
            <div class="well-box">
              <h3 class="page-title">Social Links</h3>
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Facebook Url:-</label>
                  <div class="col-sm-9">
                    <input type="text" name="facebook_url" value="{{$user->facebook_url}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Twitter Url:-</label>
                  <div class="col-sm-9">
                    <input type="text" name="twitter_url" value="{{$user->twitter_url}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Linkedin Url:-</label>
                  <div class="col-sm-9">
                    <input type="text" name="linkedin_url" value="{{$user->linkedin_url}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dribbble Url:-</label>
                  <div class="col-sm-9">
                    <input type="text" name="dribbble_url" value="{{$user->dribbble_url}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Instagram Url:-</label>
                  <div class="col-sm-9">
                    <input type="text" name="instagram_url" value="{{$user->instagram_url}}" class="form-control">
                  </div>
                </div>
              </div>
            </div>
             
            <div class="well-box">
              <h3 class="page-title">User Avatar</h3>              
                <div class="col-md-12 user-picture"> 
                        <input type="file" name="user_icon" id="input-file">
                </div>
              <div class="clearfix"></div>
            </div>
            <div class="center mb20">
              <button class="btn btn-primary btn-xl" type="submit">Save Settings</button>
            </div>

            {!! Form::close() !!} 
          </div>
            
        </div>
      </div>
    </div>
  </div>
</div>
@endsection