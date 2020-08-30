@extends('layouts.schema')

@section('content')

<div class="main">


    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="signup-container">
            <div class="signup-content">
            <form method="POST" id="signup-form" action="{{ route('register') }}" class="signup-form">
                        @csrf
                    <h2 class="form-title">Create an account Today</h2>
                    @if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="zip" id="zip" placeholder="Enter Your ZipCode"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password_confirmation" id="re_password" placeholder="Repeat your password" required/>
                    </div>
                    <div class="form-group">
                        <select name="primary_category" id="exampleSelect" class="form-control" required>
                            <option value="none">Please select a Primary Category</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Advertising">Advertising</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Agronomy & Plant Science">Agronomy & Plant Science</option>
                            <option value="American Studies">American Studies</option>
                            <option value="Anaesthetic">Anaesthetic</option>
                            <option value="Animal Science">Animal Science</option>
                            <option value="Anthropological Science">Anthropological Science</option>
                            <option value="Anthropology">Anthropology</option>
                            <option value="Aquaculture & Fisheries">Aquaculture & Fisheries</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Art History & Theory">Art History & Theory</option>
                            <option value="Astronomy">Astronomy</option>
                            <option value="Aviation">Aviation</option>
                            <option value="Aviation Management">Aviation Management</option>
                            <option value="Biochemistry">Biochemistry</option>
                            <option value="Bioinformatics">Bioinformatics</option>
                            <option value="Biology">Biology</option>
                            <option value="Biomedical Engineering">Biomedical Engineering</option>
                            <option value="Biomedical Sciences">Biomedical Sciences</option>
                            <option value="Biotechnology">Biotechnology</option>
                            <option value="Botany">Botany</option>
                            <option value="Chemical & Process Engineering">Chemical & Process Engineering</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Classical Studies">Classical Studies</option>
                            <option value="Clothing & Textiles">Clothing & Textiles</option>
                            <option value="Commercial Law">Commercial Law</option>
                            <option value="Communication & Professional Writing">Communication & Professional Writing</option>
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Conflict Resolution">Conflict Resolution</option>
                            <option value="Construction & Project Management">Construction & Project Management</option>
                            <option value="Counselling">Counselling</option>
                            <option value="Creative Writing">Creative Writing</option>
                            <option value="Criminology & Justice">Criminology & Justice</option>
                            <option value="Cultural Studies">Cultural Studies</option>
                            <option value="Culinary">Culinary</option>
                            <option value="Dance">Dance</option>
                            <option value="Deferene Studies">Deferene Studies</option>
                            <option value="Dental Technology">Dental Technology</option>
                            <option value="Dentistry">Dentistry</option>
                            <option value="Drama/Theatre">Drama/Theatre</option>
                            <option value="Earth Science(general)">Earth Science(general)</option>
                            <option value="Ecolory">Ecology</option>
                            <option value="e-Commerce">e-Commerce</option>
                            <option value="Economics">Economics</option>
                            <option value="Education Studies">Education Studies</option>
                            <option value="Electrical Science">Electrical Science</option>
                            <option value="English">English</option>
                            <option value="Entrepreneurship">Entrepreneurship</option>
                            <option value="Environmental & Natural Resources Engineering">Environmental & Natural Resources Engineering</option>
                            <option value="Environmental Health">Environmental Health</option>
                            <option value="Environmental Science">Environmental Science</option>
                            <option value="Environmental Studies">Environmental Studies</option>
                            <option value="Fashion Design">Fashion Design</option>
                            <option value="Film & Media Studies">Film & Media Studies</option>
                            <option value="Film-making">Film-making</option>
                            <option value="Finance">Finance</option>
                            <option value="Fine Arts">Fine Arts</option>
                            <option value="Food Science">Food Science</option>
                            <option value="Forensic Analytical Science">Forensic Analytical Science</option>
                            <option value="Gender Studies">Gender Studies</option>
                            <option value="Geography">Geography</option>
                            <option value="Geology">Geology</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Health Promotion">Health Promotion</option>
                            <option value="History">History</option>
                            <option value="Hospitality Management">Hospitality Management</option>
                            <option value="Human Development Studies">Human Development Studies</option>
                            <option value="Human Nutrition">Human Nutrition</option>
                            <option value="Human Resource Management">Human Resource Management</option>
                            <option value="Information Science">Information Science</option>
                            <option value="International Business">International Business</option>
                            <option value="International Relations">International Relations</option>
                            <option value="International Studies">International Studies</option>
                            <option value="Interpreting & Translating">Interpreting & Translating</option>
                            <option value="Journalism">Journalism</option>
                            <option value="Labor & Industrial Relations">Labor & Industrial Relations</option>
                            <option value="Law">Law</option>
                            <option value="Linguistics">Linguistics</option>
                            <option value="Management">Management</option>
                            <option value="Marine Biology">Marine Biology</option>
                            <option value="Marine Science">Marine Science</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Mechatronics">Mechatronics</option>
                            <option value="Medical Laboratory Science">Medical Laboratory Science</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Microbiology">Microbiology</option>
                            <option value="Midwifery">Midwifery</option>
                            <option value="Music Composition">Music Composition</option>
                            <option value="Music Performance">Music Performance</option>
                            <option value="Music Studies">Music Studies</option>
                            <option value="Nanoscience">Nanoscience</option>
                            <option value="Neuroscience">Neuroscience</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Occupational Therapy & Rehabilitation">Occupational Therapy & Rehabilitation</option>
                            <option value="Optometry">Optometry</option>
                            <option value="Oral Health">Oral Health</option>
                            <option value="Paramedicine">Paramedicine</option>
                            <option value="Pharmacology">Pharmacology</option>
                            <option value="Pharmacy">Pharmacy</option>
                            <option value="Philosophy">Philosophy</option>
                            <option value="Physiotherapy">Physiotherapy</option>
                            <option value="Podiatry">Podiatry</option>
                            <option value="Political Studies">Political Studies</option>
                            <option value="Population & Development Studies">Population & Development Studies</option>
                            <option value="Product & Industrial Design">Product & Industrial Design</option>
                            <option value="Psychology">Psychology</option>
                            <option value="Public Policy">Public Policy</option>
                            <option value="Public Relations">Public Relations</option>
                            <option value="Quantity Surveying">Quantity Surveying</option>
                            <option value="Radiation Therapy">Radiation Therapy</option>
                            <option value="Radio & TV Production & Broadcasting">Radio & TV Production & Broadcasting</option>
                            <option value="Social Policy">Social Policy</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Speech & Language Therapy">Speech & Language Therapy</option>
                            <option value="Sport & Exercise Science">Sport & Exercise Science</option>
                            <option value="Sport & Leisure Studies & Management">Sport & Leisure Studies & Management</option>
                            <option value="Surveying">Surveying</option>
                            <option value="Taxation">Taxation</option>
                            <option value="Teaching(general)">Teaching(general)</option>
                            <option value="Theology">Theology</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Valuation & Property Management">Valuation & Property Management</option>
                            <option value="Veterinary Science & Technology">Veterinary Science & Technology</option>
                            <option value="Web & Digital Design">Web & Digital Design</option>
                            <option value="Zoology">Zoology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="secondary_category" id="" class="form-control" required>
                            <option value="none">Please select a Secondary Category</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Advertising">Advertising</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Agronomy & Plant Science">Agronomy & Plant Science</option>
                            <option value="American Studies">American Studies</option>
                            <option value="Anaesthetic">Anaesthetic</option>
                            <option value="Animal Science">Animal Science</option>
                            <option value="Anthropological Science">Anthropological Science</option>
                            <option value="Anthropology">Anthropology</option>
                            <option value="Aquaculture & Fisheries">Aquaculture & Fisheries</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Art History & Theory">Art History & Theory</option>
                            <option value="Astronomy">Astronomy</option>
                            <option value="Aviation">Aviation</option>
                            <option value="Aviation Management">Aviation Management</option>
                            <option value="Biochemistry">Biochemistry</option>
                            <option value="Bioinformatics">Bioinformatics</option>
                            <option value="Biology">Biology</option>
                            <option value="Biomedical Engineering">Biomedical Engineering</option>
                            <option value="Biomedical Sciences">Biomedical Sciences</option>
                            <option value="Biotechnology">Biotechnology</option>
                            <option value="Botany">Botany</option>
                            <option value="Chemical & Process Engineering">Chemical & Process Engineering</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Classical Studies">Classical Studies</option>
                            <option value="Clothing & Textiles">Clothing & Textiles</option>
                            <option value="Commercial Law">Commercial Law</option>
                            <option value="Communication & Professional Writing">Communication & Professional Writing</option>
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Conflict Resolution">Conflict Resolution</option>
                            <option value="Construction & Project Management">Construction & Project Management</option>
                            <option value="Counselling">Counselling</option>
                            <option value="Creative Writing">Creative Writing</option>
                            <option value="Criminology & Justice">Criminology & Justice</option>
                            <option value="Cultural Studies">Cultural Studies</option>
                            <option value="Culinary">Culinary</option>
                            <option value="Dance">Dance</option>
                            <option value="Deferene Studies">Deferene Studies</option>
                            <option value="Dental Technology">Dental Technology</option>
                            <option value="Dentistry">Dentistry</option>
                            <option value="Drama/Theatre">Drama/Theatre</option>
                            <option value="Earth Science(general)">Earth Science(general)</option>
                            <option value="Ecolory">Ecology</option>
                            <option value="e-Commerce">e-Commerce</option>
                            <option value="Economics">Economics</option>
                            <option value="Education Studies">Education Studies</option>
                            <option value="Electrical Science">Electrical Science</option>
                            <option value="English">English</option>
                            <option value="Entrepreneurship">Entrepreneurship</option>
                            <option value="Environmental & Natural Resources Engineering">Environmental & Natural Resources Engineering</option>
                            <option value="Environmental Health">Environmental Health</option>
                            <option value="Environmental Science">Environmental Science</option>
                            <option value="Environmental Studies">Environmental Studies</option>
                            <option value="Fashion Design">Fashion Design</option>
                            <option value="Film & Media Studies">Film & Media Studies</option>
                            <option value="Film-making">Film-making</option>
                            <option value="Finance">Finance</option>
                            <option value="Fine Arts">Fine Arts</option>
                            <option value="Food Science">Food Science</option>
                            <option value="Forensic Analytical Science">Forensic Analytical Science</option>
                            <option value="Gender Studies">Gender Studies</option>
                            <option value="Geography">Geography</option>
                            <option value="Geology">Geology</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Health Promotion">Health Promotion</option>
                            <option value="History">History</option>
                            <option value="Hospitality Management">Hospitality Management</option>
                            <option value="Human Development Studies">Human Development Studies</option>
                            <option value="Human Nutrition">Human Nutrition</option>
                            <option value="Human Resource Management">Human Resource Management</option>
                            <option value="Information Science">Information Science</option>
                            <option value="International Business">International Business</option>
                            <option value="International Relations">International Relations</option>
                            <option value="International Studies">International Studies</option>
                            <option value="Interpreting & Translating">Interpreting & Translating</option>
                            <option value="Journalism">Journalism</option>
                            <option value="Labor & Industrial Relations">Labor & Industrial Relations</option>
                            <option value="Law">Law</option>
                            <option value="Linguistics">Linguistics</option>
                            <option value="Management">Management</option>
                            <option value="Marine Biology">Marine Biology</option>
                            <option value="Marine Science">Marine Science</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Mechatronics">Mechatronics</option>
                            <option value="Medical Laboratory Science">Medical Laboratory Science</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Microbiology">Microbiology</option>
                            <option value="Midwifery">Midwifery</option>
                            <option value="Music Composition">Music Composition</option>
                            <option value="Music Performance">Music Performance</option>
                            <option value="Music Studies">Music Studies</option>
                            <option value="Nanoscience">Nanoscience</option>
                            <option value="Neuroscience">Neuroscience</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Occupational Therapy & Rehabilitation">Occupational Therapy & Rehabilitation</option>
                            <option value="Optometry">Optometry</option>
                            <option value="Oral Health">Oral Health</option>
                            <option value="Paramedicine">Paramedicine</option>
                            <option value="Pharmacology">Pharmacology</option>
                            <option value="Pharmacy">Pharmacy</option>
                            <option value="Philosophy">Philosophy</option>
                            <option value="Physiotherapy">Physiotherapy</option>
                            <option value="Podiatry">Podiatry</option>
                            <option value="Political Studies">Political Studies</option>
                            <option value="Population & Development Studies">Population & Development Studies</option>
                            <option value="Product & Industrial Design">Product & Industrial Design</option>
                            <option value="Psychology">Psychology</option>
                            <option value="Public Policy">Public Policy</option>
                            <option value="Public Relations">Public Relations</option>
                            <option value="Quantity Surveying">Quantity Surveying</option>
                            <option value="Radiation Therapy">Radiation Therapy</option>
                            <option value="Radio & TV Production & Broadcasting">Radio & TV Production & Broadcasting</option>
                            <option value="Social Policy">Social Policy</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Speech & Language Therapy">Speech & Language Therapy</option>
                            <option value="Sport & Exercise Science">Sport & Exercise Science</option>
                            <option value="Sport & Leisure Studies & Management">Sport & Leisure Studies & Management</option>
                            <option value="Surveying">Surveying</option>
                            <option value="Taxation">Taxation</option>
                            <option value="Teaching(general)">Teaching(general)</option>
                            <option value="Theology">Theology</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Valuation & Property Management">Valuation & Property Management</option>
                            <option value="Veterinary Science & Technology">Veterinary Science & Technology</option>
                            <option value="Web & Digital Design">Web & Digital Design</option>
                            <option value="Zoology">Zoology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="tertiary_category" id="exampleSelect" class="form-control" required>
                            <option value="none">Please select a Tertiary Category</option>
                            <option value="accounting">Accounting</option>
                            <option value="advertising">Advertising</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="agronomy & Plant Science">Agronomy & Plant Science</option>
                            <option value="american Studies">American Studies</option>
                            <option value="anaesthetic">Anaesthetic</option>
                            <option value="animal Science">Animal Science</option>
                            <option value="anthropological Science">Anthropological Science</option>
                            <option value="anthropology">Anthropology</option>
                            <option value="aquaculture & Fisheries">Aquaculture & Fisheries</option>
                            <option value="architecture">Architecture</option>
                            <option value="art History & Theory">Art History & Theory</option>
                            <option value="astronomy">Astronomy</option>
                            <option value="aviation">Aviation</option>
                            <option value="aviation Management">Aviation Management</option>
                            <option value="biochemistry">Biochemistry</option>
                            <option value="bioinformatics">Bioinformatics</option>
                            <option value="biology">Biology</option>
                            <option value="biomedical Engineering">Biomedical Engineering</option>
                            <option value="biomedical Sciences">Biomedical Sciences</option>
                            <option value="biotechnology">Biotechnology</option>
                            <option value="botany">Botany</option>
                            <option value="chemical & Process Engineering">Chemical & Process Engineering</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="civil Engineering">Civil Engineering</option>
                            <option value="classical Studies">Classical Studies</option>
                            <option value="clothing & Textiles">Clothing & Textiles</option>
                            <option value="commercial Law">Commercial Law</option>
                            <option value="communication & Professional Writing">Communication & Professional Writing</option>
                            <option value="computer Engineering">Computer Engineering</option>
                            <option value="computer Science">Computer Science</option>
                            <option value="conflict Resolution">Conflict Resolution</option>
                            <option value="construction & Project Management">Construction & Project Management</option>
                            <option value="counselling">Counselling</option>
                            <option value="creative Writing">Creative Writing</option>
                            <option value="criminology & Justice">Criminology & Justice</option>
                            <option value="cultural Studies">Cultural Studies</option>
                            <option value="culinary">Culinary</option>
                            <option value="dance">Dance</option>
                            <option value="deferene Studies">Deferene Studies</option>
                            <option value="dental Technology">Dental Technology</option>
                            <option value="dentistry">Dentistry</option>
                            <option value="drama/Theatre">Drama/Theatre</option>
                            <option value="earth Science(general)">Earth Science(general)</option>
                            <option value="ecolory">Ecology</option>
                            <option value="e-Commerce">e-Commerce</option>
                            <option value="economics">Economics</option>
                            <option value="education Studies">Education Studies</option>
                            <option value="electrical Science">Electrical Science</option>
                            <option value="english">English</option>
                            <option value="entrepreneurship">Entrepreneurship</option>
                            <option value="environmental & Natural Resources Engineering">Environmental & Natural Resources Engineering</option>
                            <option value="environmental Health">Environmental Health</option>
                            <option value="environmental Science">Environmental Science</option>
                            <option value="environmental Studies">Environmental Studies</option>
                            <option value="fashion Design">Fashion Design</option>
                            <option value="film & Media Studies">Film & Media Studies</option>
                            <option value="film-making">Film-making</option>
                            <option value="finance">Finance</option>
                            <option value="fine Arts">Fine Arts</option>
                            <option value="food Science">Food Science</option>
                            <option value="forensic Analytical Science">Forensic Analytical Science</option>
                            <option value="gender Studies">Gender Studies</option>
                            <option value="geography">Geography</option>
                            <option value="geology">Geology</option>
                            <option value="graphic Design">Graphic Design</option>
                            <option value="health Promotion">Health Promotion</option>
                            <option value="history">History</option>
                            <option value="hospitality Management">Hospitality Management</option>
                            <option value="human Development Studies">Human Development Studies</option>
                            <option value="human Nutrition">Human Nutrition</option>
                            <option value="human Resource Management">Human Resource Management</option>
                            <option value="information Science">Information Science</option>
                            <option value="international Business">International Business</option>
                            <option value="international Relations">International Relations</option>
                            <option value="international Studies">International Studies</option>
                            <option value="interpreting & Translating">Interpreting & Translating</option>
                            <option value="journalism">Journalism</option>
                            <option value="labor & Industrial Relations">Labor & Industrial Relations</option>
                            <option value="law">Law</option>
                            <option value="linguistics">Linguistics</option>
                            <option value="management">Management</option>
                            <option value="marine Biology">Marine Biology</option>
                            <option value="marine Science">Marine Science</option>
                            <option value="marketing">Marketing</option>
                            <option value="mathematics">Mathematics</option>
                            <option value="mechanical Engineering">Mechanical Engineering</option>
                            <option value="mechatronics">Mechatronics</option>
                            <option value="medical Laboratory Science">Medical Laboratory Science</option>
                            <option value="medicine">Medicine</option>
                            <option value="microbiology">Microbiology</option>
                            <option value="midwifery">Midwifery</option>
                            <option value="music Composition">Music Composition</option>
                            <option value="music Performance">Music Performance</option>
                            <option value="music Studies">Music Studies</option>
                            <option value="nanoscience">Nanoscience</option>
                            <option value="neuroscience">Neuroscience</option>
                            <option value="nursing">Nursing</option>
                            <option value="occupational Therapy & Rehabilitation">Occupational Therapy & Rehabilitation</option>
                            <option value="optometry">Optometry</option>
                            <option value="oral Health">Oral Health</option>
                            <option value="paramedicine">Paramedicine</option>
                            <option value="pharmacology">Pharmacology</option>
                            <option value="pharmacy">Pharmacy</option>
                            <option value="philosophy">Philosophy</option>
                            <option value="physiotherapy">Physiotherapy</option>
                            <option value="podiatry">Podiatry</option>
                            <option value="political Studies">Political Studies</option>
                            <option value="population & Development Studies">Population & Development Studies</option>
                            <option value="product & Industrial Design">Product & Industrial Design</option>
                            <option value="psychology">Psychology</option>
                            <option value="public Policy">Public Policy</option>
                            <option value="public Relations">Public Relations</option>
                            <option value="quantity Surveying">Quantity Surveying</option>
                            <option value="radiation Therapy">Radiation Therapy</option>
                            <option value="radio & TV Production & Broadcasting">Radio & TV Production & Broadcasting</option>
                            <option value="social Policy">Social Policy</option>
                            <option value="sociology">Sociology</option>
                            <option value="spanish">Spanish</option>
                            <option value="speech & Language Therapy">Speech & Language Therapy</option>
                            <option value="sport & Exercise Science">Sport & Exercise Science</option>
                            <option value="sport & Leisure Studies & Management">Sport & Leisure Studies & Management</option>
                            <option value="surveying">Surveying</option>
                            <option value="taxation">Taxation</option>
                            <option value="teaching(general)">Teaching(general)</option>
                            <option value="theology">Theology</option>
                            <option value="tourism">Tourism</option>
                            <option value="valuation & Property Management">Valuation & Property Management</option>
                            <option value="veterinary Science & Technology">Veterinary Science & Technology</option>
                            <option value="web & Digital Design">Web & Digital Design</option>
                            <option value="zoology">Zoology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"/>
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                    </div>
                </form>
                <p class="loginhere">
                    Already have an account? <a href="{{ url('/') }}" class="loginhere-link">Login here</a>
                </p>
            </div>
        </div>
    </section>

</div>

@endsection
