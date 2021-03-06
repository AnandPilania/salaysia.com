@extends('app')
@section('head_title', 'Downloads'.' | '.getcong('site_name') )    
@section('content')
<section class="body-start">
	<div class="container">
	<p class="heading-fulpage padding-left">{{trans('home.downloads_section')}}</p>
	</div>	
</section>
<section class="tabs-unisingle-page">
	<div class="container">
		<div class="row tabd-centered">
			
			<div class="tab-content padding-text-center">
					<div id="uni" class="tab-pane fade in active">
					  <div class="row">
						<div class="col-sm-7 text-center">
							<div class="general-faq text-left circle-icon">
								<h3 class="left-side-download">{{trans('home.downloads_ads')}}</h3>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.affc')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.ffps')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.ffms')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.afcin')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.afsmf')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.affas')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.aftc')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.aftpo')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.aftvf')}}</p>
								<p><i class="fa fa-circle" aria-hidden="true"></i>{{trans('home.aftrf')}}</p>
								
							</div>
						</div>
						<div class="col-sm-5">
							<div class="lookingfor-stdy clearfix">
								<p class="heaidng-stdy-looking">{{trans('home.ltsa')}}</p>
								<div class="white-box">
									<p>{{trans('home.wchy')}}</p>
								</div>
								<div class="message">
                         
                                                                    @if (count($errors) > 0)
                                                                        <div class="alert alert-danger">

                                                                            <ul style="list-style: none;">
                                                                                @foreach ($errors->all() as $error)
                                                                                    <li>{{ $error }}</li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endif

                                                                </div>
                                                                @if(Session::has('flash_message'))

                                                                  <div class="alert alert-success fade in">

                                                                     {{ Session::get('flash_message') }}
                                                                   </div>


                                                                @endif 
							</div>
							<div class="lookingfor-stdy-form">
								{!! Form::open(array('url' => 'contact_send','class'=>'','id'=>'search','role'=>'form')) !!}
									<div class="row">
										<div class="col-sm-6">
                                                                                    <input placeholder="{{trans('home.fname')}}" type="text" name="firstname"  required="required">
										</div>
										<div class="col-sm-6">
										<input placeholder="{{trans('home.lname')}} " type="text" name="lastname"  required="required" >
										</div>										
									</div>
									<div class="row">
										<div class="col-sm-12">
                                                                                    <input placeholder="{{trans('home.email')}}" type="text" name="email"  required="required">
										</div>										
														</div>
									<div class="row">
									<div class="col-sm-6">
            <select  class="select" name="countryCode" id="countryCode">
