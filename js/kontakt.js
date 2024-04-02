function validateAndOpen() {
    const menoPriezvisko = document.querySelector(".formular input[type='text']").value.trim();
    const email = document.getElementById("emailInput").value;
    const poziadavka = document.querySelector(".formular textarea").value.trim();
    const consentCheckbox = document.getElementById("consentCheckbox");

    if (menoPriezvisko === '') {
      alert("Prosím, zadajte meno a priezvisko");
      return;
  }
  if (poziadavka === '') {
    alert("Prosím, zadajte text v dotaze");
    return;
  }
  if (isValidEmail(email) && consentCheckbox.checked) {
      window.location.href = "ThankYouPage.php";
  } else {
      if (!isValidEmail(email)) {
          alert("Neplatná e-mailová adresa");
      } else {
          alert("Musíte súhlasiť so spracovaním osobných údajov");
      }
  }
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}


