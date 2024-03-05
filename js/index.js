document.addEventListener("DOMContentLoaded", function() {
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            } 
        });
    }
});

function skrytDiv() {
  var cookieConsentDiv = document.querySelector('.cookie-consent');
  cookieConsentDiv.style.display = 'none';
}

function popup() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function validateAndOpen() {
  var menoPriezvisko = document.querySelector(".formular input[type='text']").value.trim();
  var email = document.getElementById("emailInput").value;
  var poziadavka = document.querySelector(".formular textarea").value.trim();
  var consentCheckbox = document.getElementById("consentCheckbox");

  if (menoPriezvisko === '') {
      alert("Prosím, zadajte meno a priezvisko");
      return;
  }
  if (poziadavka === '') {
    alert("Prosím, zadajte text v dotaze");
    return;
  }
  if (isValidEmail(email) && consentCheckbox.checked) {
      window.location.href = "ThankYouPage.html";
  } else {
      if (!isValidEmail(email)) {
          alert("Neplatná e-mailová adresa");
      } else {
          alert("Musíte súhlasiť so spracovaním osobných údajov");
      }
  }
}

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
const button = document.querySelector('#clickMe')
const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');
const btn4 = document.getElementById('btn4');
const btn5 = document.getElementById('btn5');
const btn6 = document.getElementById('btn6');
const btn7 = document.getElementById('btn7');
const btn8 = document.getElementById('btn8');
const btn9 = document.getElementById('btn9');
const btn10 = document.getElementById('btn10');
const btn11 = document.getElementById('btn11');
const btn12 = document.getElementById('btn12');
const btn13 = document.getElementById('btn13');
const btn14 = document.getElementById('btn14');

btn1.addEventListener('click', function onClick(event) {
  const backgroundColor = btn1.style.backgroundColor;

  if (backgroundColor === 'grey') {
    btn1.style.backgroundColor = 'green';
    btn1.textContent = 'Vybraté'
  } else {
    btn1.style.backgroundColor = 'grey';
    btn1.textContent = 'Vybrať'
  }
});
btn2.addEventListener('click', function onClick(event) {
    const backgroundColor = btn2.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn2.style.backgroundColor = 'green';
      btn2.textContent = 'Vybraté'
    } else {
      btn2.style.backgroundColor = 'grey';
      btn2.textContent = 'Vybrať'
    }
});
btn3.addEventListener('click', function onClick(event) {
    const backgroundColor = btn3.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn3.style.backgroundColor = 'green';
      btn3.textContent = 'Vybraté'
    } else {
      btn3.style.backgroundColor = 'grey';
      btn3.textContent = 'Vybrať'
    }
});
btn4.addEventListener('click', function onClick(event) {
    const backgroundColor = btn4.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn4.style.backgroundColor = 'green';
      btn4.textContent = 'Vybraté'
    } else {
      btn4.style.backgroundColor = 'grey';
      btn4.textContent = 'Vybrať'
    }
});
btn5.addEventListener('click', function onClick(event) {
    const backgroundColor = btn5.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn5.style.backgroundColor = 'green';
      btn5.textContent = 'Vybraté'
    } else {
      btn5.style.backgroundColor = 'grey';
      btn5.textContent = 'Vybrať'
    }
});
btn6.addEventListener('click', function onClick(event) {
    const backgroundColor = btn6.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn6.style.backgroundColor = 'green';
      btn6.textContent = 'Vybraté'
    } else {
      btn6.style.backgroundColor = 'grey';
      btn6.textContent = 'Vybrať'
    }
});
btn7.addEventListener('click', function onClick(event) {
    const backgroundColor = btn7.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn7.style.backgroundColor = 'green';
      btn7.textContent = 'Vybraté'
    } else {
      btn7.style.backgroundColor = 'grey';
      btn7.textContent = 'Vybrať'
    }
});
btn8.addEventListener('click', function onClick(event) {
    const backgroundColor = btn8.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn8.style.backgroundColor = 'green';
      btn8.textContent = 'Vybraté'
    } else {
      btn8.style.backgroundColor = 'grey';
      btn8.textContent = 'Vybrať'
    }
});
btn9.addEventListener('click', function onClick(event) {
    const backgroundColor = btn9.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn9.style.backgroundColor = 'green';
      btn9.textContent = 'Vybraté'
    } else {
      btn9.style.backgroundColor = 'grey';
      btn9.textContent = 'Vybrať'
    }
});
btn10.addEventListener('click', function onClick(event) {
    const backgroundColor = btn10.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn10.style.backgroundColor = 'green';
      btn10.textContent = 'Vybraté'
    } else {
      btn10.style.backgroundColor = 'grey';
      btn10.textContent = 'Vybrať'
    }
});
btn11.addEventListener('click', function onClick(event) {
    const backgroundColor = btn11.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn11.style.backgroundColor = 'green';
      btn11.textContent = 'Vybraté'
    } else {
      btn11.style.backgroundColor = 'grey';
      btn11.textContent = 'Vybrať'
    }
});
btn12.addEventListener('click', function onClick(event) {
    const backgroundColor = btn12.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn12.style.backgroundColor = 'green';
      btn12.textContent = 'Vybraté'
    } else {
      btn12.style.backgroundColor = 'grey';
      btn12.textContent = 'Vybrať'
    }
});
btn13.addEventListener('click', function onClick(event) {
    const backgroundColor = btn13.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn13.style.backgroundColor = 'green';
      btn13.textContent = 'Vybraté'
    } else {
      btn13.style.backgroundColor = 'grey';
      btn13.textContent = 'Vybrať'
    }
});
btn14.addEventListener('click', function onClick(event) {
    const backgroundColor = btn14.style.backgroundColor;
  
    if (backgroundColor === 'grey') {
      btn14.style.backgroundColor = 'green';
      btn14.textContent = 'Vybraté'
    } else {
      btn14.style.backgroundColor = 'grey';
      btn14.textContent = 'Vybrať'
    }
});

function myalert() 
{
    alert("Ďakujeme za Vašu objednávku\n"+"Info o nasledovnom postupe nájdete vo svojej e-mailovej schránke");
}

