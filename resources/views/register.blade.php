@extends('layouts.main')
@section('ourcode')

<div class="row">
	<div class="card-md-5 mx-auto">
		<div id="second">
			<div class="formRegis form">
				<div class="logo mb-3">
					<div class="col-md-12 text-center">
						<h1>Registration Form</h1>
					</div>
				</div>
                <form action="" method="post" name="regis">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">PIC Name</label>
                            <input type="text" name="picName"  class="form-control" id="picName" aria-describedby="emailHelp" placeholder="Enter PIC Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCompany">Company Name</label>
                            <input type="text" name="company"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Company Name">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="emailorusername">Email or Username</label>
                        <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email or Username">
                    </div>

                    <div class="form-group">
                        <label for="serviceGroup">Service Group</label> 
                        <select class="custom-select" id = "sgAns" onchange = "selectAnswer()">
                            <option selected>Select Service Group</option>
                            <option value="1">Shared</option>
                            <option value="2">Dedicated</option>
                            <option value="3">OnPrem</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="serviceGroup">Service Share</label>
                        <div class="form-row">
                            <div class=" col-md-6">
                            <label> <input type="radio" name="serviceShare" id="FAQ" value= "FAQ" selected> FAQ </label>
                            </div>
                            <div class="col-md-6">
                            <label> <input type="radio" name="serviceShare" id="Transactional" value= "Transactional" selected> Transactional </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="channel">Channel</label> 
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="checkbox" id="whatsapp">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="text" name="channel" id="whathapp"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Channel Whatsapp">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="checkbox" id="telegram">
                            <label for="telegram">Telegram</label>
                            <input type="text" name="channel" id="telegram"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Channel Telegram">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="checkbox" id="slack">
                            <label for="slack">Slack</label>
                            <input type="text" name="channel" id="slack"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Channel Slack">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="checkbox" id="coster">
                            <label for="coster">Coster</label>
                            <input type="text" name="channel" id="coster"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Channel Coster">
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="ssAns" onchange="checkAnswer()">
                            <label for="custom">Custom</label>
                            <input type="text" name="channel"  class="form-control" id="custom" aria-describedby="emailHelp" placeholder="Enter your channel" hidden>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <div class="input-group-append">
                            <input id="password-field" type="password" class="form-control" name="password" placeholder="Enter Password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <div class="input-group-append">
                            <input id="password-field" type="password" class="form-control" name="password" placeholder="Enter Password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger" class="reload" id="reload">&#x21bb;</button>
                        </div>
                    </div>
                    <div class="form-group ">
                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                    </div>
                    
                    <div class="col-md-12 text-center ">
                        <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Register</button>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <p class="text-center">Already have account? <a href="/login" id="signup">Log in here</a></p>
                    </div>
                </form>
			</div>
		</div>
    </div>
</div>

<script src = "js/script.js"></script>
@endsection
