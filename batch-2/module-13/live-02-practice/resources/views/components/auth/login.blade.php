<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Login Info</h2>
                <form method="POST">
                    <div class="input-group">
                        <input class="input--style-2" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="p-t-30">
                        <button class="btn btn--radius btn--green" type="submit">Login</button>
                    </div>
                </form>
                <p class="my-3">Don't have an account ? <a href="{{ route('register.show') }}"> Create Account </a></p>
            </div>
        </div>
    </div>
</div>