<option value="">{{trans('home.sycc')}}</option>
<option selected="selected" value="91">India (+91)</option><option value="93">Afghanistan (+93)</option><option value="355">Albania (+355)</option><option value="213">Algeria (+213)</option><option value="264">Anguilla (+264)</option><option value="268">Antigua &amp; Barbuda (+268)</option><option value="54">Argentina (+54)</option><option value="374">Armenia (+374)</option><option value="297">Aruba (+297)</option><option value="61">Australia (+61)</option><option value="43">Austria (+43)</option><option value="994">Azerbaijan (+994)</option><option value="242">Bahamas (+242)</option><option value="973">Bahrain (+973)</option><option value="880">Bangladesh (+880)</option><option value="246">Barbados (+246)</option><option value="375">Belarus (+375)</option><option value="32">Belgium (+32)</option><option value="501">Belize (+501)</option><option value="229">Benin (+229)</option><option value="441">Bermuda (+441)</option><option value="975">Bhutan (+975)</option><option value="591">Bolivia (+591)</option><option value="387">Bosnia and Herzegovina (+387)</option><option value="267">Botswana (+267)</option><option value="55">Brazil (+55)</option><option value="284">British Virgin Islands (+284)</option><option value="673">Brunei (+673)</option><option value="359">Bulgaria (+359)</option><option value="226">Burkina Faso (+226)</option><option value="95">Burma (+95)</option><option value="257">Burundi (+257)</option><option value="855">Cambodia (+855)</option><option value="237">Cameroon (+237)</option><option value="1">Canada (+1)</option><option value="345">Cayman Islands (+345)</option><option value="236">Central African Republic (+236)</option><option value="235">Chad (+235)</option><option value="56">Chile (+56)</option><option value="86">China (+86)</option><option value="57">Colombia (+57)</option><option value="269">Comoros (+269)</option><option value="242">Congo (+242)</option><option value="243">Congo (Democratic Republic) (+243)</option><option value="682">Cook Islands (+682)</option><option value="506">Costa Rica (+506)</option><option value="385">Croatia (+385)</option><option value="53">Cuba (+53)</option><option value="599">Curacao (+599)</option><option value="357">Cyprus (+357)</option><option value="420">Czech Republic (+420)</option><option value="45">Denmark (+45)</option><option value="253">Djibouti (+253)</option><option value="767">Dominica (+767)</option><option value="829">Dominican Republic (+829)</option><option value="670">East Timor (+670)</option><option value="593">Ecuador (+593)</option><option value="20">Egypt (+20)</option><option value="503">El Salvador (+503)</option><option value="240">Equitorial Guinea (+240)</option><option value="291">Eritrea (+291)</option><option value="372">Estonia (+372)</option><option value="251">Ethiopia (+251)</option><option value="679">Fiji (+679)</option><option value="358">Finland (+358)</option><option value="33">France (+33)</option><option value="594">French Guyana (+594)</option><option value="689">French Polynesia (+689)</option><option value="241">Gabon (+241)</option><option value="220">Gambia (+220)</option><option value="995">Georgia (+995)</option><option value="49">Germany (+49)</option><option value="233">Ghana (+233)</option><option value="350">Gibraltar (+350)</option><option value="30">Greece (+30)</option><option value="299">Greenland (+299)</option><option value="473">Grenada (+473)</option><option value="590">Guadeloupe (+590)</option><option value="671">Guam (+671)</option><option value="502">Guatemala (+502)</option><option value="224">Guinea (+224)</option><option value="245">Guinea-Bissau (+245)</option><option value="592">Guyana (+592)</option><option value="509">Haiti (+509)</option><option value="31">Holland (+31)</option><option value="504">Honduras (+504)</option><option value="852">Hong Kong (+852)</option><option value="36">Hungary (+36)</option><option value="354">Iceland (+354)</option><option value="62">Indonesia (+62)</option><option value="98">Iran (+98)</option><option value="964">Iraq (+964)</option><option value="972">Israel (+972)</option><option value="39">Italy (+39)</option><option value="225">Ivory Coast (+225)</option><option value="876">Jamaica (+876)</option><option value="81">Japan (+81)</option><option value="962">Jordan (+962)</option><option value="7">Kazakhstan (+7)</option><option value="254">Kenya (+254)</option><option value="686">Kiribati (+686)</option><option value="965">Kuwait (+965)</option><option value="996">Kyrgyzstan (+996)</option><option value="856">Laos (+856)</option><option value="371">Latvia (+371)</option><option value="961">Lebanon (+961)</option><option value="266">Lesotho (+266)</option><option value="231">Liberia (+231)</option><option value="218">Libya (+218)</option><option value="423">Liechtenstein (+423)</option><option value="370">Lithuania (+370)</option><option value="352">Luxembourg (+352)</option><option value="389">Macedonia (+389)</option><option value="261">Madagascar (+261)</option><option value="351">Madeira (+351)</option><option value="265">Malawi (+265)</option><option value="60">Malaysia (+60)</option><option value="960">Maldives (+960)</option><option value="223">Mali (+223)</option><option value="356">Malta (+356)</option><option value="692">Marshall Islands (+692)</option><option value="596">Martinique (+596)</option><option value="222">Mauritania (+222)</option><option value="230">Mauritius (+230)</option><option value="52">Mexico (+52)</option><option value="691">Micronesia (+691)</option><option value="373">Moldova (+373)</option><option value="377">Monaco (+377)</option><option value="976">Mongolia (+976)</option><option value="664">Montserrat (+664)</option><option value="212">Morocco (+212)</option><option value="258">Mozambique (+258)</option><option value="95">Myanmar (+95)</option><option value="264">Namibia (+264)</option><option value="674">Nauru (+674)</option><option value="977">Nepal (+977)</option><option value="31">Netherlands (+31)</option><option value="687">New Caledonia (+687)</option><option value="64">New Zealand (+64)</option><option value="505">Nicaragua (+505)</option><option value="227">Niger (+227)</option><option value="234">Nigeria (+234)</option><option value="672">Norfolk Island (+672)</option><option value="47">Norway (+47)</option><option value="968">Oman (+968)</option><option value="92">Pakistan (+92)</option><option value="680">Palau (+680)</option><option value="970">Palestinian Authority (+970)</option><option value="507">Panama (+507)</option><option value="675">Papua New Guinea (+675)</option><option value="595">Paraguay (+595)</option><option value="51">Peru (+51)</option><option value="63">Philippines (+63)</option><option value="48">Poland (+48)</option><option value="351">Portugal (+351)</option><option value="787">Puerto Rico (+787)</option><option value="974">Qatar (+974)</option><option value="353">Republic of Ireland (+353)</option><option value="967">Republic of Yemen (+967)</option><option value="262">Reunion (+262)</option><option value="40">Romania (+40)</option><option value="7">Russia (+7)</option><option value="250">Rwanda (+250)</option><option value="378">San Marino (+378)</option><option value="239">Sao Tome and Principe (+239)</option><option value="966">Saudi Arabia (+966)</option><option value="221">Senegal (+221)</option><option value="381">Serbia (+381)</option><option value="248">Seychelles (+248)</option><option value="232">Sierra Leone (+232)</option><option value="65">Singapore (+65)</option><option value="421">Slovakia (+421)</option><option value="386">Slovenia (+386)</option><option value="677">Solomon Islands (+677)</option><option value="252">Somalia (+252)</option><option value="27">South Africa (+27)</option><option value="82">South Korea (+82)</option><option value="34">Spain (+34)</option><option value="94">Sri Lanka (+94)</option><option value="290">St Helena (+290)</option><option value="784">St Vincent (+784)</option><option value="590">St. Barthelemy (+590)</option><option value="869">St. Christopher (+869)</option><option value="340">St. Croix (+340)</option><option value="599">St. Eustatius (+599)</option><option value="340">St. John (+340)</option><option value="869">St. Kitts Nevis (+869)</option><option value="758">St. Lucia (+758)</option><option value="721">St. Maarten (+721)</option><option value="590">St. Martin (+590)</option><option value="340">St. Thomas (+340)</option><option value="249">Sudan (+249)</option><option value="597">Suriname (+597)</option><option value="268">Swaziland (+268)</option><option value="46">Sweden (+46)</option><option value="41">Switzerland (+41)</option><option value="963">Syria (+963)</option><option value="689">Tahiti (+689)</option><option value="886">Taiwan (+886)</option><option value="992">Tajikistan (+992)</option><option value="255">Tanzania (+255)</option><option value="66">Thailand (+66)</option><option value="670">Tinian (+670)</option><option value="228">Togo (+228)</option><option value="676">Tonga (+676)</option><option value="284">Tortola (+284)</option><option value="868">Trinidad Tobago (+868)</option><option value="691">Truk (+691)</option><option value="216">Tunisia (+216)</option><option value="90">Turkey (+90)</option><option value="993">Turkmenistan (+993)</option><option value="688">Tuvalu (+688)</option><option value="971">UAE (+971)</option><option value="340">US Virgin Islands (+340)</option><option value="256">Uganda (+256)</option><option value="380">Ukraine (+380)</option><option value="784">Union Island (+784)</option><option value="44">United Kingdom (+44)</option><option value="1">United States (+1)</option><option value="598">Uruguay (+598)</option><option value="998">Uzbekistan (+998)</option><option value="678">Vanuatu (+678)</option><option value="379">Vatican City (+379)</option><option value="58">Venezuela (+58)</option><option value="84">Vietnam (+84)</option><option value="808">Wake Island (+808)</option><option value="685">Western Samoa (+685)</option><option value="967">Yemen (+967)</option><option value="38">Yugoslavia (+38)</option><option value="243">Zaire (+243)</option><option value="260">Zambia (+260)</option><option value="263">Zimbabwe (+263)</option> 
</select>
										</div>	
										<div class="col-sm-6">
                                                                                    <input placeholder="{{trans('home.mobile_num')}}" type="tel" name="mobile">
										</div>										
									</div>
									<div class="row">
										<select id="sel1" name="level">
											<option>{{trans('home.casl')}}</option>
						<option value="Careerbased/Vocational">{{trans('home.cbv')}}</option>
                                                <option value="Undergraduate">{{trans('home.Undergraduate')}}</option>
                                                <option value="Postgraduate">{{trans('home.Postgraduate')}}</option>
                                                <option value="Doctoral degree - PhD">{{trans('home.Doctoral_Degrees')}}</option>
                                                <option value="MBA">{{trans('home.MBAs')}}</option>
									</select>									
									</div>
