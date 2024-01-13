@extends('layouts.frontend')
@section('content')
<style>
    body {

        background: #000;
    }

    #loginPage {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2px;
        flex-wrap: wrap;
        overflow: hidden;
    }

    #loginPage::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(#000, rgba(255, 0, 0, 0.445), #000);
        animation: animate 5s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: translateY(-30%);
        }

        100% {
            transform: translateY(50%);
        }
    }

    #loginPage span {
        position: relative;
        display: block;
        width: calc(6.25vw - 2px);
        height: calc(6.25vw - 2px);
        background: #181818;
        z-index: 2;
        transition: 1.5s;
    }

    #loginPage span:hover {
        background: rgba(255, 1, 1, 0.582);
        transition: 0s;
    }

    #loginPage .signin {
        position: absolute;
        width: 400px;
        background: #222;
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        border-radius: 4px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 9);
    }

    #loginPage .signin .content {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 40px;
    }

    #loginPage .signin .content h2 {
        font-size: 2em;
        color: rgb(247, 247, 247);
        text-transform: uppercase;
    }

    #loginPage .signin .content .form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    @media (max-width: 900px) {
        #loginPage span {
            width: calc(10vw - 2px);
            height: calc(10vw - 2px);
        }
    }

    @media (max-width: 600px) {
        #loginPage span {
            width: calc(20vw - 2px);
            height: calc(20vw - 2px);
        }
    }
</style>
<section id="loginPage"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>

    <div class="signin">

        <div class="content">

            <h2>Admin Login</h2>

            <form class="contact100-form" onsubmit="submitHandler()" method="POST">
                <div class="wrap-input100 validate-input mt-20" data-validate="Valid email is required: ex@abc.xyz">
                    <input id="" class="input100" type="email" name="email" placeholder="Enter your email" onchange="errorReset(event)">
                    <p class="alert-warning" id="email"></p>
                </div>
                <div class="wrap-input100 validate-input mt-20" data-validate="Valid email is required: ex@abc.xyz">
                    <input id="" class="input100" type="password" name="password" placeholder="Enter your password" onchange="errorReset(event)">
                    <p class="alert-warning" id="password"></p>
                </div>
                <div class="d-flex justify-content-center align-items-center w-100">
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
            </form>


        </div>

    </div>

</section>
@endsection
@push('custom-js')
<script>
    function submitHandler(){
            event.preventDefault()
            fetch('/login',{
                method:"POST",
                body: new FormData(event.target),
                headers:{
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(res=>res.json())
            .then(data=>{
                if (data.status === 'validation_error') {
                    console.error('Validation Error:', data.errors);
                    let error = data.errors
                    Object.entries(error).forEach(([key, value]) => {
                       let field = document.getElementById(key)
                        if(field){
                            field.innerText = value
                        }
                    });
                } else if (data.status === 'error') {
                        let showMessage = document.getElementById('showMessage')
                        let toasterMessage = document.getElementById('toasterMessage')
                        toasterMessage.style.display = 'block'
                        showMessage.innerText = data.message
                        setTimeout(() => {
                            toasterMessage.style.display = 'none'
                        }, 3000);
                } else {
                    localStorage.setItem('token', data.access_token);
                    window.location.href = '/admin#/dashboard/';
                }

            })
        }

        function errorReset(event){
          let resetError = event.target.nextElementSibling
           resetError.innerText =''
        }
</script>
@endpush
