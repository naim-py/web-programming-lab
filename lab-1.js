function validateForm() {
    // Get form inputs
    var name = document.forms["myForm"]["name"].value;
    var password = document.forms["myForm"]["password"].value;
    var email = document.forms["myForm"]["email"].value;
    var phone = document.forms["myForm"]["phone"].value;
  
    // Define regular expressions for validation
    var namePattern = /^[a-zA-Z]{6,}$/;
    var passwordPattern = /^.{6,}$/;
    var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    var phonePattern = /^\d{10}$/;
  
    // Validate name
    if (!namePattern.test(name)) {
      alert("Name should contain only alphabets and should have at least 6 characters.");
      return false;
    }
  
    // Validate password
    if (!passwordPattern.test(password)) {
      alert("Password should have at least 6 characters.");
      return false;
    }
  
    // Validate email
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    // Validate phone number
    if (!phonePattern.test(phone)) {
      alert("Phone number should contain 10 digits only.");
      return false;
    }
  
    // All fields are valid
    return true;
  }
  