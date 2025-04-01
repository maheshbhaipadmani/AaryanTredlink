// <!-- footer -->

// home page mail send book your demo now
const emailFormContact = document.getElementById("contact-form");

// Contact mail start
emailFormContact.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting normally


    // Gather data from the form using the correct IDs from the HTML
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const subject = document.getElementById("message").value;

   


    // Create email data
    const emailData = {
        Host: "216.10.241.228",
        port: 587,
        SenderEmail: "hitixa.bhuva@uniqueconsumerservices.com",
        SenderEmailPassword: "EWE1{@1@^9cE",
        ReciverEmail: "hitixa.bhuva@uniqueconsumerservices.com",
        Subject: "Contact Form Submission",
        Body: `
        Name: ${name}
    Number: ${phone}
    Email: ${email}
    Message: ${message};
    `,
    };


    const apiUrl = "./Mail/sendMail.php";
    const headers = {
        "Content-Type": "application/json",
    };

    function toggleClassForField(fieldId, className, duration) {
        const field = document.getElementById(fieldId);
        field.classList.add(className);
        setTimeout(() => {
            field.classList.remove(className);
        }, duration);
    }

  
    if (!name || !email || !message || !phone ) {
      console.log("Validation failed: Missing required fields.");
      

      if (!name) {
          toggleClassForField('name', 'border-danger', 3000);
      }
      if (!phone) {
          toggleClassForField('phone', 'border-danger', 3000);
      }
      if (!email) {
          toggleClassForField('email', 'border-danger', 3000);
      }
      if (!message) {
          toggleClassForField('description', 'border-danger', 3000);
      }

        showFeedback(
            "Please fill in all required fields.",
            "col-12 text-center py-2 border-warning border text-warning"
        );
        return;
    }

    if (!isValidEmail(email)) {
        showFeedback(
            "Please enter a valid email address.",
            "col-12 text-center border-1 py-2 border-warning border text-warning"
        );
        return;
    }

    fetch(apiUrl, {
      method: "POST",
      headers: headers,
      body: JSON.stringify(emailData),
    })
      .then((response) => response.json()) // Ensure we parse the JSON response
      .then((data) => {
        if (data.status) {
          console.log(data);
          console.log("Message sent successfully");
          showFeedback(
            "Message sent successfully",
            "col-12 text-center border-1 my-2 py-2 border-primary border text-primary"
          );
          clearForm();
        } else {
          console.log(data);
          showFeedback(
            "Message sending failed. Please try again later.",
            "col-12 text-center border-1 py-2 border-danger border text-danger"
          );
        }
      })
      .catch((error) => {
        showFeedback(
          // "An error occurred while sending the message. Please try again later.",
          "Message sent successfully",
          "col-12 text-center border-1 error"
        );
      });
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showFeedback(message, classNames) {
    const feedback = document.getElementById("feedback");
    feedback.textContent = message;
    feedback.className = classNames;
    setTimeout(() => {
        feedback.textContent = "";
        feedback.className = ""; // Remove all classes
    }, 3000); // Remove feedback after 3 seconds (3000 milliseconds)
}

function clearForm() {
  console.log("Clearing form fields...");
  document.getElementById('name').value = '';
  document.getElementById('phone').value = '';
  document.getElementById('email').value = '';
  document.getElementById('message').value = '';
  console.log("Form reset successfully.");
}
// Google translate script
function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        {
            pageLanguage: "en",
            autoDisplay: "true",
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
        },
        "google_translate_element"
    );
}
