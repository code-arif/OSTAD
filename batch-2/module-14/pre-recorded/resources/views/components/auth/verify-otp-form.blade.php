<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6 center-screen">
            <div class="card animated fadeIn w-90  p-4">
                <div class="card-body">
                    <h4>ENTER OTP CODE</h4>
                    <br />
                    <label>5 Digit Code Here</label>
                    <input id="otp" placeholder="Code" class="form-control" type="text" />
                    <br />
                    <button onclick="VerifyOtp()" class="btn w-100 float-end bg-gradient-primary">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    async function VerifyOtp(){
        let otp = document.getElementById('otp').value;
        if(otp.length !== 5){
            errorToast('Invalid OTP');
        } else {
            showLoader();
            try {
                let res = await axios.post('/otp-verify', {
                    otp: otp,
                    email: sessionStorage.getItem('email')
                });
                hideLoader();
                if (res.status === 200 && res.data['status'] === 'success') {
                    successToast(res.data['message']);
                    sessionStorage.clear();
                    setTimeout(function() {
                        window.location.href = '/reset-password';
                    }, 1000);
                } else {
                    errorToast(res.data['message']);
                }
            } catch (error) {
                hideLoader();
                errorToast('An error occurred. Please try again.');
            }
        }
    }
</script>
