function sentOTP(){
    const phone = document.getElementById('phone');
    const otpver = document.getElementsByClassName('otp')[0];
    let otp_val = Math.floor(Math.random() * 10000);

    let emailbody = '<h2>Your OTP is </h2>${otp_val}';
    Email.send({
        SecureToken : "0c5a16b8-76d9-418f-ab3d-2b17c921b01e",
        To : email.value,
        From : "mjeyaraj33@gmail.com",
        Subject : "Email OTP using",
        Body : emailbody,
    }).then(
      message => {
        if (message === "ok") {
            alert("OTP sent to your email" + email.value);

            otpver.style.display = "flex";
            const otp_inp = document.getElementById('accno');
            const otp_btn = document.getElementById('otpbtn');

            otp_btn.addEventListener('click', () => {
                if (otp_inp.value ==otp_val) {
                    alert("Email address verified...");
                }
                else{
                    alert("invalid otp")
                }
            })
        }
      }
    );

}




