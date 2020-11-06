<div class="container" id="dashboard" >
    <div class="row" id="heading" style="margin-top: 7rem;">
        <h2 style="position: relative; right: 15px; font-family: 'Catamaran';">Hi {{$user->name}},</h2>
        <h1 class="wel-head" style="position: relative; right: 15px;">Welcome back!</h1>
    </div>
</div>
<div class="container mt-5" id="m-dashboard">
    <div class="row">
        <div class="column col-md-12 mt-3">
            <div class="card-body px-3 mx-3" style="border-bottom: 3px solid rgb(255,255,255,0.50);">
                @if($user->avatar)
                        <img src="{{ $user->avatar }}" class="avatar mr-1" alt="Techfest College Ambassador avatar">
                @endif
                <div style="display: flex; flex-direction: column; justify-content: flex-end; margin-top: 20%;">
                    <div style="display: flex; flex-direction: row; justify-content: flex-end;">
                        <i class="far fa-star ca-pos"></i>
                        <h4>Rank: {{$user->rank}}</h4>
                    </div>
                    <div style="display: flex; flex-direction: row; justify-content: flex-end;">
                        <i class="fas fa-certificate ca-pos"></i>
                        <h4>Points: {{$user->points}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="column col-md-12 mt-3">
            <div class="card-body px-3 py-3 mx-3">
                <div class="ca-details mt-3">
                    <h4 style="font-size: 17px; font-weight: normal;">{{$user->name}}</h4>
                    <i class="fas fa-user"></i>
                </div>
                <div class="ca-details mt-3">
                    <h4 style="font-size: 17px; font-weight: normal;">{{$user->email}}</h4>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="ca-details mt-3">
                    <h4 style="font-size: 17px; font-weight: normal;">CA-20{{$user->id}}</h4>
                    <i class="far fa-id-card"></i>
                </div>
            </div>
        </div>
        <div class="column col-md-6 col-sm-12 mt-3">
            <div class="card-body p-3 mx-3">
                <h2 class="card-title">QUEST</h2>
                <h4 style="font-weight: normal;">100 points for the next milestone</h4>
                <h5 style="font-weight: normal">You will get GrabOn coupons worth Rs. 500</h5>
            </div>
        </div>
        <div class="column col-md-12 mt-3">
            <div class="card-body px-3 mx-3">
                <h2 class="card-title">INCENTIVES</h2>
                <h5 style="font-weight: normal;" card-text">GOLD CERTI + INTERNSHIP + COUPONS + COURSES</h5>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    @foreach ($tasks as $task)
    <div class="row py-3">
        <div class="column col-md-12 mt-3">
            <div class="task-body p-3 mx-3">
                <h2>{{$task->title}}</h2>
                <p style="opacity: 0.5">{!! $task->desc !!}</p>
                <div style="display: flex; flex-direction: row; justify-content: flex-end;">
                    <a href="{{ route('upload', ['id'=>$task->id]) }}" class="btn upload-button">Upload</a>
                    <button class="btn points-button">{{$task->points}} PTS</button>
                </div>
                <div class="mt-3" style="display: flex; flex-direction: row; justify-content: space-between;">
                    <a class="fab fa-twitter m-social-icon" href="{{$task->twitter_link}}" target="_blank"></a>
                    <a class="fab fa-linkedin-in m-social-icon" href="{{$task->linkedin_link}}" target="_blank"></a>
                    <a class="fab fa-facebook-f m-social-icon" href="{{$task->fb_link}}" target="_blank"></a>
                    <a class="fab fa-instagram m-social-icon" href="{{$task->insta_link}}" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="container my-5" id="m-tandc">
    <div class="row terms-head" style="width: 100%; position: relative; right: 15px;">
        <h1>TERMS & CONDITIONS</h1>
    </div>
    <div class="row py-1">
        <div class="col-md-12">
            <div class="tandc-body p-3 mx-3">
                <p>All proofs submitted by you should be genuine to the fullest extent of your knowlegde.</p>
                <p>Certification and incentives except quest rewards will only be provided on successful completion of the tenure.</p>
                <p>Techfest, IIT Bombay holds the right to retract the Ambassadorship from you or appoint additional ambassadors if your performance is unsatisfactory you violate the aforementioned terms and conditions.</p>
                <p>Techfest, IIT Bombay shall have discretionary and final authority to determine the validity of any claim. Any decision made by Techfest in connection with the program is final and binding on all parties involved.</p>
            </div>
        </div>
    </div>
</div>
<div class="container my-5" id="m-contact-us">
    <div class="row terms-head" style="width: 100%; position: relative; right: 15px;">
        <h1>CONTACT US</h1>
    </div>
    <div class="row py-1">
        <div class="col-md-12">
            <div class="tandc-body p-3 mx-3">
                <div class="contact-desc">
                    <h4 style="font-weight: normal; opacity: 0.5;">Siddharth Singh</h4>
                    <i class="fas fa-user"></i>
                </div>
                <div class="contact-desc">
                    <h4 style="font-weight: normal; opacity: 0.5;">Publicity Manager, Techfest</h4>
                    <i class="fas fa-award"></i>
                </div>
                <div class="contact-desc">
                    <h4 style="font-weight: normal; opacity: 0.5;">ca@techfest.org</h4>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-desc">
                    <h4 style="font-weight: normal; opacity: 0.5;">+91 932 695 6401</h4>
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="mt-3" style="display: flex; flex-direction: row; justify-content: space-between;">
                    <a class="fab fa-twitter m-social-icon" href="https://twitter.com/Techfest_IITB" target="_blank"></a>
                    <a class="fab fa-linkedin-in m-social-icon" href="https://www.linkedin.com/company/techfest/" target="_blank"></a>
                    <a class="fab fa-facebook-f m-social-icon" href="https://www.facebook.com/iitbombaytechfest" target="_blank"></a>
                    <a class="fab fa-instagram m-social-icon" href="https://www.instagram.com/techfest_iitbombay/" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
</div>
