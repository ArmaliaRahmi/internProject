@extends('layouts.main')

@section('ourcode')
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="second">
				<div class="formRegis form">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
                            <div class="col-lg-12 far fa-user-circle"style='font-size:48px';>
                        </div>
							<h1>Register</h1>
						 </div>
					</div>
                   <form action="" method="post" name="regis">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">PIC Name</label>
                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter PIC Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCompany">Company Name</label>
                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Company Name">
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
                            <!-- <div class="form-row">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="FAQ" name="FAQ" class="custom-control-input">
                                <label class="custom-control-label" for="FAQ">FAQ</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Transactional" name="Transactional" class="custom-control-input">
                                <label class="custom-control-label" for="Transactional">Transactional</label>
                            </div>
                            </div> -->
                            <div class="form-group">
                            <label> <input type="radio" name="programming" id="FAQ" value= "FAQ" selected> FAQ </label>
                            <label> <input type="radio" name="programming" id="Transactional" value= "Transactional" selected> Transactional </label>
                            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Service Share">
                        </div>
                        <div class="form-group">
                            <label for="channel">Channel</label> 
                            <div class="from-row">
                            <!-- <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Whatsapp</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Telegram</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Slack</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Coster</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Costum</label>
                            </div>
                            </div> -->
                            <div class="form">
                                <input type="checkbox" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Whatsapp</label>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="pilih lebih dari satu">
                            </div>
                            <div class="form">
                                <input type="checkbox" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Telegram</label>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="pilih lebih dari satu">
                            </div>
                            <div class="form">
                                <input type="checkbox" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">Slack</label>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="pilih lebih dari satu">
                            </div>
                            <div class="inputsForm">
                                <input type="checkbox" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Coster</label>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="pilih lebih dari satu">
                            </div>
                            <div class="form">
                                <input type="checkbox" id="ssAns" onchange="checkAnswer()" >
                                <label class="custom-control-label" for="customCheck5">Custom</label>
                                <input type="custom" name="custom"  class="form-control" id="custom" aria-describedby="emailHelp" placeholder="Enter your channel" hidden>
                            </div>
                            </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="inputPass">Password</label>
                              <p><input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                              <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i></p>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="confirmPass">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                              <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i></p>
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
                           <!-- <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                 </a>
                              </p>
                           </div> -->
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <p class="text-center">Already have account? <a href="#" id="signup">Log in here</a></p>
                        </div>
                    </form>
				</div>
		    </div>
            </div>

            <script src = "js/script.js"></script>
@endsection