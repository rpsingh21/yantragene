<div class="col-lg-8 col-md-4">
    <form class="abc" name = "<?php echo "event".$i;?>" id="<?php echo"event".$i++;?>">
        <input  type="hidden" name="eventId" value="{{event.id}}">
        <!--<input type="hidden" name="_token" value="GUYBnyU1Nll1WozFTzxvcqJroe5MsBQd8SbpMReG">-->
        <label class="w3-label w3-text-teal"><b>Team Name</b></label>
        <input class="w3-input w3-border w3-light-grey" name="teamName" type="text" ng-maxlength="30" ng-model = "eventName" required>
        <p class="w3-text-orange">Members (excluding leader) and leader consider as the first member. </p>
        <span style = "color:red" ng-show = "eventRegForm.eventName.$dirty && eventRegForm.eventName.$invalid">
    													<span ng-show = "eventRegForm.eventName.$error.required">Team Name is required.</span>
    													<span ng-show = "eventRegForm.eventName.$error.maxlength">Team name should be less than 30 chars</span>
    													</span>
        <div ng-repeat="n in range(2,event.teamSize)">
            <label class="w3-label w3-text-teal"><b>Member {{n}} Registered Email Add.</b></label>
            <input name="member_{{n}}" ng-model="p" class="w3-input w3-border w3-light-grey" type="email" >
            <span style = "color:red" ng-show = "eventRegForm['member_'+n].$dirty && eventRegForm['member_'+n].$invalid">
    														<span ng-show = "eventRegForm['member_'+n].$error.required">Email is required.</span>
    														<span ng-show = "eventRegForm['member_'+n].$error.email">Email should be like abc@cd.ef</span>
    														</span>
        </div>
        <button type="submit" class="w3-btn w3-blue-grey team" style="margin-top:5px;">Register</button>
    </form>
</div>
<div class="col-lg-12 col-md-12">
    <h3>Some Important Guidelines for Event Register</h3>
    <ul style="list-style-type:disc">
        <li>In a process for event registration necessary to log in your account. the link is<a href='/login'> yantragene sign in OR sign up.</a></li>
        <li>You are capable to participate Individual or as a team.</li>
        <li>If you are want to join event Individual then fill only team name.</li>
        <li>If you try to participate as a team then you fill Team name and other to Members registered email Id.</li>
        <li>After Registration, you can check your <a href="/profile">profile</a> for which events you are registered.</li>
        <li class='w3-text-orange'>Any type of the query, you can concert with an event coordinator.</li>
    </ul>
    <br/>
</div>
