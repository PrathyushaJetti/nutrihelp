function getCurrentDate() {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Adding 1 because months are 0-based
    const day = String(now.getDate()).padStart(2, '0');
    return `${day}-${month}-${year}`; // Format: YYYY-MM-DD
  }
  document.querySelectorAll('.currentDate').forEach(function (field) {
    field.value = getCurrentDate()
  });
  
  // Form1 variables
  let userName1 = document.getElementById("userName1");
  let userEmail1 = document.getElementById("userEmail1");
  let userPhone1 = document.getElementById("userPhone1");
  let enteredOTP1 = document.getElementById("enteredOTP1");
  let sendOTP1 = document.getElementById("sendOTP1");
  let formSubmitbtn1 = document.getElementById("formSubmitbtn1");
  var otp1 = '';
  $(document).ready(function () {
    $("#sendOTP1").click(function () {
      otp1 = Math.floor(Math.random() * 10000);
      $.ajax({
        url: `https://prpsms.co.in/API/SendMsg.aspx?uname=20230345&pass=DNglxC9h&send=RDNUTR&dest=${userPhone1.value}&msg=Hi ${userName1.value},%0AYour One time OTP ${otp1} to authenticate your interest in QUA NUTRITION. Our team is looking forward to connect with you. %0AThanks, %0AQUA NUTRITION`, // Replace with your desired API endpoint
        type: 'GET',
        dataType: 'jsonp',
        CORS: true,
        contentType: 'application/json',
        secure: true,
        headers: {
          'Access-Control-Allow-Origin': '*',
        },
        beforeSend: function (xhr) {
          xhr.setRequestHeader("Authorization", "Basic " + btoa(""));
        },
        success: function (data) {
          // Display the response data in the paragraph tag
          // $("#responseData").text(JSON.stringify(data));
          alert('OTP sent')
        },
        error: function (xhr, status, error) {
          // Handle errors
          console.error(error);
          // alert('error')
        },
        complete: function (xhr, status) {
          console.log('otp sent')
          alert("OTP sent to your number");
          window.localStorage.setItem('OTP1', otp1);
        }
      });
    });
  });
  $(".myForm1").on("submit", function (e) {
    e.preventDefault();
    var sessionOtp1 = window.localStorage.getItem('OTP1');
    var formData1 = $(this).serialize() + '&source=Google%20Ad%20words&sub_source=Health&agency=Trigital&ad_type=NutritionLife Metro';
    console.log(formData1);
    if (Number(sessionOtp1) === Number(enteredOTP1.value)) {
      $(this).find('button[type="submit"]').attr("disabled", true).text("Submitting...");
      $.ajax({
        url: "https://script.google.com/macros/s/AKfycbwYmcqgKRll2VOyKHYRnvp-mUoauyQGgApsvaEqKL7IExzDfsFUoUUIf-DEMGQcA0fT/exec", // Replace with your Google Apps Script Web App URL
        type: "POST",
        crossDomain: true,
        data: formData1,
        success: function (response) {
          $.ajax({
            type: "post",
            url: "https://eclinic.logikcal.in/crm/addnewlead_website/",
            data: formData1,
            success: function (result) {
              console.log(result);
              $(".myForm").trigger("reset");
              $(this).find('button[type="submit"]').attr("disabled", false).text("Get Started");
              location.href = 'thankyou.php';
            },
            error: function (result) {
              console.log(result);
            },
          });
        },
        error: function (err) {
          // Handle error response (optional)
          alert("There was an error submitting the form. Please try again.");
          // Re-enable the submit button in case of error
          $(this).find('button[type="submit"]').attr("disabled", false).text("Register");
        }
      });
      console.log("otp verified");
      localStorage.removeItem("OTP1");
    } else {
      alert('Please enter correct OTP');
    }
  });
  //   Form2 Variables 
  // Form1 variables
  let userName2 = document.getElementById("userName2");
  let userEmail2 = document.getElementById("userEmail2");
  let userPhone2 = document.getElementById("userPhone2");
  let enteredOTP2 = document.getElementById("enteredOTP2");
  let sendOTP2 = document.getElementById("sendOTP2");
  let formSubmitbtn2 = document.getElementById("formSubmitbtn2");
  var otp2 = '';
  $(document).ready(function () {
    $("#sendOTP2").click(function () {
      otp2 = Math.floor(Math.random() * 10000);
      $.ajax({
        url: `https://prpsms.co.in/API/SendMsg.aspx?uname=20230345&pass=DNglxC9h&send=RDNUTR&dest=${userPhone2.value}&msg=Hi ${userName2.value},%0AYour One time OTP ${otp2} to authenticate your interest in QUA NUTRITION. Our team is looking forward to connect with you. %0AThanks, %0AQUA NUTRITION`, // Replace with your desired API endpoint
        type: 'GET',
        dataType: 'jsonp',
        CORS: true,
        contentType: 'application/json',
        secure: true,
        headers: {
          'Access-Control-Allow-Origin': '*',
        },
        beforeSend: function (xhr) {
          xhr.setRequestHeader("Authorization", "Basic " + btoa(""));
        },
        success: function (data) {
          // Display the response data in the paragraph tag
          // $("#responseData").text(JSON.stringify(data));
          alert('OTP sent')
        },
        error: function (xhr, status, error) {
          // Handle errors
          console.error(error);
          // alert('error')
        },
        complete: function (xhr, status) {
          console.log('otp sent')
          alert("OTP sent to your number");
          window.localStorage.setItem('OTP2', otp2);
        }
      });
    });
  });
  $(".myForm2").on("submit", function (e) {
    e.preventDefault();
    var sessionOtp2 = window.localStorage.getItem('OTP2');
    var formData2 = $(this).serialize() + '&source=Google%20Ad%20words&sub_source=Health&agency=Trigital&ad_type=NutritionLife Metro';
    console.log(formData2);
    if (Number(sessionOtp2) === Number(enteredOTP2.value)) {
      $(this).find('button[type="submit"]').attr("disabled", true).text("Submitting...");
      $.ajax({
        url: "https://script.google.com/macros/s/AKfycbwYmcqgKRll2VOyKHYRnvp-mUoauyQGgApsvaEqKL7IExzDfsFUoUUIf-DEMGQcA0fT/exec", // Replace with your Google Apps Script Web App URL
        type: "POST",
        crossDomain: true,
        data: formData2,
        success: function (response) {
          $.ajax({
            type: "post",
            url: "https://eclinic.logikcal.in/crm/addnewlead_website/",
            data: formData2,
            success: function (result) {
              console.log(result);
              $(".myForm").trigger("reset");
              $(this).find('button[type="submit"]').attr("disabled", false).text("Get Started");
              location.href = 'thankyou.php';
            },
            error: function (result) {
              console.log(result);
            },
          });
        },
        error: function (err) {
          // Handle error response (optional)
          alert("There was an error submitting the form. Please try again.");
          // Re-enable the submit button in case of error
          $(this).find('button[type="submit"]').attr("disabled", false).text("Register");
        }
      });
      console.log("otp verified");
      localStorage.removeItem("OTP2");
    } else {
      alert('Please enter correct OTP');
    }
  });