<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Profile Upgration</h2>
                <form method="POST">
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="FirstName" name="firstName">
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="LastName" name="lastName">
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="Number" placeholder="Phone" name="phone">
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="file" placeholder="Select image" name="file">
                    </div>
                    <div class="p-t-30">
                        <button class="btn btn--radius btn--green" type="submit">Update</button>
                        <a href="{{ route('profile.show') }}" class="btn btn--radius btn-warning"> Back to profile </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
