<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Registration Info</h2>

                <div class="input-group">
                    <input class="input--style-2" id="first_name" type="text" placeholder="FirstName" name="first_name">
                </div>
                <div class="input-group">
                    <input class="input--style-2" id="last_name" type="text" placeholder="LastName" name="last_name">
                </div>
                <div class="input-group">
                    <input class="input--style-2" id="email" type="email" placeholder="Email" name="email">
                </div>
                <div class="input-group">
                    <input class="input--style-2" id="phone" type="number" placeholder="Phone" name="phone">
                </div>
                <div class="input-group">
                    <input class="input--style-2" id="password" type="password" placeholder="Password" name="password">
                </div>
                <div class="input-group">
                    <input class="input--style-2" id="image" type="file" placeholder="Select image" name="image">
                </div>
                <div class="p-t-30">
                    <button onclick="Register(event)" class="btn btn--radius btn--green" type="submit">Registration</button>
                </div>
                <p class="my-3">Already have an account ? <a href="{{ route('login.show') }}"> Login </a></p>
            </div>
        </div>
    </div>
</div>

<script>
    async function Register(event) {
        event.preventDefault(); // Prevent form submission

        let first_name = document.getElementById('first_name').value;
        let last_name = document.getElementById('last_name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let password = document.getElementById('password').value;
        let image = document.getElementById('image').files[0];

        // Create FormData object to include image file
        let formData = new FormData();
        formData.append('first_name', first_name);
        formData.append('last_name', last_name);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('password', password);
        if (image) {
            formData.append('image', image);
        }

        // Include CSRF token for Laravel
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        formData.append('_token', csrfToken);

        showLoader();
        try {
            let res = await axios.post('/registration', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            });
            hideLoader();

            console.log(res.data); // Log response for debugging

            if (res.data['status'] === 'success') {
                alert(res.data['message']);
                window.location.href = '/login';
            } else {
                alert(res.data['message']);
            }
        } catch (error) {
            hideLoader();
            console.error('Error response:', error.response); // Log the error response for debugging
            if (error.response && error.response.data && error.response.data.errors) {
                let errors = error.response.data.errors;
                let errorMessage = 'Validation errors:\n';
                for (let key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        errorMessage += `${errors[key]}\n`;
                    }
                }
                alert(errorMessage);
            } else {
                alert('Registration failed. Please try again later.');
            }
        }
    }
</script>
