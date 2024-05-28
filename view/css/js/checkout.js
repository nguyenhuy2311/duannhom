function submitPayment() {
  // Simple validation
  if (document.getElementById('paymentForm').checkValidity()) {
      // You can send the form data to the server here (AJAX, fetch, etc.)
      // For now, just show a success message
      document.getElementById('successMessage').classList.remove('d-none');
      document.getElementById('errorMessage').classList.add('d-none');
  } else {
      // If the form is not valid, trigger Bootstrap's validation styles
      document.getElementById('paymentForm').classList.add('was-validated');
      document.getElementById('successMessage').classList.add('d-none');
      document.getElementById('errorMessage').classList.remove('d-none');
  }
}
function submitLoginForm() {
  // Add login form submission logic here
  // Example: document.getElementById('loginForm').submit();
  // For now, show an error message
  document.getElementById('loginErrorMessage').innerText = 'Invalid username or password. Please try again.';
}


function submitPayment() {
  var fullName = document.getElementById('fullName').value;
  var email = document.getElementById('email').value;

  var errorMessage = '';

  // Kiểm tra tính hợp lệ của họ và tên
  if (fullName.trim() === '') {
      errorMessage += 'Họ và tên không được để trống.\n';
  }

  // Kiểm tra tính hợp lệ của email
  if (email.trim() === '' || !validateEmail(email)) {
      errorMessage += 'Vui lòng nhập địa chỉ email hợp lệ.\n';
  }

  // Kiểm tra tính hợp lệ của địa chỉ

  // Kiểm tra tính hợp lệ của phương thức thanh toán


  // Hiển thị thông báo lỗi
  if (errorMessage !== '') {
      alert(errorMessage);
  } else {
      // Nếu không có lỗi, hiển thị thông báo thành công và thực hiện các xử lý khác nếu cần
      document.getElementById('paymentForm').reset();
      document.getElementById('successMessage').classList.remove('d-none');
  }
}

// Hàm kiểm tra định dạng email
function validateEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}