<div class="row">
<select class="select" name="monthRange" id="monthRange" required="required"s>
<option value="">{{trans('home.wdypts')}}</option>
<optgroup label="2016">
<option value="July - Oct 2016">July - Oct</option>	
<option value="Nov - Dec 2016">Nov - Dec</option>	
</optgroup>
<optgroup label="2017">
<option value="Jan - March 2017">Jan - March</option>	
<option value="April - June 2017">April - June</option>	
<option value="July - Oct 2017">July - Oct</option>	
<option value="Nov - Dec 2017">Nov - Dec</option>	
</optgroup>
<optgroup label="2018">
<option value="Jan - March 2018">Jan - March</option>	
<option value="April - June 2018">April - June</option>	
<option value="July - Oct 2018">July - Oct</option>	
<option value="Nov - Dec 2018">Nov - Dec</option>	
</optgroup>
<optgroup label="2019">
<option value="Jan - March 2019">Jan - March</option>	
<option value="April - June 2019">April - June</option>	
</optgroup>	
</select>
</div>
<div class="row">
<select id="timeOption" name="timeOptionId" class="select" required="required">
<option value="">{{trans('home.ptts')}}</option> 
<option >{{trans('home.Anytime')}}</option>
<option >{{trans('home.Between')}} 10AM to 1PM</option>
<option >{{trans('home.Between')}} 1PM to 6PM</option>
<option >{{trans('home.Between')}} 6PM to 7PM</option>
<option >{{trans('home.Between')}} 7PM to 8PM</option>
<option >{{trans('home.Between')}} 8PM to 9PM</option>
</select>
</div>
									<div class="row pading-top-input-checkbox">
										<input class="pull-left checkbox-fomr" type="checkbox"  required="required">{{trans('home.smfad')}}
									</div>
									<div class="button-red-calback">
										<button type="submit" class="contact-inst-btn ">{{trans('home.cmback')}}</button>
									</div>
								 {!! Form::close() !!} 
							</div>
						</div>
					  </div>
					</div>
				
			</div>
		</div>
	</div>
</section>
    
    
@endsection