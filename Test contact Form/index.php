

<form method="POST" action="form.php" id="contact-form">
<h2>Contact us</h2>
<p><label>First Name:</label> <input name="name" type="text" /></p>
<p><label>Email Address:</label> <input style="cursor: pointer;" name="email" type="text" /></p>
<p><label>Message:</label>  <textarea name="message"></textarea> </p>

<p><input type="submit" value="Send" /></p>
</form>

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

<script>
   const constraints = {
       name: {
           presence: { allowEmpty: false }
       },
       email: {
           presence: { allowEmpty: false },
           email: true
       },
       message: {
           presence: { allowEmpty: false }
       }
   };

   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         name: form.elements.name.value,
         email: form.elements.email.value,
         message: form.elements.message.value
     };

     const errors = validate(formValues, constraints);

     if (errors) {
       event.preventDefault();
       const errorMessage = Object
           .values(errors)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(errorMessage);
     }
   }, false);
</script>