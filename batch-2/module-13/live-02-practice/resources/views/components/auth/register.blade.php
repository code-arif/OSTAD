<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Registration Info</h2>
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
                        <input class="input--style-2" type="file" placeholder="Select image" name="image">
                    </div>
                    <div class="p-t-30">
                        <button class="btn btn--radius btn--green" type="submit">Registration</button>
                    </div>
                </form>
                <p class="my-3">Already have an account ? <a href="{{ route('login.show') }}"> Login </a></p>
            </div>
        </div>
    </div>
</div>
